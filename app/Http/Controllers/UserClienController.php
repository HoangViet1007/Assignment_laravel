<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\http\Requests\user\StoreClienRequest;
use Illuminate\Support\Facades\Hash ;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\login\LoginRequest ;
use App\Models\InvioceDetail ;
use App\Models\Invioce ;
use App\Http\Requests\user\UpdateClienRequest ;


class UserClienController extends Controller
{

    public function create(){
        return view('homepage.register');
    }

    public function store(StoreClienRequest $request)
    {
        DB::beginTransaction();
        try {
             // upload anh
             // upload image vao thu muc public/images/admin/products
            $path = $request->file('image')->store('public/image_user_clien');

            $path_url = str_replace('public', 'storage', $path);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'image' => $path_url,
                'phone' => $request->phone,
                'address' => $request->address,
                'gender' => $request->gender,
                'status' => config('common.user.status.active'),
            ];

            $user = User::create($data);
            // laays role va luwu vao user_role vaf role
            $user->roles()->attach(config('common.roles.customer'));

            event(new Registered($user));

            Session::flash('success_message', 'Biography was updated! However, because this is a demo the records are not persisted to the database.');
            //if there is not error/exception in the above code, it'll commit
            DB::commit();
            return redirect()->route('loginClien')->with('err','Thêm tài khoản thành công , hãy đăng nhập ngay nhé !') ;
        } catch (\Exception $e) {
            //if there is an error/exception in the above code before commit, it'll rollback
            DB::rollBack();
            return $e->getMessage();
        }
    }


    public function postLogin(Request $request){
        try{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password ])){
                return response()->json([
                    'code' => 200 ,
                    'message' => 'success',
                    'data' => 0,
                ],200) ;
            }else{
                return response()->json([
                    'code' => 200 ,
                    'message' => 'success',
                    'data' => 1,
                ],200) ;
            }
        }catch(\Exception $exception){
            Log::error('Message' . $exception->getMessage() . '-- Line : ' . $exception->getLine());
            return response()->json([
                'code' => 500 ,
                'message' => 'fail'
            ],500) ;
        }
    }

    public function loginClien(){
        return view('homepage.login_clien') ;
    }

    public function postLogin2(LoginRequest $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password ])){
            return redirect()->route('home') ;
        }else{
           return redirect()->back()->with('err','Tài khoản hoặc mật khẩu không chính xác') ;
        }
    }

    public function logout(){
        Auth::logout();
        return  redirect()->route('loginClien')->with('err','Đăng xuất tài khoản thành công !') ;
    }

    public function listInvioce(){

        // lấy id của user
        $user_id = isset(Auth::user()->id) ? Auth::user()->id : '' ;

        // lay za all hoa don
        $invioce = Invioce::where('user_id',$user_id)->get();

        // laays gia hoa don dang giao
        $invioce_dang_xu_ly = Invioce::where('user_id',$user_id)->where('status',config('common.invioce.status.dang_xu_li'))->get() ;

        // lay don hang dang giao
        $invioce_dang_giao = Invioce::where('user_id',$user_id)->where('status',config('common.invioce.status.dang_giao'))->get() ;

        // lay don hang thanh cong
        $invioce_thanh_cong = Invioce::where('user_id',$user_id)->where('status',config('common.invioce.status.thanh_cong'))->get() ;

        // lay za don hang huy
        $invioce_huy = Invioce::where('user_id',$user_id)->where('status',config('common.invioce.status.da_huy'))->get() ;
        return view('user_clien.list_invioce',compact('invioce','invioce_dang_xu_ly','invioce_dang_giao','invioce_thanh_cong','invioce_huy')) ;
    }


    public function account(){
        return view('user_clien.account');
    }

    public function editAccount(UpdateClienRequest $request,$id){
        $user = User::find($id) ;
        if(!$user){
            return redirect()->back()->with('thongbao','Chỉnh sửa thông tin không thành công !') ;
        }else{
            if($request->file('image') == ""){
                $user->update([
                    'name' => $request->name ,
                    'email' => $request->email ,
                    'address' => $request->address ,
                    'phone' => $request->phone,
                    'gender' => $request->gender,
                ]);
                return redirect()->back()->with('thongbao','Chỉnh sửa thông tin thành công !') ;
            }else{
                $path = $request->file('image')->store('public/image_user_clien');
                $path_url = str_replace('public', 'storage', $path);
                $user->update([
                    'name' => $request->name ,
                    'email' => $request->email ,
                    'address' => $request->address ,
                    'phone' => $request->phone,
                    'gender' => $request->gender,
                    'image' => $request->image,
                ]);
                return redirect()->back()->with('thongbao','Chỉnh sửa thông tin thành công !') ;
            }
        }
    }

    public function cancelInvioce(Request $request){
        $invioce = Invioce::find($request->id) ;
        if (!$invioce) {
            return redirect()->back()->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                $invioce->update(['status'=>4]) ;
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
