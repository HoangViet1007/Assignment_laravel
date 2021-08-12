<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Components\deleteRecusive ;
use App\Models\Category ;
use App\http\Requests\category\StoreRequest ;
use App\http\Requests\category\UpdateRequest ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;

class CategoryController extends Controller
{

    private $category ;
    public function __construct(Category $category){
        $this->category = $category;
        // tao za instance để dúng các hàm trong model của cate như kiểu angular

        $this->middleware('can:category_list',['only'=>['index','anyData']]) ;
        $this->middleware('can:category_add',['only'=>['create','store']]) ;
        $this->middleware('can:category_edit',['only'=>['edit','update']]) ;
        $this->middleware('can:category_delete',['only'=>['destroy']]) ;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.list_category') ;
    }

    public function anyData(Request $request)
    {
        $data = Category::select(['id','name','status','parent_id']);
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
        $data = $this->category->all();
        $recusive = new Recusive($data) ; // bên contructoer kia nhận đc biến data này
        $htmlOption = $recusive->CategoryRecusive($parent_id = '') ;
        return view('admin.category.add_category',compact('htmlOption'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
     {
        $parent_id = (int)$request->parent_id;
        // dd($parent_id) ;
         $request->merge(['parent_id'=>$parent_id]) ;
        if(Category::create($request->all())){
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
        // chekc xem cos toonf tai trong data hay laf ko
        $model = Category::find($id) ;
        $data = $this->category->where('id','!=',$id)->get();
        $recusive = new Recusive($data) ; // bên contructoer kia nhận đc biến data này
        $htmlOption = $recusive->CategoryRecusive($model->parent_id) ;
        // nếu là sp thì edit ->id

        if(!$model){
           return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
           return view('admin.category.edit_category',compact('model','htmlOption')) ;
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

        $model = Category::find($id) ;
        if(!$model){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            // ok
            if(Category::where('id',$id)->update($request->only('name','slug','status','parent_id'))){
                return redirect()->route('category.index')->with('success','Update thông tin thành công !');
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
         $model = Category::find($id);
         $cates = $this->category->all() ;
         if(!$model){
             return back()->with('err','Thông tin này không tồn tại !') ;
         }else{
             $deleteRecusive = new deleteRecusive($cates , $model) ;
             $deleteRecusive->deleteCategoryRecusive($id) ;
             return back()->with('success','Xóa thông tin thành công !') ;
         }
    }
}
