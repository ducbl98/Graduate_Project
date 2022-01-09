<!DOCTYPE html>
<html lang="en">

<head>
    <title>TechJob Dashboard</title>

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


</head>
<body class="">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{asset('img/icon_avatar.jpg')}}" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details">Lee <i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item">
                            <a href="#">
                                <i class="feather icon-user m-r-5"></i>
                                View Profile
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <i class="feather icon-settings m-r-5"></i>
                                Settings
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <i class="feather icon-log-out m-r-5"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Management</label>
                </li>
                <li class="nav-item">
                    <a href="?c=Home&a=Admin" class="nav-link "><span class="pcoded-micon">
					    	<i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span
                            class="pcoded-mtext">Component</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Roles</a></li>
                        <li><a href="#">Post</a></li>
                        <li><a href="#">List Reports</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                        <span class="pcoded-mtext">Users & Roles</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Roles</a></li>
                    </ul>
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
        <a href="#" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="{{asset('img/logo.png')}}" alt="" class="logo">
            <img src="{{asset('img/logo-icon.png')}}" alt="" class="logo-thumb">
        </a>
        <a href="#" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                            class="icon feather icon-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Notifications</h6>
                            <div class="float-right">
                                <a href="#" class="m-r-10">mark as read</a>
                                <a href="#">clear all</a>
                            </div>
                        </div>
                        <ul class="noti-body">
                            <li class="n-title">
                                <p class="m-b-0">NEW</p>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius"
                                         src="{{asset('img/avatar-1.jpg')}}"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                        <p>New ticket Added</p>
                                    </div>
                                </div>
                            </li>
                            <li class="n-title">
                                <p class="m-b-0">EARLIER</p>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius"
                                         src="{{asset('img/avatar-2.jpg')}}"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius"
                                         src="{{asset('img/avatar-1.jpg')}}"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                        <p>currently login</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius"
                                         src="{{asset('img/avatar-2.jpg')}}"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="noti-footer">
                            <a href="#">show all</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="{{asset('img/avatar-1.jpg')}}" class="img-radius"
                                 alt="User-Profile-Image">
                            <span>John Doe</span>
                            <a href="auth-signin.html" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i>
                                    Profile</a></li>
                            <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My
                                    Messages</a></li>
                            <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock
                                    Screen</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
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
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <!-- support-section start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0">2</h2>
                                <span class="text-c-blue">Tin tuyển dụng đã phê duyệt</span>
                                <p class="mb-3 mt-3">....</p>
                            </div>
                            <div id="support-chart"></div>
                            <div class="card-footer bg-primary text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white">3</h4>
                                        <span>Ứng Tuyển</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">4</h4>
                                        <span>Bình Luận</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">-</h4>
                                        <span>...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0">2</h2>
                                <span class="text-c-green">Tin tức đã xuất bản</span>
                                <p class="mb-3 mt-3">...</p>
                            </div>
                            <div id="support-chart1"></div>
                            <div class="card-footer bg-success text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white">4</h4>
                                        <span>Bình Luận</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">-</h4>
                                        <span>...</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">-</h4>
                                        <span>...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support-section end -->
            </div>
            <div class="col-lg-5 col-md-12">
                <!-- page statustic card start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow">2</h4>
                                        <h6 class="text-muted m-b-0">All Users</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
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
                                        <h4 class="text-c-green">2</h4>
                                        <h6 class="text-muted m-b-0">Nhà Tuyển Dụng</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-file-text f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
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
                                        <h4 class="text-c-red">---</h4>
                                        <h6 class="text-muted m-b-0">...</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-calendar f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
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
                                        <h4 class="text-c-blue">---</h4>
                                        <h6 class="text-muted m-b-0">...</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-thumbs-down f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page statustic card end -->
            </div>


        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->


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
<script>
    swal({
        title: "1111",
        icon: "22222",
    });
</script>
</body>
</html>
