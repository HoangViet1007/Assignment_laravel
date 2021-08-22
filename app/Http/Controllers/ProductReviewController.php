<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductReview;

class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product_review.list_product_review');
    }

    public function anyData(Request $request)
    {
        $data = ProductReview::join('products', 'products.id', 'product_reviews.product_id')
            ->select([
                ProductReview::raw("count(product_reviews.id) as sdg"), ProductReview::raw("max(product_reviews.created_at) as max"),ProductReview::raw("min(product_reviews.created_at) as min"),
                'products.id', 'products.name'
            ])->groupBy('products.id')->groupBy('products.name');
        return Datatables::of($data)
        ->filter(
            function ($query) use ($request) {
                if ($request->has('name_product')) {
                    $query->where('products.name', 'like', "%{$request->get('name_product')}%");
                }
            })
            ->make(true);
    }

    public function ReviewProduct(Request $request, $id)
    {
        $product_id = $id;
        // lay binh luan cua sp
        $review_product = ProductReview::join('products', 'products.id', 'product_reviews.product_id')
            ->select('product_reviews.*', 'products.name as name_pro')
            ->where('product_reviews.product_id', $product_id)->get();
        return view('admin.product_review.review_product', compact('review_product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

    }
    public function store2(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'rating' => $request->rating,
            'status' => 0,
            'product_id' => $request->product_id,
        ];
        ProductReview::create($data);
        return back()->with('success_product_review', 'Thêm bình luận thành  công , chờ quản trị viên xét duyệt nha !');
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
        $model = ProductReview::find($id);
        if (!$model) {
            return redirect()->route('product_review.index')->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                if ($model->status == config('common.product_review.status.active')) {
                    $model->where('id', $id)->update(['status'=>config('common.product_review.status.disabled')]);
                    return response()->json([
                        'code' => 200,
                        'message' => 'success'
                    ], 200);
                } elseif ($model->status == config('common.product_review.status.disabled')) {
                    $model->where('id', $id)->update(['status'=>config('common.product_review.status.active')]);
                    return response()->json([
                        'code' => 200,
                        'message' => 'success'
                    ], 200);
                }
            } catch (\Exception $exception) {
                Log::error('Message' . $exception->getMessage() . '-- Line : ' . $exception->getLine());
                return response()->json([
                    'code' => 500,
                    'message' => 'fail'
                ], 500);
            }
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = ProductReview::find($id);
        if (!$model) {
            return redirect()->route('product_review.index')->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                ProductReview::destroy($id);
                return response()->json([
                    'code' => 200,
                    'message' => 'success'
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
