<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\user\StoreRequest;
use App\Http\Requests\user\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('can:user_list',['only'=>['index','anyData']]) ;
        $this->middleware('can:user_add',['only'=>['create','store']]) ;
        $this->middleware('can:user_edit',['only'=>['edit','update']]) ;
        $this->middleware('can:user_delete',['only'=>['destroy']]) ;
    }

    public function index()
    {
        return view('admin.user.list_user');
    }

    public function anyData(Request $request)
    {
        $data = user::select(['id', 'name', 'email', 'image', 'phone', 'address', 'gender', 'status']);
        return Datatables::of($data)
            ->filter(
                function ($query) use ($request) {
                    if ($request->has('name')) {
                        $query->where('name', 'like', "%{$request->get('name')}%");
                    }
                    if ($request->has('email')) {
                        $query->where('email', 'like', "%{$request->get('email')}%");
                    }
                    if ($request->has('address')) {
                        $query->where('address', 'like', "%{$request->get('address')}%");
                    }
                    if ($request->has('phone')) {
                        $query->where('phone', 'like', "%{$request->get('phone')}%");
                    }
                    if ($request->get('status') != "") {
                        $query->where('status', $request->get('status'));
                    }
                    if ($request->get('gender') != "") {
                        $query->where('gender', $request->get('gender'));
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
        $role = Role::all();
        return view('admin.user.add_user', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->image,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'state' => $request->status,
        ];
        $user = user::create($data);

        // laays role va luwu vao user_role vaf role
        $user->roles()->attach($request->roles);

        return redirect()->route('user.index')->with('success', "Thêm thông tin thành công !");
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
        $role = Role::all();
        $model = user::find($id);
        $roleOfUser = $model->roles;
        if (!$model) {
            return back()->with('err', 'Thông tin này không tồn tại !');
        } else {
            return view('admin.user.edit_user', compact('role', 'model', 'roleOfUser'));
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
        $model = user::find($id) ;
        if(!$model){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            // neu nguoi dung ko nhap anh thi phai giu anh cu cho nta
            if($request->image == $model->image){
                user::where('id',$id)->update($request->only('name','email','address','phone','gender','status'));
                $model->roles()->sync($request->roles);
                return redirect()->route('user.index')->with('success','Update thông tin website thành công !') ;
            }else{
                user::where('id',$id)->update($request->only('name','email','address','image','phone','gender','status'));
                $model->roles()->sync($request->roles);
                return redirect()->route('user.index')->with('success','Update thông tin website thành công !') ;
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
        $model = user::find($id);
        if (!$model) {
            return redirect()->route('user.index')->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                user::destroy($id);
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
