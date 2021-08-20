@extends('master_layout.home_master')
@section('title', 'Bài viết chi tiết')
@section('content_clien')
    <div class="container mt-5 mb-5">
        <div class="card card-primary col-md-8 offset-2" style="padding: 40px 20px;border:3px solid #fed700;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">

            <div class="row d-flex justify-content-center align-content-center">
                <div class="col-md-8">
                    <form action="{{route('post.loginClien2')}}"  method="POST">
                        @csrf
                        <!-- Login -->
                        <div id="login" data-target-group="idFormLogin">
                            <!-- Title -->
                            <header class="text-center mb-7">
                                <h2 class="h4 mb-0">Xin chào trở lại !</h2>
                                @if(session('err'))
                                <p class="message text-danger">{{ session('err') }}</p>
                                @else
                                <p class="message">Đăng nhập để quản lý tài khoản thôi nào</p>
                                @endif
                            </header>
                            <!-- End Title -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <div class="js-form-message js-focus-state">
                                    <label class="sr-only" for="loginEmail">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="loginEmailLabel">
                                                <span class="fas fa-user"></span>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="email" id="email_login" placeholder="Email" value="{{old('name')}}">
                                    </div>
                                </div>
                                @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <div class="js-form-message js-focus-state">
                                    <label class="sr-only" for="loginPassword">Mật khẩu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="loginPasswordLabel">
                                                <span class="fas fa-lock"></span>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" name="password"
                                            id="password_login" placeholder="Mật khẩu" aria-label="Password">
                                    </div>
                                </div>
                                @if($errors->has('password'))
                                <span class="text-danger">{{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <!-- End Form Group -->
                            <div class="d-flex justify-content-end mb-4">
                                <a class="js-animation-link small link-muted" href="#"
                                    data-target="#forgotPassword" data-link-group="idForm"
                                    data-animation-in="slideInUp">Quên mật khẩu ?</a>
                            </div>

                            <div class="mb-2">
                                <button type="submit"
                                    class="btn btn-block btn-sm btn-primary transition-3d-hover">Đăng
                                    nhập</button>
                            </div>

                            <div class="text-center mb-4">
                                <span class="small text-muted">Bạn có tài khoản chưa ?</span>
                                <a class="" href="{{route('register')}}" data-animation-in="slideInUp">Đăng ký</a>
                            </div>

                            <div class="text-center">
                                <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                            </div>

                            <!-- Login Buttons -->
                            <div class="d-flex">
                                <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1"
                                    href="#">
                                    <span class="fab fa-facebook-square mr-1"></span>
                                    Facebook
                                </a>
                                <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0"
                                    href="#">
                                    <span class="fab fa-google mr-1"></span>
                                    Google
                                </a>
                            </div>
                            <!-- End Login Buttons -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
