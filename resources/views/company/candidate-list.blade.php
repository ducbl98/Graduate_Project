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
                            <a class="dropdown-item" href="{{route('company.profile.show')}}">Trang c?? nh??n</a>
                            <a class="dropdown-item" href="{{route('company.change-password.show')}}">Thay ?????i m???t kh???u</a>
                            <a class="dropdown-item" href="{{route('logout')}}">????ng xu???t</a>
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
                    <h3 class="rect-heading">Danh s??ch ???ng vi??n</h3>
                    <table class="display" id="myTable">
                        <thead>
                            <tr>
                                <th>T??n ???ng vi??n</th>
                                <th>Email/S??? ??i???n tho???i</th>
                                <th>V??? tr?? ???ng tuy???n</th>
                                <th>N???p ng??y</th>
                                <th style="width: 100px;">??i???u khi???n</th>
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
                            <li><a href="#">Vi???c l??m ???? ????ng <strong>({{count($companyProfile->jobs)}})</strong></a></li>
                            {{--                            <li><a href="#">Follower <strong>(450)</strong></a></li>--}}
                        </ul>
                    </div>
                </div>

                <div class="block-sidebar" style="margin-bottom: 20px;">
                    <header>
                        <h3 class="title-sidebar font-roboto bg-primary">
                            Trung t??m qu???n l??
                        </h3>
                    </header>
                    <div class="content-sidebar menu-trung-tam-ql menu-ql-employer">
                        <a href="{{route('company.post.list')}}"><h3 class="menu-ql-ntv">Qu???n l?? ????ng tuy???n</h3></a>
                        <a href="{{route('company.candidate.list')}}"><h3 class="menu-ql-ntv">Qu???n l?? ???ng vi??n</h3></a>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable( {
            language: {
                "processing": "??ang x??? l??...",
                "aria": {
                    "sortAscending": ": S???p x???p th??? t??? t??ng d???n",
                    "sortDescending": ": S???p x???p th??? t??? gi???m d???n"
                },
                "autoFill": {
                    "cancel": "H???y",
                    "fill": "??i???n t???t c??? ?? v???i <i>%d</i>",
                    "fillHorizontal": "??i???n theo h??ng ngang",
                    "fillVertical": "??i???n theo h??ng d???c"
                },
                "buttons": {
                    "collection": "Ch???n l???c <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"></span>",
                    "colvis": "Hi???n th??? theo c???t",
                    "colvisRestore": "Kh??i ph???c hi???n th???",
                    "copy": "Sao ch??p",
                    "copyKeys": "Nh???n Ctrl ho???c u2318 + C ????? sao ch??p b???ng d??? li???u v??o clipboard.<br /><br />????? h???y, click v??o th??ng b??o n??y ho???c nh???n ESC",
                    "copySuccess": {
                        "1": "???? sao ch??p 1 d??ng d??? li???u v??o clipboard",
                        "_": "???? sao ch??p %d d??ng v??o clipboard"
                    },
                    "copyTitle": "Sao ch??p v??o clipboard",
                    "pageLength": {
                        "-1": "Xem t???t c??? c??c d??ng",
                        "_": "Hi???n th??? %d d??ng"
                    },
                    "print": "In ???n",
                    "createState": "T???o tr???ng th??i",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pdf": "PDF",
                    "removeAllStates": "X??a h???t tr???ng th??i",
                    "removeState": "X??a",
                    "renameState": "?????i t??n",
                    "savedStates": "Tr???ng th??i ???? l??u",
                    "stateRestore": "Tr???ng th??i %d",
                    "updateState": "C???p nh???t"
                },
                "infoThousands": "`",
                "select": {
                    "cells": {
                        "1": "1 ?? ??ang ???????c ch???n",
                        "_": "%d ?? ??ang ???????c ch???n"
                    },
                    "columns": {
                        "1": "1 c???t ??ang ???????c ch???n",
                        "_": "%d c???t ??ang ???????c ???????c ch???n"
                    },
                    "rows": {
                        "1": "1 d??ng ??ang ???????c ch???n",
                        "_": "%d d??ng ??ang ???????c ch???n"
                    }
                },
                "thousands": "`",
                "searchBuilder": {
                    "title": {
                        "0": "Thi???t l???p t??m ki???m",
                        "_": "Thi???t l???p t??m ki???m (%d)"
                    },
                    "button": {
                        "0": "Thi???t l???p t??m ki???m",
                        "_": "Thi???t l???p t??m ki???m (%d)"
                    },
                    "value": "Gi?? tr???",
                    "clearAll": "X??a h???t",
                    "condition": "??i???u ki???n",
                    "conditions": {
                        "date": {
                            "after": "Sau",
                            "before": "Tr?????c",
                            "between": "N???m gi???a",
                            "empty": "R???ng",
                            "equals": "B???ng v???i",
                            "not": "Kh??ng ph???i",
                            "notBetween": "Kh??ng n???m gi???a",
                            "notEmpty": "Kh??ng r???ng"
                        },
                        "number": {
                            "between": "N???m gi???a",
                            "empty": "R???ng",
                            "equals": "B???ng v???i",
                            "gt": "L???n h??n",
                            "gte": "L???n h??n ho???c b???ng",
                            "lt": "Nh??? h??n",
                            "lte": "Nh??? h??n ho???c b???ng",
                            "not": "Kh??ng ph???i",
                            "notBetween": "Kh??ng n???m gi???a",
                            "notEmpty": "Kh??ng r???ng"
                        },
                        "string": {
                            "contains": "Ch???a",
                            "empty": "R???ng",
                            "endsWith": "K???t th??c b???ng",
                            "equals": "B???ng",
                            "not": "Kh??ng ph???i",
                            "notEmpty": "Kh??ng r???ng",
                            "startsWith": "B???t ?????u v???i",
                            "notContains": "Kh??ng ch???a",
                            "notEnds": "Kh??ng k???t th??c v???i",
                            "notStarts": "Kh??ng b???t ?????u v???i"
                        },
                        "array": {
                            "equals": "B???ng",
                            "empty": "Tr???ng",
                            "contains": "Ch???a",
                            "not": "Kh??ng",
                            "notEmpty": "Kh??ng ???????c r???ng",
                            "without": "kh??ng ch???a"
                        }
                    },
                    "logicAnd": "V??",
                    "logicOr": "Ho???c",
                    "add": "Th??m ??i???u ki???n",
                    "data": "D??? li???u",
                    "deleteTitle": "X??a quy t???c l???c",
                    "leftTitle": "Gi???m th???t l???",
                    "rightTitle": "T??ng th???t l???"
                },
                "searchPanes": {
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Kh??ng c?? ph???n t??m ki???m",
                    "clearMessage": "X??a h???t",
                    "loadMessage": "??ang load ph???n t??m ki???m",
                    "collapse": {
                        "0": "Ph???n t??m ki???m",
                        "_": "Ph???n t??m ki???m (%d)"
                    },
                    "title": "B??? l???c ??ang ho???t ?????ng - %d",
                    "count": "{total}",
                    "collapseMessage": "Thu g???n t???t c???",
                    "showMessage": "Hi???n t???t c???"
                },
                "datetime": {
                    "hours": "Gi???",
                    "minutes": "Ph??t",
                    "next": "Sau",
                    "previous": "Tr?????c",
                    "seconds": "Gi??y",
                    "amPm": [
                        "am",
                        "pm"
                    ],
                    "unknown": "-",
                    "weekdays": [
                        "Ch??? nh???t"
                    ]
                },
                "emptyTable": "Kh??ng c?? d??? li???u",
                "info": "Hi???n th??? _START_ t???i _END_ c???a _TOTAL_ d??? li???u",
                "infoEmpty": "Hi???n th??? 0 t???i 0 c???a 0 d??? li???u",
                "lengthMenu": "Hi???n th??? _MENU_ d??? li???u",
                "loadingRecords": "??ang t???i...",
                "paginate": {
                    "first": "?????u ti??n",
                    "last": "Cu???i c??ng",
                    "next": "Sau",
                    "previous": "Tr?????c"
                },
                "search": "T??m ki???m:",
                "zeroRecords": "Kh??ng t??m th???y k???t qu???",
                "decimal": ",",
                "editor": {
                    "close": "????ng",
                    "create": {
                        "button": "Th??m",
                        "submit": "Th??m",
                        "title": "Th??m m???c m???i"
                    },
                    "edit": {
                        "button": "S???a",
                        "submit": "C???p nh???t",
                        "title": "S???a m???c"
                    },
                    "error": {
                        "system": "???? x???y ra l???i h??? th???ng (&lt;a target=\"\\\"rel=\"nofollow\"href=\"\\\"&gt;Th??m th??ng tin&lt;/a&gt;)."
                    },
                    "multi": {
                        "info": "C??c m???c ???? ch???n ch???a c??c gi?? tr??? kh??c nhau cho ?????u v??o n??y. ????? ch???nh s???a v?? ?????t t???t c??? c??c m???c cho ?????u v??o n??y th??nh c??ng m???t gi?? tr???, h??y nh???p ho???c nh???n v??o ????y, n???u kh??ng ch??ng s??? gi??? l???i c??c gi?? tr??? ri??ng l??? c???a ch??ng.",
                        "noMulti": "?????u v??o n??y c?? th??? ???????c ch???nh s???a ri??ng l???, nh??ng kh??ng ph???i l?? m???t ph???n c???a m???t nh??m.",
                        "restore": "Ho??n t??c thay ?????i",
                        "title": "Nhi???u gi?? tr???"
                    },
                    "remove": {
                        "button": "X??a",
                        "confirm": {
                            "1": "B???n c?? ch???c ch???n mu???n x??a 1 h??ng kh??ng?",
                            "_": "B???n c?? ch???c ch???n mu???n x??a %d h??ng kh??ng?"
                        },
                        "submit": "X??a",
                        "title": "X??a"
                    }
                },
                "infoFiltered": "(???????c l???c t??? _MAX_ d??? li???u)",
                "searchPlaceholder": "Nh???p t??m ki???m...",
                "stateRestore": {
                    "creationModal": {
                        "button": "Th??m",
                        "columns": {
                            "search": "T??m ki???m c???t",
                            "visible": "Kh??? n??ng hi???n th??? c???t"
                        },
                        "name": "T??n:",
                        "order": "S???p x???p",
                        "paging": "Ph??n trang",
                        "scroller": "Cu???n v??? tr??",
                        "search": "T??m ki???m",
                        "searchBuilder": "Tr??nh t???o t??m ki???m",
                        "select": "Ch???n",
                        "title": "Th??m tr???ng th??i",
                        "toggleLabel": "Bao g???m:"
                    },
                    "duplicateError": "Tr???ng th??i c?? t??n n??y ???? t???n t???i.",
                    "emptyError": "T??n kh??ng ???????c ????? tr???ng.",
                    "emptyStates": "Kh??ng c?? tr???ng th??i ???? l??u",
                    "removeConfirm": "B???n c?? ch???c ch???n mu???n x??a %s kh??ng?",
                    "removeError": "Kh??ng x??a ???????c tr???ng th??i.",
                    "removeJoiner": "v??",
                    "removeSubmit": "X??a",
                    "removeTitle": "X??a tr???ng th??i",
                    "renameButton": "?????i t??n",
                    "renameLabel": "T??n m???i cho %s:",
                    "renameTitle": "?????i t??n tr???ng th??i"
                }
            }
        });
    } );
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</body>
</html>
