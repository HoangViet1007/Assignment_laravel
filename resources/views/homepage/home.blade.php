@extends('master_layout.home_master')
@section('title','Trang chủ')
@section('content_clien')
    @include('master_layout.slide')
    <!-- Banner -->
    <div class="mb-5">
        <div class="row">
            <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                <a href="../shop/shop.html" class="d-black text-gray-90">
                    <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                        <div class="col-6 col-xl-5 col-wd-6 pr-0">
                            <img class="img-fluid" src="{{asset('public_clien/img/190X150/img1.png')}}" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-7 col-wd-6">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                        <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                <a href="../shop/shop.html" class="d-black text-gray-90">
                    <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                        <div class="col-6 col-xl-5 col-wd-6 pr-0">
                            <img class="img-fluid" src="{{asset('public_clien/img/190X150/img2.jpg')}}" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-7 col-wd-6">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                        <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                <a href="../shop/shop.html" class="d-black text-gray-90">
                    <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                        <div class="col-6 col-xl-5 col-wd-6 pr-0">
                            <img class="img-fluid" src="{{asset('public_clien/img/190X150/img3.jpg')}}" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-7 col-wd-6">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                        <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                <a href="../shop/shop.html" class="d-black text-gray-90">
                    <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                        <div class="col-6 col-xl-5 col-wd-6 pr-0">
                            <img class="img-fluid" src="{{asset('public_clien/img/190X150/img4.png')}}" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-7 col-wd-6">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                        <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Deals-and-tabs -->
    <div class="mb-5">
        <div class="row">
            <!-- Deal -->
            @if(isset($product_sale_max))
            <div class="col-md-auto mb-6 mb-md-0">
                <div class="p-3 border border-width-2 border-primary borders-radius-20 bg-white min-width-370">
                    <div class="d-flex justify-content-between align-items-center m-1 ml-2">
                        <h3 class="font-size-22 mb-0 font-weight-normal text-lh-28 max-width-120">Giảm giá</h3>
                        <div class="d-flex align-items-center flex-column justify-content-center bg-primary rounded-pill height-75 width-75 text-lh-1">
                            <span class="font-size-12">Giảm</span>
                            <div class="font-size-15 font-weight-bold">{{number_format(($product_sale_max->price) + ($product_sale_max->price * $product_sale_max->sale/100) - ($product_sale_max->price))}} đ</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <a href="{{route('product_detail',['slug'=>$product_sale_max->slug,'id'=>$product_sale_max->id])}}" class="d-block text-center"><img class="img-fluid" src="{{url('')}}{{$product_sale_max->image}}" alt="Image Description" width="300px"></a>
                    </div>
                    <h5 class="mb-2 font-size-14 text-center mx-auto max-width-180 text-lh-18"><a href="{{route('product_detail',['slug'=>$product_sale_max->slug,'id'=>$product_sale_max->id])}}" class="text-blue font-weight-bold">{{$product_sale_max->name}}</a></h5>
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <del class="font-size-18 mr-2 text-gray-2">{{number_format(($product_sale_max->price) + ($product_sale_max->price * $product_sale_max->sale/100))}} <u>đ</u> </del>
                        <ins class="font-size-30 text-red text-decoration-none">{{number_format($product_sale_max->price)}} <u>đ</u></ins>
                    </div>
                    <div class="mb-3 mx-2">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="">Availavle: <strong>6</strong></span>
                            <span class="">Already Sold: <strong>28</strong></span>
                        </div>
                        <div class="rounded-pill bg-gray-3 height-20 position-relative">
                            <span class="position-absolute left-0 top-0 bottom-0 rounded-pill w-30 bg-primary"></span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <h6 class="font-size-15 text-gray-2 text-center mb-3">Hurry Up! Offer ends in:</h6>
                        <div class="js-countdown d-flex justify-content-center" data-end-date="2020/11/30" data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="text-lh-1">
                                <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2" id="hours">
                                    <span class="js-cd-hours"></span>
                                </div>
                                <div class="text-gray-2 font-size-12 text-center">HOURS</div>
                            </div>
                            <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                            <div class="text-lh-1">
                                <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2" id="mins">
                                    <span class="js-cd-minutes"></span>
                                </div>
                                <div class="text-gray-2 font-size-12 text-center">MINS</div>
                            </div>
                            <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                            <div class="text-lh-1">
                                <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2" id="secs">
                                    <span class="js-cd-seconds"></span>
                                </div>
                                <div class="text-gray-2 font-size-12 text-center">SECS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- End Deal -->
            <!-- Tab Prodcut -->
            <div class="col">
                <!-- Features Section -->
                <div class="">
                    <!-- Nav Classic -->
                    <div class="position-relative bg-white text-center z-index-2">
                        <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        Sản phẩm mới
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        Sản phẩm giảm giá
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        Sản phẩm giá rẻ
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Nav Classic -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                            <ul class="row list-unstyled products-group no-gutters">
                                @if($product_new)
                                @foreach($product_new as $a)
                                    <li class="col-6 col-wd-3 col-md-4 product-item mb-3">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{$a->category->name}}</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="text-blue font-weight-bold">{{$a->name}}</a></h5>
                                                    <div class="mb-2">
                                                        <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="d-block text-center"><img class="img-fluid" src="{{url('')}}{{$a->image}}" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                            <ins class="font-size-20 text-red text-decoration-none mr-2">{{number_format($a->price)}} <u>đ</u></ins>
                                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format(($a->price) + ($a->price * $a->sale/100))}} đ</del>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="fas fa-eye"></i></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                            <ul class="row list-unstyled products-group no-gutters">
                                @if($product_sale)
                                @foreach($product_sale as $a)
                                    <li class="col-6 col-wd-3 col-md-4 product-item mb-3">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{$a->category->name}}</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="text-blue font-weight-bold">{{$a->name}}</a></h5>
                                                    <div class="mb-2">
                                                        <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="d-block text-center"><img class="img-fluid" src="{{url('')}}{{$a->image}}" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price d-flex align-items-center text-center position-relative">
                                                            <ins class="font-size-20 text-red text-decoration-none mr-2">{{number_format($a->price)}} VND</ins>
                                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format(($a->price) + ($a->price * $a->sale/100))}} <u>đ</u></del>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="fas fa-eye"></i></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex_pricesale" style="padding: 1px 10px 1px 20px;border-radius: 30px;background-color: #fdd600;font-size: 12px;font-weight: 600;line-height: 18px;display: inline-block;position:absolute;top:15px;right:5px;"><img alt="logo" src="{{url('')}}/sale.png" width="15px">Giảm <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"> {{number_format(($a->price) + ($a->price * $a->sale/100) - ($a->price))}}₫</span></span></div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab">
                            <ul class="row list-unstyled products-group no-gutters">
                                @if($product_price_min)
                                @foreach($product_price_min as $a)
                                    <li class="col-6 col-wd-3 col-md-4 product-item mb-3">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{$a->category->name}}</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="text-blue font-weight-bold">{{$a->name}}</a></h5>
                                                    <div class="mb-2">
                                                        <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="d-block text-center"><img class="img-fluid" src="{{url('')}}{{$a->image}}" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                            <ins class="font-size-20 text-red text-decoration-none mr-2">{{number_format($a->price)}} VND</ins>
                                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format(($a->price) + ($a->price * $a->sale/100))}}  <u>đ</u></del>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="fas fa-eye"></i></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Features Section -->
            </div>
            <!-- End Tab Prodcut -->
        </div>
    </div>
    <!-- End Deals-and-tabs -->

    <!-- Popular Products -->
    <div class="mb-6">
        <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
            <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Sản phẩm nổi bật</h3>
            <ul class="w-100 w-lg-auto nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0" id="pills-tab-4" role="tablist">
               @php $active = "active"  ; @endphp
               @if($category_in_table_product)
                @foreach ($category_in_table_product as $a)
                    @if($active == "active")
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill active" id="{{$a->slug_categories}}-{{$a->id_categories}}" data-toggle="pill" href="#{{$a->slug_categories}}" role="tab" aria-controls="{{$a->slug_categories}}" aria-selected="true">{{$a->name_cate}}</a>
                        </li>
                    @php $active = "" ;  @endphp
                    @else
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="{{$a->slug_categories}}-{{$a->id_categories}}" data-toggle="pill" href="#{{$a->slug_categories}}" role="tab" aria-controls="{{$a->slug_categories}}" aria-selected="true">{{$a->name_cate}}</a>
                        </li>
                    @endif
                {{-- <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link rounded-pill" id="Apills-two-example1-tab" data-toggle="pill" href="#Apills-two-example1" role="tab" aria-controls="Apills-two-example1" aria-selected="false">All in One</a>
                </li> --}}
                @endforeach
                @endif
            </ul>
        </div>
        <!-- Tab Content -->
        <div class="tab-content2 u-slick__tab" id="Apills-tabContent">
            @php $active = "active"  ; @endphp
            @if($category_in_table_product)
            @foreach ($category_in_table_product as $a)
            @if($active == "active")
            <div class="tab-pane fade pt-2 show active" id="{{$a->slug_categories}}" role="tabpanel" aria-labelledby="{{$a->slug_categories}}-{{$a->id_categories}}">
                <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                    data-slides-show="6"
                    data-slides-scroll="1"
                    data-responsive='[{
                      "breakpoint": 1400,
                      "settings": {
                        "slidesToShow": 5
                      }
                    }, {
                        "breakpoint": 1200,
                        "settings": {
                          "slidesToShow": 3
                        }
                    }, {
                      "breakpoint": 992,
                      "settings": {
                        "slidesToShow": 3
                      }
                    }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 554,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }]'>


                   @foreach (
                         \App\Models\Product::join('product_options', 'product_options.product_id','products.id')
                         ->join('categories','categories.id','products.category_id')
                         ->select(
                                    [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                                        'products.category_id',
                                        'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount',
                                    ]
                                )->where('products.status',1)->where('product_options.is_main',1)->where('categories.id',$a->id_categories)->orderBy('id','desc')->get()
                         as $b )
                   <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">{{$b->category->name}}</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="text-blue font-weight-bold">{{$b->name}}</a></h5>
                                        <div class="mb-2">
                                            <a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="d-block text-center"><img class="img-fluid" src="{{url('')}}{{$b->image}}" alt="Image Description"></a>
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
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @php $active = "" ;  @endphp
            @else
            <div class="tab-pane fade pt-2 show" id="{{$a->slug_categories}}" role="tabpanel" aria-labelledby="{{$a->slug_categories}}-{{$a->id_categories}}">
                <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                    data-slides-show="6"
                    data-slides-scroll="1"
                    data-responsive='[{
                      "breakpoint": 1400,
                      "settings": {
                        "slidesToShow": 5
                      }
                    }, {
                        "breakpoint": 1200,
                        "settings": {
                          "slidesToShow": 3
                        }
                    }, {
                      "breakpoint": 992,
                      "settings": {
                        "slidesToShow": 3
                      }
                    }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 554,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }]'>

                    @foreach (
                         \App\Models\Product::join('product_options', 'product_options.product_id','products.id')
                         ->join('categories','categories.id','products.category_id')
                         ->select(
                                    [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                                        'products.category_id',
                                        'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount',
                                    ]
                                )->where('products.status',1)->where('product_options.is_main',1)->where('categories.id',$a->id_categories)->orderBy('id','desc')->get()
                         as $b )
                   <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">{{$b->category->name}}</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="text-blue font-weight-bold">{{$b->name}}</a></h5>
                                        <div class="mb-2">
                                            <a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="d-block text-center"><img class="img-fluid" src="{{url('')}}{{$b->image}}" alt="Image Description"></a>
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
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            @endforeach
            @endif

            {{-- <div class="tab-pane fade pt-2" id="Apills-two-example1" role="tabpanel" aria-labelledby="Apills-two-example1-tab">
                <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                    data-slides-show="6"
                    data-slides-scroll="1"
                    data-responsive='[{
                      "breakpoint": 1400,
                      "settings": {
                        "slidesToShow": 5
                      }
                    }, {
                        "breakpoint": 1200,
                        "settings": {
                          "slidesToShow": 3
                        }
                    }, {
                      "breakpoint": 992,
                      "settings": {
                        "slidesToShow": 3
                      }
                    }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 554,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }]'>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End Tab Content -->

    </div>
    <!-- End Popular Products -->
    <div class="row">
        <div class="col-md-6 mb-3 mb-md-0">
            <a href="../shop/shop.html">
                <img class="img-fluid" src="{{asset('public_clien/img/690X150/img1.jpg')}}" alt="Image Description">
            </a>
        </div>
        <div class="col-md-6">
            <a href="../shop/shop.html">
                <img class="img-fluid" src="{{asset('public_clien/img/690X150/img2.jpg')}}" alt="Image Description">
            </a>
        </div>
    </div>

    <div class="mb-6 mt-5">
        <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
            <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Đồng hồ</h3>
            <ul class="w-100 w-lg-auto nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0" id="pills-tab-4" role="tablist">
               @php $active = "active"  ; @endphp
               @if($category_lock_in_table_product)
                @foreach ($category_lock_in_table_product as $a)
                    @if($active == "active")
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill active" id="{{$a->slug_categories}}-{{$a->id_categories}}" data-toggle="pill" href="#{{$a->slug_categories}}" role="tab" aria-controls="{{$a->slug_categories}}" aria-selected="true">{{$a->name_cate}}</a>
                        </li>
                    @php $active = "" ;  @endphp
                    @else
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="{{$a->slug_categories}}-{{$a->id_categories}}" data-toggle="pill" href="#{{$a->slug_categories}}" role="tab" aria-controls="{{$a->slug_categories}}" aria-selected="true">{{$a->name_cate}}</a>
                        </li>
                    @endif
                {{-- <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link rounded-pill" id="Apills-two-example1-tab" data-toggle="pill" href="#Apills-two-example1" role="tab" aria-controls="Apills-two-example1" aria-selected="false">All in One</a>
                </li> --}}
                @endforeach
                @endif
            </ul>
        </div>
        <!-- Tab Content -->
        <div class="tab-content2 u-slick__tab" id="Apills-tabContent">
            @php $active = "active"  ; @endphp
            @if($category_lock_in_table_product)
            @foreach ($category_lock_in_table_product as $a)
            @if($active == "active")
            <div class="tab-pane fade pt-2 show active" id="{{$a->slug_categories}}" role="tabpanel" aria-labelledby="{{$a->slug_categories}}-{{$a->id_categories}}">
                <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                    data-slides-show="6"
                    data-slides-scroll="1"
                    data-responsive='[{
                      "breakpoint": 1400,
                      "settings": {
                        "slidesToShow": 5
                      }
                    }, {
                        "breakpoint": 1200,
                        "settings": {
                          "slidesToShow": 3
                        }
                    }, {
                      "breakpoint": 992,
                      "settings": {
                        "slidesToShow": 3
                      }
                    }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 554,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }]'>


                   @foreach (
                         \App\Models\Product::join('product_options', 'product_options.product_id','products.id')
                         ->join('categories','categories.id','products.category_id')
                         ->select(
                                    [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                                        'products.category_id',
                                        'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount',
                                    ]
                                )->where('products.status',1)->where('product_options.is_main',1)->where('categories.id',$a->id_categories)->orderBy('id','desc')->get()
                         as $b )
                   <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">{{$b->category->name}}</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="text-blue font-weight-bold">{{$b->name}}</a></h5>
                                        <div class="mb-2">
                                            <a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="d-block text-center"><img class="img-fluid" src="{{url('')}}{{$b->image}}" alt="Image Description"></a>
                                        </div>
                                         <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none mr-2">{{number_format($b->price)}} <u>đ</u> </ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format(($b->price) + ($b->price * $b->sale/100))}}  <u>đ</u></del>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @php $active = "" ;  @endphp
            @else
            <div class="tab-pane fade pt-2 show" id="{{$a->slug_categories}}" role="tabpanel" aria-labelledby="{{$a->slug_categories}}-{{$a->id_categories}}">
                <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                    data-slides-show="6"
                    data-slides-scroll="1"
                    data-responsive='[{
                      "breakpoint": 1400,
                      "settings": {
                        "slidesToShow": 5
                      }
                    }, {
                        "breakpoint": 1200,
                        "settings": {
                          "slidesToShow": 3
                        }
                    }, {
                      "breakpoint": 992,
                      "settings": {
                        "slidesToShow": 3
                      }
                    }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 554,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }]'>

                    @foreach (
                         \App\Models\Product::join('product_options', 'product_options.product_id','products.id')
                         ->join('categories','categories.id','products.category_id')
                         ->select(
                                    [   'products.id','products.name','products.slug','products.title','products.short_description','products.description','products.status as status_product','products.highlight',
                                        'products.category_id',
                                        'product_options.option_name','product_options.option_value','product_options.image','product_options.price','product_options.sale','product_options.amount',
                                    ]
                                )->where('products.status',1)->where('product_options.is_main',1)->where('categories.id',$a->id_categories)->orderBy('id','desc')->get()
                         as $b )
                   <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">{{$b->category->name}}</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="text-blue font-weight-bold">{{$b->name}}</a></h5>
                                        <div class="mb-2">
                                            <a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="d-block text-center"><img class="img-fluid" src="{{url('')}}{{$b->image}}" alt="Image Description"></a>
                                        </div>
                                         <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none mr-2">{{number_format($b->price)}} <u>đ</u> </ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format(($b->price) + ($b->price * $b->sale/100))}}  <u>đ</u></del>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="{{route('product_detail',['slug'=>$b->slug,'id'=>$b->id])}}" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            @endforeach
            @endif

            {{-- <div class="tab-pane fade pt-2" id="Apills-two-example1" role="tabpanel" aria-labelledby="Apills-two-example1-tab">
                <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                    data-slides-show="6"
                    data-slides-scroll="1"
                    data-responsive='[{
                      "breakpoint": 1400,
                      "settings": {
                        "slidesToShow": 5
                      }
                    }, {
                        "breakpoint": 1200,
                        "settings": {
                          "slidesToShow": 3
                        }
                    }, {
                      "breakpoint": 992,
                      "settings": {
                        "slidesToShow": 3
                      }
                    }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 554,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }]'>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End Tab Content -->

    </div>



     <!-- Full banner -->
     <div class="mb-6">
        <a href="../shop/shop.html" class="d-block text-gray-90">
            <div class="" style="background-image: url({{asset('public_clien/img/1400X206/img1.jpg')}})">
                <div class="space-top-2-md p-4 pt-8 pt-lg-7 pt-xl-8 pb-lg-4 px-xl-14 px-lg-6">
                    <div class="flex-horizontal-center overflow-auto overflow-md-visble">
                        <h1 class="text-lh-38 font-size-30 font-weight-light mb-0 flex-shrink-0 flex-md-shrink-1">SHOP AND <strong>SAVE BIG</strong> ON HOTTEST TABLETS</h1>
                        <div class="flex-content-center ml-4 flex-shrink-0">
                            <div class="bg-primary rounded-lg px-6 py-2">
                                <em class="font-size-14 font-weight-light">STARTING AT</em>
                                <div class="font-size-30 font-weight-bold text-lh-1">
                                    <sup class="">$</sup>79<sup class="">99</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- End Full banner -->

     <!-- Television Entertainment -->
    <div class="mb-6">
        <div class="d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
            <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Phụ kiện</h3>
            <ul class="w-100 w-lg-auto nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0" id="pills-tab-4" role="tablist">
                {{-- <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link rounded-pill active" id="Ypills-one-example1-tab" data-toggle="pill" href="#Ypills-one-example1" role="tab" aria-controls="Ypills-one-example1" aria-selected="true">Top 20</a>
                </li> --}}
            </ul>
        </div>
        <!-- Tab Content -->
        <div class="tab-content u-slick__tab" id="Ypills-tabContent">
            <div class="tab-pane fade pt-2 show active" id="Ypills-one-example1" role="tabpanel" aria-labelledby="Ypills-one-example1-tab">
                <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                    data-slides-show="4"
                    data-slides-scroll="1"
                    data-responsive='[{
                      "breakpoint": 1400,
                      "settings": {
                        "slidesToShow": 3
                      }
                    }, {
                        "breakpoint": 1200,
                        "settings": {
                          "slidesToShow": 3
                        }
                    }, {
                      "breakpoint": 992,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 2
                      }
                    }, {
                      "breakpoint": 554,
                      "settings": {
                        "slidesToShow": 1
                      }
                    }]'>
                    @if($phu_kien)
                    @foreach($phu_kien as $a)
                    <div class="js-slide products-group">
                        <div class="product-item product-item__card">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-5 product-media-left">
                                        <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src="{{url('')}}{{$a->image}}" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="#" class="font-size-12 text-gray-5" tabindex="0">{{$a->category->name}}</a></div>
                                            <h5 class="product-item__title"><a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="text-blue font-weight-bold" tabindex="0">{{$a->name}}</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100" style="color:red;">{{number_format($a->price)}} <u>đ</u> </div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="fas fa-eye"></i></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- End Tab Content -->
    </div>
    <!-- End Television Entertainment -->
@endsection
@section('js')
<script>
    var fut = new Date("Aug 20,2021 00:00:00").getTime();
    setInterval(function(){
            var now = new Date().getTime();
            var D =fut - now ;
            var days = Math.floor(D/(1000*60*60*24)) ;
            var hours = Math.floor(D/(1000*60*60)) ;
            var mins = Math.floor(D/(1000*60)) ;
            var secs = Math.floor(D/(1000)) ;

            hours %= 24 ;
            mins %= 60 ;
            secs %= 60 ;

            document.getElementById('hours').innerText = hours ;
            document.getElementById('mins').innerText = mins ;
            document.getElementById('secs').innerText = secs ;
    },1000)
</script>
@endsection
