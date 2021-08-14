@extends('master_layout.home_master')
@section('title', 'Đăng ký tài khoản')
@section('content_clien')
<div class="container mt-4 mb-4">
    <div class="card card-primary" style="padding: 40px 20px;border:3px solid #fed700;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <form action="{{route('post.register')}}" method="POST" enctype="multipart/form-data" style="boder:5px solid #ccc;">
            @csrf
            <div class="row d-flex justify-content-center align-content-center">
                <div class="col-md-12">
                    <!-- Title -->
                    <header class="text-center mb-7">
                        <h2 class="h4 mb-0">Đăng ký tài khoản </h2>
                        @if(session('succsess'))
                        <p>{{session('succsess')}}</p>
                        @else
                        {{-- <p>Đăng ký xong hãy đăng nhập để vào tài khoản nha !</p> --}}
                        @endif
                    </header>
                    <!-- End Title -->
                </div>
            </div>
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
                                <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
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
                                <input type="text" class="form-control" name="name" placeholder="Họ và tên" value="{{old('name')}}">
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
                                <input type="text" class="form-control" name="address" placeholder="Địa chỉ" value="{{old('address')}}">
                            </div>
                        </div>
                        @if($errors->has('address'))
                            <span class="text-danger ml-2">{{$errors->first('address')}}</span>
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
                                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="{{old('phone')}}">
                            </div>
                        </div>
                        @if($errors->has('phone'))
                        <span class="text-danger ml-2">{{$errors->first('phone')}}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Form Group -->
                    <div class="form-group">
                        <div class="js-form-message js-focus-state">
                            <label class="sr-only">Mật khẩu</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="signinEmailLabel">
                                        <span class="fas fa-key"></span>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            </div>
                        </div>
                        @if($errors->has('password'))
                            <span class="text-danger ml-2">{{$errors->first('password')}}</span>
                        @endif
                    </div>
                    <!-- Form Group -->
                    <div class="form-group">
                        <div class="js-form-message js-focus-state">
                            <label class="sr-only">Nhập lại mật khẩu</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="signinEmailLabel">
                                        <span class="fas fa-key"></span>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="cf_password" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>
                        @if($errors->has('cf_password'))
                            <span class="text-danger ml-2">{{$errors->first('cf_password')}}</span>
                        @endif
                    </div>
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
                                    <option value="1" @if (old('gender') == '1') {{ 'selected' }} @endif>Nam</option>
                                    <option value="0" @if (old('gender') == '0') {{ 'selected' }} @endif>Nữ</option>
                                </select>
                            </div>
                        </div>
                        @if($errors->has('gender'))
                        <span class="text-danger ml-2">{{$errors->first('gender')}}</span>
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
                <div class="col-md-4">
                    <div class="mb-2">
                        <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Đăng kí</button>
                    </div>

                    <div class="text-center">
                        <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                    </div>

                    <!-- Login Buttons -->
                    <div class="d-flex">
                        <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                            <span class="fab fa-facebook-square mr-1"></span>
                            Facebook
                        </a>
                        <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                            <span class="fab fa-google mr-1"></span>
                            Google
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
