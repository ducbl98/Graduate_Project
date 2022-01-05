<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechJobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Roboto Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap"
          rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">


    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- select 2 css -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select4.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style>
        .identify-contact {
            border: 1px solid #bfcbd9;
            background: #fffdf3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>

    <style>
        .cover-letterx textarea {
            background: #fafafa;
            border: none;
            padding: 0 15px;
            color: #333;
        }

        .cover-letterx:after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: transparent;
            background-size: 15px 15px;
            background-image: radial-gradient(farthest-side, rgba(0, 0, 0, 0) 6px, #fafafa 0);
            bottom: -6px;
        }

        .cover-letterx:before {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: transparent;
            background-size: 15px 15px;
            background-image: radial-gradient(farthest-side, rgba(0, 0, 0, 0) 6px, #fafafa 0);
            transform: rotate(180deg);
            top: -10px;
        }

        .cover-letterx {
            position: relative;
        }

        .clw textarea, .clw {
            background: #fff;
        }

        .clw:after, .clw:before {
            background-image: radial-gradient(farthest-side, rgba(0, 0, 0, 0) 6px, #fff 0);
        }
    </style>

    <style>
        .identify-contact p {
            line-height: 1.9;
            margin-bottom: 10px;
        }

        .identify-contact input {
            border: 1px solid #bfcbd9;
            width: 100%;
            border-radius: 5px;
            padding: 10px 10px;
        }

        .identify-contact {
            border: 1px solid #bfcbd9;
            background: #fffdf3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<!-- main nav -->
<div class="container-fluid fluid-nav another-page">
    <div class="container cnt-tnar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light tjnav-bar">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <a href="{{route('homePage')}}" class="nav-logo">
                <img src="{{ asset('img/techjobs_bgw.png') }}">
            </a>
            <button class="navbar-toggler tnavbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-bars icn-res" aria-hidden="true"></i>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto tnav-left tn-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Việc Làm IT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin Tức</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                    <li class="nav-item">
                        <img
                            src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/denpw7t-09ac7bf3-0bd5-4a0c-bfa3-7f5762f6aaa5.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGVucHc3dC0wOWFjN2JmMy0wYmQ1LTRhMGMtYmZhMy03ZjU3NjJmNmFhYTUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.D0bPWTJZRiyKO645ADf5TaSlxU-i4CDfxYaOsvKuDeY"
                            alt=""
                            style="vertical-align: middle; width: 35px; height: 35px; border-radius: 50%;">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('seeker.profile.show')}}">Trang cá nhân</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a style="background-color: #0f6674 !important;" class="nav-link btn-employers"
                           href="{{route('showCompanyRegister')}}" tabindex="-1" aria-disabled="true">
                            Nhà Tuyển Dụng
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- (end) main nav -->

<div class="clearfix"></div>


<!-- published recuitment -->
<div class="container-fluid published-recuitment-wrapper">
    <div class="container published-recuitment-content">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-12 recuitment-inner">
                <div class="recuitment-form">
                    <div class="accordion" id="accordionExample">
                        <div class="card recuitment-card">
                            <div class="card-header recuitment-card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a class="btn btn-link btn-block text-left recuitment-header" type="button"
                                       data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">
                                        asdsadsad
                                        <span id="clickc1_advance2" class="clicksd">
                                            <i class="fa fa fa-angle-up"></i>
                                        </span>
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body recuitment-body">
                                    <div class="identify-contact">
                                        <h5 class="fs-16 fw-700 mb-3">Thông tin ứng viên</h5>
                                        <div class="row">
                                            <div class="col-12 pr-10 row pt-2 pb-2">
                                                <div class="col-md-2">Họ tên</div>
                                                <div class="col-md-8 pl-5 ml-2">
                                                    <b> {{$candidateAppliedJob->user->name}}</b></div>
                                            </div>
                                            <div class="col-6 pr-10 row pt-2 pb-2">
                                                <div class="col-md-6">Số điện thoại</div>
                                                <div class="col-md-6">
                                                    <b>{{$candidateAppliedJob->user->seeker->phone_number}}</b></div>
                                            </div>
                                            <div class="col-6 pr-10 row pt-2 pb-2">
                                                <div class="col-md-4">Email</div>
                                                <div class="col-md-8"><b>{{$candidateAppliedJob->user->email}}</b></div>
                                            </div>
                                        </div>
                                        <h5 class="fs-16 fw-700 mb-3 mt-3">Kinh nghiệm làm việc</h5>
                                        <div class="row">
                                            <div class="col-6 pr-10 row pt-2 pb-2">
                                                <div class="col-md-6">Chức vụ</div>
                                                <div class="col-md-6"><b> dsadsa</b></div>
                                            </div>
                                            <div class="col-6 pr-10 row pt-2 pb-2">
                                                <div class="col-md-4">Công ty</div>
                                                <div class="col-md-8"><b> sdsadas</b></div>
                                            </div>
                                            <div class="col-12 row pt-2 pb-2">
                                                <div class="col-md-3">Thời gian làm việc</div>
                                                <div class="col-md-9"><b> sdasd - adsadasda</b></div>
                                            </div>
                                            <p style="border-bottom: 1px dashed #ccc; display: block; width: 100%;"></p>
                                        </div>
                                        <h5 class="fs-16 fw-700 mb-3 mt-3">Kỹ năng</h5>
                                        <div class="user_exp_edu Experience_11642 div-exp-height">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    dsadsadsad
                                                </div>
                                                <div class="col-md-6">
                                                    <span style="color: #ffc107">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr class="break-line pt-1 pb-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="fs-16 fw-700 mb-3 mt-3">Nội dung thư</h5>
                            <div class="cover-letterx">
                                <textarea class="w-100" rows="15" class="letterx">
                                    asdsadsad
                                </textarea>
                            </div>
                            <h5 class="fs-16 fw-700 mb-3 mt-3">Hồ sơ đính kèm</h5>
                            <a href="#" class="mb-5 d-block"> sdfdsfds</a>
                        </div>
                    </div>
                    <div class="rec-submit">
                        <a href="#" class="btn-submit-recuitment float-left mr-3" style="background: #1c7430;"
                           data-toggle="modal" data-target="#feedbackEmp">
                            <i class="fa fa-floppy-o pr-2"></i>Phản hồi
                        </a>
                        <a href="#" class="btn-submit-recuitment float-left">
                            <i class="fa fa-times pr-2"></i>Bỏ Qua
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="side-bar mb-3">
                    <div class="block-sidebar" style="margin-bottom: 20px;">
                        <header>
                            <h3 class="title-sidebar font-roboto bg-primary">
                                Việc làm tương tự
                            </h3>
                        </header>
                    </div>
                    <div class="job-tt-contain">
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/fpt-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    [HCM] 02 Solution Architects–Up to $2000
                                </a>
                                <a href="#" class="company">
                                    FPT Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="side-bar mb-3">
                    <div class="block-sidebar" style="margin-bottom: 20px;">
                        <div class="content-sidebar menu-trung-tam-ql menu-ql-employer">
                            <h3 class="menu-ql-ntv">
                                Quản lý tài khoản
                            </h3>
                            <h3 class="menu-ql-ntv">
                                Quản lý dịch vụ
                            </h3>
                            <h3 class="menu-ql-ntv">
                                Quản lý tin tuyển dụng
                            </h3>
                            <h3 class="menu-ql-ntv">
                                Quản lý ứng viên
                            </h3>
                            <h3 class="menu-ql-ntv">
                                Hỗ trợ và thông báo
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- (end) published recuitment -->

<div class="clearfix"></div>

<!-- Modal -->
<div class="modal fade" id="feedbackEmp" tabindex="-1" role="dialog" aria-labelledby="feedbackEmp" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackEmp">Phản hồi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('company.candidate.reply')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="">
                <input type="hidden" name="company_id" value="">
                <input type="hidden" name="post_id" value="">
                <div class="modal-body">
                    <div class="identify-contact">
                        <h5 class="fs-16 fw-700">Nhập nội dung phản hồi</h5>
                        <p class="mb-0">Vui lòng nhập thông tin, hay lịch hẹn đến ứng viên của bạn.</p>
                        <div class="row">
                            <div class="col-12 pr-10">
                                <div class="form-group">
                                    <label for="mf_phone">Tiêu đề:</label>
                                    <br>
                                    <input type="text" class="w-full" name="header" placeholder="Nhập tiêu đề">
                                </div>
                            </div>
                            <div class="col-12 pr-10">
                                <div class="form-group">
                                    <label for="mf_phone">Nội dung:</label>
                                    <br>
                                    <div class="cover-letterx clw mt-3">
                                        <textarea class="w-100 letterx" rows="10"
                                                  name="content" placeholder="Hãy nhập nội dung"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pr-10">
                                <div class="form-group">
                                    <label for="mf_phone">File đính kèm:</label>
                                    <br>
                                    <input type="file" class="w-full" name="attachment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn-sm btn-primary">Gửi Ngay!</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- job support -->
<div class="container-fluid job-support-wrapper">
    <div class="container-fluid job-support-wrap">
        <div class="container job-support">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <ul class="spp-list">
                        <li>
                            <span><i class="fa fa-question-circle pr-2 icsp"></i>Hỗ trợ nhà tuyển dụng:</span>
                        </li>
                        <li>
                            <span><i class="fa fa-phone pr-2 icsp"></i>0123.456.789</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="newsletter">
                        <span class="txt6">Đăng ký nhận bản tin việc làm</span>
                        <div class="input-group frm1">
                            <input type="text" placeholder="Nhập email của bạn"
                                   class="newsletter-email form-control">
                            <a href="#" class="input-group-addon"><i class="fa fa-lg fa-envelope-o colorb"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- (end) job support -->


<!-- footer -->
<div class="container-fluid footer-wrap  clear-left clear-right">
    <div class="container footer">
        <div class="row">
            <div class="col-md-4 col-sm-8 col-12">
                <h2 class="footer-heading">
                    <span>About</span>
                </h2>
                <p class="footer-content">
                    Discover the best way to find houses, condominiums, apartments and HDBs for sale and rent in
                    Singapore with JobsOnline, Singapore's Fastest Growing Jobs Portal.
                </p>
                <ul class="footer-contact">
                    <li>
                        <a href="#">
                            <i class="fa fa-phone fticn"></i> +123 456 7890
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope fticn"></i>
                            hello@123.com
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-map-marker fticn"></i>
                            33 Xô Viết Nghệ Tĩnh, Đà Nẵng
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-12">
                <h2 class="footer-heading">
                    <span>Ngôn ngữ nổi bật</span>
                </h2>
                <ul class="footer-list">
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">Frontend</a></li>
                    <li><a href="#">SQL Server</a></li>
                    <li><a href="#">.NET</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <h2 class="footer-heading">
                    <span>Tất cả ngành nghề</span>
                </h2>
                <ul class="footer-list">
                    <li><a href="#">Lập trình viên</a></li>
                    <li><a href="#">Kiểm thử phần mềm</a></li>
                    <li><a href="#">Kỹ sư cầu nối</a></li>
                    <li><a href="#">Quản lý dự án</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <h2 class="footer-heading">
                    <span>Tất cả hình thức</span>
                </h2>
                <ul class="footer-list">
                    <li><a href="#">Nhân viên chính thức</a></li>
                    <li><a href="#">Nhân viên bán thời gian</a></li>
                    <li><a href="#">Freelancer</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-12 col-12">
                <h2 class="footer-heading">
                    <span>Tất cả tỉnh thành</span>
                </h2>
                <ul class="footer-list">
                    <li><a href="#">Hồ Chính Minh</a></li>
                    <li><a href="#">Hà Nội</a></li>
                    <li><a href="#">Đà Nẵng</a></li>
                    <li><a href="#">Buôn Ma Thuột</a></li>
                </ul>
            </div>


        </div>
    </div>
</div>

<footer class="container-fluid copyright-wrap">
    <div class="container copyright">
        <p class="copyright-content">
            Copyright © 2020 <a href="#"> Tech<b>Job</b></a>. All Right Reserved.
        </p>
    </div>
</footer>


<!-- (end) footer -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jobdata.js')}}"></script>

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- Owl Stylesheets Javascript -->
<script src="{{asset('js/owlcarousel/owl.carousel.js')}}"></script>
<!-- Read More Plugin -->
</body>
</html>
