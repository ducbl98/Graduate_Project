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
            <a href="#" class="nav-logo">
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
                @if(!$isCompany)
                    <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i> <span
                                    class="hidden-text">Tìm kiếm</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đăng Ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đăng Nhập</a>
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
                               style="color: #fff!important">Nhà Tuyển Dụng</a>
                        </li>
                    </ul>
                @else
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
                                <a class="dropdown-item" href="{{route('company.profile.show')}}">Trang cá nhân</a>
                                <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
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
                <a class="nav-link" href="{{route('company.post.list')}}">Quản lý đăng tuyển</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('company.candidate.list')}}">Quản lý ứng viên</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quản lý đăng tin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quản lý hồ sơ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tài khoản</a>
            </li>
        </ul>
        <ul class="rec-nav-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Tìm hồ sơ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Đăng tuyển</a>
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
                        <img class="icon-flat" src="https://timviec.com.vn/icon-menu/upload-1.png" alt=""> Đăng tin
                        tuyển dụng
                    </p>
                    <p class="mb-0 fs-13 font-italic">Cách nhanh nhất để tìm ứng viên</p>
                </a>
            </div>
            <div class="tv-profile-main text-center">
                <img class="tv-profile-img"
                     src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e8ec609a-f5e5-4a17-8390-9f819fcd8e1b/ddj9om5-4e49c76d-dc38-4e8a-afd6-fc3994ed1d3c.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2U4ZWM2MDlhLWY1ZTUtNGExNy04MzkwLTlmODE5ZmNkOGUxYlwvZGRqOW9tNS00ZTQ5Yzc2ZC1kYzM4LTRlOGEtYWZkNi1mYzM5OTRlZDFkM2MucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.PwW9RPGX7l7ei5VUJmZJGLhry2KkVqok8E8pfxcDgmk"
                     alt="">
                <h2 class="tv-profile-name fs-16 mt-10">Home1
                </h2>
            </div>
            <div class="tv-pro-nav-side-menu">
                <div class="menu-list">
                    <ul class="tv-pro-nav-menu list-unstyled text-left ps-container ps-theme-default ps-active-y"
                        data-ps-id="b0985f30-527e-fae4-aa45-ed03f81550bc">
                        <li class="active">
                            <a href="#">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/setting.png"> Quản lý chung
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/upload.png"> Đăng tin tuyển
                                dụng
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/forms.png"> Tất cả tuyển
                                dụng
                            </a>
                        </li>
                        <li class="" id="tooltip_ung_vien">
                            <a href="#" style="padding-left: 12px;">
                                <i class="fas fa-users" style="margin-right: 6px;font-size: 18px;color: #666;">
                                </i>Ứng viên
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/start.png"> Hồ sơ đã lưu
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/ho-so-da-ung-tuyen">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/resume.png"> Hồ sơ đã ứng
                                tuyển
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/ho-so-da-xem">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/check.png"> Hồ sơ đã xem
                                thông tin
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/quan-ly-dich-vu-va-dang-tin">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/system.png"> Quản lý dịch
                                vụ
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/thong-bao-ho-so-phu-hop">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/notification.png"> Thông
                                báo hồ sơ phù hợp
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/tin-nhan">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/email.png"> Tin nhắn
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/cap-nhat-thong-tin-cong-ty">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/work.png"> Thông tin công
                                ty
                            </a>
                        </li>
                        {{--                        <li class="">--}}
                        {{--                            <a href="https://timviec.com.vn/nha-tuyen-dung/giay-phep-kinh-doanh" style="padding-left: 12px;">--}}
                        {{--                                <i class="far fa-file-certificate" style="margin-right: 6px;font-size: 18px;color: #666;">--}}
                        {{--                                </i>Giấy phép kinh doanh--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/danh-sach-chien-dich">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/resume.png"> Danh sách
                                chiến dịch
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/quan-ly-email">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/email.png"> Mẫu Email phỏng
                                vấn
                            </a>
                        </li>
                        <li class="">
                            <a href="https://timviec.com.vn/nha-tuyen-dung/email-da-gui">
                                <img class="icon-flat" src="https://timviec.com.vn/icon-menu/email.png"> Email đã gửi
                            </a>
                        </li>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -94.6px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                            </div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 97.6px; height: 658px; right: 3px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 85px; height: 572px;">
                            </div>
                        </div>
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
                                <span class="fs-24 fw-500">12</span>
                                <p class="mb-0">Việc làm đã đăng
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="#">
                            <div class="bg-white box_shadow pd-20 mb-20">
                                <i class="fas fa-file-signature mr-10">
                                </i>
                                <span class="fs-24 fw-500">12</span>
                                <p class="mb-0">Hồ sơ ứng tuyển
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="#">
                            <div class="bg-white box_shadow pd-20 mb-20">
                                <i class="fas fa-newspaper mr-10">
                                </i>
                                <span class="fs-24 fw-500">12</span>
                                <p class="mb-0">Tin tức đã đăng
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="#">
                            <div class="bg-white box_shadow pd-20 mb-20">
                                <i class="fas fa-eye mr-10">
                                </i>
                                <span class="fs-24 fw-500">12</span>
                                <p class="mb-0">Lượt tương tác trên việc làm
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white box_shadow pd-20 mb-20">
                            <i class="fas fa-sync mr-10">
                            </i>
                            <span class="fs-24 fw-500">12</span>
                            <p class="mb-0">Lượt tương tác trên tin tức
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white box_shadow pd-20 mb-20">
                            <i class="fas fa-file-signature mr-10">
                            </i>
                            <span class="fs-24 fw-500">0</span>
                            <p class="mb-0">Lượt xem việc làm
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tv-box-list-service">
                <div class="row">
                    <div class="col-6">
                        <h2 class="fs-18">Danh sách dịch vụ
                        </h2>
                        <div class="bg-white box_shadow" style="height: 235px;">
                            <div class="text-center pd-20">
                                <div class="mb-10 text-center">
                                    <img src="https://timviec.com.vn/images/icon_not_service.png" width="200px"
                                         alt="images">
                                </div>
                                Quý khách chưa đăng ký gói dịch vụ nào.
                                <br>
                                <a href="#" target="_blank" style="color: blue">Click vào đây
                                </a> để biết thêm chi tiết hoặc vui lòng liên hệ chuyên viên hỗ trợ, tư vấn.
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="fs-18">Xem hồ sơ
                        </h2>
                        <div class="table-responsive">
                            <table class="table text-nowrap bg-white mb-0">
                                <thead>
                                <tr class="bg-main color-white">
                                    <th class="fw-500 fs-15 pv-8">Số hồ sơ đã xem
                                    </th>
                                    <th class="fw-500 fs-15 pv-8 text-center">Dịch vụ hồ sơ
                                    </th>
                                    <th class="fw-500 fs-15 pv-8 text-center">Dịch vụ đăng tin
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="text-center">
                                            <a href="https://timviec.com.vn/nha-tuyen-dung/ho-so-da-xem"
                                               class="name-job-number color-main mt-8 mb-0 d-inline-block"> 0
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
                            <a href="https://salary.timviec.com.vn/" target="_blank">
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
                <a href="#" class="color-main float-right pt-10">Xem tất cả &gt;&gt;
                </a>
                <h2 class="fs-18">Hồ sơ ứng tuyển mới nhất
                </h2>
                <div class="table-responsive">
                    <table class="table text-nowrap bg-white mb-0">
                        <thead>
                        <tr class="bg-main color-white">
                            <th class="fw-500 fs-16 pv-8">Hồ sơ
                            </th>
                            <th class="fw-500 fs-16 pv-8 text-center">Vị trí ứng tuyển
                            </th>
                            <th class="fw-500 fs-1 pv-8 text-center">Ngày nộp
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="no-data" colspan="3">
                                <div class="text-center">
                                    <p class="fs-14">
                                        <i style="color: #000">Không có dữ liệu phù hợp ...
                                        </i>
                                    </p>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                        </tr>

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
                            <button type="button" class="close" data-dismiss="modal">×
                            </button>
                            <h2 class="fs-20 color-333 mb-10">
                                Chi tiết mức độ phù hợp của ứng viên Trần Minh Đức
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
                          <label>Ngành nghề
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>2.
                          </strong>
                          <span class="border-fc2e66">10/10
                          </span>
                          <label>Địa điểm
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>3.
                          </strong>
                          <span class="border-fc2e66">10/10
                          </span>
                          <label>Vị trí ứng tuyển
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>4.
                          </strong>
                          <span class="border-fc2e66">0/10
                          </span>
                          <label>Từ khóa
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>5.
                          </strong>
                          <span class="border-fc2e66">10/15
                          </span>
                          <label>Năm kinh nghiệm
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>6.
                          </strong>
                          <span class="border-fc2e66">0/5
                          </span>
                          <label>Hình thức làm việc
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>7.
                          </strong>
                          <span class="border-fc2e66">0/10
                          </span>
                          <label>Lương
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>8.
                          </strong>
                          <span class="border-fc2e66">0/10
                          </span>
                          <label>Điểm chuẩn CV
                          </label>
                        </span>
                                            </li>
                                            <li>
                        <span>
                          <strong>9.
                          </strong>
                          <span class="border-fc2e66">1/20
                          </span>
                          <label>Kinh nghiệm làm việc
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

