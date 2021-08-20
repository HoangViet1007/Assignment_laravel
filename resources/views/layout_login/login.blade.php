<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('public_login/css/style.css')}}">

</head>

<body class="img js-fullheight" style="background-image: url(http://127.0.0.1:8000/public_login/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-1">
                    <h2 class="heading-section">Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        @if(session('thongbao'))
                            <p class="text-center" style="color:red;">  {{session('thongbao')}}</p>
                        @endif
                        @if(session('logout'))
                            <p class="text-center">  {{session('logout')}}</p>
                        @endif
                        <form action="{{route('admin.postlogin')}}" class="signin-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" value="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" name="remember" value="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded" style="color:#fff; background-color: #3b5998;"> <i class="fa fa-facebook-official" style="margin-right: 10px;"></i> Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded" style="background-color:#fff;color:black;"><img src="http://127.0.0.1:8000/public_login/images/icon_gg.png" alt="GOOGLE" style="width:20px;margin-top:-5px;margin-right:10px;">Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('public_login/js/jquery.min.js')}}"></script>
    <script src="{{asset('public_login/js/popper.js')}}"></script>
    <script src="{{asset('public_login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public_login/js/main.js')}}"></script>

</body>

</html>
