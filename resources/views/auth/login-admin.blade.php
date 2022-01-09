<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded"/>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">

    <!-- Toastr -->
{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">--}}
    @toastr_css

</head>
<body>
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <a href="{{route('homePage')}}">
                            <img src="{{asset('img/techjobs_bgw.png')}}" alt="" class="img-fluid mb-4">
                        </a>
                        <form action="{{route('adminLoginProcess')}}" method="POST" class="login-form">
                            @csrf
                            <h4 style="font-size: 23px" class="mb-3 f-w-400">Đăng nhập người quản trị</h4>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="Email">Địa chỉ Email</label>
                                <input type="text" class="form-control" name="email" id="Email" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Mật khẩu</label>
                                <input type="password" class="form-control" name="password" id="Password" placeholder="">
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Signin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{asset('js/admin/vendor-all.js')}}"></script>
<script src="{{asset('js/admin/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/ripple.js')}}"></script>
<script src="{{asset('js/admin/pcoded.js')}}"></script>


@toastr_js
@toastr_render
</body>

</html>

