<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function login(){
        return view('layout_login.login') ;
    }

    public function postlogin(Request $request){
       if(Auth::attempt(['email' => $request->email, 'password' => $request->password , 'status'=>1], $request->has('remember'))){
           return redirect()->route('admin.dashboard') ;
       }else{
           return redirect()->back()->with('thongbao','Email hoặc mật khẩu không chính xác !') ;
       }
    }

    public function logout(){
        Auth::logout();
            return view('layout_login.login')->with('logout','Đăng xuất thành công !');

    }
}
