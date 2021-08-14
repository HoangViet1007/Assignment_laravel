<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator ;
use Illuminate\Support\Facades\View ;
use App\Models\Websetting ;
use App\Models\Product ;
use App\Models\Category ;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Paginator::useBootstrap();

       // lấy za thông tin websetting
       $websetting = Websetting::where('status', '1')->first();

       // lấy za thông tin danh mục sản phẩm
       $category = Category::all() ;

       // lấy danh mục có id != 0 means
       $category_id_khac_o = Category::where('id','!=',0)->get() ;

       // lấy danh muc cha
       $category_parent = Category::where('parent_id',0)->get() ;

       // lấy za danh mục cos trong bảng sản phẩm
       $category_table_product = Product::join('categories','categories.id','products.category_id')
       ->select(['products.category_id','categories.name as name_cate','categories.id as id_categories','categories.slug as slug_categories'])->distinct()->get() ;

       // laays gio han
       view()->share(['websetting' => $websetting , 'category' => $category,'category_parent'=>$category_parent,'category_id_khac_o'=>$category_id_khac_o,'category_table_product' => $category_table_product]);
    }
}
