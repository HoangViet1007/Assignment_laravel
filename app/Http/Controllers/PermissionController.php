<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission ;
use App\Http\Requests\permission\StoreRequest ;
use App\Http\Requests\permission\UpdateRequest ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('can:permission_list',['only'=>['index','anyData']]) ;
        $this->middleware('can:permission_add',['only'=>['create','store']]) ;
        $this->middleware('can:permission_edit',['only'=>['edit','update']]) ;
        $this->middleware('can:permission_delete',['only'=>['destroy']]) ;
    }
    public function index()
    {
        return view('admin.permission.list_permission') ;
    }

    public function anyData(Request $request){
        $data = Permission::select(['id','name','display_name','key_code','parent_id'])->where('parent_id','!=',0)->orderBy('id','DESC');
        return Datatables::of($data)
            ->filter(
                function ($query) use ($request) {
                    if ($request->has('name')) {
                        $query->where('name', 'like', "%{$request->get('name')}%");
                    }
                    if ($request->has('display_name')) {
                        $query->where('display_name', 'like', "%{$request->get('display_name')}%");
                    }
                    if ($request->get('key_code') != "") {
                        $query->where('key_code', $request->get('key_code'));
                    }
                }
            )
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // lấy za nững thằng cha có parent_id = 0 ;
        $permission_parent = Permission::where('parent_id',0)->get();
        return view('admin.permission.add_permission',compact('permission_parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
         if(Permission::create($request->all())){
             return redirect()->route('permission.create')->with('success','Thêm thông tin thành công !') ;
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
        $data = Permission::find($id) ;
        $permission_parent = Permission::where('parent_id',0)->get();
        if(!$data){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            return view('admin.permission.edit_permission',compact('data','permission_parent'));
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
        $data = Permission::find($id) ;
        if(!$data){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            $data->update($request->all());
            return view('admin.permission.list_permission')->with('success','Sửa thông tin thành công !') ;
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
        $model = Permission::find($id);
        if (!$model) {
            return redirect()->route('permission.index')->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                Permission::destroy($id);
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
