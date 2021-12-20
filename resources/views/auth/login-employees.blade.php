<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - TechJobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Roboto Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">


    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    @toastr_css
</head>
<body>
<div class="container-fluid login-fluid clear-left clear-right">
    <div class="login-container">
        <!-- login header -->
        <div class="login-header">
            <div class="w-login m-auto">
                <div class="login-logo">
                    <h3>
                        <!-- <a href="#">Tech<span class="txb-logo">Jobs.</span></a> -->
                        <a href="#">
                            <img src="{{asset('img/techjobs_bgw.png')}}" alt="TechJobs">
                        </a>
                    </h3>
                    <span class="login-breadcrumb"><em>/</em> Đăng Nhập</span>
                </div>
                <div class="login-right">
                    <a href="{{route('homePage')}}" class="btn btn-return">Return Home</a>
                </div>
            </div>
        </div>
        <!-- (end) login header -->

        <div class="clearfix"></div>

        <div class="padding-top-90"></div>

        <!-- login main -->
        <div class="login-main">
            <div class="w-login m-auto">
                <div class="row">
                    <!-- login main descriptions -->
                    <div class="col-md-6 col-sm-12 col-12 login-main-left">
                        <img src="{{asset('img/banner-login.png')}}">
                    </div>
                    <!-- login main form -->
                    <div class="col-md-6 col-sm-12 col-12 login-main-right">

                        <form action="{{route('login')}}" method="POST" class="login-form">
                            @csrf
                            <div class="login-main-header">
                                <h3>Đăng Nhập</h3>
                            </div>
                            <div class="input-div one">
                                <div class="div lg-lable">
                                    <h5>Email</h5>
                                    <input type="text" name="email" class="input form-control-lgin">
                                </div>
                            </div>
                            <div class="input-div pass">
                                <div class="div lg-lable">
                                    <h5>Password</h5>
                                    <input type="password" name="password" class="input form-control-lgin">
                                </div>
                            </div>
                            <div class="form-group d-block frm-text">
                                <a href="{{route('showForgetPassword')}}" class="fg-login d-inline-block">Quên mật khẩu</a>
                                <a href="{{route('showSeekerRegister')}}" class="fg-login float-right d-inline-block">Bạn chưa có tài khoản? Đăng ký</a>
                            </div>
                            <button type="submit" class="btn btn-primary float-right btn-login d-block w-100">Đăng Nhập</button>
                            <div class="form-group d-block w-100 mt-5">
                                <div class="text-or text-center">
                                    <span>Hoặc</span>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-12 pr-7">
                                        <button class="btn btn-secondary btn-login-facebook btnw w-100 float-left">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <span>Đăng nhập bằng Facebook</span>
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-12 pl-7">
                                        <button class="btn btn-secondary btn-login-google btnw w-100 float-left">
                                            <i class="fa fa-google" aria-hidden="true"></i>
                                            <span>Đăng nhập bằng Google</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- (end) login main -->
    </div>
</div>
<footer class="login-footer">
    <div class="w-login m-auto">
        <div class="row">
            <!-- login footer left -->
            <div class="col-md-6 col-sm-12 col-12 login-footer-left">
                <div class="login-copyright">
                    <p>Copyright © 2020 <a href="#"> TechJobs</a>. All Rights Reserved.</p>
                </div>
            </div>
            <!-- login footer right -->
            <div class="col-md-6 col-sm-12 col-12 login-footer-right">
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@jquery
@toastr_js
@toastr_render
</body>
</html>
