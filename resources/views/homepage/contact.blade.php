@extends('master_layout.home_master')
@section('title','Liên hệ')
@section('content_clien')
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Contact-v1</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->


    <div class="container">
        <div class="mb-5">
            <h1 class="text-center">Liên hệ</h1>
        </div>
        <div class="row mb-10">
            <div class="col-lg-7 col-xl-6 mb-8 mb-lg-0">
                <div class="mr-xl-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Liên hệ với chúng tôi</h3>
                    </div>

                    {{-- form gửi liên hệ  --}}
                    <form class="js-validate" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Họ và tên
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="" aria-label="" required="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Tiêu đề
                                    </label>
                                    <input type="text" class="form-control" name="title" placeholder="" aria-label="" data-msg="Please enter subject." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>
                            <div class="col-md-12">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Nội dung
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder="" name="content"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary-dark-w px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-xl-6">
                <div class="mb-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835252972956!2d144.95592398991224!3d-37.817327693787625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1575470633967!5m2!1sen!2sin" width="100%" height="288" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title mb-0 pb-2 font-size-25">Địa chỉ</h3>
                </div>
                <address class="mb-6 text-lh-23">
                    {{$websetting->address}}
                    <div class="">Support : {{$websetting->phone}}</div>
                    <div class="">Email: <a class="text-blue text-decoration-on" href="mailto:contact@yourstore.com">{{$websetting->email}}</a></div>
                </address>
                <h5 class="font-size-14 font-weight-bold mb-3">Giờ hoạt động</h5>
                <div class="">Từ Thứ 2 - đến Chủ nhật: 9am-9pm</div>
                <div class="mb-6">Giờ : 9 am - 11 pm</div>
            </div>
        </div>
    </div>
</main>
@endsection