<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeAttribute;
use App\http\Requests\type_attribute\StoreRequest;
use App\http\Requests\type_attribute\UpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
use function PHPSTORM_META\type;

class TypeAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('can:type_attribute_list',['only'=>['index','anyData']]) ;
        $this->middleware('can:type_attribute_add',['only'=>['create','store']]) ;
        $this->middleware('can:type_attribute_edit',['only'=>['edit','update']]) ;
        $this->middleware('can:type_attribute_delete',['only'=>['destroy']]) ;
    }
    public function index()
    {
        return view('admin.type_attribute.list_type_attribute') ;
    }

    public function anyData(Request $request){
        $data = TypeAttribute::select(['id','name','status']);
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
        return view('admin.type_attribute.add_type_attribute') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if(TypeAttribute::create($request->all())){
            return back()->with('success','Th??m th??ng tin th??nh c??ng !') ;
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
        $model = TypeAttribute::find($id) ;
        if(!$model){
             return back()->with('err','Th??ng tin n??y kh??ng t???n t???i !') ;
        }else{
            return view('admin.type_attribute.edit_type_attribute',compact('model')) ;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // chekc xem
        $model = TypeAttribute::find($id) ;
        if(!$model){
            return back()->with('err','Th??ng tin n??y kh??ng t???n t???i !') ;
        }else{
            if(TypeAttribute::where('id',$id)->update($request->only('name','slug','status'))){
                return redirect()->route('type_attribute.index')->with('success','Update th??ng tin th??nh c??ng !') ;
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
        // ki???m tra xem id n??y c?? t???n t???i trong database hay l?? ko
        $model = TypeAttribute::find($id);
        if (!$model) {
            return redirect()->route('type_attribute.index')->with('err', 'Th??ng tin n??y kh??ng t???n t???i !');
        } else {
            try {
                TypeAttribute::destroy($id);
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
