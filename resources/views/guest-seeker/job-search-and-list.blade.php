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

    <!-- ion slider -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                @if(!$isSeeker)
                    <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-text">Tìm kiếm</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('showSeekerRegister') }}">Đăng Ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('seekerLogin') }}">Đăng Nhập</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                VI
                            </a>
                            <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">English</a>
                            </div>
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

<!-- search section -->
<div class="container-fluid search-fluid">
    <div class="container">
        <div class="search-wrapper">

            <ul class="nav nav-tabs search-nav-tabs" id="myTab" role="tablist">
                <li class="nav-item search-nav-item">
                    <a class="nav-link snav-link {{$type === 'company' ? '' :'active'}}" id="home-tab" data-toggle="tab" href="#home" role="tab"
                       aria-controls="home" aria-selected="true">Tìm việc làm</a>
                </li>
                <li class="nav-item search-nav-item">
                    <a class="nav-link snav-link {{$type === 'company' ? 'active' : ''}}" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">Tìm công ty</a>
                </li>
            </ul>
            <div class="tab-content search-tab-content" id="myTabContent">
                <!-- content tab 1 -->
                <div class="tab-pane stab-pane fade {{$type === 'company' ? '' :'show active'}}" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="{{route('job.search')}}" method="POST" class="bn-search-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-sm-12">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="input-group s-input-group">
                                            <input name="keyword" value="{{$existTitle}}" type="text"
                                                   class="form-control sinput"
                                                   placeholder="Nhập kỹ năng, công việc,...">
                                            <span><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="technique" id="computer-languages">
                                            <option value="" selected hidden>Tất cả ngôn ngữ ,công nghệ</option>
                                            @foreach($techniqueTypes as $techniqueType)
                                                <optgroup label="{{$techniqueType->name}}">
                                                    @foreach($techniqueType->techniques as $technique)
                                                        <option
                                                            value="{{$technique->id}}" {{$existTechnique == $technique->id ? 'selected' : ''}}>{{$technique->name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach
                                        </select>
                                        <i class="fa fa-code sfa" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="province" id="s-provinces">
                                            <option value="" selected hidden>Tất cả địa điểm</option>
                                            @foreach($provinces as $province)
                                                <option
                                                    value="{{$province->id}}" {{$existProvince == $province->id ? 'selected' : ''}}>{{$province->name}}</option>
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
                <div class="tab-pane stab-pane fade {{$type === 'company' ? 'show active' : ''}}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="{{route('job.searchByCompany')}}" method="POST" class="bn-search-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-sm-12">
                                <div class="input-group s-input-group w-100">
                                    <input name="company_name" type="text" class="form-control sinput"
                                           placeholder="Nhập tên công ty " value={{$type === 'company' ? $categoryId : ''}}>
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
            <div class="col-md-3 col-sm-12 col-12">
                <a id="click_advance" class="btn btn-c-filter" type="button" data-toggle="collapse"
                   data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                    <i class="pr-2 fa fa-times" id="icon-s-sw" aria-hidden="true"></i>Lọc và Phân Loại
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
                                                        <a href="#" style="pointer-events: none; font-weight: bold"
                                                           class="filter-action">Tất cả ngành nghề</a>
                                                        <span class="filter-count">{{$totalJobs}}</span>
                                                    </div>
                                                    @foreach($categories as $category)
                                                        <div class="filter-topic cotain-common-filter">
                                                            <a href="{{route('job.searchByCategory',['categoryId' => $category->id])}}"
                                                               class="filter-action {{($type==='category'&&$categoryId == $category->id) ? "filter-action-selection":''}}">{{$category->name}}</a>
                                                            <span class="filter-count">{{$category->jobs_count}}</span>
                                                        </div>
                                                    @endforeach

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
                                                                <input type="number" class="if-price" id=""
                                                                       placeholder="50,000">
                                                            </span>
                                                            <span class="_fpblock _line">
                                                                <p>-</p>
                                                            </span>
                                                            <span class="_fpblock">
                                                                <input type="number" class="if-price" id=""
                                                                       placeholder="1,000,000">
                                                            </span>
                                                            <span class="_fpblock">
                                                                 <button type="submit" class="sb-fprice"><i
                                                                         class="fa fa-angle-right"
                                                                         aria-hidden="true"></i></button>
                                                             </span>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="{{route('job.searchBySalary')}}" method="POST"
                                                  class="al-price-filter">
                                                @csrf
                                                <div class="filter-panel">
                                                    <div class="panel-content">
                                                        <div class="filter-topic filter-input-price">
                                                            <input type="hidden" name="salary_unit" id="salary-unit"/>
                                                            <input type="text" class="js-range-slider"
                                                                   name="salary_range" value=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="filter-panel">
                                                    <div class="panel-content">
                                                        <div class="filter-topic filter-input-price">
                                                            <div class="row">
                                                                <div class="col-sm-9"
                                                                     style="display: flex;justify-content: space-between;padding: 0">
                                                                    <button class="sb-fprice-1" id="btn-unit-1"
                                                                            data-unit="$"
                                                                            style="width: 60px;margin-left: 20px">$
                                                                    </button>
                                                                    <button class="sb-fprice-1" id="btn-unit-2"
                                                                            data-unit="Triệu VND"
                                                                            style="background-color: darkred;width: 95px">
                                                                        Triệu VND
                                                                    </button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button type="submit" class="sb-fprice"><i
                                                                            class="fa fa-angle-right"
                                                                            aria-hidden="true"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="filter-form-item">
                                    <p>
                                        <a id="clickc3_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-video-duration" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                                        <a id="clickc4_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-provider" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                                </div>--}}

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
                </div> <!-- ./ collapse -->
            </div>
            <div class="col-md-9 col-sm-12 col-12">
                <h4 class="search-find">Tìm thấy {{$totalSearchJobs}} việc làm đang tuyển dụng</h4>
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
                                        <a href="{{route('job.showPost',['jobId'=>$job->id])}}" class="btn btn-appl">Xem chi tiết</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
<script type="text/javascript" src="{{asset('js/readmore.js')}}"></script>
<script type="text/javascript">
    var initialSalary = JSON.parse(localStorage.getItem('salary'))
    console.log(initialSalary);
    var min_salary = initialSalary ? initialSalary.salaryMin : 0;
    var max_salary = initialSalary ? initialSalary.salaryMax : 50;
    var salary_step = initialSalary ? initialSalary.salaryStep : 1;
    var from_salary = initialSalary ? initialSalary.salaryFrom : 10;
    var to_salary = initialSalary ? initialSalary.salaryTo : 40;
    var salary_unit = initialSalary ? initialSalary.salaryUnit : "Triệu VND";

    if (salary_unit === '$') {
        $('#btn-unit-1').css({
            'width': '60px',
            'margin-left': '20px',
            'background-color': 'darkred',
        })
        $('#btn-unit-2').css({
            'width': '95px',
            'background-color': '#f0f0f0',
        })
    }
    // localStorage.removeItem('salary')

    $('.catelog-list').readmore({
        speed: 75,
        maxHeight: 150,
        moreLink: '<a href="#">Xem thêm<i class="fa fa-angle-down pl-2"></i></a>',
        lessLink: '<a href="#">Rút gọn<i class="fa fa-angle-up pl-2"></i></a>'
    });
    $(document).ready(function () {
        $('ul.pagination').css('display', 'flex');
        salaryUnit.value = salary_unit
    })
    $(".js-range-slider").ionRangeSlider({
        type: "double",
        skin: "square",
        min: min_salary,
        max: max_salary,
        from: from_salary,
        to: to_salary,
        onFinish: function (data) {
            localStorage.setItem('salary', JSON.stringify({
                'salaryMin': data.min,
                'salaryMax': data.max,
                'salaryFrom': data.from,
                'salaryTo': data.to,
                'salaryUnit': salary_unit,
                'salaryStep': salary_step,
            }))
        }
    });

    var instance = $(".js-range-slider").data("ionRangeSlider");
    console.log(instance)

    var btns = document.querySelectorAll('.sb-fprice-1');
    var salaryUnit = document.querySelector('#salary-unit');
    btns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            removeClasses();
            addClasses(btn);
        });
    });

    function removeClasses() {
        btns.forEach((btn) => {
            salary_unit = btn.getAttribute("data-unit")
            if (salary_unit === '$') {
                btn.setAttribute("style", "background-color: #f0f0f0;;width:60px ;margin-left: 20px;");
            } else {
                btn.setAttribute("style", "background-color: #f0f0f0;;width:95px");
            }
        });
    }

    function addClasses(btn) {
        btn.setAttribute("style", "background-color: darkred;");
        salary_unit = btn.getAttribute("data-unit")
        if (salary_unit === '$') {
            btn.setAttribute("style", "background-color: darkred;width:60px ;margin-left: 20px;");
        } else {
            btn.setAttribute("style", "background-color: darkred;width:95px");
        }
        switch (salary_unit) {
            case "$" :
                min_salary = 0;
                max_salary = 5000;
                salary_step = 50
                from_salary = 1000;
                to_salary = 4000;
                salary_unit = "$";
                instance.update({
                    min: min_salary,
                    max: max_salary,
                    from: from_salary,
                    to: to_salary,
                    step: salary_step,
                })
                break;
            case "Triệu VND":
                min_salary = 0;
                max_salary = 50;
                salary_step = 1
                from_salary = 10;
                to_salary = 40;
                instance.update({
                    min: min_salary,
                    max: max_salary,
                    from: from_salary,
                    to: to_salary,
                    step: salary_step,
                })
                break;
        }
        salaryUnit.value = salary_unit
        localStorage.setItem('salary', JSON.stringify({
            'salaryMin': instance.options.min,
            'salaryMax': instance.options.max,
            'salaryFrom': instance.options.from,
            'salaryTo': instance.options.to,
            'salaryUnit': salary_unit,
            'salaryStep': instance.options.step,
        }))
        console.log(JSON.parse(localStorage.getItem('salary')))
        console.log(min_salary, max_salary, from_salary, to_salary, salary_unit)

    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>--}}
{{--<script src="{{asset('js/popper.min.js')}}"></script>--}}
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jobdata.js')}}"></script>

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- Owl Stylesheets Javascript -->
<script src="{{asset('js/owlcarousel/owl.carousel.js')}}"></script>
<!-- Read More Plugin -->


</body>
</html>
