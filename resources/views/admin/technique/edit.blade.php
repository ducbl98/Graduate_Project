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
                        <li class="list-group-item"><a href="{{route('logout')}}"><i class="feather icon-log-out m-r-5"></i>????ng xu???t</a></li>
                    </ul>
                </div>
            </div>
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>??i???u h?????ng </label>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.homepage')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Trang ch???</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.category.index')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Danh m???c</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.city.index')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">?????a ??i???m</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.technique.index')}}" class="nav-link" style="background: #4680ff;color: #fff;"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">C??ng ngh???</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.user.index')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Ng?????i d??ng</span></a>
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
                            <h5 class="m-b-10">Danh m???c</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Danh m???c</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Ch???nh s???a ng??nh ngh???</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.technique.update')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$technique->id}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">T??n c??ng ngh???</label>
                                        <input name="technique" value="{{old('technique') ?? $technique->name}}" class="form-control" placeholder="C??ng ngh???" />
                                        @error('technique')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="techniqueType" class="form-control">
                                            <option value=null disabled selected>Danh m???c c??ng ngh???</option>
                                            @foreach($techniqueTypes as $techniqueType)
                                                <option value="{{$techniqueType->id}}"
                                                        {{old('techniqueType') ? (old('techniqueType') == $techniqueType->id ? 'selected':'') :($technique->type_id == $techniqueType->id ? 'selected':'')}}
                                                >
                                                    {{$techniqueType->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('techniqueType')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Ch???nh S???a" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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
</body>

</html>
