<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category ;
use App\Models\Product ;
use App\Models\ProductAttribute;
use App\Models\Attribute ;
use App\Models\ProductOption ;
use App\Models\ProductReview ;
use Illuminate\Support\Facades\Log;

class ProductClienController extends Controller
{
    public function __construct(){
        // lấy za những danh mục cps trong bảng sản phẩm
        $category_in_table_product = Product::join('categories','categories.id','products.category_id')
        ->select(['products.category_id','categories.name as name_cate','categories.id as id_categories','categories.slug as slug_categories'])->distinct()->get() ;

        // lấy  tất cả những thuộc tính có trong product

        $attributes_product = ProductAttribute::join('attributes','attributes.id','product_attributes.attribute_id')
        ->select(['product_attributes.attribute_id','attributes.name as name_att'])->distinct()->get() ;

        // san pham them gaan nhaats
        $product_recent = Product::
        join('product_options', 'product_options.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        ->select(
            [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                'products.category_id',
                'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
            ]
        )
        ->where('products.status',1)->where('product_options.is_main',1)->limit(3)->orderBy('id','desc')->get() ;

        return view()->share(['category_in_table_product'=> $category_in_table_product,'attributes_product'=>$attributes_product,'product_recent'=> $product_recent]);
    }

    public function listProduct(Request $request){
        if($request->has('type_filter') == true){
            if($request->type_filter == '1'){
                $product = Product::
                join('product_options', 'product_options.product_id','products.id')
                ->join('categories','categories.id','products.category_id')
                ->select(
                    [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                        'products.category_id',
                        'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
                    ]
                )
                ->where('products.status',1)->where('product_options.is_main',1)->orderBy('products.id','DESC')->paginate(12) ;
            }
            else if($request->type_filter == '2'){
                $product = Product::
                join('product_options', 'product_options.product_id','products.id')
                ->join('categories','categories.id','products.category_id')
                ->select(
                    [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                        'products.category_id',
                        'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
                    ]
                )
                ->where('products.status',1)->where('product_options.is_main',1)->orderBy('product_options.price','DESC')->paginate(12) ;
            }
            else if($request->type_filter == '3'){
                $product = Product::
                join('product_options', 'product_options.product_id','products.id')
                ->join('categories','categories.id','products.category_id')
                ->select(
                    [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                        'products.category_id',
                        'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
                    ]
                )
                ->where('products.status',1)->where('product_options.is_main',1)->orderBy('product_options.price','asc')->paginate(12) ;
            }else{
                  // mac dinh vao trang
                $product = Product::
                join('product_options', 'product_options.product_id','products.id')
                ->join('categories','categories.id','products.category_id')
                ->select(
                    [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                        'products.category_id',
                        'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
                    ]
                )
                ->where('products.status',1)->where('product_options.is_main',1)->orderBy('id','asc')->paginate(12) ;
            }

        }else{
            // mac dinh vao trang
            $product = Product::
            join('product_options', 'product_options.product_id','products.id')
            ->join('categories','categories.id','products.category_id')
            ->select(
                [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                    'products.category_id',
                    'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount'
                ]
            )
            ->where('products.status',1)->where('product_options.is_main',1)->orderBy('id','asc')->paginate(12) ;
        }

        return view('homepage.product',compact('product')) ;

        // sản phẩm đang sale
    }

    public function listProductCate(Request $request){
        $array_url = preg_split("/(-)/i", $request->segment(2));
        $id_category = array_pop($array_url);
        $name_cate = array_pop($array_url);

        // check xem sanr pẩ này là cha hay con
        $product_check = Category::where('id',$id_category)->select('*')->first();

        $product = Product::
        join('product_options', 'product_options.product_id','products.id')
        ->join('categories','categories.id','products.category_id')
        ->select(
                   [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                       'products.category_id',
                       'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount',
                   ]
               )->where('products.status',1)->where('product_options.is_main',1)->where('categories.id',$id_category)->orderBy('id','desc')->paginate(8);
        // dd($product) ;

        return view('homepage.product_cate',compact('product','name_cate')) ;
    }

    public function productDetail(Request $request){
        $array_url = preg_split("/(-)/i", $request->segment(1));
        $id_product = array_pop($array_url);

        $product = Product::where('products.id',$id_product)
        ->join('categories', 'categories.id', 'products.category_id')
        ->join('users', 'users.id', 'products.user_id')
        ->join('product_options', 'product_options.product_id', 'products.id')
        ->select(['products.id as id_product','products.slug as slug_product', 'products.name as name_product', 'products.status as status_product', 'products.highlight', 'products.short_description', 'products.description','products.title','products.category_id','products.parent_id', 'categories.name as name_categories', 'users.name as name_users', 'product_options.price as id_option','product_options.price', 'product_options.sale', 'product_options.image', 'product_options.amount','product_options.id as id_option'])
        ->where('product_options.is_main', 1)->orderBy('products.id','DESC')->first();

        $product_lq = Product::join('categories', 'categories.id', 'products.category_id')
        ->join('users', 'users.id', 'products.user_id')
        ->join('product_options', 'product_options.product_id', 'products.id')
        ->select(['products.id as id_product','products.slug as slug_product','products.name as name_product', 'products.status as status_product', 'products.highlight', 'products.short_description', 'products.description','products.title','products.category_id', 'categories.name as name_categories', 'users.name as name_users', 'product_options.price', 'product_options.sale', 'product_options.image', 'product_options.amount'])
        ->where('product_options.is_main', 1)->where('products.category_id','=',$product->category_id)->where('products.id','!=',$product->id_product)->orderBy('products.id','DESC')->limit(5)->get();


        // lấy các thuộ tính còn lại của các sản phẩm con
        $attribute_value = Product::where('products.parent_id',$product->id_product)
        ->join('product_attributes', 'product_attributes.product_id','products.id')
        ->join('attributes','product_attributes.attribute_id','attributes.id')
        ->select('attributes.id as id_attrubutes','attributes.name as name_attrubutes','products.id as id_product','products.slug as slug_product')->get() ;

        // lấy thuộc tính mặc định của sp cha
        $attribute_value_main = Product::where('products.id',$product->id_product)
        ->join('product_attributes', 'product_attributes.product_id','products.id')
        ->join('attributes','product_attributes.attribute_id','attributes.id')
        ->select('attributes.id as id_attrubutes','attributes.name as name_attributes','products.id as id_product','products.slug as slug_product')->first();
        // dd($attribute_value_main) ;

        // lấy thuộc tính của thằng cha
        $attribute_value_cha = Product::where('products.id',$product->parent_id)
        ->join('product_attributes', 'product_attributes.product_id','products.id')
        ->join('attributes','product_attributes.attribute_id','attributes.id')
        ->select('attributes.id as id_attrubutes','attributes.name as name_attributes','products.id as id_product','products.slug as slug_product')->first();

        // lấy thuộc tính nnga hàng với nó ví dụ 128GB là cha thì có 2 con là 256GB và 512GB 2 thằng này là ngang hàng

        // b1: lấy za id cha rồi từ cha lấy con nhưn phải khác thằng hiện tại
        $product_cha = Product::where('id',$product->parent_id)->select('products.id as id_product')->first() ;
        //b2: từ thằng cha lấy za thằng con nhưng khác thằng hiện tại
        $product_ngang = "" ;
        if($product_cha){
            $product_ngang = Product::where('parent_id',$product_cha->id_product)->where('id','!=',$product->id_product)->select('products.id as id_product')->get() ;
        }

        // lấy za đánh gí của sản phẩm
        $reviews = ProductReview::where('product_id', $product->id_product)->where('status',1)->select('name','rating','description','created_at')->get();

        // laays za slide anh thumbail
        $image_option = ProductOption::select('id','option_name','option_value','image','price','sale','amount','product_id')->where('product_id',$product->id_product)->get();
        return view('homepage.product_detail',compact('product','product_lq','image_option','attribute_value','attribute_value_main','attribute_value_cha','product_ngang','reviews'));
    }

    public function search(Request $request){
        $data = Product::
        join('product_options', 'product_options.product_id', 'products.id')
        ->select(['products.id as id_product', 'products.name as name_product','products.slug as slug_product' ,'products.status as status_product', 'products.highlight', 'products.short_description', 'products.title',
                  'product_options.price', 'product_options.sale', 'product_options.image', 'product_options.amount',
                  ])
                  ->where('products.name', 'like', "%{$request->keyword}%")->where('product_options.is_main', 1)->limit(6)->get();

        if (!$data) {
            return redirect()->route('home');
        } else {
            try {
                return response()->json([
                    'code' => 200,
                    'message' => 'success',
                    'data' => $data
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

    public function search2(Request $request){
        if($request->category_id == ""){
            $product = Product::
            join('product_options', 'product_options.product_id','products.id')
            ->join('categories','categories.id','products.category_id')
            ->select(
                       [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                           'products.category_id',
                           'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount',
                       ]
                   )->where('products.status',1)->where('product_options.is_main',1)->where('products.name', 'like', "%{$request->search_name}%")->orderBy('id','desc')->paginate(8);
        }else{
            $product = Product::
            join('product_options', 'product_options.product_id','products.id')
            ->join('categories','categories.id','products.category_id')
            ->select(
                       [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                           'products.category_id',
                           'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount',
                       ]
                   )->where('products.status',1)->where('product_options.is_main',1)->where('categories.id',$request->category_id)->where('products.name', 'like', "%{$request->search_name}%")->orderBy('id','desc')->paginate(8);
        }

        return view('homepage.search_product',compact('product')) ;
    }


}
