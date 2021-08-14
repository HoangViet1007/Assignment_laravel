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
            return redirect()->back()->with('succsess','Thêm tài khoản thành công , hãy đăng nhập ngay nhé !') ;
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
}
