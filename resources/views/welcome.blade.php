<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechJobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Roboto Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">



    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- select 2 css -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Toastr -->
{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">--}}
    @toastr_css
</head>
<body>
<!-- main nav -->
<div class="container-fluid fluid-nav">
    <div class="container cnt-tnar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light tjnav-bar">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <a href="{{route('homePage')}}" class="nav-logo">
                <img src="{{ asset('img/techjobs_bgb.png') }}">
            </a>
            <button class="navbar-toggler tnavbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-bars icn-res" aria-hidden="true"></i>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto tnav-left tn-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Việc Làm IT</a>
                    </li>
                </ul>
                @if(!$isSeeker)
                <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('showSeekerRegister') }}">Đăng Ký</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('seekerLogin') }}">Đăng Nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-employers" href="{{route('showCompanyRegister')}}" tabindex="-1" aria-disabled="true">Nhà Tuyển Dụng</a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                    <li class="nav-item">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/denpw7t-09ac7bf3-0bd5-4a0c-bfa3-7f5762f6aaa5.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGVucHc3dC0wOWFjN2JmMy0wYmQ1LTRhMGMtYmZhMy03ZjU3NjJmNmFhYTUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.D0bPWTJZRiyKO645ADf5TaSlxU-i4CDfxYaOsvKuDeY" alt=""
                             style="vertical-align: middle; width: 35px; height: 35px; border-radius: 50%;">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('seeker.profile.show')}}">Trang cá nhân</a>
                            <a class="dropdown-item" href="{{route('seeker.job.apply.list')}}">Công việc đã ứng tuyển</a>
                            <a class="dropdown-item" href="{{route('seeker.company.response.list')}}">Phản hồi từ nhà tuyển dụng</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-employers" href="{{route('showCompanyRegister')}}" tabindex="-1" aria-disabled="true">Nhà Tuyển Dụng</a>
                    </li>
                </ul>
                @endif
            </div>
        </nav>
    </div>
</div>
<!-- (end) main nav -->

<div class="clearfix"></div>

<!-- main banner -->
<div class="container-fluid clear-left clear-right">
    <div class="main-banner">
        <div class="banner-image">
            <img src="{{asset('img/banner2.jpg')}}" alt="banner-image">
        </div>
    </div>
    <div class="banner-content">
        <h3>1000+ Jobs For Developers</h3>
        <div class="banner-tags">
            <ul>
                <li><a href="#">Java</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">Tester</a></li>
                <li><a href="#">QA QC</a></li>
                <li><a href="#">.NET</a></li>
                <li><a href="#">Javascript</a></li>
                <li><a href="#">Business Analyst</a></li>
                <li><a href="#">Designer</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- (end) main banner -->

<!-- search section -->
<div class="container-fluid search-fluid">
    <div class="container">
        <div class="search-wrapper" style="margin-top: -11rem;">

            <ul class="nav nav-tabs search-nav-tabs" id="myTab" role="tablist">
                <li class="nav-item search-nav-item">
                    <a class="nav-link snav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tìm việc làm</a>
                </li>
                <li class="nav-item search-nav-item">
                    <a class="nav-link snav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tìm công ty</a>
                </li>
            </ul>
            <div class="tab-content search-tab-content" id="myTabContent">
                <!-- content tab 1 -->
                <div class="tab-pane stab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="{{route('job.search')}}" method="POST" class="bn-search-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-sm-12">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="input-group s-input-group">
                                            <input name="keyword" type="text" class="form-control sinput" placeholder="Nhập kỹ năng, công việc,...">
                                            <span><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="technique" id="computer-languages">
                                            <option value="" selected hidden >Tất cả ngôn ngữ ,công nghệ </option>
                                            @foreach($techniqueTypes as $techniqueType)
                                                <optgroup label="{{$techniqueType->name}}">
                                                    @foreach($techniqueType->techniques as $technique)
                                                        <option value="{{$technique->id}}" {{collect(old('techniques'))->contains($technique->id) ? 'selected' : ''}}>{{$technique->name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach
                                        </select>
                                        <i class="fa fa-code sfa" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="province" id="s-provinces">
                                            <option value="" selected hidden >Tất cả địa điểm</option>
                                            @foreach($provinces as $province)
                                                <option value="{{$province->id}}" {{old('province_id') == $province->id ? 'selected' : ''}}>{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                        <i class="fa fa-map-marker sfa" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-search col-sm-12">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- (end) content tab 1 -->
                <!-- content tab 2 -->
                <div class="tab-pane stab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="{{route('job.searchByCompany')}}" method="POST" class="bn-search-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-sm-12">
                                <div class="input-group s-input-group w-100">
                                    <input name="company_name" type="text" class="form-control sinput" placeholder="Nhập tên công ty">
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

<!-- job board & sidebar section  -->
<div class="container-fluid jb-wrapper">
    <div class="container">
        <div class="row">
            <!-- job board -->
            <div class="col-md-8 col-sm-12 col-12">
                <div class="job-board-wrap">
                    <h2 class="widget-title">
                        <span>Tuyển gấp</span>
                    </h2>

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
                                        <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Đà Nẵng</a>
                                    </div>

                                    <div class="job-inf">
                                        <div class="job-main-skill">
                                            <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> Java</a>
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
                                        <img src="{{$job->image ? ( str_contains($job->image,'img') ? asset($job->image) :asset('storage/'.$job->image)) : "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/OOjs_UI_icon_userAvatar-constructive.svg/1024px-OOjs_UI_icon_userAvatar-constructive.svg.png"}}" class="job-logo-ima" alt="job-logo"></a>
                                    </a>
                                </div>

                                <div class="job-desc">
                                    <div class="job-title">
                                        <a href="#">{{$job->title}}</a>
                                    </div>
                                    <div class="job-company">
                                        <a href="#">{{$job->user->name}}</a> |
                                        <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
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
                                        @if($isSeeker)
                                            <div class="job-salary">
                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                <span class="salary-min">{{$job->salary_min}}<em class="salary-unit">{{$job->salary_unit}}</em></span>
                                                <span class="salary-max">{{$job->salary_max}}<em class="salary-unit">{{$job->salary_unit}}</em></span>
                                            </div>
                                        @else
                                            <div class="job-salary">
                                                <a href="#" style="color: orange">
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                    Đăng nhập để xem mức lương
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        @endif
                                        <div class="job-deadline">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>{{$job->expire}}</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-btn-appl">
                                    <a href="#" class="btn btn-appl">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="readmorestyle-wrap">
                            <a href="#" class="readallstyle reads1">Xem tất cả</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- (end) job board -->
            <!-- sidebar -->
            <div class="col-md-4 col-sm-12 col-12 clear-left">
                <div class="job-sidebar">
                    <h2 class="widget-title">
                        <span>Ngành Nghề</span>
                    </h2>
                    <div class="catelog-list">
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                <a href="{{route('job.searchByCategory',['categoryId' => $category->id])}}">
                                    <span class="cate-img">
                                        <em>{{$category->name}}</em>
                                    </span>
                                    <span class="cate-count">({{$category->jobs_count}})</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="job-sidebar">
                    <div class="sb-banner">
                        <img src="{{asset('img/1_8-sImQWc4k5VV8jMZmbdhA.png')}}">
                    </div>
                </div>
            </div>
            <!-- (end) sidebar -->
        </div>
    </div>
</div>
<!-- (end) job board & sidebar section  -->



<div class="clearfix"></div>



<!-- job board v2 -->
<div class="container-fluid">
    <div class="container job-board2">
        <div class="row">
            <div class="col-md-12 job-board2-wrap-header">
                <h3>Tin tuyển dụng, việc làm mới nhất</h3>
            </div>
            <div class="col-md-12 job-board2-wrap">
                <div class="owl-carousel owl-theme job-board2-contain">
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000 #1</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/alipay-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>Fullstack .NET Developer (Angular/React) #2</h3>
                                <a class="company" href="#">Orient Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/nvg-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>Frontend Developer (JavaScript, ReactJS)</h3>
                                <a class="company" href="#">mgm technology</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/luxoft-vietnam-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>IVI System Test Engineer</h3>
                                <a class="company" href="#">LUXOFT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                    <div class="item job-latest-item">
                        <a href="#" class="job-latest-group">
                            <div class="job-lt-logo">
                                <img src="{{asset('img/fpt-logo.png')}}">
                            </div>
                            <div class="job-lt-info">
                                <h3>[HCM] 02 Solution Architects–Up to $2000</h3>
                                <a class="company" href="#">FPT Software</a>
                                <p class="address" ><i class="fa fa-map-marker pr-1" aria-hidden="true"></i> Đà Nẵng</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:true,
                    slideBy: 2,
                    dots: false
                },
                600:{
                    items:4,
                    nav:false,
                    slideBy: 2,
                    dots: false
                },
                1000:{
                    items: 6,
                    nav:true,
                    loop:false,
                    slideBy: 2
                }
            }
        });
    })
</script>
<!-- (end) job board v2 -->

<div class="clearfix"></div>

{{--<!-- top employer -->
<div class="container-fluid">
    <div class="container top-employer">
        <div class="row">
            <div class="col-md-12 top-employer-contain">
                <div class="header">
                    <h3>Nhà tuyển dùng hàng đầu</h3>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                        <div class="top-employer-item">
                            <a href="#">
                                <div class="emp-img-thumb">
                                    <img src="{{asset('img/fpt-logo.png')}}">
                                </div>
                                <h3 class="company">FPT Software</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                        <div class="top-employer-item">
                            <a href="#">
                                <div class="emp-img-thumb">
                                    <img src="{{asset('img/nvg-logo.png')}}">
                                </div>
                                <h3 class="company">mgm technology</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                        <div class="top-employer-item">
                            <a href="#">
                                <div class="emp-img-thumb">
                                    <img src="{{asset('img/alipay-logo.png')}}">
                                </div>
                                <h3 class="company">ALIPAY Software</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                        <div class="top-employer-item">
                            <a href="#">
                                <div class="emp-img-thumb">
                                    <img src="{{asset('img/luxoft-vietnam-logo.png')}}">
                                </div>
                                <h3 class="company">Luxoft Software</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                        <div class="top-employer-item">
                            <a href="#">
                                <div class="emp-img-thumb">
                                    <img src="{{asset('img/techcombank-logo.png')}}">
                                </div>
                                <h3 class="company">Techcombank</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                        <div class="top-employer-item">
                            <a href="#">
                                <div class="emp-img-thumb">
                                    <img src="{{asset('img/home-credit.png')}}">
                                </div>
                                <h3 class="company">Home Credit</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                        <div class="top-employer-item">
                            <a href="#">
                                <div class="emp-img-thumb">
                                    <img src="{{asset('img/grab-vietnam.png')}}">
                                </div>
                                <h3 class="company">Grab (Vietnam) Ltd.</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 top-employer-wrap">
                        <div class="top-employer-item">
                            <a href="#">
                                <div class="emp-img-thumb">
                                    <img src="{{asset('img/HINH.png')}}">
                                </div>
                                <h3 class="company">Techbase Vietnam</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- (end) top employer -->

<div class="clearfix"></div>


<!-- job-best-salary -->
<div class="container-fluid">
    <div class="container job-best-salary">
        <div class="row">
            <div class="col-md-12 job-board2-wrap-header job-best-salary-header">
                <h3><i class="fa fa-briefcase pr-2"></i> Việc làm hấp dẫn</h3>
            </div>
        </div>
        <div class="row job-best-salary-inner">
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/hdbank-logo.png')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                Java Developer (.NET, PL/SQL)
                            </div>
                            <a href="#company" class="company">
                                HD Bank
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>15 - 35 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hồ Chí Minh</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/SCS_Logo_original.png')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                Senior .NET Developers
                            </div>
                            <a href="#company" class="company">
                                SCS Solution
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>20 - 40 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fpt-logo.png')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                Senior .NET Dev – Signing bonus upto 30M
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>35 - 70 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/novaon-digital-group-logo.png')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET Developer (C#, ASP.NET) Up to $1200
                            </div>
                            <a href="#company" class="company">
                                NOVAON
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- (end) job-best-salary -->


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-ads">
                    <a href="#">
                        <img src="{{asset('img/hna.jpg')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- job-best-salary -->
<div class="container-fluid">
    <div class="container job-best-salary">
        <div class="row">
            <div class="col-md-12 job-board2-wrap-header job-best-salary-header">
                <h3><i class="fa fa-briefcase pr-2"></i> Việc làm lương cao</h3>
            </div>
        </div>
        <div class="row job-best-salary-inner">
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/hdbank-logo.png')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                Java Developer (.NET, PL/SQL)
                            </div>
                            <a href="#company" class="company">
                                HD Bank
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>15 - 35 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hồ Chí Minh</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/SCS_Logo_original.png')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                Senior .NET Developers
                            </div>
                            <a href="#company" class="company">
                                SCS Solution
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>20 - 40 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fpt-logo.png')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                Senior .NET Dev – Signing bonus upto 30M
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>35 - 70 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/novaon-digital-group-logo.png')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET Developer (C#, ASP.NET) Up to $1200
                            </div>
                            <a href="#company" class="company">
                                NOVAON
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg"')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 job-over-item">
                <div class="job-inner-over-item">
                    <a href="#wrap">
                        <div class="thumbnail">
                            <img src="{{asset('img/fitech-logo.jpg')}}" alt="company logo image">
                        </div>
                        <div class="content">
                            <div class="job-name">
                                .NET/C# developers ($1,000-$1,500 net)
                            </div>
                            <a href="#company" class="company">
                                Fitech
                            </a>
                        </div>
                        <div class="extra-info">
                            <p class="salary mt-2"><i class="fa fa-money pr-2"></i>10 - 20 triệu</p>
                            <p class="place"><i class="fa fa-map-marker pr-2"></i>Hà Nội</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- (end) job-best-salary -->

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-ads">
                    <a href="#">
                        <img src="{{asset('img/hna2.jpg')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>--}}

<!-- news -->
<div class="container-fluid">
    <div class="container news-wrapper">
        <div class="row">
            <div class="col-md-12 news-wrapper-head">
                Tư vấn nghề nghiệp từ HR Insider
            </div>
            <div class="col-md-4 col-sm-12 col-12 news-item">
                <div class="news-item-inner">
                    <a href="#wrap">
                        <div class="news-thumb" style="background-image: url('/img/news1.jpg');"></div>
                    </a>
                    <div class="news-details">
                        <div class="tags">
                            <a href="#tag1">Quyền lợi nhân viên</a>
                        </div>
                        <div class="title">
                            <a href="#">
                                5 thời điểm doanh nghiệp không được buộc người lao động thôi việc
                            </a>
                        </div>
                        <div class="meta">
                            Khi nào thì người sử dụng lao động được quyền đơn phương chấm dứt hợp đồng khi nào thì không? Cùng tham khảo bài viết sau đây để hiểu thêm về quyền lợi của người lao động Việt Nam nhé!
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12 news-item">
                <div class="news-item-inner">
                    <a href="#wrap">
                        <div class="news-thumb" style="background-image: url('/img/news2.jpg');"></div>
                    </a>
                    <div class="news-details">
                        <div class="tags">
                            <a href="#tag1">Trước khi nhảy việc</a>
                        </div>
                        <div class="title">
                            <a href="#">
                                Nhảy việc và những con số bạn cần phải lưu tâm
                            </a>
                        </div>
                        <div class="meta">
                            Dù bạn nhảy việc vì lý do gì cũng hãy cân nhắc đến những “con số” sau đây nhé!
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12 news-item">
                <div class="news-item-inner">
                    <a href="#wrap">
                        <div class="news-thumb" style="background-image: url('/img/news3.png');"></div>
                    </a>
                    <div class="news-details">
                        <div class="tags">
                            <a href="#tag1">Huấn luyện nhân sự</a>
                        </div>
                        <div class="title">
                            <a href="#">
                                Đánh giá: bước đệm cần thiết trong việc đào tạo huấn luyện nhân viên
                            </a>
                        </div>
                        <div class="meta">
                            Cú sốc về kinh tế do Covid-19 gây ra đã khiến cho nhiều doanh nghiệp lớn và nhỏ phải nhanh chóng tìm ra các phương án ứng phó tốc độ và hiệu quả để giải quyết bài toán về tìn...
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- (end) news -->

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
                    Discover the best way to find houses, condominiums, apartments and HDBs for sale and rent in Singapore with JobsOnline, Singapore's Fastest Growing Jobs Portal.
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
<script type="text/javascript" src="{{asset('js/readmore.js')}}"></script>
<script type="text/javascript">
    $('.catelog-list').readmore({
        speed: 75,
        maxHeight: 150,
        moreLink: '<a href="#">Xem thêm<i class="fa fa-angle-down pl-2"></i></a>',
        lessLink: '<a href="#">Rút gọn<i class="fa fa-angle-up pl-2"></i></a>'
    });
    localStorage.removeItem('salary')
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jobdata.js')}}"></script>

<script type="text/javascript" src="{{asset('js/pagination.js')}}"></script>
<!-- Owl Stylesheets Javascript -->
<script src="{{asset('js/owlcarousel/owl.carousel.js')}}"></script>
<!-- Read More Plugin -->

{{--@jquery--}}
@toastr_js
@toastr_render

</body>
</html>
