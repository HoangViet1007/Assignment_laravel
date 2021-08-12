@extends('master_layout.home_master')
@section('title', 'Sản phẩm')
@section('content_clien')
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Sản phẩm
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="row mb-8">
            @include('master_layout.filter_product_clien')
        </div>
        <div class="col-xl-9 col-wd-9gdot5">
            <!-- Shop-control-bar Title -->
            <div class="flex-center-between mb-3">
                <h3 class="font-size-25 mb-0">Sản phẩm</h3>
            </div>
            <!-- End shop-control-bar Title -->
            <!-- Shop-control-bar -->
            <div class="bg-gray-1 flex-center-between borders-radius-9 py-1" ; style="height:40px">
                <div class="d-xl-none">
                    <!-- Account Sidebar Toggle Button -->
                    <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal target-of-invoker-has-unfolds"
                        href="javascript:;" role="button" aria-controls="sidebarContent1" aria-haspopup="true"
                        aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
                        data-unfold-target="#sidebarContent1" data-unfold-type="css-animation"
                        data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft"
                        data-unfold-duration="500">
                        <i class="fas fa-sliders-h"></i> <span class="ml-1"></span>
                    </a>
                    <!-- End Account Sidebar Toggle Button -->
                </div>
                <div class="d-flex">
                    <form action="{{ route('product_clien') }}" method="get">
                        <!-- Select -->
                        <select onchange="this.form.submit()" style="height:35px;width:300px;border:1px solid #ccc;border-radius:10px;" name="type_filter">
                            <option value="">Sắp xếp</option>
                            <option value="1" @if(request()->type_filter == '1') {{'selected'}} @endif>Sản phẩm mới nhất</option>
                            <option value="2"@if(request()->type_filter == '2') {{'selected'}} @endif>Giá cao nhất</option>
                            <option value="3"@if(request()->type_filter == '3') {{'selected'}} @endif>Giá thấp nhất</option>
                        </select>
                        <!-- End Select -->
                    </form>
                </div>
                <div class="px-3 d-none d-xl-block">
                    <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill"
                                href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
                                aria-selected="true">
                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                    <i class="fa fa-th"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill"
                                href="#pills-four-example1" role="tab" aria-controls="pills-four-example1"
                                aria-selected="false">
                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                    <i class="fa fa-th-list"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="d-flex">
                            <form method="get">
                                <!-- Select -->
                                <select name="hehe" id="">
                                    <option value="0">haha</option>
                                    <option value="1">hihi</option>
                                </select>
                                <!-- End Select -->
                            </form>
                            <form method="POST" class="ml-2 d-none d-xl-block">
                                <!-- Select -->
                                    <select name="hehe" id="">
                                        <option value="0">haha</option>
                                        <option value="1">hihi</option>
                                    </select>
                                </div>
                                <!-- End Select -->
                            </form>
                        </div> --}}

            </div>
            <!-- End Shop-control-bar -->
            <!-- Shop Body -->
            <!-- Tab Content -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade pt-2 active show" id="pills-one-example1" role="tabpanel"
                    aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @if ($product->count() > 0)
                            @foreach ($product as $b)
                                <li class="col-6 col-md-3 product-item mb-4">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="product-categories-7-column-full-width.html"
                                                        class="font-size-12 text-gray-5">{{ $b->category->name }}</a>
                                                </div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ route('product_detail', ['slug' => $b->slug, 'id' => $b->id]) }}"
                                                        class="text-blue font-weight-bold">{{ $b->name }}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('product_detail', ['slug' => $b->slug, 'id' => $b->id]) }}"
                                                        class="d-block text-center"><img class="img-fluid"
                                                            src="{{ url('') }}{{ $b->image }}"
                                                            alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div
                                                        class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none mr-2">{{ number_format($b->price) }}
                                                            <u>đ</u> </ins>
                                                        <del
                                                            class="font-size-12 tex-gray-6 position-absolute bottom-100">{{ number_format($b->price + ($b->price * $b->sale) / 100) }}
                                                            <u>đ</u></del>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ route('product_detail', ['slug' => $b->slug, 'id' => $b->id]) }}"
                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="fas fa-eye"></i></i></a>
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
                            <p>Không có sản phẩm nào cả</p>
                        @endif
                    </ul>
                </div>

                <div class="tab-pane fade pt-2" id="pills-four-example1" role="tabpanel"
                    aria-labelledby="pills-four-example1-tab" data-target-group="groups">
                    <ul class="d-block list-unstyled products-group prodcut-list-view-small">
                        @if ($product->count() > 0)
                            @foreach ($product as $b)
                                <li class="product-item remove-divider">
                                    <div class="product-item__outer w-100">
                                        <div class="product-item__inner remove-prodcut-hover py-4 row">
                                            <div class="product-item__header col-6 col-md-2">
                                                <div class="mb-2">
                                                    <a href="{{ route('product_detail', ['slug' => $b->slug, 'id' => $b->id]) }}"
                                                        class="d-block text-center"><img class="img-fluid"
                                                            src="{{ url('') }}{{ $b->image }}"
                                                            alt="Image Description"></a>
                                                </div>
                                            </div>
                                            <div class="product-item__body col-6 col-md-7">
                                                <div class="pr-lg-10">
                                                    <div class="mb-2"><a
                                                            href="product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">{{ $b->category->name }}</a>
                                                    </div>
                                                    <h5 class="mb-2 product-item__title"><a
                                                            href="{{ route('product_detail', ['slug' => $b->slug, 'id' => $b->id]) }}"
                                                            class="text-blue font-weight-bold">{{ $b->name }}</a>
                                                    </h5>
                                                    <div class="prodcut-price d-md-none">
                                                        <div class="text-gray-100">
                                                            {{ number_format($b->price + ($b->price * $b->sale) / 100) }}
                                                            <u>đ</u></div>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                        <li style="list-style: none;">{!! $b->short_description !!}</li>
                                                    </ul>
                                                    {{-- <div class="mb-3 d-none d-md-block">
                                                    <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                        <div class="text-warning mr-2">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                        <span class="text-secondary">(40)</span>
                                                    </a>
                                                </div> --}}
                                                </div>
                                            </div>
                                            <div class="product-item__footer col-md-3 d-md-block">
                                                <div class="mb-2 flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100" style="color:red;">
                                                            {{ number_format($b->price + ($b->price * $b->sale) / 100) }}
                                                            <u>đ</u></div>
                                                    </div>
                                                    <div class="prodcut-add-cart">
                                                        <a href="{{ route('product_detail', ['slug' => $b->slug, 'id' => $b->id]) }}"
                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="fas fa-eye"></i></i></a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                                                    <a href="compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <p>Không có sản phẩm nào cả</p>
                        @endif
                    </ul>
                </div>

            </div>
            <!-- End Tab Content -->
            <!-- End Shop Body -->
            <!-- Shop Pagination -->
            <nav class="d-md-flex justify-content-between align-items-center border-top pt-3"
                aria-label="Page navigation example">
                {{ $product->links() }}
            </nav>
            <!-- End Shop Pagination -->
        </div>
    </div>
    </div>
</main>
@endsection
@section('js')
<script>
    $('.custom-control-label').on('click', function(e){
        document.getElementById("filter_attribute_option").submit();
    })
</script>
@endsection

