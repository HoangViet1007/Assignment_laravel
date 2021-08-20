@extends('master_layout.home_master')
@section('title', 'Danh sách đơn hàng')
@section('content_clien')
    <div class="container-fluid mt-4">
        <div class="row">
            @include('user_clien.sidebar_account')
            <div class="col-md-9">
                <div class="card card-primary" style="padding: 40px 20px;border:2px solid #e7eaf3;;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                    <div class="row d-flex justify-content-center align-content-center text-center">
                        <div class="col-md-12">
                            <h4 class="font-weight-bold">Thông tin tài khoản</h4>
                        </div>
                        @if(session('thongbao'))
                        <p class="text-danger">{{ session('thongbao') }}</p>
                        @endif
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form action="{{route('editAccount',['id' =>Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if(Auth::check())
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                @endif
                                <div class="row d-flex justify-content-center align-content-center">
                                    <div class="col-md-5">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-envelope"></span>
                                                        </span>
                                                    </div>
                                                    @if(Auth::check())
                                                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
                                                    @endif
                                                </div>
                                            </div>
                                            @if($errors->has('email'))
                                            <span class="text-danger ml-2">{{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only">Họ và tên</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-file-signature"></span>
                                                        </span>
                                                    </div>
                                                    @if(Auth::check())
                                                    <input type="text" class="form-control" name="name" placeholder="Họ và tên" value="{{Auth::user()->name}}">
                                                    @endif
                                                </div>
                                            </div>
                                            @if($errors->has('name'))
                                                <span class="text-danger ml-2">{{$errors->first('name')}}</span>
                                            @endif
                                        </div>
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only">Địa chỉ</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-map-marker-alt"></span>
                                                        </span>
                                                    </div>
                                                    @if(Auth::check())
                                                    <input type="text" class="form-control" name="address" placeholder="Địa chỉ" value="{{Auth::user()->address}}">
                                                    @endif
                                                </div>
                                            </div>
                                            @if($errors->has('address'))
                                                <span class="text-danger ml-2">{{$errors->first('address')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only">Giới tính</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-transgender"></span>
                                                        </span>
                                                    </div>
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option value="">Giới tính</option>
                                                        <option value="1" @if(Auth::check()) @if(Auth::user()->gender == '1') {{'selected'}} @endif @endif>Nam</option>
                                                        <option value="0" @if(Auth::check()) @if(Auth::user()->gender == '0') {{'selected'}} @endif @endif>Nữ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @if($errors->has('gender'))
                                            <span class="text-danger ml-2">{{$errors->first('gender')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only">Số điện thoại</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-phone"></span>
                                                        </span>
                                                    </div>
                                                    @if(Auth::check())
                                                    <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="{{Auth::user()->phone}}">
                                                    @endif
                                                </div>
                                            </div>
                                            @if($errors->has('phone'))
                                            <span class="text-danger ml-2">{{$errors->first('phone')}}</span>
                                            @endif
                                        </div>

                                         <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only">Hình ảnh</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                            @if($errors->has('image'))
                                                <span class="text-danger ml-2">{{$errors->first('image')}}</span>
                                            @endif
                                         </div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center align-content-center">
                                    <div class="mb-2 mr-2">
                                        <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover" width="100px">Lưu</button>
                                    </div>
                                    <div class="mb-2 mr-2">
                                        <a href="{{route('home')}}" class="btn btn-block btn-sm btn-primary transition-3d-hover" width="100px">Huỷ</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
<style>
    .text {
        color: #fed700 !important;
    }

</style>
@endsection
