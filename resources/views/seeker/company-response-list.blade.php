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
                        <a class="nav-link" href="{{route('job.all')}}">Vi???c L??m IT</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                    <li class="nav-item">
                        <img
                            src="{{ $seekerProfile->seeker->avatar_url ? asset('storage/'.$seekerProfile->seeker->avatar_url) : "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/OOjs_UI_icon_userAvatar-constructive.svg/1024px-OOjs_UI_icon_userAvatar-constructive.svg.png" }}"                             style="vertical-align: middle; width: 35px; height: 35px; border-radius: 50%;">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{$seekerProfile->name}}
                        </a>
                        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('seeker.profile.show')}}">Trang c?? nh??n</a>
                            <a class="dropdown-item" href="{{route('seeker.change-password.show')}}">Thay ?????i m???t kh???u</a>
                            <a class="dropdown-item" href="{{route('seeker.job.apply.list')}}">C??ng vi???c ???? ???ng tuy???n</a>
                            <a class="dropdown-item" href="{{route('seeker.job.save.list')}}">C??ng vi???c ???? l??u</a>
                            <a class="dropdown-item" href="{{route('seeker.company.response.list')}}">Ph???n h???i t??? nh?? tuy???n d???ng</a>
                            <a class="dropdown-item" href="{{route('logout')}}">????ng xu???t</a>
                        </div>
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
            <div class="col-md-8 col-sm-12 col-12 recuitment-inner mt-3">
                <div class="recuitment-form">
                    <h3 class="rect-heading" style="font-size: 28px; padding-left: 22px; font-weight: 500;">C??c ph???n h???i t??? NTD</h3>
                    <hr class="break-line">
                    <div class="user--profile-right">
                        <div class="user--profile-group" style="border: 1px solid blue;border-radius: 20px;">
                            <table class="table">
                                <tr>
                                    <th>Ti??u ?????</th>
                                    <th>G???i t???</th>
                                    <th>Ng??y g???i</th>
                                    <th></th>
                                </tr>
                                @foreach($companyResponses as $companyResponse)
                                    <tr>
                                        <td>{{$companyResponse->header}}</td>
                                        <td>{{$companyResponse->seeker_application->job->user->name}}</td>
                                        <td>{{$companyResponse->created_at}}</td>
                                        <td>
                                            <a href="{{route('seeker.company.response.detail',['id'=>$companyResponse->id])}}" class="btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                {{--<div class="side-bar mb-3">
                    <div class="block-sidebar" style="margin-bottom: 20px;">
                        <header>
                            <h3 class="title-sidebar font-roboto bg-primary">
                                Vi???c l??m t????ng t???
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
                                    [HCM] 02 Solution Architects???Up to $2000
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
                </div>--}}
                <div class="side-bar mb-3">
                    <div class="block-sidebar" style="margin-bottom: 20px;">
                        <div class="content-sidebar menu-trung-tam-ql menu-ql-employer">
                            <h3 class="menu-ql-ntv">
                                Qu???n l?? ???ng tuy???n
                            </h3>
                            <h3 class="menu-ql-ntv">
                                Danh s??ch ph???n h???i
                            </h3>
                            {{--                            <h3 class="menu-ql-ntv">--}}
                            {{--                                Qu???n l?? tin tuy???n d???ng--}}
                            {{--                            </h3>--}}
                            {{--                            <h3 class="menu-ql-ntv">--}}
                            {{--                                Qu???n l?? ???ng vi??n--}}
                            {{--                            </h3>--}}
                            {{--                            <h3 class="menu-ql-ntv">--}}
                            {{--                                H??? tr??? v?? th??ng b??o--}}
                            {{--                            </h3>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- (end) published recuitment -->

<div class="clearfix"></div>


{{--<!-- job support -->
<div class="container-fluid job-support-wrapper">
    <div class="container-fluid job-support-wrap">
        <div class="container job-support">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <ul class="spp-list">
                        <li>
                            <span><i class="fa fa-question-circle pr-2 icsp"></i>H??? tr??? nh?? tuy???n d???ng:</span>
                        </li>
                        <li>
                            <span><i class="fa fa-phone pr-2 icsp"></i>0123.456.789</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="newsletter">
                        <span class="txt6">????ng k?? nh???n b???n tin vi???c l??m</span>
                        <div class="input-group frm1">
                            <input type="text" placeholder="Nh???p email c???a b???n"
                                   class="newsletter-email form-control">
                            <a href="#" class="input-group-addon"><i class="fa fa-lg fa-envelope-o colorb"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- (end) job support -->--}}


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
                            techjob@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-map-marker fticn"></i>
                            B??ch Khoa,H?? N???i
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-12">
                <h2 class="footer-heading">
                    <span>Ng??n ng??? n???i b???t</span>
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
                    <span>T???t c??? ng??nh ngh???</span>
                </h2>
                <ul class="footer-list">
                    <li><a href="#">L???p tr??nh vi??n</a></li>
                    <li><a href="#">Ki???m th??? ph???n m???m</a></li>
                    <li><a href="#">K??? s?? c???u n???i</a></li>
                    <li><a href="#">Qu???n l?? d??? ??n</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <h2 class="footer-heading">
                    <span>T???t c??? h??nh th???c</span>
                </h2>
                <ul class="footer-list">
                    <li><a href="#">Nh??n vi??n ch??nh th???c</a></li>
                    <li><a href="#">Nh??n vi??n b??n th???i gian</a></li>
                    <li><a href="#">Freelancer</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-12 col-12">
                <h2 class="footer-heading">
                    <span>T???t c??? t???nh th??nh</span>
                </h2>
                <ul class="footer-list">
                    <li><a href="#">H??? Ch??nh Minh</a></li>
                    <li><a href="#">H?? N???i</a></li>
                    <li><a href="#">???? N???ng</a></li>
                    <li><a href="#">Bu??n Ma Thu???t</a></li>
                </ul>
            </div>


        </div>
    </div>
</div>

<footer class="container-fluid copyright-wrap">
    <div class="container copyright">
        <p class="copyright-content">
            Copyright ?? 2020 <a href="#"> Tech<b>Job</b></a>. All Right Reserved.
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
