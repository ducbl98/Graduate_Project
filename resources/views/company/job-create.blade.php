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
                <img src="{{ asset('img/techjobs_bgb.png') }}">
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
                <a class="nav-link" href="#">Quản lý đăng tuyển</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quản lý ứng viên</a>
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

<!-- widget recuitment  -->
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
<!-- (end) widget recuitment  -->

<!-- published recuitment -->
<div class="container-fluid published-recuitment-wrapper">
    <div class="container published-recuitment-content">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-12 recuitment-inner">
                <form action="{{route('company.post.store')}}" method="POST" class="recuitment-form">
                    @csrf
                    <div class="accordion" id="accordionExample">
                        <div class="card recuitment-card">
                            <div class="card-header recuitment-card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a class="btn btn-link btn-block text-left recuitment-header" type="button"
                                       data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">
                                        Đăng tin tuyển dụng
                                        <span id="clickc1_advance2" class="clicksd">
                                            <i class="fa fa fa-angle-up"></i>
                                        </span>
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body recuitment-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Tiêu đề<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control"
                                                   placeholder="Nhập tiêu đề">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Email nhận hồ sơ<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="application_email" class="form-control"
                                                   placeholder="Nhập tiêu đề">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Số lượng cần
                                            tuyển</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="amount" class="form-control" placeholder="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Thời gian làm
                                            việc</label>
                                        <div class="col-sm-9">
                                            <input type="number" step=0.01 name="work_time" class="form-control"
                                                   placeholder="1.00">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Yêu cầu kinh nghiệm<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="experience" class="form-control"
                                                   placeholder="Nhập yêu cầu kinh nghiệm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Mức lương<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-3">
                                            <input type="number" name="salary_min" class="form-control"
                                                   id="jobSalaryFrom">
                                        </div>
                                        <div class="col-sm-1">
                                            <i class="fa fa-minus" aria-hidden="true"
                                               style="margin-top: 10px;margin-left: 10px;"></i>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" name="salary_max" class="form-control"
                                                   id="jobSalaryTo">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="salary_unit" class="form-control"
                                                   placeholder="Unit">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Nơi làm việc</label>
                                        <div class="col-sm-9">
                                            <select type="text" name="province_id" class="form-control"
                                                    id="jobProvince">
                                                <option value="1">Hồ Chí Minh</option>
                                                <option value="2">Hà Nội</option>
                                                <option value="3">An Giang</option>
                                                <option value="4">Bạc Liêu</option>
                                                <option value="5">Bà Rịa-Vũng Tàu</option>
                                                <option value="6">Bắc Cạn</option>
                                                <option value="7">Bắc Giang</option>
                                                <option value="8">Bắc Ninh</option>
                                                <option value="9">Bến Tre</option>
                                                <option value="10">Bình Dương</option>
                                                <option value="11">Bình Định</option>
                                                <option value="12">Bình Phước</option>
                                                <option value="13">Bình Thuận</option>
                                                <option value="14">Cao Bằng</option>
                                                <option value="15">Cà Mau</option>
                                                <option value="16">Cần Thơ</option>
                                                <option value="17">Đà Nẵng</option>
                                                <option value="18">Đắk Lắk</option>
                                                <option value="19">Đắk Nông</option>
                                                <option value="20">Điện Biên</option>
                                                <option value="21">Đồng Nai</option>
                                                <option value="22">Đồng Tháp</option>
                                                <option value="23">Gia Lai</option>
                                                <option value="24">Hà Giang</option>
                                                <option value="25">Hà Nam</option>
                                                <option value="27">Hà Tĩnh</option>
                                                <option value="28">Hải Dương</option>
                                                <option value="29">Hải Phòng</option>
                                                <option value="30">Hậu Giang</option>
                                                <option value="31">Hòa Bình</option>
                                                <option value="32">Hưng Yên</option>
                                                <option value="33">Khánh Hòa</option>
                                                <option value="34">Kiên Giang</option>
                                                <option value="35">Kon Tum</option>
                                                <option value="36">Lai Châu</option>
                                                <option value="37">Lạng Sơn</option>
                                                <option value="38">Lào Cai</option>
                                                <option value="39">Lâm Đồng</option>
                                                <option value="40">Long An</option>
                                                <option value="41">Nam Định</option>
                                                <option value="42">Nghệ An</option>
                                                <option value="43">Ninh Bình</option>
                                                <option value="44">Ninh Thuận</option>
                                                <option value="45">Phú Thọ</option>
                                                <option value="46">Phú Yên</option>
                                                <option value="47">Quảng Bình</option>
                                                <option value="48">Quảng Nam</option>
                                                <option value="49">Quảng Ngãi</option>
                                                <option value="50">Quảng Ninh</option>
                                                <option value="51">Quảng Trị</option>
                                                <option value="52">Sóc Trăng</option>
                                                <option value="53">Sơn La</option>
                                                <option value="54">Tây Ninh</option>
                                                <option value="55">Thái Bình</option>
                                                <option value="56">Thái Nguyên</option>
                                                <option value="57">Thanh Hóa</option>
                                                <option value="58">Thừa Thiên-Huế</option>
                                                <option value="59">Tiền Giang</option>
                                                <option value="60">Trà Vinh</option>
                                                <option value="61">Tuyên Quang</option>
                                                <option value="62">Vĩnh Long</option>
                                                <option value="63">Vĩnh Phúc</option>
                                                <option value="64">Yên Bái</option>
                                                <option value="65">Toàn quốc</option>
                                                <option value="66">Nước ngoài</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Địa chỉ cụ thể<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" class="form-control"
                                                   placeholder="Nhập địa chỉ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Hạn nộp hồ sơ<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="date" name="expire" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Mô tả công việc<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="details" class="form-control"
                                                      placeholder="Nhập mô tả công việc" rows="8"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rec-submit">
                        <button type="submit" class="btn-submit-recuitment" name="">
                            <i class="fa fa-floppy-o pr-2"></i>Lưu Tin
                        </button>
                    </div>
                </form>

            </div>
            <!-- Side bar -->
            <div class="col-md-4 col-sm-12 col-12">
                <div class="recuiter-info">
                    <div class="recuiter-info-avt">
                        <img src="{{asset('img/icon_avatar.jpg')}}">
                    </div>
                    <div class="clearfix list-rec">
                        <h4>NESTLE Inc.</h4>
                        <ul>
                            <li><a href="#">Việc làm đang đăng <strong>(0)</strong></a></li>
                            <li><a href="#">Follower <strong>(450)</strong></a></li>
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
                        <h3 class="menu-ql-ntv">
                            Quản lý tài khoản
                        </h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Tài khoản
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Giấy phép kinh doanh
                                </a>
                            </li>
                        </ul>
                        <h3 class="menu-ql-ntv">
                            Quản lý dịch vụ
                        </h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Lịch sử dịch vụ
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    Báo giá
                                </a>
                            </li>
                        </ul>
                        <h3 class="menu-ql-ntv">
                            Quản lý tin tuyển dụng
                        </h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Đăng tin tuyển dụng
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Danh sách tin tuyển dụng
                                </a>
                            </li>
                        </ul>
                        <h3 class="menu-ql-ntv">
                            Quản lý ứng viên
                        </h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Tìm kiếm hồ sơ
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Hồ sơ đã lưu
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Hồ sơ đã ứng tuyển
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Thông báo hồ sơ phù hợp">
                                    Thông báo hồ sơ phù hợp
                                </a>
                            </li>
                        </ul>
                        <h3 class="menu-ql-ntv">
                            Hỗ trợ và thông báo
                        </h3>
                        <ul>
                            <li>
                                <a href="#" title="Gửi yêu cầu đến ban quản trị">
                                    Gửi yêu cầu đến ban quản trị
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Ban quản trị thông báo">
                                    Ban quản trị thông báo
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Hướng dẫn thao tác">
                                    Hướng dẫn thao tác
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span>Thông tin thanh toán</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="#">
                                    <span>Cổng tra cứu lương</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="#">
                                    <span> Cẩm nang tuyển dụng</span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="logout">
                                <a href="#" title="Đăng xuất">
                                    Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- (end) published recuitment -->

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
