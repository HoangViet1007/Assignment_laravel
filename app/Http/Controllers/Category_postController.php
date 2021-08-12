<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryPost ;
use App\Models\Post ;
use App\http\Requests\category_post\StoreRequest ;
use App\http\Requests\category_post\UpdateRequest ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;


class Category_postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('can:category_post_list',['only'=>['index','anyData']]) ;
        $this->middleware('can:category_post_add',['only'=>['create','store']]) ;
        $this->middleware('can:category_post_edit',['only'=>['edit','update']]) ;
        $this->middleware('can:category_post_delete',['only'=>['destroy']]) ;
    }
    public function index()
    {
        return view('admin.category_post.list_category_post') ;
    }

    public function anyData(Request $request){
        $data = CategoryPost::select(['id','name','status']);
        return Datatables::of($data)
        ->filter(
            function ($query) use ($request) {
                if ($request->has('name')) {
                    $query->where('name', 'like', "%{$request->get('name')}%");
                }
                if ($request->get('status') != "") {
                    $query->where('status', $request->get('status'));
                }
            }
        )
        ->make(true) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_post.add_category_post') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if(CategoryPost::create($request->all())){
            return back()->with('success','Thêm thông tin thành công !') ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // check
        $model = CategoryPost::find($id);
        if(!$model){
            return back()->with('err','Thông tin này không tồn tại !') ;
         }else{
            return view('admin.category_post.edit_category_post',compact('model')) ;
         }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        // check
        $model = CategoryPost::find($id) ;
        if(!$model){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
             // ok
             if(CategoryPost::where('id',$id)->update($request->only('name','slug','status'))){
                return redirect()->route('category_post.index')->with('success','Update thông tin thành công !');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = CategoryPost::find($id);
        if (!$model) {
            return redirect()->route('category_post.index')->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                CategoryPost::destroy($id);

                return response()->json([
                    'code' => 200,
                    'message' => 'success'
                ], 200);
            } catch (\Exception $exception) {
                Log::error('Message' . $exception->getMessage() . '-- Line : ' . $exception->getLine());
                return response()->json([
                    'code' => 500,
                    'message' => 'fail'
                ], 500);
            }
        }
    }
}
