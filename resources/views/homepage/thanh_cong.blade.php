@extends('master_layout.home_master')
@section('title','Đặt hàng thành công')
@section('content_clien')
    <div class="container text-center">
        <div class="col-md-6 offset-3 card-body mt-5" style="boder:2px solid red">
            <div class="row d-flex justify-content-center align-items-center">
                <img src="{{asset('icon.png')}}" alt="" width="100px">
            </div>

            <div class="row d-flex justify-content-center mt-3">
                <p>Mã đơn hàng của quý khách là : INVIO{{$id_invioces}}</p>
            </div>
            <div class="row d-flex justify-content-center">
                <p>Hãy check email để xác nhận đơn hàng nha !</p>
            </div>

            <div class="row d-flex justify-content-center mt-3">
                <a href="{{route('home')}}" class="btn btn-primary text-white">Tiếp tục mua hàng</a>
            </div>
        </div>
    </div>
@endsection
@section('css')
<style>
    .card-body{
        border:3px solid rgb(214, 209, 209) ;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius:7px;
    }
</style>
@endsection
