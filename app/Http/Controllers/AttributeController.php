<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeAttribute ;
use App\http\Requests\attribute\StoreRequest ;
use App\Models\Attribute ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;


class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('can:attribute_list',['only'=>['index','anyData']]) ;
        $this->middleware('can:attribute_add',['only'=>['create','store']]) ;
        $this->middleware('can:attribute_edit',['only'=>['edit','update']]) ;
        $this->middleware('can:attribute_delete',['only'=>['destroy']]) ;
    }
    public function index()
    {
        // lấy za các type
        $model = TypeAttribute::all();
       return view('admin.attribute.list_attribute',compact('model')) ;
    }

    public function anyData(Request $request)
    {
        $data = Attribute::
        join('type_attributes','type_attributes.id','attributes.id_type')
        ->select(['attributes.id','attributes.name','attributes.value','attributes.id_type','attributes.status','type_attributes.name as name_att']);
        return Datatables::of($data)
        ->filter(
            function ($query) use ($request) {
                if ($request->has('name')) {
                    $query->where('attributes.name', 'like', "%{$request->get('name')}%");
                }
                if ($request->has('value')) {
                    $query->where('attributes.value', 'like', "%{$request->get('value')}%");
                }
                if ($request->get('status') != "") {
                    $query->where('attributes.status', $request->get('status'));
                }
                if ($request->get('id_type') != "") {
                    $query->where('attributes.id_type', $request->get('id_type'));
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
        // laays za taats cac cacs type attribute
        $model = TypeAttribute::where('status',1)->get();
        return view('admin.attribute.add_attribute',compact('model')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if(Attribute::create($request->all())){
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
        $type_attribute = TypeAttribute::where('status',1)->get();
        $attribute = Attribute::find($id) ;
        if(!$attribute){
           return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
           return view('admin.attribute.edit_attribute',compact('attribute','type_attribute')) ;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        // check
        $model = Attribute::find($id) ;
        if(!$model){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            // ok
            if(Attribute::where('id',$id)->update($request->only('name','slug','value','id_type','status'))){
                return redirect()->route('attribute.list')->with('success','Update thông tin thành công !');
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
        // kiểm tra xem id này có tồn tại trong database hay là ko
        $model = Attribute::find($id);
        if (!$model) {
            return redirect()->route('banner.index')->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                Attribute::destroy($id);
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
