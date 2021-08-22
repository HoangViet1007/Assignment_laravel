@extends('master_layout.home_master')
@section('title', 'Tìm kiếm sản phẩm')
@section('content_clien')
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Laptops &amp; Computers</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
                    <!-- List -->
                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
                        <li>
                            <ul class="list-unstyled dropdown-list">
                                @foreach ($category_table_product as $a)
                                <li><a class="dropdown-item" href="{{route('product_clien_cate',[$a->slug_categories,$a->id_categories])}}">{{$a->name_cate}}<span class="text-gray-25 font-size-12 font-weight-normal">({{ \App\Models\Product::where('category_id', $a->id_categories)->count() }})</span></a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <div class="col-xl-9 col-wd-9gdot5">
                <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                    <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Tìm kiếm : iphone</h3>
                </div>
                <ul class="row list-unstyled products-group no-gutters mb-6">
                    @if($product->count() > 0)
                    @foreach ($product as $b)
                    <li class="col-6 col-md-3 product-item mb-4">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-xl-4 p-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="product-categories-7-column-full-width.html"
                                            class="font-size-12 text-gray-5">{{$b->category->name}}</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}"
                                            class="text-blue font-weight-bold">{{$b->name}}</a></h5>
                                    <div class="mb-2">
                                        <a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="d-block text-center"><img
                                                class="img-fluid" src="{{url('')}}{{$b->image}}"
                                                alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                            <ins class="font-size-20 text-red text-decoration-none mr-2">{{number_format($b->price)}} <u>đ</u> </ins>
                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format(($b->price) + ($b->price * $b->sale/100))}}  <u>đ</u></del>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="fas fa-eye"></i></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="compare.html" class="text-gray-6 font-size-13"><i
                                                class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="wishlist.html" class="text-gray-6 font-size-13"><i
                                                class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @else
                    <p>Không có sản phẩm nào cả !</p>
                    @endif
                </ul>
                <nav class="d-md-flex justify-content-between align-items-center border-top pt-3"
                    aria-label="Page navigation example">
                    {{$product->links()}}
                </nav>
            </div>

        </div>
    </div>
</main>@endsection
