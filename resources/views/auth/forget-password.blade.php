<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - TechJobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Roboto Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

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
                            <img src="{{ asset('img/techjobs_bgb.png') }}">
                        </a>
                    </h3>
                    <span class="login-breadcrumb"><em>/</em> Forget Password</span>
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

                        <form action="{{route('forgetPassword')}}" method="POST" class="login-form reg-form">
                            @csrf
                            <div class="login-main-header">
                                <h3>Quên mật khẩu</h3>
                            </div>
                            <div class="input-div one">
                                <div class="div lg-lable">
                                    <h5>Địa Chỉ Email<span class="req">*</span></h5>
                                    <input type="text" name="email" class="input form-control-lgin">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right btn-login d-block w-100">Send Password Reset Link</button>
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
</body>
</html>
