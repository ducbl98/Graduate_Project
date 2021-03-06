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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous"/>
    <!-- select 2 css -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select3.min.css') }}">
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
                @if(!$isCompany)
                    <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i> <span
                                    class="hidden-text">T??m ki???m</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">????ng K??</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">????ng Nh???p</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                VI
                            </a>
                            <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-employers" href="#" tabindex="-1" aria-disabled="true"
                               style="color: #fff!important">Nh?? Tuy???n D???ng</a>
                        </li>
                    </ul>
                @else
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
                                <a class="dropdown-item" href="{{route('company.profile.show')}}">Trang c?? nh??n</a>
                                <a class="dropdown-item" href="{{route('company.change-password.show')}}">Thay ?????i m???t kh???u</a>
                                <a class="dropdown-item" href="{{route('logout')}}">????ng xu???t</a>
                            </div>
                        </li>
                    </ul>
                @endif
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
                <a class="nav-link" href="{{route('company.post.list')}}">Qu???n l?? ????ng tuy???n</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('company.candidate.list')}}">Qu???n l?? ???ng vi??n</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('company.profile.show')}}">T??i kho???n</a>
            </li>
        </ul>
        <ul class="rec-nav-right">
            <li class="nav-item">
                <a class="nav-link" href="#">T??m h??? s??</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('company.post.create')}}">????ng tuy???n</a>
            </li>
        </ul>
    </div>
</nav>
<!--  recuiter Nav -->

<!-- main Content -->
<div class="container">
    <div class="tv-content-left">
        <div class="tv-profile-left">
            <div class="tv-published-recruitment bg-fc205c color-white text-center ph-20 pv-8">
                <a href="{{route('company.post.create')}}" class="color-white" style="color: white !important;">
                    <p class="mb-5 fw-500">
                        <img class="icon-flat" src="https://timviec.com.vn/icon-menu/upload-1.png" alt=""> ????ng tin
                        tuy???n d???ng
                    </p>
                    <p class="mb-0 fs-13 font-italic">C??ch nhanh nh???t ????? t??m ???ng vi??n</p>
                </a>
            </div>
            <div class="tv-profile-main text-center">
                <img class="tv-profile-img"
                     src="{{ $companyProfile->company->avatar_url ? asset('storage/'.$companyProfile->company->avatar_url) : "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/OOjs_UI_icon_userAvatar-constructive.svg/1024px-OOjs_UI_icon_userAvatar-constructive.svg.png" }}"
                     alt="">
                <h2 class="tv-profile-name fs-16 mt-10">{{$companyProfile->name}}</h2>
            </div>
            <div class="tv-pro-nav-side-menu">
                <div class="menu-list">
                    <ul class="tv-pro-nav-menu list-unstyled text-left ps-container ps-theme-default ps-active-y"
                        data-ps-id="b0985f30-527e-fae4-aa45-ed03f81550bc">
                        <li class="active">
                            <a href="#">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/setting.png"> Qu???n l?? chung
                            </a>
                        </li>
                        {{--<li class="">
                            <a href="#">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/upload.png"> ????ng tin tuy???n
                                d???ng
                            </a>
                        </li>--}}
                        <li class="">
                            <a href="{{route('company.post.list')}}">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/forms.png"> Qu???n l?? ????ng tuy???n
                            </a>
                        </li>
                        <li class="" id="tooltip_ung_vien">
                            <a href="{{route('company.candidate.list')}}" style="padding-left: 12px;">
                                <i class="fas fa-users" style="margin-right: 6px;font-size: 18px;color: #666;">
                                </i>Qu???n l?? ???ng vi??n
                            </a>
                        </li>
                        {{--<li class="">
                            <a href="#">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/start.png"> H??? s?? ???? l??u
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/ho-so-da-ung-tuyen">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/resume.png"> H??? s?? ???? ???ng
                                tuy???n
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/ho-so-da-xem">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/check.png"> H??? s?? ???? xem
                                th??ng tin
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/quan-ly-dich-vu-va-dang-tin">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/system.png"> Qu???n l?? d???ch
                                v???
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/thong-bao-ho-so-phu-hop">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/notification.png"> Th??ng
                                b??o h??? s?? ph?? h???p
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/tin-nhan">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/email.png"> Tin nh???n
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/cap-nhat-thong-tin-cong-ty">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/work.png"> Th??ng tin c??ng
                                ty
                            </a>
                        </li>--}}
                        {{--                        <li class="">
                                                    <a href="https://timviec.com.vn/nha-tuyen-dung/giay-phep-kinh-doanh" style="padding-left: 12px;">
                                                        <i class="far fa-file-certificate" style="margin-right: 6px;font-size: 18px;color: #666;">
                                                        </i>Gi???y ph??p kinh doanh
                                                    </a>
                                                </li>--}}
                        {{--<li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/danh-sach-chien-dich">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/resume.png"> Danh s??ch
                                chi???n d???ch
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/quan-ly-email">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/email.png"> M???u Email ph???ng
                                v???n
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/email-da-gui">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/email.png"> Email ???? g???i
                            </a>
                        </li>--}}
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -94.6px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                            </div>
                        </div>
                        {{--<div class="ps-scrollbar-y-rail" style="top: 97.6px; height: 658px; right: 3px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 85px; height: 572px;">
                            </div>
                        </div>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tv-content-right">
        <div class="tv-profile-right">
            <!-- Top content -->
            <div class="tv-box-traffic">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="#">
                            <div class="bg-white box_shadow pd-20 mb-20">
                                <i class="fas fa-briefcase mr-10">
                                </i>
                                <span class="fs-24 fw-500">{{count($companyProfile->jobs)}}</span>
                                <p class="mb-0">Vi???c l??m ???? ????ng
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="#">
                            <div class="bg-white box_shadow pd-20 mb-20">
                                <i class="fas fa-file-signature mr-10">
                                </i>
                                <span class="fs-24 fw-500">{{$companyProfile->applyApplications->count()}}</span>
                                <p class="mb-0">H??? s?? ???ng tuy???n
                                </p>
                            </div>
                        </a>
                    </div>
                    {{--<div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="#">
                            <div class="bg-white box_shadow pd-20 mb-20">
                                <i class="fas fa-newspaper mr-10">
                                </i>
                                <span class="fs-24 fw-500">0</span>
                                <p class="mb-0">Tin t???c ???? ????ng
                                </p>
                            </div>
                        </a>
                    </div>--}}
                    {{--<div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="#">
                            <div class="bg-white box_shadow pd-20 mb-20">
                                <i class="fas fa-eye mr-10">
                                </i>
                                <span class="fs-24 fw-500">0</span>
                                <p class="mb-0">L?????t t????ng t??c tr??n vi???c l??m
                                </p>
                            </div>
                        </a>
                    </div>--}}
                    {{--<div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white box_shadow pd-20 mb-20">
                            <i class="fas fa-sync mr-10">
                            </i>
                            <span class="fs-24 fw-500">12</span>
                            <p class="mb-0">L?????t t????ng t??c tr??n tin t???c
                            </p>
                        </div>
                    </div>--}}
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white box_shadow pd-20 mb-20">
                            <i class="fas fa-file-signature mr-10">
                            </i>
                            <span class="fs-24 fw-500">{{$jobViews}}</span>
                            <p class="mb-0">L?????t xem vi???c l??m
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tv-box-list-service">
                <div class="row">
                    <div class="col-6">
                        <h2 class="fs-18">Danh s??ch d???ch v???
                        </h2>
                        <div class="bg-white box_shadow" style="height: 235px;">
                            <div class="text-center pd-20">
                                <div class="mb-10 text-center">
                                    <img src="https://timviec.com.vn/images/icon_not_service.png" width="200px"
                                         alt="images">
                                </div>
                                Qu?? kh??ch ch??a ????ng k?? g??i d???ch v??? n??o.
                                <br>
                                <a href="#" target="_blank" style="color: blue">Click v??o ????y
                                </a> ????? bi???t th??m chi ti???t ho???c vui l??ng li??n h??? chuy??n vi??n h??? tr???, t?? v???n.
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="fs-18">Xem h??? s??
                        </h2>
                        <div class="table-responsive">
                            <table class="table text-nowrap bg-white mb-0">
                                <thead>
                                <tr class="bg-main color-white">
                                    <th class="fw-500 fs-15 pv-8">S??? h??? s?? ???? xem
                                    </th>
                                    <th class="fw-500 fs-15 pv-8 text-center">D???ch v??? h??? s??
                                    </th>
                                    <th class="fw-500 fs-15 pv-8 text-center">D???ch v??? ????ng tin
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="text-center">
                                            <a href="#"
                                               class="name-job-number color-main mt-8 mb-0 d-inline-block"> {{$seekerApplicationSeen}}
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="name-job-status mt-8 mb-0"> 0/0
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="name-job-time mt-8 mb-0">0
                                                /0
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="banner mt-20">
                            <a href="#" target="_blank">
                                <img src="https://timviec.com.vn/images/banner-ntd.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-20">
            </div>
            <div class="mb-20">
            </div>
            <div class="tv-box-latest-application">
                <a href="{{route('company.candidate.list')}}" class="color-main float-right pt-10">Xem t???t c??? &gt;&gt;
                </a>
                <h2 class="fs-18">H??? s?? ???ng tuy???n m???i nh???t
                </h2>
                <div class="table-responsive">
                    <table class="table text-nowrap bg-white mb-0">
                        <thead>
                        <tr class="bg-main color-white">
                            <th class="fw-500 fs-16 pv-8">H??? s??
                            </th>
                            <th class="fw-500 fs-16 pv-8 text-center">V??? tr?? ???ng tuy???n
                            </th>
                            <th class="fw-500 fs-1 pv-8 text-center">Ng??y n???p
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!$newestCandidate)
                            <tr>
                                <td class="no-data" colspan="3">
                                    <div class="text-center">
                                        <p class="fs-14">
                                            <i style="color: #000">Ch??a c?? d??? li???u
                                            </i>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td>{{$newestCandidate->user->name}}</td>
                                <td class="text-center">{{$newestCandidate->job->title}}</td>
                                <td class="text-center">{{$newestCandidate->created_at}}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mb-20">
            </div>
            <div class="modal fade" id="modal-btn-suitability-id-33869092" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 600px">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="text-center pd-20">
                            <button type="button" class="close" data-dismiss="modal">??
                            </button>
                            <h2 class="fs-20 color-333 mb-10">
                                Chi ti???t m???c ????? ph?? h???p c???a ???ng vi??n Tr???n Minh ?????c
                            </h2>
                        </div>
                        <div class="modal-body box-evaluate ph-40">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="box-chart">
                                        <div class="chart" data-percent="41" data-scale-color="#ffb400">41%
                                            <canvas height="287" width="287" style="height: 230px; width: 230px;">
                                            </canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="list-point-candi">
                                        <ul class="list-unstyled">
                                            <li>
                        <span>
                          <strong>1.
                          </strong>
                          <span class="border-fc2e66">10/10
                          </span>
                          <label>Ng??nh ngh???
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>2.
                          </strong>
                          <span class="border-fc2e66">10/10
                          </span>
                          <label>?????a ??i???m
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>3.
                          </strong>
                          <span class="border-fc2e66">10/10
                          </span>
                          <label>V??? tr?? ???ng tuy???n
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>4.
                          </strong>
                          <span class="border-fc2e66">0/10
                          </span>
                          <label>T??? kh??a
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>5.
                          </strong>
                          <span class="border-fc2e66">10/15
                          </span>
                          <label>N??m kinh nghi???m
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>6.
                          </strong>
                          <span class="border-fc2e66">0/5
                          </span>
                          <label>H??nh th???c l??m vi???c
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>7.
                          </strong>
                          <span class="border-fc2e66">0/10
                          </span>
                          <label>L????ng
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>8.
                          </strong>
                          <span class="border-fc2e66">0/10
                          </span>
                          <label>??i???m chu???n CV
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>9.
                          </strong>
                          <span class="border-fc2e66">1/20
                          </span>
                          <label>Kinh nghi???m l??m vi???c
                          </label>
                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<!--  main Content -->


<div class="clearfix"></div>


<!-- job support -->
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
                            <input type="text" placeholder="Nh???p email c???a b???n" class="newsletter-email form-control">
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

