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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owlcarousel/owl.theme.default.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
</head>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<body>
<!-- main nav -->
<div class="container-fluid fluid-nav another-page">
    <div class="container cnt-tnar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light tjnav-bar">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <a href="{{route('companyPage')}}" class="nav-logo">
                <img src="{{ asset('img/techjobs_bgw.png') }}">
            </a>
            <button class="navbar-toggler tnavbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-bars icn-res" aria-hidden="true"></i>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                    <li class="nav-item">
                        <img
                            src="{{ $companyProfile->company->avatar_url ? asset('storage/'.$companyProfile->company->avatar_url) : "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/OOjs_UI_icon_userAvatar-constructive.svg/1024px-OOjs_UI_icon_userAvatar-constructive.svg.png" }}"
                            alt=""
                            style="vertical-align: middle; width: 35px; height: 35px; border-radius: 50%;">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{$companyProfile->name}}
                        </a>
                        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('company.profile.show')}}">Trang cá nhân</a>
                            <a class="dropdown-item" href="{{route('company.change-password.show')}}">Thay đổi mật khẩu</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- (end) main nav -->

<div class="clearfix"></div>

<!-- recuiter Nav -->
<nav class="navbar navbar-expand-lg navbar-light nav-recuitment">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNava"
            aria-controls="navbarNava" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container" id="navbarNava">
        <ul class="navbar-nav nav-recuitment-li">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('company.post.list')}}">Quản lý đăng tuyển</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('company.candidate.list')}}">Quản lý ứng viên</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('company.profile.show')}}">Tài khoản</a>
            </li>
        </ul>
        <ul class="rec-nav-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Tìm hồ sơ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('company.post.create')}}">Đăng tuyển</a>
            </li>
        </ul>
    </div>
</nav>
<!--  recuiter Nav -->

<div class="clearfix"></div>

<!-- search section -->
<div class="container-fluid search-fluid">
    <div class="container">
        <div class="search-wrapper">

            <ul class="nav nav-tabs search-nav-tabs" id="myTab" role="tablist">
                <li class="nav-item search-nav-item">
                    <a class="nav-link snav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="true">Tìm bài đăng tuyển</a>
                </li>
            </ul>
            <div class="tab-content search-tab-content" id="myTabContent">
                <!-- content tab 2 -->
                <div class="tab-pane stab-pane fade show active" id="profile" role="tabpanel"
                     aria-labelledby="profile-tab" style="margin-bottom: 15px">
                    <form action="{{route('company.post.search')}}" method="POST" class="bn-search-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-sm-12">
                                <div class="input-group s-input-group w-100">
                                    <input type="text" id="job-search" name="keyword" class="form-control sinput"
                                           placeholder="Nhập tiêu đề cần tìm ">
                                    <span><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-search col-sm-12">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- (end) content tab 2 -->
            </div>

        </div>
    </div>
</div>
<!-- (end) search section -->


<div class="container-fluid">
    <div class="container search-wrapper">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-12">
                <h4 class="search-find">{{$isSearch ? 'Tìm thấy '.count($jobs).' việc làm' : 'Tổng cộng có '.count($jobs).' việc làm'}}</h4>
                <div class="job-board-wrap">
                    <div class="job-group">
                        <div class="job pagi">
                            <div class="job-content">
                                <div class="job-logo">
                                    <a href="#">
                                        <img src="{{asset('img/fpt-logo.png')}}" class="job-logo-ima" alt="job-logo">
                                    </a>
                                </div>

                                <div class="job-desc">
                                    <div class="job-title">
                                        <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                                    </div>
                                    <div class="job-company">
                                        <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i
                                                class="fa fa-map-marker" aria-hidden="true"></i>
                                            Đà Nẵng</a>
                                    </div>

                                    <div class="job-inf">
                                        <div class="job-main-skill">
                                            <i class="fa fa-code" aria-hidden="true"></i> <a href="#"> Java</a>
                                        </div>
                                        <div class="job-salary">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                                            <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                                        </div>
                                        <div class="job-deadline">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/12/2019</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-btn-appl">
                                    <a href="#" class="btn btn-appl">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        @foreach($jobs as $job)
                            <div class="job pagi">
                                <div class="job-content">
                                    <div class="job-logo">
                                        <a href="#">
                                            <img
                                                src="{{$job->image ? ( str_contains($job->image,'img') ? asset($job->image) :asset('storage/'.$job->image)) : "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/OOjs_UI_icon_userAvatar-constructive.svg/1024px-OOjs_UI_icon_userAvatar-constructive.svg.png"}}"
                                                class="job-logo-ima" alt="job-logo"></a>
                                    </div>

                                    <div class="job-desc">
                                        <div class="job-title">
                                            <a href="#">{{$job->title}}</a>
                                        </div>
                                        <div class="job-company">
                                            <a href="#">
                                                {{$job->user->name}}
                                            </a> |
                                            <a href="#" class="job-address">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{$job->province->name}}
                                            </a>
                                        </div>

                                        <div class="job-inf">
                                            <div class="job-main-skill">
                                                <i class="fa fa-code" aria-hidden="true"></i>
                                                <a href="#">
                                                    @foreach($job->techniques as $job_technique)
                                                        @if($job_technique->techniqueType->name == 'Language' )
                                                            {{$job_technique->name}}
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </a>
                                            </div>
                                            <div class="job-salary">
                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                <span class="salary-min">{{$job->salary_min}}<em
                                                        class="salary-unit">{{$job->salary_unit}}</em></span>
                                                <span class="salary-max">{{$job->salary_max}}<em
                                                        class="salary-unit">{{$job->salary_unit}}</em></span>
                                            </div>
                                            <div class="job-deadline">
                                                <span><i class="fa fa-clock-o"
                                                         aria-hidden="true"></i>  Hạn nộp: <strong>{{$job->expire}}</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-btn-appl">
                                        <a href="{{route('company.post.edit',['id'=>$job->id])}}">
                                            <i class="fa fa-wrench fa-3x" style="color: #0f43a4" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{route('company.post.delete',['id'=>$job->id])}}">
                                            <i class="fa fa-trash-o fa-3x" style="color: #c41212"
                                               aria-hidden="true"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {!! $jobs->links() !!}
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12" style="margin-top: 45px">
                {{--<a id="click_advance" class="btn btn-c-filter" type="button" data-toggle="collapse"
                   data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                    <i class="pr-2 fa fa-times" id="icon-s-sw" aria-hidden="true"></i>Filter &amp; Refind
                </a>

                <div class="collapse show" id="collapseExample" style="">
                    <div class="card card-body bg-card-body-filter">
                        <div class="filter-bar">
                            <div class="filter-form">
                                <div class="filter-form-item">
                                    <p>
                                        <a id="clickc_advance" class="btnf btn-filter" data-toggle="collapse"
                                           href="#filter-topic" role="button" aria-expanded="false"
                                           aria-controls="collapseExample">
                                            Ngành nghề
                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                    <div class="collapse show" id="filter-topic">
                                        <div class="card o-card card-body">
                                            <div class="filter-panel">
                                                <div class="panel-content">
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Tất cả ngành nghề</a>
                                                        <span class="filter-count">1,000</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Lập trình viên</a>
                                                        <span class="filter-count">555</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kiểm thử phần mềm</a>
                                                        <span class="filter-count">233</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Thiết kế đồ họa</a>
                                                        <span class="filter-count">100</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Tuyển dụng (HR)</a>
                                                        <span class="filter-count">99</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kĩ sư cầu nối</a>
                                                        <span class="filter-count">95</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">77</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Kỹ sư mạng</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p>
                                        <a id="clickc2_advance" class="btnf btn-filter" data-toggle="collapse"
                                           href="#filter-price" role="button" aria-expanded="false"
                                           aria-controls="collapseExample">
                                            Mức Lương
                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                    <div class="collapse show" id="filter-price">
                                        <div class="card o-card card-body">
                                            <div class="filter-panel">
                                                <div class="panel-content">
                                                    <div class="filter-topic filter-input-price">
                                                        <form class="al-price-filter">
                                                <span class="_fpblock">
                                                    <input type="number" class="if-price" id="" placeholder="50,000">
                                                </span>
                                                            <span class="_fpblock _line">
                                                    <p>-</p>
                                                </span>
                                                            <span class="_fpblock">
                                                    <input type="number" class="if-price" id="" placeholder="1,000,000">
                                                </span>
                                                            <span class="_fpblock">
                                                     <button type="submit" class="sb-fprice"><i
                                                             class="fa fa-angle-right" aria-hidden="true"></i></button>
                                                 </span>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-form-item">
                                    <p>
                                        <a id="clickc3_advance" class="btnf btn-filter" data-toggle="collapse"
                                           href="#filter-video-duration" role="button" aria-expanded="false"
                                           aria-controls="collapseExample">
                                            Đánh giá
                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                    <div class="collapse show" id="filter-video-duration">
                                        <div class="card o-card card-body">
                                            <div class="filter-panel">
                                                <div class="panel-content">
                                                    <div class="filter-rating">
                                                        <a href="#">
                                                        <span class="rating-wrapper">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                            <span>(từ 5 sao)</span>
                                                        </a>
                                                    </div>
                                                    <div class="filter-rating">
                                                        <a href="#">
                                                        <span class="rating-wrapper">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        </span>
                                                            <span>(từ 4 sao)</span>
                                                        </a>
                                                    </div>
                                                    <div class="filter-rating">
                                                        <a href="#">
                                                        <span class="rating-wrapper">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        </span>
                                                            <span>(từ 3 sao)</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <a id="clickc4_advance" class="btnf btn-filter" data-toggle="collapse"
                                           href="#filter-provider" role="button" aria-expanded="false"
                                           aria-controls="collapseExample">
                                            Cấp bậc
                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                    <div class="collapse show" id="filter-provider">
                                        <div class="card o-card card-body">
                                            <div class="filter-panel">
                                                <div class="panel-content">
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Tất cả cấp bậc</a>
                                                        <span class="filter-count">2,450</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Thực tập sinh</a>
                                                        <span class="filter-count">555</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Nhân viên</a>
                                                        <span class="filter-count">233</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Trưởng nhóm</a>
                                                        <span class="filter-count">100</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Trưởng phòng</a>
                                                        <span class="filter-count">99</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Phó giám đốc</a>
                                                        <span class="filter-count">95</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Giám đốc</a>
                                                        <span class="filter-count">77</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Tổng giám đốc điều hành</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Thư kí</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                    <div class="filter-topic cotain-common-filter">
                                                        <a href="#" class="filter-action">Khác</a>
                                                        <span class="filter-count">50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- filter bar -->
                        <script type="text/javascript">
                            window.onload = function () {
                                screenCollapse()
                            };

                            let ele = document.getElementsByClassName("collapse");

                            function screenCollapse() {
                                if (window.innerWidth < 720) {
                                    $(".collapse").removeClass("show");
                                    $(".collapse").addClass("hide");
                                }
                            }
                        </script>
                    </div>
                </div> <!-- ./ collapse -->--}}
                <div class="recuiter-info">
                    <div class="recuiter-info-avt">
                        <img
                            src="{{ $companyProfile->company->avatar_url ? asset('storage/'.$companyProfile->company->avatar_url) : "img/icon_avatar.jpg" }}"
                        >
                    </div>
                    <div class="clearfix list-rec">
                        <h4>{{$companyProfile->name}}</h4>
                        <ul>
                            <li><a href="#">Việc làm đã đăng <strong>({{count($companyProfile->jobs)}})</strong></a></li>
{{--                            <li><a href="#">Follower <strong>(450)</strong></a></li>--}}
                        </ul>
                    </div>
                </div>


                <div class="block-sidebar" style="margin-bottom: 20px;">
                    <header>
                        <h3 class="title-sidebar font-roboto bg-primary">
                            Trung tâm quản lý
                        </h3>
                    </header>
                    <div class="content-sidebar menu-trung-tam-ql menu-ql-employer">
                        <a href="{{route('company.post.list')}}"><h3 class="menu-ql-ntv">Quản lý đăng tuyển</h3></a>
                        <a href="{{route('company.candidate.list')}}"><h3 class="menu-ql-ntv">Quản lý ứng viên</h3></a>
                    </div>
                </div>
            </div>
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
                            <input type="text" placeholder="Nhập email của bạn" class="newsletter-email form-control">
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


{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.27/jquery.autocomplete.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script type="text/javascript" src="{{asset('js/readmore.js')}}"></script>
<script type="text/javascript">
    $('.catelog-list').readmore({
        speed: 75,
        maxHeight: 150,
        moreLink: '<a href="#">Xem thêm<i class="fa fa-angle-down pl-2"></i></a>',
        lessLink: '<a href="#">Rút gọn<i class="fa fa-angle-up pl-2"></i></a>'
    });
    $(document).ready(function () {
        $('ul.pagination').css('display', 'flex');
    })

    $( function() {
        var availableTags = {!! json_encode($job_titles->toArray()) !!};
        console.log(availableTags);
        $( "#job-search" ).autocomplete({
            source: availableTags,
        });
    } );
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>--}}
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jobdata.js')}}"></script>

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- Owl Stylesheets Javascript -->
<script src="{{asset('js/owlcarousel/owl.carousel.js')}}"></script>
<!-- Read More Plugin -->


</body>
</html>
