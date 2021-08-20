@extends('master_layout.home_master')
@section('title', 'Sản phẩm chi tiết')
@section('content_clien')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center align-content-center">
            <div class="col-md-6 text-center">
                <div class="card card-primary text-center" style="padding: 40px 20px;border:3px solid #fed700;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                    <h3>Xác thực địa chỉ email</h3>
                    <div class="row d-flex justify-content-center align-content-center mb-5">
                        <img src="{{ asset('email.png') }}" alt="email" width="100px">
                    </div>
                    <p>Để đảm bảo cho yếu tố bảo mật , vui lòng quý khách truy cập email của mình và nhấn xác thực email thông qua thông tin chúng tôi đã gửi </p>
                    <p> Trân trọng cảm ơn !</p>
                </div>
            </div>
        </div>
    </div>
@endsection
