<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role ;
use App\Models\Permission ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\role\StoreRequest ;
use App\Http\Requests\role\UpdateRequest ;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $permission ;
    public $role ;
    public function __construct(Permission $permission,Role $role){
       $this->permission = $permission;
       $this->role = $role;

       $this->middleware('can:role_list',['only'=>['index','anyData']]) ;
       $this->middleware('can:role_add',['only'=>['create','store']]) ;
       $this->middleware('can:role_edit',['only'=>['edit','update']]) ;
       $this->middleware('can:role_delete',['only'=>['destroy']]) ;
    }
    public function index()
    {
        return view('admin.role.list_role');
    }

    public function anyData(Request $request)
    {
        $data = Role::select(['id', 'name', 'display_name','status'])->orderBy('id','DESC');
        return Datatables::of($data)
            ->filter(
                function ($query) use ($request) {
                    if ($request->has('name')) {
                        $query->where('name', 'like', "%{$request->get('name')}%");
                    }
                    if ($request->has('display_name')) {
                        $query->where('display_name', 'like', "%{$request->get('display_name')}%");
                    }
                    if ($request->get('status') != "") {
                        $query->where('status', $request->get('status'));
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
        // laays za permission cha v
        $permissionParent = $this->permission->where('parent_id',0)->get();
        return view('admin.role.add_role',compact('permissionParent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {

        $role = $this->role->create([
            'name'              => $request->name ,
            'display_name'      => $request->display_name ,
            'status'            => $request->status,
        ]) ;
        $role->permissions()->attach($request->permission_id);
        return redirect()->route('role.index')->with('success','Thêm thông tin thành công !') ;
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
        $permissionParent = $this->permission->where('parent_id',0)->get();

        $role = $this->role->find($id) ;

        $permissionChecked = $role->permissions ;
        return view('admin.role.edit_role',compact('permissionParent','role','permissionChecked'));
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
        $role = $this->role->find($id) ;
        $role->update([
            'name'          => $request->name ,
            'display_name'  => $request->display_name ,
            'status'        => $request->status ,
        ]) ;
        $role->permissions()->sync($request->permission_id);
        return redirect()->route('role.index')->with('success','Sửa thông tin thành công !') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Role::find($id);
        if (!$model) {
            return redirect()->route('user.index')->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                Role::destroy($id);
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
