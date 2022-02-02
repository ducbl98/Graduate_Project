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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <style>
        table {color: #000000!important;font-size: 13px;}table thead { background: #0065d1; color: #fff; border: none; }a.paginate_button.current { background: #fff!important; color: #fff!important; border: none; border-radius: 50%!important; width: 35px; height: 35px; display: flex; text-align: center; justify-content: center; align-items: center; }table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1,table.dataTable.display tbody tr:hover>.sorting_1, table.dataTable.order-column.hover tbody tr:hover>.sorting_1,table.dataTable.stripe tbody tr.odd, table.dataTable.display tbody tr.odd { background-color: #ffffff!important; }
    </style>

    <style>
        b { font-weight: bolder; }.cover-data-img img { height: 110%; width: auto; } .cover-data-img { width: 70px; height: 40px; overflow: hidden; border-radius: 5px; display: flex; justify-content: center; align-items: center; text-align: center; }
    </style>
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
                            {{$companyProfile->name}}
                        </a>
                        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('company.profile.show')}}">Trang cá nhân</a>
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
                <div class="recuitment-form">
                    <h3 class="rect-heading">Danh sách ứng viên</h3>
                    <table class="display" id="myTable">
                        <thead>
                            <tr>
                                <th>Tên ứng viên</th>
                                <th>Email/Số điện thoại</th>
                                <th>Vị trí ứng tuyển</th>
                                <th>Nộp ngày</th>
                                <th style="width: 100px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($candidates as $candidate)
                                <tr>
                                    <td>
                                        {{$candidate->user->name}}
                                    </td>
                                    <td>
                                        <b>{{$candidate->user->email}}</b> <br>
                                        {{$candidate->user->seeker->phone_number}}
                                    </td>
                                    <td>
                                        {{$candidate->job->title}}
                                    </td>
                                    <td>
                                        {{$candidate->job->created_at}}
                                    </td>
                                    <td>
                                        <a href="{{route('company.candidate.detail',['id'=>$candidate->id])}}" class="btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
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
                        <a href="{{route('company.post.list')}}"><h3 class="menu-ql-ntv">Quản lý đăng tuyển</h3></a>
                        <a href="{{route('company.candidate.list')}}"><h3 class="menu-ql-ntv">Quản lý ứng viên</h3></a>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{--<script>
    var error = {!! json_encode($errors->toArray()) !!};
    var oldCategories = {!! json_encode(old('optional_category')) !!};
    var oldTechniques = {!! json_encode(old('optional_technique')) !!};
    var oldTechniqueTypes = {!! json_encode(old('technique_type_option')) !!};
    console.log(error);
    console.log(oldCategories,oldTechniques,oldTechniqueTypes);
    var a = Object.keys(error).filter(function (key) {
        return /(optional_category|optional_technique).\d|technique_type_option/.test(key);
    });
    console.log(a)
    if(!Object.keys(error).length){
        localStorage.removeItem('i')
        localStorage.removeItem('j')
    }

    $(document).ready(function() {
        $('.js-category-multiple').select2({
            placeholder: "Chọn các danh mục"
        });
        $('.js-technique-multiple').select2({
            placeholder: "Chọn các công nghệ"
        })
        var categories = {!! json_encode($techniqueTypes->toArray()) !!};
        var categories_option = categories.map((category,index) =>`<option value="${category.id}">${category.name}</option>`).join('');
        console.log(categories_option);
        var i= localStorage.getItem('i')||0
        var j= localStorage.getItem('j')||0

        for (let k = 1; k <= i; k++) {
            var ttoe = `technique_type_option`
            var ote  = `optional_technique.${k-1}`
            var html1 = error[ttoe] ? 'is-invalid': ''
            var html2 = error[ttoe] ? '<div class="alert alert-danger">'+error[ttoe][0]+'</div>': ''
            var html3 = error[ote] ? 'is-invalid': ''
            var html4 = error[ote] ? '<div class="alert alert-danger">'+error[ote][0]+'</div>': ''
            var html5 = '<div class="row" id="rw'+k+'">' +
                '<div class="col-sm-5">' +
                '<select type="text" name="technique_type_option[]" class="form-control '+html1+'" id="technique_type_option">' +
                '<option value="0" disabled selected>Nhập technique type</option>' +
                categories.map(category =>`<option value="${category.id}" ${oldTechniqueTypes[k-1] == category.id ? 'selected' : ''}>${category.name}</option>`).join('') +
                '</select>' +
                html2 +
                '</div>' +
                '<div class="col-sm-5">' +
                '<input type="text" name="optional_technique[]" value="'+oldTechniques[k-1]+'" class="form-control '+html3+'">' +
                html4 +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove">' +
                'X' +
                '</button>' +
                '</div>' +
                '<br>' +
                '</div>';
            $('#optional_techniques').append(html5);
        }

        for (let m = 1; m <= j; m++) {
            var oce = `optional_category.${m-1}`
            var html6 = error[oce] ? 'is-invalid': ''
            var html7 = error[oce] ? '<div class="alert alert-danger">'+error[oce][0]+'</div>': ''
            var html8 = '<div class="row" id="rj'+m+'">' +
                '<div class="col-sm-10">' +
                '<input type="text" name="optional_category[]" value="'+oldCategories[m-1]+'" class="form-control '+html6+'">' +
                html7 +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" name="remove" id="'+m+'" class="btn btn-danger btn_remove1">' +
                'X' +
                '</button>' +
                '</div>' +
                '<br>' +
                '</div>';
            $('#optional-categories').append(html8);
        }

        $('#add-technique').on('click',function (e) {
            i++;
            e.preventDefault();
            var html = '<div class="row" id="rw'+i+'">' +
                '<div class="col-sm-5">' +
                '<select type="text" name="technique_type_option[]" class="form-control" id="technique_type_option">' +
                '<option value="" disabled selected>Nhập technique type</option>' +
                categories_option +
                '</select>' +
                '</div>' +
                '<div class="col-sm-5">' +
                '<input type="text" name="optional_technique[]" class="form-control">' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">' +
                'X' +
                '</button>' +
                '</div>' +
                '<br>' +
                '</div>';
            $('#optional_techniques').append(html);
        })

        $('#add-category').on('click',function (e) {
            j++;
            e.preventDefault();
            var html = '<div class="row" id="rj'+j+'">' +
                '<div class="col-sm-10">' +
                '<input type="text" name="optional_category[]" class="form-control">' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove1">' +
                'X' +
                '</button>' +
                '</div>' +
                '<br>' +
                '</div>';
            $('#optional-categories').append(html);
        })

        console.log(i)
        console.log(j)

        $(document).on('click', '.btn_remove', function(e) {
            e.preventDefault()
            var button_id = $(this).attr("id");
            $('#rw' + button_id + '').remove();
        });

        $(document).on('click', '.btn_remove1', function(e) {
            e.preventDefault()
            var button_id = $(this).attr("id");
            $('#rj' + button_id + '').remove();
        });

        $(document).on('click', '#submit-post-create', function (){
            localStorage.setItem('i', i);
            localStorage.setItem('j', j);
        })
    });
</script>--}}
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script></body>
</html>
