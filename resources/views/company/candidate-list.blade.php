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
                                <th style="width: 100px;">Điều khiển</th>
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
<script>
    $(document).ready( function () {
        $('#myTable').DataTable( {
            language: {
                "processing": "Đang xử lý...",
                "aria": {
                    "sortAscending": ": Sắp xếp thứ tự tăng dần",
                    "sortDescending": ": Sắp xếp thứ tự giảm dần"
                },
                "autoFill": {
                    "cancel": "Hủy",
                    "fill": "Điền tất cả ô với <i>%d</i>",
                    "fillHorizontal": "Điền theo hàng ngang",
                    "fillVertical": "Điền theo hàng dọc"
                },
                "buttons": {
                    "collection": "Chọn lọc <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"></span>",
                    "colvis": "Hiển thị theo cột",
                    "colvisRestore": "Khôi phục hiển thị",
                    "copy": "Sao chép",
                    "copyKeys": "Nhấn Ctrl hoặc u2318 + C để sao chép bảng dữ liệu vào clipboard.<br /><br />Để hủy, click vào thông báo này hoặc nhấn ESC",
                    "copySuccess": {
                        "1": "Đã sao chép 1 dòng dữ liệu vào clipboard",
                        "_": "Đã sao chép %d dòng vào clipboard"
                    },
                    "copyTitle": "Sao chép vào clipboard",
                    "pageLength": {
                        "-1": "Xem tất cả các dòng",
                        "_": "Hiển thị %d dòng"
                    },
                    "print": "In ấn",
                    "createState": "Tạo trạng thái",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pdf": "PDF",
                    "removeAllStates": "Xóa hết trạng thái",
                    "removeState": "Xóa",
                    "renameState": "Đổi tên",
                    "savedStates": "Trạng thái đã lưu",
                    "stateRestore": "Trạng thái %d",
                    "updateState": "Cập nhật"
                },
                "infoThousands": "`",
                "select": {
                    "cells": {
                        "1": "1 ô đang được chọn",
                        "_": "%d ô đang được chọn"
                    },
                    "columns": {
                        "1": "1 cột đang được chọn",
                        "_": "%d cột đang được được chọn"
                    },
                    "rows": {
                        "1": "1 dòng đang được chọn",
                        "_": "%d dòng đang được chọn"
                    }
                },
                "thousands": "`",
                "searchBuilder": {
                    "title": {
                        "0": "Thiết lập tìm kiếm",
                        "_": "Thiết lập tìm kiếm (%d)"
                    },
                    "button": {
                        "0": "Thiết lập tìm kiếm",
                        "_": "Thiết lập tìm kiếm (%d)"
                    },
                    "value": "Giá trị",
                    "clearAll": "Xóa hết",
                    "condition": "Điều kiện",
                    "conditions": {
                        "date": {
                            "after": "Sau",
                            "before": "Trước",
                            "between": "Nằm giữa",
                            "empty": "Rỗng",
                            "equals": "Bằng với",
                            "not": "Không phải",
                            "notBetween": "Không nằm giữa",
                            "notEmpty": "Không rỗng"
                        },
                        "number": {
                            "between": "Nằm giữa",
                            "empty": "Rỗng",
                            "equals": "Bằng với",
                            "gt": "Lớn hơn",
                            "gte": "Lớn hơn hoặc bằng",
                            "lt": "Nhỏ hơn",
                            "lte": "Nhỏ hơn hoặc bằng",
                            "not": "Không phải",
                            "notBetween": "Không nằm giữa",
                            "notEmpty": "Không rỗng"
                        },
                        "string": {
                            "contains": "Chứa",
                            "empty": "Rỗng",
                            "endsWith": "Kết thúc bằng",
                            "equals": "Bằng",
                            "not": "Không phải",
                            "notEmpty": "Không rỗng",
                            "startsWith": "Bắt đầu với",
                            "notContains": "Không chứa",
                            "notEnds": "Không kết thúc với",
                            "notStarts": "Không bắt đầu với"
                        },
                        "array": {
                            "equals": "Bằng",
                            "empty": "Trống",
                            "contains": "Chứa",
                            "not": "Không",
                            "notEmpty": "Không được rỗng",
                            "without": "không chứa"
                        }
                    },
                    "logicAnd": "Và",
                    "logicOr": "Hoặc",
                    "add": "Thêm điều kiện",
                    "data": "Dữ liệu",
                    "deleteTitle": "Xóa quy tắc lọc",
                    "leftTitle": "Giảm thụt lề",
                    "rightTitle": "Tăng thụt lề"
                },
                "searchPanes": {
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Không có phần tìm kiếm",
                    "clearMessage": "Xóa hết",
                    "loadMessage": "Đang load phần tìm kiếm",
                    "collapse": {
                        "0": "Phần tìm kiếm",
                        "_": "Phần tìm kiếm (%d)"
                    },
                    "title": "Bộ lọc đang hoạt động - %d",
                    "count": "{total}",
                    "collapseMessage": "Thu gọn tất cả",
                    "showMessage": "Hiện tất cả"
                },
                "datetime": {
                    "hours": "Giờ",
                    "minutes": "Phút",
                    "next": "Sau",
                    "previous": "Trước",
                    "seconds": "Giây",
                    "amPm": [
                        "am",
                        "pm"
                    ],
                    "unknown": "-",
                    "weekdays": [
                        "Chủ nhật"
                    ]
                },
                "emptyTable": "Không có dữ liệu",
                "info": "Hiển thị _START_ tới _END_ của _TOTAL_ dữ liệu",
                "infoEmpty": "Hiển thị 0 tới 0 của 0 dữ liệu",
                "lengthMenu": "Hiển thị _MENU_ dữ liệu",
                "loadingRecords": "Đang tải...",
                "paginate": {
                    "first": "Đầu tiên",
                    "last": "Cuối cùng",
                    "next": "Sau",
                    "previous": "Trước"
                },
                "search": "Tìm kiếm:",
                "zeroRecords": "Không tìm thấy kết quả",
                "decimal": ",",
                "editor": {
                    "close": "Đóng",
                    "create": {
                        "button": "Thêm",
                        "submit": "Thêm",
                        "title": "Thêm mục mới"
                    },
                    "edit": {
                        "button": "Sửa",
                        "submit": "Cập nhật",
                        "title": "Sửa mục"
                    },
                    "error": {
                        "system": "Đã xảy ra lỗi hệ thống (&lt;a target=\"\\\"rel=\"nofollow\"href=\"\\\"&gt;Thêm thông tin&lt;/a&gt;)."
                    },
                    "multi": {
                        "info": "Các mục đã chọn chứa các giá trị khác nhau cho đầu vào này. Để chỉnh sửa và đặt tất cả các mục cho đầu vào này thành cùng một giá trị, hãy nhấp hoặc nhấn vào đây, nếu không chúng sẽ giữ lại các giá trị riêng lẻ của chúng.",
                        "noMulti": "Đầu vào này có thể được chỉnh sửa riêng lẻ, nhưng không phải là một phần của một nhóm.",
                        "restore": "Hoàn tác thay đổi",
                        "title": "Nhiều giá trị"
                    },
                    "remove": {
                        "button": "Xóa",
                        "confirm": {
                            "1": "Bạn có chắc chắn muốn xóa 1 hàng không?",
                            "_": "Bạn có chắc chắn muốn xóa %d hàng không?"
                        },
                        "submit": "Xóa",
                        "title": "Xóa"
                    }
                },
                "infoFiltered": "(được lọc từ _MAX_ dữ liệu)",
                "searchPlaceholder": "Nhập tìm kiếm...",
                "stateRestore": {
                    "creationModal": {
                        "button": "Thêm",
                        "columns": {
                            "search": "Tìm kiếm cột",
                            "visible": "Khả năng hiển thị cột"
                        },
                        "name": "Tên:",
                        "order": "Sắp xếp",
                        "paging": "Phân trang",
                        "scroller": "Cuộn vị trí",
                        "search": "Tìm kiếm",
                        "searchBuilder": "Trình tạo tìm kiếm",
                        "select": "Chọn",
                        "title": "Thêm trạng thái",
                        "toggleLabel": "Bao gồm:"
                    },
                    "duplicateError": "Trạng thái có tên này đã tồn tại.",
                    "emptyError": "Tên không được để trống.",
                    "emptyStates": "Không có trạng thái đã lưu",
                    "removeConfirm": "Bạn có chắc chắn muốn xóa %s không?",
                    "removeError": "Không xóa được trạng thái.",
                    "removeJoiner": "và",
                    "removeSubmit": "Xóa",
                    "removeTitle": "Xóa trạng thái",
                    "renameButton": "Đổi tên",
                    "renameLabel": "Tên mới cho %s:",
                    "renameTitle": "Đổi tên trạng thái"
                }
            }
        });
    } );
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</body>
</html>
