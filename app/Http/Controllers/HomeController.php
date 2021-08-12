<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\Category ;
use App\Models\Product ;
use Illuminate\Support\Facades\Route;


class HomeController extends Controller
{
    public function home(){
        // sản phẩm mới
        // $routeName = Route::currentRouteName();
	    // dd($routeName);
        $product_new = Product::
        join('product_options', 'product_options.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        ->select(
            [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                'products.category_id',
                'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
            ]
        )
        ->where('products.status',1)->where('product_options.is_main',1)->where('categories.parent_id',1)->limit(6)->orderBy('id','desc')->get() ;

        // sản phẩm đang sale
        $product_sale = Product::
        join('product_options', 'product_options.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        ->select(
            [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                'products.category_id',
                'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
            ]
        )
        ->where('products.status',1)->where('product_options.is_main',1)->where('categories.parent_id',1)->limit(6)->orderBy('sale','desc')->get() ;

        // sản phẩm giá rẻ
        $product_price_min = Product::
        join('product_options', 'product_options.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        ->select(
            [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                'products.category_id',
                'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
            ]
        )
        ->where('products.status',1)->where('product_options.is_main',1)->where('categories.parent_id',1)->limit(6)->orderBy('price','asc')->get() ;

        // sanrr phẩmm đangg salee maxx mm
        $product_sale_max = Product:: join('product_options', 'product_options.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        ->select(
            [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                'products.category_id',
                'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
            ]
        )
        ->where('products.status',1)->where('product_options.is_main',1)->limit(1)->orderBy('sale','DESC')->first(); ;


        // lấy za danh mục cos trong bảng sản phẩm
        $category_in_table_product = Product::join('categories','categories.id','products.category_id')
        ->select(['products.category_id','categories.name as name_cate','categories.id as id_categories','categories.slug as slug_categories'])->where('categories.parent_id',1)->distinct()->get() ;

        // dd($category_in_table_product) ;

        // lấy za danh mục con của sản phẩm có parent_id = đồng hồ
        $category_lock_in_table_product = Product::join('categories','categories.id','products.category_id')
        ->select(['products.category_id','categories.name as name_cate','categories.id as id_categories','categories.slug as slug_categories'])->where('categories.parent_id',14)->distinct()->get() ;

        // lấy za phụ kiện
        $phu_kien = Product::
        join('product_options', 'product_options.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        ->select(
            [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                'products.category_id',
                'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
            ]
        )
        ->where('products.status',1)->where('product_options.is_main',1)->where('categories.parent_id',19)->orderBy('id','desc')->get() ;


        return view('homepage.home',compact('product_new','product_sale','product_price_min','phu_kien','category_in_table_product','category_lock_in_table_product','product_sale_max'));
    }
}
