@extends('master_layout.home_master')
@section('title', 'Sản phẩm chi tiết')
@section('content_clien')
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="{{ route('product_clien_cate', ['slug' => $product->category->slug, 'id' => $product->category->id]) }}">{{ $product->category->name }}</a>
                            </li>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                                {{ $product->name_product }}</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="container">
            <!-- Single Product Body -->
            <div class="mb-xl-14 mb-6">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <div class="image_main">
                            <img src="{{ url('') }}{{ $product->image }}" alt="" width="100%"
                                class="image_main_detail" id="image_main_detail">
                        </div>

                        <div class="image_thumbail" style="margin-left:-30px;">
                            <ul class="d-flex justify-content-center align-items-center">
                                @if ($image_option->count() > 0)
                                    @foreach ($image_option as $a)
                                        <li style="list-style:none;margin:10px;border:1px solid #eaeaea;"><img
                                                src="{{ url('') }}{{ $a->image }}" alt="" width="70px"
                                                class="image_thumbail_detail" id="{{ $a->id }}"
                                                onclick="changeImage('{{ $a->id }}')"></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 mb-md-6 mb-lg-0">
                        <div class="mb-2">
                            <div class="border-bottom mb-3 pb-md-1 pb-3">
                                <a href="#"
                                    class="font-size-12 text-gray-5 mb-2 d-inline-block">{{ $product->category->name }}</a>
                                <h2 class="font-size-25 text-lh-1dot2 font-weight-bold"> {{ $product->name_product }}</li>
                                </h2>
                                <div class="mb-2">
                                    <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                        <div class="text-warning mr-2">
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="far fa-star text-muted"></small>
                                        </div>
                                        <span class="text-secondary font-size-13">({{$product->product_reviews->count()}} customer reviews)</span>
                                    </a>
                                </div>

                                <form action="" id="add_to_cart">
                                    <div class="border-top border-bottom py-3 mb-2">
                                        @if($attribute_value_main)
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h6 class="font-size-14 mb-0">Phiên bản</h6>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{-- lay za mac dinh  --}}
                                                    <div class="col-md-4">
                                                        <a href="{{route('product_detail',['slug'=>$product->slug_product,'id'=>$product->id_product])}}">
                                                            <div class="item-attribute_tt active_color">
                                                                <span>{{$attribute_value_main->name_attributes}}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    {{-- lay za cac con --}}
                                                    @if($attribute_value->count() > 0)
                                                    @foreach($attribute_value as $a)
                                                    <div class="col-md-4">
                                                        <a href="{{route('product_detail',['slug'=>$a->slug_product,'id'=>$a->id_product])}}">
                                                            <div class="item-attribute_tt">
                                                                <span>{{$a->name_attrubutes}}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                    {{-- lay za cha  --}}
                                                    @endif
                                                    @if($attribute_value_cha)
                                                    <div class="col-md-4">
                                                        <a href="{{route('product_detail',['slug'=>$attribute_value_cha->slug_product,'id'=>$attribute_value_cha->id_product])}}">
                                                            <div class="item-attribute_tt">
                                                                <span>{{$attribute_value_cha->name_attributes}}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endif

                                                    @if($product_ngang)
                                                    @foreach($product_ngang as $a)
                                                       @php  $product_detail = \App\Models\Product::where('products.id',$a->id_product)
                                                       ->join('product_attributes', 'product_attributes.product_id','products.id')
                                                       ->join('attributes','product_attributes.attribute_id','attributes.id')
                                                       ->select('attributes.id as id_attrubutes','attributes.name as name_attributes','products.id as id_product','products.slug as slug_product')->first();   @endphp
                                                    @endforeach
                                                    @if(isset($product_detail))
                                                    <div class="col-md-4">
                                                        <a href="{{route('product_detail',['slug'=>$product_detail->slug_product,'id'=>$product_detail->id_product])}}">
                                                            <div class="item-attribute_tt">
                                                                <span>{{$product_detail->name_attributes}}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endif
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="border-top border-bottom py-3 mb-2">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h6 class="font-size-14 mb-0">Màu sắc</h6>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    @if ($image_option->count() > 0)
                                                        @foreach ($image_option as $a)
                                                            <div class="col-md-4">
                                                                <div data-image="{{url('')}}{{$a->image}}" data-sale="{{$a->sale}}" data-price="{{$a->price}}" data-id="{{$a->id}}" class="item-attribute_cl action_color datacolor @if ($a->id == $product->id_option) {{ 'active_color' }} @endif" id="{{$a->id + 1000000}}">
                                                                    <span>{{ $a->option_name }}</span>
                                                                    <span
                                                                        class="item-price">{{ number_format($a->price) }}</span>
                                                                    <u style="color:red;">đ</u></span>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-baseline">
                                            <ins class="font-size-36 text-decoration-none text-danger" id="price_product_detal">{{ number_format($product->price) }}
                                                <u>đ</u> </ins>
                                            <del class="font-size-20 ml-2 text-gray-6" id="price_product_0_sale">{{ number_format($product->price + ($product->price * $product->sale) / 100) }}
                                                <u>đ</u> </del>
                                        </div>
                                    </div>
                                    <div class="d-md-flex align-items-end mb-3">
                                        <div class="max-width-150 mb-4 mb-md-0">
                                            <h6 class="font-size-14">Quantity</h6>
                                            <!-- Quantity -->
                                            <div class="border rounded-pill py-2 px-3 border-color-1">
                                                <div class="js-quantity row align-items-center">
                                                    <div class="col">
                                                        <input
                                                            class="js-result form-control h-auto border-0 rounded p-0 shadow-none"
                                                            type="text" value="1" name="quantity" id="quantity">
                                                    </div>
                                                    <div class="col-auto pr-1">
                                                        <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" id="tru"
                                                            href="javascript:;">
                                                            <small class="fas fa-minus btn-icon__inner"></small>
                                                        </a>
                                                        <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" id="cong"
                                                            href="javascript:;">
                                                            <small class="fas fa-plus btn-icon__inner"></small>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto pr-1" style="display:none;">
                                                         <input type="text" name="product_id" id="product_id" value="{{$product->id_product}}" readonly>
                                                         <input type="text" name="option_id" id="option_id" value="{{$product->id_option}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Quantity -->
                                        </div>
                                        <div class="ml-md-3">
                                            <button type="submit" class="btn px-5 btn-primary-dark transition-3d-hover"><i class="ec ec-add-to-cart mr-2 font-size-20" id="add_product_in_card"></i> Add to Cart</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product Body -->
                <!-- Single Product Tab -->
                <div class="mb-8">
                    <div class="position-relative position-md-static px-md-6">
                        <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0"
                            id="pills-tab-8" role="tablist">
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link" id="Jpills-two-example1-tab" data-toggle="pill"
                                    href="#Jpills-two-example1" role="tab" aria-controls="Jpills-two-example1"
                                    aria-selected="false">Nội dung</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                <a class="nav-link active" id="Jpills-four-example1-tab" data-toggle="pill"
                                    href="#Jpills-four-example1" role="tab" aria-controls="Jpills-four-example1"
                                    aria-selected="true">Đánh giá</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab Content -->
                    <div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
                        <div class="tab-content" id="Jpills-tabContent">
                            <div class="tab-pane fade" id="Jpills-two-example1" role="tabpanel"
                                aria-labelledby="Jpills-two-example1-tab">
                                <p> {!! $product->description !!}</p>
                            </div>
                            <div class="tab-pane fade active show" id="Jpills-four-example1" role="tabpanel"
                                aria-labelledby="Jpills-four-example1-tab">
                                <div class="row mb-8">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h3 class="font-size-18 mb-6">Based on {{$product->product_reviews->count()}} reviews</h3>
                                            <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">4.3</h2>
                                            <div class="text-lh-1">overall</div>
                                        </div>

                                        <!-- Ratings -->
                                        <ul class="list-unstyled">
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-gray-90">205</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 53%;"
                                                                aria-valuenow="53" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-gray-90">55</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%;"
                                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-gray-90">23</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-muted">0</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-1">
                                                <a class="row align-items-center mx-gutters-2 font-size-1"
                                                    href="javascript:;">
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="text-warning text-ls-n2 font-size-16"
                                                            style="width: 80px;">
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-2 mb-md-0">
                                                        <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 1%;"
                                                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto text-right">
                                                        <span class="text-gray-90">4</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End Ratings -->
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <h2 class="font-size-18 mb-5 font-weight-bold">Đánh giá sản phẩm</h2>
                                        @if(session('success_product_review'))
                                        <p class="text-danger">{{session('success_product_review')}}</p>
                                        @endif
                                        <!-- Form -->
                                        <form action="{{route('product_review2.store2')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row align-items-center mb-4">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="rating" class="form-label mb-0">Đánh giá</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <div id="rating" style="margin-top: -20px;">
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>

                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="orm-group mb-3 row">
                                                <div class="col-md-4 col-lg-3">
                                                    <label class="form-label">Nội dung</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <textarea class="form-control" rows="5" id="descriptionTextarea" name="description" required></textarea>
                                                </div>
                                            </div>
                                            <div class="js-form-message form-group mb-3 row">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="inputName" class="form-label" name="name" required>Họ tên<span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="text" class="form-control" name="name" id="inputName"
                                                        aria-label="Alex Hecker" required=""
                                                        data-msg="Please enter your name." data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                            <div class="js-form-message form-group mb-3 row">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="emailAddress" class="form-label" required>Email <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="hidden" class="form-control" name="product_id" value="{{$product->id_product}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="offset-md-4 offset-lg-3 col-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary-dark btn-wide transition-3d-hover">Gửi</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                </div>
                                <!-- Review -->
                                {{-- in danh gia --}}
                                @if($reviews)
                                @foreach ($reviews as $review)
                                <div class="border-bottom border-color-1 pb-4 mb-4">
                                    <!-- End Review Rating -->
                                    <!-- Reviewer -->
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img alt="" src="https://secure.gravatar.com/avatar/34b22e014026fb6f7016f0a56f976ab8?s=60&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/34b22e014026fb6f7016f0a56f976ab8?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">                                            </div>
                                                <div class="col-md-11" style="margin-left:-20px;">
                                                    <div class="row">
                                                        <strong>{{$review->name}}&ensp;&ensp;&ensp;</strong>{{$review->created_at->format('M-d-Y')}}
                                                    </div>
                                                    <div class="row">
                                                        <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                @if($review->rating == 5)
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                @elseif($review->rating ==4)
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                @elseif($review->rating ==3)
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                @elseif($review->rating ==2)
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                @elseif($review->rating ==1)
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                @else
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p class="text-gray-90">{{$review->description}}</p>
                                            </div>

                                    {{-- <div class="row offset-3" style="border-right: 5px solid red;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{asset('storage/files/1/websetting/logo5.png')}}" alt="" style="width:70px;height:40px;border: 3px solid #e4e1e3;background: #ebe9eb;">
                                                </div>
                                                <div class="col-md-1 ml-3">
                                                    <p style="font-weight:bold;">Electro </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="btn badge badge-danger">Quản trị viên</span>
                                                </div>
                                            </div>
                                            <div class="row ml-1">
                                                <p>tao xin may day</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Review Rating -->
                                    <!-- End Reviewer -->
                                </div>
                                @endforeach
                                @endif
                                <!-- End Review -->
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Single Product Tab -->
                <!-- Related products -->
                <div class="mb-6">
                    <div
                        class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Sản phẩm liên quan</h3>
                    </div>
                    <ul class="row list-unstyled products-group no-gutters">
                        @if ($product_lq)
                            @foreach ($product_lq as $a)
                                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="product-categories-7-column-full-width.html"
                                                        class="font-size-12 text-gray-5">{{ $a->category->name }}</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ route('product_detail', ['slug' => $a->slug_product, 'id' => $a->id_product]) }}"
                                                        class="text-blue font-weight-bold">{{ $a->name_product }}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('product_detail', ['slug' => $a->slug_product, 'id' => $a->id_product]) }}"
                                                        class="d-block text-center"><img class="img-fluid"
                                                            src="{{ url('') }}{{ $a->image }}"
                                                            alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div
                                                        class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                        <ins class="font-size-17 text-red text-decoration-none mr-2">{{ number_format($a->price) }}
                                                            VND</ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{ number_format($a->price + ($a->price * $a->sale) / 100) }}
                                                            <u>đ</u></del>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
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
                        @endif
                    </ul>
                </div>
                <!-- End Related products -->
            </div>

    </main>
@endsection
@section('css')
    <style>
        .item-attribute_tt {
            color: #000 !important;
            line-height: 1.5;
            background: #fff0 !important;
            border: 1px solid #ddd;
            -moz-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .15);
            -webkit-box-shadow: 0 2px 3px 0 rgb(0 0 0 / 15%);
            box-shadow: 0 2px 3px 0 rgb(0 0 0 / 15%);
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            width: 80%;
            float: left;
            text-indent: 0;
            height: auto;
            text-align: center;
            padding: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            font-weight: 500;
            font-size: 12px;
            text-align: center;
        }
        .item-attribute_cl {
            color: #000 !important;
            line-height: 1.5;
            background: #fff0 !important;
            border: 1px solid #ddd;
            -moz-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .15);
            -webkit-box-shadow: 0 2px 3px 0 rgb(0 0 0 / 15%);
            box-shadow: 0 2px 3px 0 rgb(0 0 0 / 15%);
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            width: 80%;
            float: left;
            text-indent: 0;
            height: auto;
            text-align: center;
            padding: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            font-weight: 500;
            font-size: 12px;
            text-align: center;
        }

        .item-price {
            color: red;
        }

        .active_color {
            border: 2px solid #fed700;
        }

        li {
            cursor: pointer;
        }
        img.avatar {
        float: left;
        position: absolute;
        top: 0;
        left: 0;
        padding: 3px;
        width: 44px;
        height: auto;
        background: #ebe9eb;
        border: 1px solid #e4e1e3;
        margin: 0;
        box-shadow: none;
    }
                /* star rating */
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        /*reset css*/
        div,
        label {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 20px;
        }

        h1 {
            font-size: 1.5em;
            margin: 10px;
        }

        /****** Style Star Rating Widget *****/
        #rating {
            border: none;
            float: left;
        }

        #rating>input {
            display: none;
        }


        #rating>label:before {
            margin: 5px;
            font-size: 2em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\2605";
        }

        /*1 ngôi sao*/
        #rating>.half:before {
            content: "\f089";
            position: absolute;
        }

        /*0.5 ngôi sao*/
        #rating>label {
            color: #ddd;
            float: right;
        }


        #rating>input:checked~label,
        #rating:not(:checked)>label:hover,
        #rating:not(:checked)>label:hover~label {
            color: #ffc108;
        }


        #rating>input:checked+label:hover,
        #rating>input:checked~label:hover,
        #rating>label:hover~input:checked~label,
        #rating>input:checked~label:hover~label {
            color: #FFED85;
        }

    </style>
@endsection
@section('js')
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function changeImage(id) {
            var img_thumbail = document.getElementById(id);
            let src = img_thumbail.getAttribute('src');
            document.getElementById('image_main_detail').setAttribute('src', src);
            let li_image_thumbail = img_thumbail.parentElement;

            // li_image_thumbail.style.border = "2px solid #fed700";

            let list = document.getElementsByClassName('image_thumbail_detail');

            for (let i = 0; i < list.length; i++) {
                list[i].style.border = 'none';
            }
            img_thumbail.style.border = '2px solid #fed700';

        }

        function getUrlImage(event) {
            event.preventDefault();
            var image = $(this).data("image");
            var price = $(this).data("price");
            var sale = $(this).data("sale");
            var id = $(this).data('id') ;
            var id2 = id + 1000000 ;

            //set value input gio hang
            document.getElementById("option_id").value = id ;

            document.getElementById('image_main_detail').setAttribute('src', image);

            // boder o image thumbail
            let list = document.getElementsByClassName('item-attribute_cl');

            for (let i = 0; i < list.length; i++) {
                list[i].classList.remove("active_color");
                list[i].style.border = "none";
            }
            document.getElementById(id2).style.border = "2px solid #fed700";

            // tinhs za tien ko sale
            var price_0_sale = price + price*sale/100 ;

            price = price.toLocaleString('vi', {style : 'currency', currency : 'VND'});
            price_0_sale = price_0_sale.toLocaleString('vi', {style : 'currency', currency : 'VND'});
            document.getElementById('price_product_detal').innerText = price ;
            document.getElementById('price_product_0_sale').innerText = price_0_sale ;


        }

    $(function() {
        $(document).on('click', '.action_color', getUrlImage);
    })

    // cong tru qyantity
    $(document).ready(function(){
        var tru = $('#tru') ;
        var cong = $('#cong') ;
        var quantity = $('#quantity').val() ;
        var value = 1 ;
        tru.on('click', function(e){
           if($('#quantity').val() <= 1){
                value = 1 ;
                $('#quantity').val(value) ;
           }else{
                value -= 1 ;
                $('#quantity').val(value) ;
           }
        })
        cong.on('click', function(e){
               value += 1 ;
               $('#quantity').val(value);
        })
    })

    $('#add_to_cart').on('submit',function(e){
        e.preventDefault() ;
        let url = '{{ route('add_card') }}' ;

        var quantity = $('#quantity').val();
        var product_id = $('#product_id').val();
        var option_id = $('#option_id').val();
        let _token = $('input[name="_token"]').val();

        $.post(url, { quantity, option_id, product_id, _token: _token})
        .done(function( response ) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                // title: 'Thêm sản phẩm vào giỏ hàng thành công !,
                showConfirmButton: false,
                width:150,
                height:30,
                timer: 1500
            })
            item = response.split("-");
            var quantity_response_in_controller = item[0];
            var total_response_in_controller = item[1];
            $('#quantitys').text(quantity_response_in_controller) ;
            $('#totals').text(total_response_in_controller) ;
            $(".ul_list_cart").load('{{route('home')}} .ul_list_cart');
            $(".price_in_cart").load('{{route('home')}} .price_in_cart');
            console.log(response);
        });


    })

    </script>
@endsection
