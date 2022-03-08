<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Toastr -->
    @toastr_css

</head>
<body class="">
<!-- [ Pre-loader ] start -->
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{asset('img/admin.jpg')}}" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details">Admin<i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
{{--                        <li class="list-group-item"><a href="#"><i class="feather icon-user m-r-5"></i>View Profile</a></li>--}}
                        <li class="list-group-item"><a href="{{route('logout')}}"><i class="feather icon-log-out m-r-5"></i>Đăng xuất</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Điều hướng </label>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.homepage')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Trang chủ</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.category.index')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Danh mục</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.city.index')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Địa điểm</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.technique.index')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Công nghệ</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.user.index')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Người dùng</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#"><span></span></a>
        <a href="{{route('admin.homepage')}}" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img style="width: 140px" src="{{asset('img/techjobs_bgb.png')}}" alt="" class="logo">
        </a>
        <a href="#" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
</header>
<!-- [ Header ] end -->



<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Trang chủ</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            {{--<div class="col-lg-7 col-md-12">
                <!-- support-section start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0">3</h2>
                                <span class="text-c-blue">Tin tuyển dụng đã phê duyệt</span>
                            </div>
                            <div id="support-chart"></div>
                            <div class="card-footer bg-primary text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white">2</h4>
                                        <span>Ứng Tuyển</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">5</h4>
                                        <span>Bình Luận</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">3</h4>
                                        <span>...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0">0</h2>
                                <span class="text-c-green">Tin tức đã xuất bản</span>
                            </div>
                            <div id="support-chart1"></div>
                            <div class="card-footer bg-success text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white">10</h4>
                                        <span>Bình Luận</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">5</h4>
                                        <span>...</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">3</h4>
                                        <span>...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support-section end -->
            </div>--}}
            <div class="col-lg-12 col-md-12">
                <!-- page statustic card start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow">{{$totalUser}}</h4>
                                        <h6 class="text-muted m-b-0">Người dùng</h6>
                                    </div>
                                    <div class="col-4 text-right">
{{--                                        <i class="feather icon-bar-chart-2 f-28"></i>--}}
                                        <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">%</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">{{$totalSeeker}}</h4>
                                        <h6 class="text-muted m-b-0">Người tìm việc</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">%</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-purple">{{$totalRecruiter}}</h4>
                                        <h6 class="text-muted m-b-0">Nhà Tuyển Dụng</h6>
                                    </div>
                                    <div class="col-4 text-right">
{{--                                        <i class="feather icon-file-text f-28"></i>--}}
                                        <i class="fa fa-building fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-purple">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">%</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red">{{$totalJob}}</h4>
                                        <h6 class="text-muted m-b-0">Tin tuyển dụng</h6>
                                    </div>
                                    <div class="col-4 text-right">
{{--                                        <i class="feather icon-calendar f-28"></i>--}}
                                        <i class="feather icon-file-text f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">%</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">{{$totalCategory}}</h4>
                                        <h6 class="text-muted m-b-0">Danh mục</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-thumbs-down f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">%</p>
                                    </div>
                                    <div class="col-3 text-right">
{{--                                        <i class="feather icon-trending-up text-white f-16"></i>--}}
                                        <i class="fa fa-arrows-alt fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow">{{$totalPlace}}</h4>
                                        <h6 class="text-muted m-b-0">Địa điểm</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        {{--                                        <i class="feather icon-bar-chart-2 f-28"></i>--}}
                                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">%</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">{{$totalTechnique}}</h4>
                                        <h6 class="text-muted m-b-0">Công nghệ</h6>
                                    </div>
                                    <div class="col-4 text-right">
{{--                                        <i class="feather icon-file-text f-28"></i>--}}
                                        <i class="fa fa-bitbucket fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">%</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page statustic card end -->
            </div>
            <!-- prject ,team member start -->
            <!-- prject ,team member start -->
            <!-- seo start -->
            <!-- seo end -->

            <!-- Latest Customers start -->
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
<!-- Warning Section start -->
<!-- Older IE warning message -->
<!-- Warning Section Ends -->

<!-- Required Js -->
<script src="{{asset('js/admin/vendor-all.js')}}"></script>
<script src="{{asset('js/admin/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/ripple.js')}}"></script>
<script src="{{asset('js/admin/pcoded.js')}}"></script>

<!-- Apex Chart -->
<script src="{{asset('js/admin/plugins/apexcharts.min.js')}}"></script>


<!-- custom-chart js -->
<script src="{{asset('js/admin/pages/dashboard-main.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@jquery
@toastr_js
@toastr_render
</body>

</html>
