<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user ;
use App\Models\Product;
use App\Models\Invioce ;
class DashboardController extends Controller
{
    public function dashboard(){
        $user = user::count();
        $product = Product::count();
        $invioces = Invioce::count();
        // laa doanh thu
        $doanh_thu = Invioce::where('status',config('common.invioce.status.thanh_cong'))->select('invioces.*')->get() ;
        $price_doanh_thu = "" ;
        foreach ($doanh_thu as $a){
           $price_doanh_thu = (int)$price_doanh_thu + (int)$a->total_price ;
        }
        return view('admin.dashboard',compact('user','product','invioces','price_doanh_thu'));
    }
}
