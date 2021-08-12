@extends('master_layout.home_master')
@section('title', 'Thanh toán')
@section('content_clien')
<main id="content" role="main" class="checkout-page">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Checkout
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-5">
            <h1 class="text-center">Thanh toán</h1>
        </div>
        <!-- Accordion -->
        <div id="shopCartAccordion" class="accordion rounded mb-5">
            <!-- Card -->
            <div class="card border-0">
                <div id="shopCartHeadingOne" class="alert alert-primary mb-0" role="alert">
                    Bạn đã có tài khoản chưa ? <a href="#" class="alert-link collapsed" data-toggle="collapse"
                        data-target="#shopCartOne" aria-expanded="false" aria-controls="shopCartOne">Click vào đây để
                        đăng nhập nào</a>
                </div>
                <div id="shopCartOne" class="border border-top-0 collapse" aria-labelledby="shopCartHeadingOne"
                    data-parent="#shopCartAccordion" style="">
                    <!-- Form -->
                    <form class="js-validate p-5" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrEmailExample3">Email</label>
                                    <input type="email" class="form-control" name="email" id="signinSrEmailExample3"
                                        placeholder="Email address" aria-label="Email address" required=""
                                        data-msg="Please enter a valid email address." data-error-class="u-has-error"
                                        data-success-class="u-has-success">
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrPasswordExample2">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password"
                                        id="signinSrPasswordExample2" placeholder="********" aria-label="********"
                                        required="" data-msg="Your password is invalid. Please try again."
                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Form Group -->
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="js-form-message mb-3">
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rememberCheckbox"
                                    name="rememberCheckbox" required="" data-error-class="u-has-error"
                                    data-success-class="u-has-success">
                                <label class="custom-control-label form-label" for="rememberCheckbox">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <!-- End Checkbox -->

                        <!-- Button -->
                        <div class="mb-1">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary-dark-w px-5">Đăng nhập</button>
                            </div>
                        </div>
                        <!-- End Button -->
                    </form>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Accordion -->

        <!-- Accordion -->
        <div id="shopCartAccordion1" class="accordion rounded mb-6">
            <!-- Card -->
            <div class="card border-0">
                <div id="shopCartHeadingTwo" class="alert alert-primary mb-0" role="alert">
                    bạn có phiếu giảm giá không ? <a href="#" class="alert-link collapsed" data-toggle="collapse"
                        data-target="#shopCartTwo" aria-expanded="false" aria-controls="shopCartTwo">Click để nhập mã
                        giảm giá nào</a>
                </div>
                <div id="shopCartTwo" class="border border-top-0 collapse" aria-labelledby="shopCartHeadingTwo"
                    data-parent="#shopCartAccordion1" style="">
                    <form class="js-validate p-5" novalidate="novalidate">
                        <p class="w-100 text-gray-90 font-weight-bold">Mã giảm giá</p>
                        <div class="input-group input-group-pill max-width-660-xl">
                            <input type="text" class="form-control" name="name" placeholder="Mã giảm giá"
                                aria-label="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-block btn-dark font-weight-normal btn-pill px-4">
                                    <i class="fas fa-tags d-md-none"></i>
                                    <span class="d-none d-md-inline">Xác nhận</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Accordion -->
        <div class="row">
            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="pl-lg-3 ">
                    <div class="bg-gray-1 rounded-lg">
                        <!-- Order Summary -->
                        <div class="p-4 mb-4 checkout-table">
                            <!-- Title -->
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title mb-0 pb-2 font-size-25">Sản phẩm của bạn</h3>
                            </div>
                            <!-- End Title -->

                            <!-- Product Content -->
                            @if (isset($cart))
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-total">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $a)
                                            <tr class="cart_item">
                                                <td>{{ $a['name'] }}&nbsp;<strong class="product-quantity">×
                                                        {{ $a['quantity'] }}</strong></td>
                                                <td>{{ number_format($a['price']) . 'đ' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        @php
                                            $number = 0;
                                            $total = 0;
                                            if (!empty(Session::get('cart'))) {
                                                foreach (Session::get('cart') as $a) {
                                                    $number += $a['quantity'];
                                                    $total += $a['price'] * $a['quantity'];
                                                }
                                            }
                                        @endphp
                                        <tr>
                                            <th>Total</th>
                                            <td><strong class="text-danger">
                                                    @if (isset($total))
                                                        {{ number_format($total) . 'đ' }} @endif
                                                </strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            @endif
                            <!-- End Product Content -->
                            <div class="border-top border-width-3 border-color-1 pt-3 mb-3">
                                <!-- Basics Accordion -->
                                <div id="basicsAccordion1">
                                    <!-- Card -->
                                    <div class="border-bottom border-color-1 border-dotted-bottom">
                                        <div class="p-3" id="basicsHeadingOne">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="stylishRadio1"
                                                    name="stylishRadio" checked="">
                                                <label class="custom-control-label form-label" for="stylishRadio1"
                                                    data-toggle="collapse" data-target="#basicsCollapseOnee"
                                                    aria-expanded="true" aria-controls="basicsCollapseOnee">
                                                    Trả tiền mặt khi nhận hàng
                                                </label>
                                            </div>
                                        </div>
                                        <div id="basicsCollapseOnee"
                                            class="collapse show border-top border-color-1 border-dotted-top bg-dark-lighter"
                                            aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion1">
                                            <div class="p-4">
                                                Khách hàng vui lòng thanh toán đơn hàng cho nhân viên giáo hàng khi
                                                đã kiểm tra hàng và kí xác nhận .
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->

                                    <!-- Card -->
                                    <div class="border-bottom border-color-1 border-dotted-bottom">
                                        <div class="p-3" id="basicsHeadingFour">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="FourstylishRadio1"
                                                    name="stylishRadio">
                                                <label class="custom-control-label form-label" for="FourstylishRadio1"
                                                    data-toggle="collapse" data-target="#basicsCollapseFour"
                                                    aria-expanded="false" aria-controls="basicsCollapseFour">
                                                    Thanh toán online
                                                </label>
                                            </div>
                                        </div>
                                        <div id="basicsCollapseFour"
                                            class="collapse border-top border-color-1 border-dotted-top bg-dark-lighter"
                                            aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion1">
                                            <div class="p-4">
                                                <p>Cách 1 : Chuyển khoản vào ngân hàng BIDV - Hoàng Quốc Bảo Việt
                                                    (stk : 46510000457516 .)</p>
                                                <p>Cách 2 : Sau khi đặt hàng thành công vui lòng check email và
                                                    quyét mã thanh toán .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-2">
                                        <a href="{{ route('card') }}">
                                            <p>Quay lại giỏ hàng  &ensp;<i class="fas fa-undo"></i></p>
                                        </a>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Basics Accordion -->
                            </div>
                        </div>
                        <!-- End Order Summary -->
                    </div>
                </div>
            </div>

            <div class="col-lg-7 order-lg-1">
                <div class="pb-7 mb-7">
                    <!-- Title -->
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Hoá đơn chi tiết</h3>
                    </div>
                    <form action="{{route('order')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Họ và tên <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="Họ và tên">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <!-- End Input -->
                            </div>
                            <!-- End Billing Form -->
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                 <!-- Input -->
                                 <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Thành phố <span class="text-danger">*</span>
                                    </label>
                                    <select id="address1" name="address1" placeholder="Tỉnh/Thành phố *" data-required="1" class="form-control">
                                          <option value="">Tỉnh/Thành phố *</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                            <option value="Bắc Giang">Bắc Giang</option>
                                            <option value="Bắc Kạn">Bắc Kạn</option>
                                            <option value="Bạc Liêu">Bạc Liêu</option>
                                            <option value="Bắc Ninh">Bắc Ninh</option>
                                            <option value="Bến Tre">Bến Tre</option>
                                            <option value="Bình Định">Bình Định</option>
                                            <option value="Bình Phước">Bình Phước</option>
                                            <option value="Bình Thuận">Bình Thuận</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Cần Thơ">Cần Thơ</option>
                                            <option value="Cao Bằng">Cao Bằng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Đắk Lắk">Đắk Lắk</option>
                                            <option value="Đắk Nông">Đắk Nông</option>
                                            <option value="Điện Biên">Điện Biên</option>
                                            <option value="Đồng Tháp">Đồng Tháp</option>
                                            <option value="Gia Lai">Gia Lai</option>
                                            <option value="Hà Giang">Hà Giang</option>
                                            <option value="Hà Na">Hà Nam</option>
                                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                                            <option value="Hải Dương">Hải Dương</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Hậu Giang">Hậu Giang</option>
                                            <option value="Hoà Bình">Hoà Bình</option>
                                            <option value="Hưng Yên">Hưng Yên</option>
                                            <option value="Khánh Hòa">Khánh Hòa</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Kon Tum">Kon Tum</option>
                                            <option value="Lai Châu">Lai Châu</option>
                                            <option value="Lâm Đồng">Lâm Đồng</option>
                                            <option value="Lạng Sơn">Lạng Sơn</option>
                                            <option value="Lào Cai">Lào Cai</option>
                                            <option value="Long An">Long An</option>
                                            <option value="Nam Định">Nam Định</option>
                                            <option value="Nghệ An">Nghệ An</option>
                                            <option value="Ninh Bình">Ninh Bình</option>
                                            <option value="Ninh Thuậ">Ninh Thuận</option>
                                            <option value="Phú Thọ">Phú Thọ</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Quảng Bình">Quảng Bình</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Quảng Trị">Quảng Trị</option>
                                            <option value="Sóc Trăng">Sóc Trăng</option>
                                            <option value="Sơn La">Sơn La</option>
                                            <option value="Tây Ninh">Tây Ninh</option>
                                            <option value="Thái Bìn">Thái Bình</option>
                                            <option value="Thái Nguyên">Thái Nguyên</option>
                                            <option value="Thanh Hóa">Thanh Hóa</option>
                                            <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                            <option value="Tiền Giang">Tiền Giang</option>
                                            <option value="Trà Vinh">Trà Vinh</option>
                                            <option value="Tuyên Quan">Tuyên Quang</option>
                                            <option value="Vĩnh Lon">Vĩnh Long</option>
                                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                    </select>
                                    @if ($errors->has('address1'))
                                        <span class="text-danger">{{ $errors->first('address1') }}</span>
                                    @endif
                                </div>
                                <!-- End Input -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                 <!-- Input -->
                                 <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Địa chỉ <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="address2" placeholder="Đại chỉ , số nhà , tên đường , phường / xã">
                                    @if ($errors->has('address2'))
                                        <span class="text-danger">{{ $errors->first('address2') }}</span>
                                    @endif
                                </div>
                                <!-- End Input -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <!-- End Input -->
                            </div>
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Số điện thoại <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <!-- End Input -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title mb-0 pb-2 font-size-25">Nội dung ghi chú</h3>
                            </div>
                            <div class="input-group">
                                <textarea class="form-control p-5" rows="4" name="content"
                                    placeholder="Nội dung ghi chú cho đơn hàng"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <input type="hidden" name="total_price" value="@if (isset($total)) {{$total}} @endif">
                            @if(Auth::check())
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            @else
                                <input type="hidden" name="user_id" value="">
                            @endif
                        </div>
                        <div class="row mt-5">
                           <button type="submit" class="btn text-white mr-3" style="background-color:#fed700;width:100px;">Đăt hàng</button>
                           <a href="{{route('home')}}" class="btn text-white" style="background-color:#fed700;width:100px;">Huỷ</a>
                        </div>
                    </form>
                    <!-- End Input -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
