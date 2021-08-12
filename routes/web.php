<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/','HomeController@home')->name('home');

// card
Route::prefix('gio-hang')->group(function () {
    Route::get('/danh-sach-gio-hang','CardController@listCard')->name('card');
    Route::post('sua-gio-hang','CardController@updateCard')->name('updateCart');
    Route::post('/them-san-pham','CardController@addCard')->name('add_card');
    Route::post('/xoa-san-pham','CardController@deleteItemsCard')->name('delete_items_card');
    Route::post('/xoa-gio-hang','CardController@deleteCart')->name('delete_card');
    Route::get('/thanh-toan','CardController@getcheckOut')->name('getcheckout');
    Route::post('/thanh-toan-gio-hang','CardController@Order')->name('order');
});

// them binh luạn
Route::group(['prefix' =>'product_review'],function(){
    Route::post('product_review2.store','Product_reviewController@store2')->name('product_review2.store2');
});

Route::get('/tin-tuc','BlogController@blog')->name('blog') ;


Route::get('/tin-tuc/{slug}-{id}','BlogController@blogDetail')->name('blogDetail') ;

Route::get('/tin-tuc/danh-muc/{slug}-{id}','BlogController@blogCate')->name('blogCate') ;

Route::get('/san-pham','ProductClienController@listProduct')->name('product_clien') ;

Route::get('/lien-he','ContactController@contact')->name('contact') ;

Route::get('/danh-muc/{slug}-{id}','ProductClienController@listProductCate')->name('product_clien_cate') ;

Route::get('/{slug}-{id}','ProductClienController@productDetail')->name('product_detail') ;



// login và post loginn
Route::get('login','AdminController@login')->name('admin.login') ;
Route::post('post-login','AdminController@postlogin')->name('admin.postlogin') ;
Route::get('logout','AdminController@logout')->name('admin.logout') ;

Route::group(['prefix' => 'admin','middleware'=>'checkLogin'], function () {

    Route::get('/','DashboardController@dashboard')->name('admin.dashboard');

    Route::get('/file', function () {
        return view('admin.file');
    })->name('admin.file');


    // webetting
    Route::group(['prefix' => 'websetting'], function () {
        Route::get('/', 'WebsettingController@index')->name('websetting.list');
        Route::get('/any', 'WebsettingController@anyData')->name('websetting.anyData');

        Route::get('create', 'WebsettingController@create')->name('websetting.create');

        Route::post('post-create', 'WebsettingController@store')->name('websetting.post-create');

        Route::get('edit/{id}', 'WebsettingController@edit')->name('websetting.edit');

        Route::post('update/{id}', 'WebsettingController@update')->name('websetting.update');

        Route::get('delete/{id}', 'WebsettingController@destroy')->name('websetting.delete');


    });


    // Attribute
    Route::group(['prefix' => 'attribute'], function () {
        Route::get('/', 'AttributeController@index')->name('attribute.list');
        Route::get('/any', 'AttributeController@anyData')->name('attribute.anyData');

        Route::get('create', 'AttributeController@create')->name('attribute.create');

        Route::post('post-create', 'AttributeController@store')->name('attribute.post-create');

        Route::get('edit/{id}', 'AttributeController@edit')->name('attribute.edit');

        Route::post('update/{id}', 'AttributeController@update')->name('attribute.update');

        Route::get('delete/{id}', 'AttributeController@destroy')->name('attribute.delete');

    });

    // type attribute
    Route::group(['prefix' => 'type_attribute'], function () {
        Route::get('/any', 'Type_attributeController@anyData')->name('type_attribute.anyData');
    });
    Route::resource('type_attribute','Type_attributeController');

    // category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/any', 'CategoryController@anyData')->name('category.anyData');
    });

    Route::resource('category', 'CategoryController');

    // banner
    Route::group(['prefix' => 'banner'], function () {
        Route::get('/any', 'BannerController@anyData')->name('banner.anyData');
    });
    Route::resource('banner', 'BannerController');


    // category_post (danh muc bai viet)
    Route::group(['prefix' => 'category_post'], function () {
        Route::get('/any', 'Category_postController@anyData')->name('category_post.anyData');
    });
    Route::resource('category_post','Category_postController');


    // category_post
    Route::group(['prefix' => 'post'], function () {
        Route::get('/any', 'PostController@anyData')->name('post.anyData');
        Route::get('/demo', 'PostController@demo')->name('post.demo');
    });
    Route::resource('post', 'PostController');

    // _products
    Route::group(['prefix' => 'product'],function(){
        Route::get('/getAttribute/{id}', 'ProductController@getAttribute')->name('product.getAttribute');
        Route::get('/any','ProductController@anyData')->name('product.anyData');
        Route::get('/create2/{id}','ProductController@create2')->name('product.create2') ;
        Route::post('/store2{id}','ProductController@store2')->name('product.store2') ;

    });
    Route::resource('product','ProductController');

    // product option
    Route::group(['prefix' =>'product_option'],function(){
        // Route::get('/any/{id}', 'Product_optionsController@anyData')->name('product_option.anyData');
        Route::get('/{id}','Product_optionsController@index_id')->name('product_option.index_id') ;
        Route::get('/create2/{id}','Product_optionsController@create2')->name('product_option.create2') ;
        Route::post('/store2/{id}','Product_optionsController@store2')->name('product_option.store2') ;
        Route::get('/edit/{id}','Product_optionsController@edit')->name('product_option.edit') ;
        Route::post('/update/{id}','Product_optionsController@update')->name('product_option.update') ;
        Route::get('/delete/{id}', 'Product_optionsController@destroy')->name('product_option.delete');
    });

    Route::group(['prefix' =>'user'],function(){
        Route::get('/any','UserController@anyData')->name('user.anyData');
    }) ;
    Route::resource('user','UserController');

    // role
    Route::group(['prefix' =>'role'],function(){
        Route::get('/any','RoleController@anyData')->name('role.anyData');
    }) ;
    Route::resource('role','RoleController') ;

    // permissions
    Route::group(['prefix' =>'permission'],function(){
        Route::get('/any','PermissionController@anyData')->name('permission.anyData');
    });
    Route::resource('permission','PermissionController') ;

    // product_review
    Route::group(['prefix' =>'product_review'],function(){
        Route::get('/any','Product_reviewController@anyData')->name('product_review.anyData');
        Route::get('/list_product_review/{id}','Product_reviewController@ReviewProduct')->name('product_review.list_product_review');
    });
    Route::resource('product_review','Product_reviewController');

    // hoa don
     // product_review
     Route::group(['prefix' =>'invioce'],function(){
        Route::get('/any','InvioceController@anyData')->name('invioce.anyData');
        Route::get('/detail/{id}','InvioceController@invioceDetail')->name('invioce.detail');
    });
    Route::resource('invioce', 'InvioceController');

});

