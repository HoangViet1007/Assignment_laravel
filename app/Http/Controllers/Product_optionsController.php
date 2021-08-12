<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product ;
use App\Models\ProductOption ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\product_option\StoreRequest ;
use App\Http\Requests\product_option\UpdateRequest;

class Product_optionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function index_id($id){
        $product = Product::find($id);
        $id = $product->id ;
        if(!$product){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            $data = ProductOption::join('products','products.id','product_options.product_id')
            ->select(['product_options.id as id_product_option','product_options.option_name','product_options.option_value','product_options.image as image_product_option','product_options.price','product_options.sale','product_options.amount','product_options.is_main','product_options.product_id as product_id','products.name as name_product'])
            ->where('product_options.product_id',$id)->get() ;
            return view('admin.product_option.list_product_option',compact('id','data'));
        }
    }

    // public function anyData(Request $request,$id){
    //     $data = product_option::join('products','products.id','product_options.product_id')
    //                           ->select(['product_options.id as id_product_option','product_options.option_name','product_options.option_value','product_options.image as image_product_option','product_options.price','product_options.sale','product_options.amount','product_options.is_main','product_options.product_id as product_id','products.name as name_product'])
    //                           ->where('product_options.product_id',$id)->get(); ;

    //     return Datatables::of($data)->make(true);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2($id){
       $product_id = $id ;
       return view('admin.product_option.add_product_option',compact('product_id')) ;
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function store2(StoreRequest $request,$id){
        $requestDataOption = [
            'option_name'   => $request->option_name,
            'option_value'  => $request->option_value,
            'image'         => $request->image,
            'price'         => $request->price,
            'sale'          => $request->sale,
            'amount'        => $request->amount,
            'is_main'       => $request->is_main,
            'product_id'    => $id,
        ];

        ProductOption::create($requestDataOption) ;
        return back()->with('success','Thêm thông tin thành công !') ;
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
       $data = ProductOption::find($id);
       return view('admin.product_option.edit_product_option',compact('data')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // check xem id đó có trong csdl ko đã
         $model = ProductOption::find($id) ;
         if(!$model){
             return back()->with('err','Thông tin này không tồn tại !') ;
         }else{
             // neu nguoi dung ko nhap anh thi phai giu anh cu cho nta
             if($request->image == $model->image){
                ProductOption::where('id',$id)->update($request->only('option_name','option_value','price','sale','amount','is_main','product_id'));
                 return redirect()->route('product_option.index_id',$model->product_id)->with('success','Update thông tin thành công !') ;
             }else{
                ProductOption::where('id',$id)->update($request->only('option_name','option_value','image','price','sale','amount','is_main','product_id'));
                 return redirect()->route('product_option.index_id',$model->product_id)->with('success','Update thông tin thành công !') ;
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
        $model = ProductOption::find($id) ;
        if(!$model){
            return redirect()->route('product_option.index_id',$model->product_id)->with('err','Thông tin này không tồn tại !') ;
        }else{
            try{
                ProductOption::destroy($id) ;
                return response()->json([
                    'code' => 200 ,
                    'message' => 'success'
                ],200) ;

            }catch(\Exception $exception){
                Log::error('Message' . $exception->getMessage() . '-- Line : ' . $exception->getLine());
                return response()->json([
                    'code' => 500 ,
                    'message' => 'fail'
                ],500) ;
            }
        }
    }
}
