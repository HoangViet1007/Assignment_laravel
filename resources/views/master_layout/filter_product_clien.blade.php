<div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
    <form action="{{route('product_clien')}}" method="GET" enctype="multipart/form" id="filter_attribute_option">
    <div class="mb-6">
        <div class="border-bottom border-color-1 mb-5">
            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
        </div>
        @if (Route::currentRouteName() != 'product_clien_cate')
            <div class="border-bottom pb-4 mb-4">
                <h4 class="font-size-14 mb-3 font-weight-bold">Danh mục sản phẩm</h4>
                <!-- Checkboxes -->
                @if ($category_in_table_product)
                    @foreach ($category_in_table_product as $a)
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{ $a->slug_categories }}" name="category_id" class="category_id" value="{{ $a->id_categories }}">
                                <label class="custom-control-label"
                                    for="{{ $a->slug_categories }}">{{ $a->name_cate }}<span
                                        class="text-gray-25 font-size-12 font-weight-normal">
                                        ({{ \App\Models\Product::where('category_id', $a->id_categories)->count() }})</span>
                                </label>
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- End Checkboxes -->
            </div>
        @endif
        <div class="border-bottom pb-4 mb-4">
            <h4 class="font-size-14 mb-3 font-weight-bold">Thuộc tính</h4>

            <!-- Checkboxes -->
            @if ($attributes_product)
                @foreach ($attributes_product as $a)
                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="{{ $a->attribute_id }}" name="attribute_id" value="{{ $a->attribute_id }}">
                            <label class="custom-control-label" for="{{ $a->attribute_id }}">{{ $a->name_att }} <span
                                    class="text-gray-25 font-size-12 font-weight-normal">
                                    ({{ \App\Models\ProductAttribute::where('attribute_id', $a->attribute_id)->count() }})</span>
                            </label>

                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="range-slider">

        </div>
    </div>
    </form>
    <div class="mb-8">
        <div class="border-bottom border-color-1 mb-5">
            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Sản phẩm gần đây</h3>
        </div>
        <ul class="list-unstyled">
            @if ($product_recent)
                @foreach ($product_recent as $a)
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-auto">
                                <a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}" class="d-block width-75">
                                    <img class="img-fluid" src="{{ url('') }}{{ $a->image }}"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="{{route('product_detail',['slug'=>$a->slug,'id'=>$a->id])}}">{{ $a->name }}</a></h3>
                                {{-- <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="far fa-star text-muted"></small>
                        </div> --}}
                                <div class="font-weight-bold">
                                    <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                    <ins class="font-size-15 text-red text-decoration-none d-block">{{ number_format($a->price) }}<u>đ</u>
                                    </ins>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>

