<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\product\StoreRequest;
use App\Http\Requests\product\UpdateRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\TypeAttribute;
use App\Models\Attribute;
use App\Models\Tag;
use App\Models\ProductTag;
use App\Models\ProductOption;
use App\Components\Recusive;
use App\Models\ProductAttribute;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
       $this->middleware('can:product_list',['only'=>['index','anyData']]) ;
       $this->middleware('can:product_add',['only'=>['create','store']]) ;
       $this->middleware('can:product_edit',['only'=>['edit','update']]) ;
       $this->middleware('can:product_delete',['only'=>['destroy']]) ;
    }

    public function index()
    {
        $data = Category::all();
        $recusive = new Recusive($data); // bên contructoer kia nhận đc biến data này
        $htmlOption = $recusive->CategoryRecusive($parent_id = '');
        return view('admin.product.list_product', compact('htmlOption'));
    }

    public function anyData(Request $request)
    {
        $data = Product::
            join('categories', 'categories.id', 'products.category_id')
            ->join('users', 'users.id', 'products.user_id')
            ->rightJoin('product_options', 'product_options.product_id', 'products.id')
            ->select(['products.id as id_product', 'products.name as name_product', 'products.status as status_product', 'products.highlight', 'products.short_description', 'products.title',
                      'categories.name as name_categories', 'users.name as name_users',
                      'product_options.price', 'product_options.sale', 'product_options.image', 'product_options.amount',
                      ])
            ->where('product_options.is_main', 1)->orderBy('products.id','DESC');
        return Datatables::of($data)
            ->filter(
                function ($query) use ($request) {
                    if ($request->has('name')) {
                        $query->where('products.name', 'like', "%{$request->get('name')}%");
                    }
                    if ($request->get('price_to') != "" && $request->get('price_from') == "") {
                        $query->where('product_options.price', '>', (float)$request->get('price_to'));
                    }
                    if ($request->get('price_from') != "" && $request->get('price_to') == "") {
                        $query->where('product_options.price', '<', (float)$request->get('price_from'));
                    }
                    if ($request->get('price_to') != "" && $request->get('price_from') != "") {
                        $request->$query->whereBetween('product_options.price', [(int)$request->get('price_to'), (int)$request->get('price_from')]);
                    }
                    if ($request->has('user_name')) {
                        $query->where('users.name', 'like', "%{$request->get('user_name')}%");
                    }
                    if ($request->get('status') != "") {
                        $query->where('products.status', '=', $request->get('status'));
                    }
                    if ($request->get('highlight') != "") {
                        $query->where('products.highlight', '=', $request->get('highlight'));
                    }
                    if ($request->get('category_id') != "") {
                        $query->where('category_id', $request->get('category_id'));
                    }
                }
            )
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // láy hết các type attribute và in za từng loại của nó ko
        $type_attribute = TypeAttribute::where('status', 1)->get();
        //////
        $attribute = Attribute::all();
        $data = Category::all();
        $recusive = new Recusive($data); // bên contructoer kia nhận đc biến data này
        $htmlOption = $recusive->CategoryRecusive($parent_id = '');
        return view('admin.product.add_product', compact('htmlOption', 'attribute', 'type_attribute'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // lưu data vào bảng product và
        $requestData = [
            'name'              => $request->name,
            'slug'              => $request->slug,
            'title'             => $request->title,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'status'            => $request->status,
            'highlight'         => $request->highlight,
            'category_id'       => $request->category_id,
            'user_id'           => Auth::user()->id,
            'parent_id'         => 0,
        ];

        $product = Product::create($requestData);

        // Lưu data vào bảng tag và bảng product_tag
        if(!empty($request->tags)){
            foreach ($request->tags as $tag) {
                $tagInstance = Tag::firstOrCreate(['name' => $tag]);
                // lưu ptoduct tang
                ProductTag::create([
                    'product_id' => $product->id,
                    'tag_id' => $tagInstance->id,
                ]);
            }
        }

        // lưu data vào bảng option và
        $requestDataOption = [
            'option_name'   => $request->option_name,
            'option_value'  => $request->option_value,
            'image'         => $request->image,
            'price'         => $request->price,
            'sale'          => $request->sale,
            'amount'        => $request->amount,
            'is_main'       => 1,
            'product_id'    => $product->id,
        ];
        ProductOption::create($requestDataOption);

        // lưu data vào bảng product_attribute

        if ($request->attribute) {
            $requestDataAttribute = [
                'product_id' => $product->id,
                'attribute_id' => $request->attribute,
            ];
            ProductAttribute::create($requestDataAttribute);
        }
        return back()->with('success', 'Thêm thông tin thành công !');
    }

    public function create2($id){
        $model = Product::find($id) ;
        $type_attribute = TypeAttribute::where('status', 1)->get();
        //////
        $attribute = Attribute::all();
        $data = Category::all();
        $recusive = new Recusive($data); // bên contructoer kia nhận đc biến data này
        $htmlOption = $recusive->CategoryRecusive($parent_id = '');
        return view('admin.product.add_product2', compact('htmlOption', 'attribute', 'type_attribute','model'));
    }

    public function store2(StoreRequest $request,$id){
        $product_parent = Product::find($id) ;
        // lưu data vào bảng product và
        $requestData = [
            'name'              => $request->name,
            'slug'              => $request->slug,
            'title'             => $request->title,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'status'            => $request->status,
            'highlight'         => $request->highlight,
            'category_id'       => $request->category_id,
            'user_id'           => Auth::user()->id,
            'parent_id'         => $product_parent->id,
        ];

        $product = Product::create($requestData);

        // Lưu data vào bảng tag và bảng product_tag
        if(!empty($request->tags)){
            foreach ($request->tags as $tag) {
                $tagInstance = Tag::firstOrCreate(['name' => $tag]);
                // lưu ptoduct tang
                ProductTag::create([
                    'product_id' => $product->id,
                    'tag_id' => $tagInstance->id,
                ]);
            }
        }

        // lưu data vào bảng option và
        $requestDataOption = [
            'option_name'   => $request->option_name,
            'option_value'  => $request->option_value,
            'image'         => $request->image,
            'price'         => $request->price,
            'sale'          => $request->sale,
            'amount'        => $request->amount,
            'is_main'       => 1,
            'product_id'    => $product->id,
        ];
        ProductOption::create($requestDataOption);

        // lưu data vào bảng product_attribute

        if ($request->attribute) {
            $requestDataAttribute = [
                'product_id' => $product->id,
                'attribute_id' => $request->attribute,
            ];
            ProductAttribute::create($requestDataAttribute);
        }
        return back()->with('success', 'Thêm thông tin thành công !');
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
        // laays za product
        $product = Product::find($id);

        // laays za danh muc thuoojc tinhs vaf thuoojc tinhs
        $attribute = Attribute::all();
        $type_attribute = TypeAttribute::where('status', 1)->get();

        // laays za category
        $data = Category::all();
        $recusive = new Recusive($data); // bên contructoer kia nhận đc biến data này
        $htmlOption = $recusive->CategoryRecusive($parent_id = $product->category_id);


        // lấy za attribute mà product đã chọn
        $attribute_product_check  = ProductAttribute::where('product_id', $id)->first();
        // dd($attribute_product_check) ;

        $id_type_attribute_product_check = "" ;
        $type_attribute_product_check = "" ;
        if (isset($attribute_product_check)) {
            // lấy za cái type_attribute mà product đó đã chọn
            $id_type_attribute_product_check = Attribute::where('id', $attribute_product_check->attribute_id)->first();
            // dd($id_type_attribute_product_check) ;
            // lấy za type_attribute mà product đã chọn
            $type_attribute_product_check = TypeAttribute::where('id', $id_type_attribute_product_check->id_type)->first();
            // dd($type_attribute_product_check) ;
        }



        return view('admin.product.edit_product', compact('htmlOption', 'product', 'attribute', 'type_attribute', 'type_attribute_product_check', 'attribute_product_check', 'id_type_attribute_product_check'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        // dd($request->all());
        // $product = product::find($id) ;
        // $isset_product_attribute = product_attribute::where('product_id', $product->id)->first(); ;
        // dd($isset_product_attribute) ;

        // update product
        $requestDataUpdate = [
            'name'              => $request->name,
            'slug'              => $request->slug,
            'title'             => $request->title,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'status'            => $request->status,
            'highlight'         => $request->highlight,
            'category_id'       => $request->category_id,
        ];

        Product::find($id)->update($requestDataUpdate);

        $product = Product::find($id);
        // Update data vào bảng tag và bảng product_tag
         // Lưu data vào bảng tag và bảng product_tag
        if(!empty($request->tags)){
            foreach ($request->tags as $tag) {
                $tagInstance = Tag::firstOrCreate(['name' => $tag]);
                $tagId[] = $tagInstance->id ;
            }
        }
        $product->tags()->sync($tagId);

        // check xem có tồn tại trong bảng prodcut attribute hay chưa ... nếu chưa thì create còn rồi thì update
        $isset_product_attribute = ProductAttribute::where('product_id', $product->id)->first();
        if (isset($request->attribute)) {
            if(isset($isset_product_attribute)){
                // toonf taij thif update
                $requestDataAttribute = [
                    'product_id' => $product->id,
                    'attribute_id' => $request->attribute,
                ];
                ProductAttribute::where('product_id', $product->id)->update($requestDataAttribute);
            }else{
                // ko thif create
                $requestDataAttribute = [
                    'product_id' => $product->id,
                    'attribute_id' => $request->attribute,
                ];
                ProductAttribute::create($requestDataAttribute);
            }
        }else{
            // tức là có thể sản phẩm này ko có attribute hoặc có nhưng người dùng muôn supdate về ko có
            if(isset($isset_product_attribute)){
                // tức là người dùng muốn update về ko có attribute thì xoá luôn attribute trong bảng product attribute đó
                ProductAttribute::where('product_id',$product->id)->delete() ;
            }
        }
        return redirect()->route('product.index')->with('success', 'Update thông tin thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $model = Product::find($id) ;
        if(!$model){
            return redirect()->route('post.index')->with('err','Thông tin này không tồn tại !') ;
        }else{
            try{
                Product::destroy($id) ;
                // xoá trong bảng product option
                ProductOption::where('product_id',$id)->delete() ; //
                //xoa trong bang product_tag
                $product_tag = ProductTag::where('product_id',$id)->get();
                foreach ($product_tag as $a){
                   ProductTag::destroy($a->id) ;
                }
                // xoas trog bang product_attribute
                ProductAttribute::where('product_id',$id)->delete();

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


    public function getAttribute($id)
    {
        $data = Attribute::where('id_type', $id)->where('status', 1)->get();
        if (!$data) {
            return redirect()->route('product.index');
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
}
