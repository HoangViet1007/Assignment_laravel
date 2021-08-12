<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attribute ;
use App\Models\ProductAttribute;
use App\Models\ProductOption ;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\cart\Order ;
use App\Models\Invioce ;
use App\Models\InvioceDetail ;
use App\Mail\EmailCheckOut ;
use Illuminate\Support\Facades\Mail;

class CardController extends Controller
{
    public function addCard(Request $request){
        // $array = preg_split("/(-)/i",$request->segment(3)) ;

        $quantity =  $request->quantity;
        $option_id = $request->option_id ;
        $product_id = $request->product_id ;

        $name_attribute = "" ;
        $id_attribute = "" ;

        // laays za id attribute va nam attribute
        $pro_att = ProductAttribute::where('product_id',$product_id)->first() ;
        if($pro_att){
            $name_attribute = $pro_att->attribute_product->name ;
            $id_attribute = $pro_att->attribute_product->id ;
        }else{
            $name_attribute = 0 ;
            $id_attribute = 0 ;
        }

        // laays za thogn tins an pham
        $data_product = Product::where('products.id','=',$product_id)->where('product_options.id','=',$option_id)
            ->join('categories', 'categories.id', 'products.category_id')
            ->join('users', 'users.id', 'products.user_id')
            ->rightJoin('product_options', 'product_options.product_id', 'products.id')
            ->select(['products.id as id_product', 'products.name as name_product','products.slug as slug_product' ,'products.status as status_product', 'products.highlight', 'products.short_description', 'products.title',
                      'categories.id as id_categories','categories.name as name_categories', 'users.name as name_users',
                      'product_options.option_name', 'product_options.price','product_options.sale', 'product_options.image', 'product_options.amount',
                      ])
            ->orderBy('products.id','DESC')->first();

            // laan dau mua hang
            if(empty(Session::get('cart'))){
                $cart[$option_id] = [
                    'id'              => $product_id ,
                    'slug'            => $data_product->slug_product ,
                    'name'            => $data_product->name_product ,
                    'image'           => $data_product->image ,
                    'price'           => $data_product->price ,
                    'option_id'       => $option_id ,
                    'option_name'     => $data_product->option_name ,
                    'name_attribute'  => $name_attribute,
                    'id_attribute'    => $id_attribute ,
                    'id_category'     => $data_product->id_categories ,
                    'name_category'   => $data_product->name_categories ,
                    'quantity'        => $quantity

                 ];

            }else{
                $cart = Session::get('cart');
                if(array_key_exists($option_id,$cart)){
                    $cart[$option_id] = [
                        'id'              => $product_id ,
                        'slug'            => $data_product->slug_product ,
                        'name'            => $data_product->name_product ,
                        'image'           => $data_product->image ,
                        'price'           => $data_product->price ,
                        'option_id'       => $option_id ,
                        'option_name'     => $data_product->option_name ,
                        'name_attribute'  => $name_attribute,
                        'id_attribute'    => $id_attribute ,
                        'id_category'     => $data_product->id_categories ,
                        'name_category'   => $data_product->name_categories ,
                        'quantity'        => (int)$cart[$option_id]['quantity'] + (int)$quantity ,

                     ] ;
                }else{
                    // neu ko ton tai thi them sp moi
                    $cart[$option_id] = [
                        'id'              => $product_id ,
                        'slug'            => $data_product->slug_product ,
                        'name'            => $data_product->name_product ,
                        'image'           => $data_product->image ,
                        'price'           => $data_product->price ,
                        'option_id'       => $option_id ,
                        'option_name'     => $data_product->option_name ,
                        'name_attribute'  => $name_attribute,
                        'id_attribute'    => $id_attribute ,
                        'id_category'     => $data_product->id_categories ,
                        'name_category'   => $data_product->name_categories ,
                        'quantity'        => $quantity

                     ];
                }
            }


            Session::put('cart', $cart);
            // echo "<pre>" ;
            // $cart2 = [];
            // Session::put('cart', $cart2) ;
            $cart = Session::get('cart');
            print_r($cart)  ;

            $number = 0 ;
            $total = 0 ;
            foreach ($cart as $value) {
                $number += (int)$value['quantity'] ;
                $total += (int)$value['quantity'] * (int)$value['price'] ;
            }

            echo $number . "-" . $total ;


    }

    public function updateCard(Request $request){
       if(isset($request->option_id) && isset($request->quantity)){
            if(!empty(Session::get('cart'))){
                $cart = Session::get('cart') ;
                if(array_key_exists($request->option_id,$cart)){
                    $cart[$request->option_id]['quantity'] = $request->quantity ;
                }
                Session::put('cart', $cart);
                echo "<pre>" ;
                $cart = Session::get('cart');
                print_r($cart);
            }
       }
    }

    public function deleteItemsCard(Request $request){
        if(isset($request->option_id)){
            if(!empty(Session::get('cart'))){
                $cart = Session::get('cart') ;
                unset($cart[$request->option_id]) ;
                Session::put('cart', $cart);
                echo "<pre>" ;
                $cart = Session::get('cart');
                print_r($cart);
            }
        }
    }


    public function deleteCart(Request $request){
        if(!empty(Session::get('cart'))){
            $cart = Session::get('cart');
            $request->session()->forget('cart') ;

        }
    }
    public function listCard(){
        $cart = Session::get('cart');
        return view('homepage.list_card',compact('cart')); ;
    }

    public function getcheckOut(){
        $cart = Session::get('cart');
        return view('homepage.checkout',compact('cart')); ;

    }

    public function Order(Order $request){
        // dd($request->all()) ;
        $address = $request->address2 ." - ". $request->address1 ;
        $data_invioce = [
            'name' => $request->name,
            'user_id' => $request->user_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $address,
            'content' => $request->content,
            'total_price' => $request->total_price,
            'status' => 1
        ] ;

        $invioces = Invioce::create($data_invioce) ;
        // luwu vao hoa don chi tiet

        $cart = Session::get('cart');

        foreach ($cart as $a){
            $data_invioce_detail = [
                'invioce_id' => $invioces->id,
                'product_id' => $a['id'],
                'image' => $a['image'] ,
                'price' => $a['price'],
                'quantity' => $a['quantity'] ,
                'option_id'       => $a['option_id'] ,
                'attribute_id'    => $a['id_attribute'] ,
            ] ;

            InvioceDetail::create($data_invioce_detail) ;
        }

        // gửi email
        Mail::to($request->email)->send(new EmailCheckOut($cart,$request->name,$address,$request->phone,$request->email,$invioces->created_at->format('Y-m-d'),$invioces->total_price));

        $request->session()->forget('cart') ;

        $id_invioces = $invioces->id ;


        return view('homepage.thanh_cong',compact('id_invioces')) ;

    }

}
