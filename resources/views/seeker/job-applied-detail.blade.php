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
    <link rel="stylesheet" href="{{ asset('css/select4.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style>
        .identify-contact {
            border: 1px solid #bfcbd9;
            background: #fffdf3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
    <style>
        .cover-letterx textarea {
            background: #fafafa;
            border: none;
            padding: 0 15px;
            color: #333;
        }

        .cover-letterx:after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: transparent;
            background-size: 15px 15px;
            background-image: radial-gradient(farthest-side, rgba(0, 0, 0, 0) 6px, #fafafa 0);
            bottom: -6px;
        }

        .cover-letterx:before {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: transparent;
            background-size: 15px 15px;
            background-image: radial-gradient(farthest-side, rgba(0, 0, 0, 0) 6px, #fafafa 0);
            transform: rotate(180deg);
            top: -10px;
        }

        .cover-letterx {
            position: relative;
        }

        .clw textarea, .clw {
            background: #fff;
        }

        .clw:after, .clw:before {
            background-image: radial-gradient(farthest-side, rgba(0, 0, 0, 0) 6px, #fff 0);
        }
    </style>

    <style>
        .identify-contact p {
            line-height: 1.9;
            margin-bottom: 10px;
        }

        .identify-contact input {
            border: 1px solid #bfcbd9;
            width: 100%;
            border-radius: 5px;
            padding: 10px 10px;
        }

        .identify-contact {
            border: 1px solid #bfcbd9;
            background: #fffdf3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
    <style>
        .recuitment-form b {
            font-weight: bold;
        }

        input.form-control.iptt:focus {
            outline: none;
            box-shadow: none;
        }

        input.form-control.iptt {
            border: none;
            margin-top: 17px;
            background: #cccccc24;
        }

        .input-file-container {
            position: relative;
            width: 100%;
            text-align: center;
            border-radius: 3px;
        }

        .js .input-file-trigger {
            display: block;
            padding: 14px 45px;
            background: #39D2B4;
            color: #fff;
            font-size: 1em;
            transition: all .4s;
            cursor: pointer;
        }

        .js .input-file {
            position: absolute;
            top: 0;
            left: 0;
            width: 225px;
            opacity: 0;
            padding: 14px 0;
            cursor: pointer;
        }

        .js .input-file:hover + .input-file-trigger, .js .input-file:focus + .input-file-trigger, .js .input-file-trigger:hover, .js .input-file-trigger:focus {
            background: #34495E;
            color: #39D2B4;
        }

        .file-return {
            margin: 0;
        }

        .file-return:not(:empty) {
            margin: 1em 0;
        }

        .js .file-return {
            font-style: italic;
            font-size: .9em;
            font-weight: bold;
        }

        .js .file-return:not(:empty):before {
            content: "File đang chọn: ";
            font-style: normal;
            font-weight: normal;
        }

        /* Useless styles, just for demo styles */
    </style>
    <style>
        .identify-contact p {
            line-height: 1.9;
            margin-bottom: 10px;
        }

        .identify-contact input {
            border: 1px solid #bfcbd9;
            width: 100%;
            border-radius: 5px;
            padding: 10px 10px;
        }

        .identify-contact {
            border: 1px solid #bfcbd9;
            background: #fffdf3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
    <style>
        .post-info .info-authorImage {
            width: 36px;
            height: 36px
        }

        .post-info .info-author {
            font-size: 11px
        }

        .post-info .info-author .info-authorName {
            font-size: 13px
        }

        .post-info .info-author .info-datePost {
            margin-top: 2px
        }

        .post-info {
            display: flex;
            display: -webkit-flex;
            justify-content: space-between;
            -webkit-justify-content: space-between;
            align-items: center;
            -webkit-align-items: center;
        }

        .blog-posts article img {
            border-radius: 3px;
            display: inline-block;
            width: 95% !important;
        }

        .info-authorImage img {
            border-radius: 50%;
            display: inline-block;
            width: 100% !important;
        }

        .info-right div {
            width: 16px;
            text-align: right;
            float: right;
            margin-left: 9px;
        }

        .info-right {
            width: 50%;
            float: left;
        }

        .info-left {
            width: 50%;
            float: left;
        }

        .post-info .info-authorImage {
            width: 36px;
            height: 36px;
        }

        .info-authorImage img {
            border-radius: 50%;
            display: inline-block;
            width: 100% !important;
        }

        .post-info .info-authorImage {
            margin-right: 15px;
        }

        .post-info .info-authorImage {
            margin-right: 15px;
            float: left;
        }

        span.info-authorName a {
            display: block;
            color: #4d4d4d;
        }

        span.info-datePost time, span.info-datePost a {
            color: #8f8f8f;
        }

        .byline.post-labels a:not(:last-child) {
            margin-right: 7px;
            margin-bottom: 7px;
        }

        .byline.post-labels a {
            display: inline-block;
            padding: 5px 15px;
            position: relative;
            line-height: 20px;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, .05);
            color: rgba(0, 0, 0, .65);
        }

        .byline.post-labels {
            display: flex;
            display: -webkit-flex;
            flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            align-items: flex-start;
            -webkit-align-items: flex-start;
            font-size: 13px;
            width: calc(100% - 81px);
            padding-right: 15px;
        }

        .postAuthor {
            display: table;
            width: 100%;
            margin-bottom: 40px
        }

        .postAuthor > div {
            display: table-cell;
            vertical-align: middle;
        }

        .postAuthor > div:not(:first-child) {
            padding-left: 20px
        }

        .postAuthor .authorImage {
            width: 80px;
        }

        .postAuthor .authorImage .authorImg {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden
        }

        .postAuthor .authorFollow {
            text-align: right
        }

        .postAuthor .authorFollow a {
            display: inline-block;
            padding: 7px 15px;
            border: 1px solid #e94c39;
            border-radius: 5px;
            font-size: 13px
        }

        .postAuthor .authorFollow a:hover {
            border-color: #989b9f
        }

        .postAuthor .authorFollow a:before {
            content: 'View';
            display: inline-block;
            margin-right: 4px
        }

        .postAuthor img {
            border-radius: 50%;
        }

        .postAuthor .author-name {
            font-size: 16px;
            font-weight: 600;
        }

        .postAuthor .author-name:before {
            content: 'About Our Company';
            display: block;
            font-size: 12px;
            font-weight: 400;
            margin-bottom: 2px;
            color: #989b9f
        }

        .postAuthor .author-name span {
            display: inline-block;
            color: #09204C
        }

        .postAuthor .author-desc {
            font-size: 12px;
            margin-top: 7px;
        }

        .authorImage img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
        }

        .authorImage {
            float: left;
            margin-right: 25px;
        }

        .postAuthor {
            display: table;
            width: 100%;
            margin-bottom: 40px;
            margin-top: 15px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }

        /* Post Comment */
        #disqus_thread, #showhide-comment {
            margin-top: 25px
        }

        #showhide-comment + .comments {
            display: none
        }

        .dummy-comment {
            text-align: center
        }

        .dummy-comment a, .comments .continue a, .comments .loadmore a {
            display: block;
            padding: 18px 20px;
            border: 1px solid #e94c39;
            border-radius: 5px;
            font-size: 13px;
        }

        .dummy-comment a:hover, .comments .continue a:hover, .comments .loadmore a:hover {
            border-color: #989b9f
        }

        .comments, .comments .comment-replybox-thread, .comments .comment-form {
            margin-top: 25px;
        }

        .comments p, .comments ol {
            margin: 0;
            padding: 0;
            list-style: none;
            -webkit-transition: all .2s ease-in;
            transition: all .2s ease-in;
        }

        .comments .continue, .comments .loadmore {
            margin: 20px auto;
            text-align: center
        }

        .comments .loadmore.loaded {
            max-height: 0;
            opacity: 0;
            overflow: hidden
        }

        .comments ol > li {
            list-style-type: none;
            position: relative;
            padding: 20px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 6px 18px 0 rgba(9, 32, 76, .075);
        }

        .comments ol > li:not(:last-child) {
            margin-bottom: 15px;
        }

        .comment .avatar-image-container {
            position: absolute;
            width: 35px;
            height: 35px;
            background: #f2f2f7 url("data:image/svg+xml,<svg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'><path d='M16,17a8,8,0,1,1,8-8A8,8,0,0,1,16,17ZM16,3a6,6,0,1,0,6,6A6,6,0,0,0,16,3Z' fill='rgba(0,0,0,.1)'/><path d='M23,31H9a5,5,0,0,1-5-5V22a1,1,0,0,1,.49-.86l5-3a1,1,0,0,1,1,1.72L6,22.57V26a3,3,0,0,0,3,3H23a3,3,0,0,0,3-3V22.57l-4.51-2.71a1,1,0,1,1,1-1.72l5,3A1,1,0,0,1,28,22v4A5,5,0,0,1,23,31Z' fill='rgba(0,0,0,.1)'/></svg>") center / 18px no-repeat;
            border-radius: 50%;
            overflow: hidden
        }

        .comment .comment-block {
            position: relative;
        }

        .comment .comment-block .comment-header {
            display: flex;
            display: -webkit-flex;
            flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            align-items: flex-end;
            -webkit-align-items: flex-end;
            margin: 0 0 15px 45px
        }

        .comment .comment-block .comment-header .user span, .comment .comment-block .comment-header .user a {
            margin-right: 5px;
            font-style: normal;
            font-weight: 600;
            font-size: 13px;
            color: #09204C;
            white-space: nowrap
        }

        .comment .comment-block .comment-header .datetime {
            display: block;
            width: 100%;
            color: #989b9f;
            margin-top: 2px;
            font-size: 10px;
            font-family: 'Segoe UI', Roboto, san-serif
        }

        .comment .comment-block .comment-header .datetime a, .comment .comment-footer .comment-timestamp a {
            color: #989b9f
        }

        .comment .comment-block .comment-content {
            color: #4d4d4d
        }

        .comment .comment-block .icon.blog-author {
            display: inline-block;
            vertical-align: top;
            width: 22px;
            margin-right: 5px
        }

        .comment .comment-block .icon.blog-author:before {
            content: '';
            width: 17px !important;
            height: 17px;
            display: block;
            background: url("data:image/svg+xml,<svg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z' fill='%23519bd6'></path></svg>") center left / 16px no-repeat;
        }

        .comment .comment-replybox-single > * {
            margin-top: 15px
        }

        .comment .comment-replies .inline-thread {
            padding-top: 10px;
            margin-top: 15px;
            border-top: 1px solid rgba(0, 0, 0, .03)
        }

        .comment .comment-replies .thread-toggle {
            display: flex;
            display: -webkit-flex;
            align-items: center;
            -webit-align-items: center;
            margin: 0px 0 0 -3px;
            font-size: 13px
        }

        .comment .comment-replies .thread-toggle a {
            color: #989b9f
        }

        .comment .comment-replies .thread-toggle .thread-count {
            margin: 0 auto 0 2.5px
        }

        .comment .comment-replies .thread-toggle .thread-arrow:before {
            content: '';
            display: block;
            position: relative;
            width: 16px;
            height: 16px;
            background: url("data:image/svg+xml,<svg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'><path d='M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z' fill='%23989b9f'/></svg>") center / 12px no-repeat;
            -webkit-transition: all .2s ease-in;
            transition: all .2s ease-in;
        }

        .comment .comment-replies .thread-collapsed .thread-arrow:before {
            transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
        }

        .comment .comment-replies ol {
            margin-top: 15px
        }

        .comment .comment-replies ol.thread-collapsed {
            display: none
        }

        .comment .comment-actions {
            display: flex;
            display: -webkit-flex;
            align-items: center;
            -webkit-align-items: center;
            margin-top: 10px;
            font-size: 13px;
        }

        .comment .comment-actions > * {
            display: block
        }

        .comment .comment-actions a {
            color: #989b9f
        }

        .comment .comment-actions .item-control:before {
            content: '\00b7';
            display: inline-block;
            margin: 0 6px;
            color: #989b9f
        }

        .comment .comment .avatar-image-container {
            width: 30px;
            height: 30px;
        }

        .comment .comment .comment-block {
            margin-left: 40px;
            margin-bottom: 12px;
            padding: 12px 15px 25px;
            background-color: #f1f1f0;
            border-radius: 15px;
            overflow: hidden
        }

        .comment .comment:last-child .comment-block {
            margin-bottom: 0
        }

        .comment .comment .comment-block .comment-header {
            display: flex;
            display: -webkit-flex;
            align-items: flex-end;
            -webkit-align-items: flex-end;
            margin: 0 0 10px 0
        }

        .comment .comment .comment-block .comment-header .datetime {
            display: block;
            align-self: center;
            -webkit-align-self: center;
            width: auto;
            position: relative;
            top: 1px;
            margin: 0 0 0 auto;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .comment .comment .comment-actions {
            display: block;
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 0;
        }

        .comment .comment .comment-actions span:before {
            display: none
        }

        .comment .comment .comment-actions a {
            display: block;
            background-color: rgba(0, 0, 0, .03);
            padding: 5px 10px;
            font-size: 11px;
            border-radius: 15px 0 10px 0;
            color: #989b9f
        }

        .comments .comment-thread .comment-replies .continue {
            margin: 10px 0 0 45px
        }

        .comments .comment-thread .comment-replies .continue a {
            color: #09204C;
            padding: 0;
            border: 0;
            text-align: left
        }

        .comments .comment-thread .comment-replies .continue a:before {
            content: '';
            display: inline-block;
            position: relative;
            top: 3px;
            margin-right: 5px;
            width: 14px;
            height: 16px;
            background: url("data:image/svg+xml,<svg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'><path d='M444.7 230.4l-141.1-132c-1.7-1.6-3.3-2.5-5.6-2.4-4.4.2-10 3.3-10 8v66.2c0 2-1.6 3.8-3.6 4.1C144.1 195.8 85 300.8 64.1 409.8c-.8 4.3 5 8.3 7.7 4.9 51.2-64.5 113.5-106.6 212-107.4 2.2 0 4.2 2.6 4.2 4.8v65c0 7 9.3 10.1 14.5 5.3l142.1-134.3c2.6-2.4 3.4-5.2 3.5-8.4-.1-3.2-.9-6.9-3.4-9.3z' fill='%2309204C'></path></svg>") center / 13px no-repeat;
        }

        #comment-editor-src, .comments .comment-form h4 {
            display: none;
        }

        li.comment {
            padding: 17px 13px;
            border-bottom: 1px dashed #cccccc4d;
        }

        .job-explain {
            flex: auto;
        }

        .job-feedback-container {
            padding: 20px;
            border-top: 15px solid #fafafb;
        }

        .success-box {
        }

        .success-box img {
            margin-right: 10px;
            display: inline-block;
            vertical-align: top;
        }

        .success-box > div {
            vertical-align: top;
            display: inline-block;
            color: #888;
        }

        .feedback-main textarea {
            width: 100%;
            border: 1px solid #e6e6e6;
            background: #f8f8f87a;
            border-radius: 3px;
            padding: 10px;
        }

        .feedback-main input[type="submit"] {
            border: navajowhite;
            padding: 7px 15px;
            border-radius: 5px;
            background: #2196F3;
            color: #fff;
            font-weight: 600;
            position: relative;
            float: right;
        }

        /* Rating Star Widgets Style */
        .rating-stars ul {
            list-style-type: none;
            padding: 0;
            -moz-user-select: none;
            -webkit-user-select: none;
        }

        .rating-stars ul > li.star {
            display: inline-block;
        }

        /* Idle State of the stars */
        .rating-stars ul > li.star > i.fa {
            font-size: 2.5em; /* Change the size of the stars */
            color: #ccc; /* Color on idle state */
        }

        /* Hover state of the stars */
        .rating-stars ul > li.star.hover > i.fa {
            color: #FFCC36;
        }

        /* Selected state of the stars */
        .rating-stars ul > li.star.selected > i.fa {
            color: #FF912C;
        }
    </style>
    <style>
        .avatar-image-container img {
            width: 100%;
            height: 100%;
        }

        span.cmt-star {
            color: #FF9800;
            font-size: 10px;
        }
    </style>

    <!-- Toastr -->
    {{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">--}}
    @toastr_css
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
                        <a class="nav-link" href="{{route('job.all')}}">Việc Làm IT</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
                    <li class="nav-item">
                        <img
                            src="{{ $seekerProfile->seeker->avatar_url ? asset('storage/'.$seekerProfile->seeker->avatar_url) : "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/OOjs_UI_icon_userAvatar-constructive.svg/1024px-OOjs_UI_icon_userAvatar-constructive.svg.png" }}"                             style="vertical-align: middle; width: 35px; height: 35px; border-radius: 50%;">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{$seekerProfile->name}}
                        </a>
                        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('seeker.profile.show')}}">Trang cá nhân</a>
                            <a class="dropdown-item" href="{{route('seeker.change-password.show')}}">Thay đổi mật khẩu</a>
                            <a class="dropdown-item" href="{{route('seeker.job.apply.list')}}">Công việc đã ứng tuyển</a>
                            <a class="dropdown-item" href="{{route('seeker.company.response.list')}}">Phản hồi từ nhà tuyển dụng</a>
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


<!-- published recuitment -->
<div class="container-fluid published-recuitment-wrapper">
    <div class="container published-recuitment-content">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-12 recuitment-inner mt-3">
                <div class="recuitment-form">
                    <h3 class="rect-heading" style="font-size: 28px; padding-left: 22px; font-weight: 500;">
                        {{$appliedJob->job->title}}
                    </h3>
                    <hr class="break-line">
                    <div class="user--profile-right">
                        <div class="user--profile-group">
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body recuitment-body">
                                    <div class="identify-contact">
                                        <h5 class="fs-16 fw-700 mb-3">Thông tin ứng viên
                                        </h5>
                                        <div class="row">
                                            <div class="col-12 pr-10 row pt-2 pb-2">
                                                <div class="col-md-2">Họ tên</div>
                                                <div class="col-md-8 pl-5 ml-2"><b>{{$appliedJob->user->name}}</b></div>
                                            </div>
                                            <div class="col-6 pr-10 row pt-2 pb-2">
                                                <div class="col-md-6">Số điện thoại</div>
                                                <div class="col-md-6"><b>{{$appliedJob->user->seeker->phone_number}}</b>
                                                </div>
                                            </div>
                                            <div class="col-6 pr-10 row pt-2 pb-2">
                                                <div class="col-md-4">Email</div>
                                                <div class="col-md-8"><b>{{$appliedJob->user->email}}</b></div>
                                            </div>
                                        </div>
                                        <h5 class="fs-16 fw-700 mb-3 mt-3">Trình độ học vấn</h5>
                                        @foreach($appliedJob->user->seeker->educations as $education)
                                            <div class="row">
                                                <div class="col-6 pr-10 row pt-2 pb-2">
                                                    <div class="col-md-6">Cơ sở đào tạo</div>
                                                    <div class="col-md-6" style="color: darkblue">
                                                        <b> {{$education->facility}}</b></div>
                                                </div>
                                                <div class="col-6 pr-10 row pt-2 pb-2">
                                                    <div class="col-md-6">Chuyên nghành</div>
                                                    <div class="col-md-6" style="color: darkblue">
                                                        <b> {{$education->major}}</b></div>
                                                </div>
                                                <div class="col-12 row pt-2 pb-2">
                                                    <div class="col-md-5">Kết quả</div>
                                                    <div class="col-md-7" style="color: darkblue">
                                                        <b> {{$education->degree}}</b>
                                                    </div>
                                                </div>
                                                <div class="col-12 row pt-2 pb-2">
                                                    <div class="col-md-5">Thời gian</div>
                                                    <div class="col-md-7" style="color: darkblue">
                                                        <b> {{Carbon\Carbon::parse($education->time_start)->format('d/m/Y')}}
                                                            - {{$education->state}}</b>
                                                    </div>
                                                </div>
                                                <p style="border-bottom: 1px dashed #ccc; display: block; width: 100%;"></p>
                                            </div>
                                        @endforeach
                                        <h5 class="fs-16 fw-700 mb-3 mt-3">Kinh nghiệm làm việc</h5>
                                        @foreach($appliedJob->user->seeker->experiences as $experience)
                                            <div class="row">
                                                <div class="col-6 pr-10 row pt-2 pb-2">
                                                    <div class="col-md-6">Chức vụ</div>
                                                    <div class="col-md-6" style="color: darkblue">
                                                        <b> {{$experience->name}}</b></div>
                                                </div>
                                                <div class="col-6 pr-10 row pt-2 pb-2">
                                                    <div class="col-md-4">Công ty</div>
                                                    <div class="col-md-8" style="color: darkblue">
                                                        <b> {{$experience->company_name}}</b></div>
                                                </div>
                                                <div class="col-12 row pt-2 pb-2">
                                                    <div class="col-md-5">Thời gian làm việc</div>
                                                    <div class="col-md-7" style="color: darkblue">
                                                        <b> {{Carbon\Carbon::parse($experience->time_start)->format('d/m/Y')}}
                                                            - {{Carbon\Carbon::parse($experience->time_finish)->format('d/m/Y')}}</b>
                                                    </div>
                                                </div>
                                                <p style="border-bottom: 1px dashed #ccc; display: block; width: 100%;"></p>
                                            </div>
                                        @endforeach
                                        <h5 class="fs-16 fw-700 mb-3 mt-3">Kỹ năng</h5>
                                        <div class="user_exp_edu Experience_11642 div-exp-height">
                                            @foreach($appliedJob->user->seeker->skills as $skill)
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {{$skill->name}}
                                                    </div>
                                                    <div class="col-md-6">
                                                    <span style="color: #ffc107">
                                                        @for($i=0;$i<$skill->level;$i++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                        @for($i=0;$i<5-$skill->level;$i++)
                                                            <i class="fa fa-star-o"></i>
                                                        @endfor
                                                    </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr class="break-line pt-1 pb-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="fs-16 fw-700 mb-3 mt-3">Nội dung thư</h5>
                            <div class="cover-letterx">
                                <textarea disabled class="w-100 letterx" rows="15"
                                          style="padding-top:20px;border: 1px solid blue;border-radius: 10px;">
                                    {{$appliedJob->introduction}}
                                </textarea>
                            </div>
                            <h5 class="fs-16 fw-700 mb-3 mt-3">Hồ sơ đính kèm</h5>
                            <a href="#" class="mb-5 d-block">{{$appliedJob->resume}}</a>
                        </div>
                    </div>
                    <div class="rec-submit">
                        @if($appliedJob->is_respond)
                            <a href="{{route('seeker.company.response.detail',['seeker_application_id'=> $appliedJob->id])}}" class="btn-submit-recuitment float-left mr-3"  style="background: cadetblue;">
                                Xem phản hồi
                            </a>
                        @elseif(!$appliedJob->is_skip)
                            <a href="javascript:void(0);" class="btn-submit-recuitment float-left mr-3" style="background: #1c7430;"
                               data-toggle="modal" data-target="#changeApply">
                                <i class="fa fa-floppy-o pr-2"></i>Sửa đơn ứng tuyển
                            </a>
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                {{--<div class="side-bar mb-3">
                    <div class="block-sidebar" style="margin-bottom: 20px;">
                        <header>
                            <h3 class="title-sidebar font-roboto bg-primary">
                                Việc làm tương tự
                            </h3>
                        </header>
                    </div>
                    <div class="job-tt-contain">
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/fpt-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    [HCM] 02 Solution Architects–Up to $2000
                                </a>
                                <a href="#" class="company">
                                    FPT Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>
                        <div class="job-tt-item">

                            <a href="#" class="thumb">
                                <div style="background-image: url('/img/alipay-logo.png');"></div>
                            </a>

                            <div class="info">
                                <a href="#" class="jobname">
                                    Fullstack .NET Developer (Angular/React)
                                </a>
                                <a href="#" class="company">
                                    Alipay Software
                                </a>
                            </div>
                        </div>

                    </div>
                </div>--}}
                <div class="side-bar mb-3">
                    <div class="block-sidebar" style="margin-bottom: 20px;">
                        <div class="content-sidebar menu-trung-tam-ql menu-ql-employer">
                            <h3 class="menu-ql-ntv">
                                Quản lý ứng tuyển
                            </h3>
                            <h3 class="menu-ql-ntv">
                                Danh sách phản hồi
                            </h3>
                            {{--                            <h3 class="menu-ql-ntv">--}}
                            {{--                                Quản lý tin tuyển dụng--}}
                            {{--                            </h3>--}}
                            {{--                            <h3 class="menu-ql-ntv">--}}
                            {{--                                Quản lý ứng viên--}}
                            {{--                            </h3>--}}
                            {{--                            <h3 class="menu-ql-ntv">--}}
                            {{--                                Hỗ trợ và thông báo--}}
                            {{--                            </h3>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- (end) published recuitment -->

<div class="clearfix"></div>

<!-- Modal -->
<div class="modal fade" id="changeApply" tabindex="-1" role="dialog" aria-labelledby="apply" aria-hidden="true"
     style="z-index: 9999">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="apply">Sửa hồ sơ ứng tuyển</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('seeker.job.changeApply')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="apply_id" value="{{$appliedJob->id}}">
                <div class="modal-body">
                    <p class="mb-3">Bạn đang ứng tuyển vào vị trí: <b>{{$appliedJob->job->title}}</b></p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group input-file-container">
                                <input style="width: 770px" type="file" name="resume" id="file"
                                       accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                       class="input-file"/>
                                <label tabindex="0" for="my-file" class="input-file-trigger">Sửa hồ sơ của bạn </label>
                                <p class="file-return">{{$appliedJob->resume}}</p>
                                @error('resume')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="identify-contact">
                                <h5 class="fs-16 fw-700">Xác định thông tin liên hệ.
                                </h5>
                                <p class="mb-0">Vui lòng xác nhận các thông tin dưới đây để nhà tuyển dụng có thể tìm
                                    thấy bạn.
                                </p>
                                <p>Các thay đổi sẽ cập nhật vào hồ sơ
                                </p>
                                <div class="row">
                                    <div class="col-6 pr-10">
                                        <div class="form-group">
                                            <label for="mf_phone">Số điện thoại: </label>
                                            <br>
                                            <input type="text" class="w-full" id="mf_phone" name="phone_number"
                                                   value="{{old('phone_number') ? old('phone_number') :($appliedJob->phone_number)}}"
                                                   placeholder="Số điện thoại">
                                            @error('phone_number')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6 pl-10">
                                        <div class="form-group">
                                            <label for="mf_email">Email:
                                            </label>
                                            <br>
                                            <input type="email" class="w-full" id="mf_email" name="email"
                                                   value="{{old('email') ? old('email') :($appliedJob->email)}}"
                                                   placeholder="Email">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pa-20">
                                <h5 class="fw-700 fs-18">Thư tự giới thiệu</h5>
                                <p>
                                    Sử dụng thư tự giới thiệu là 1 cách tôn trọng NTD và thể hiện sự nghiêm túc với công
                                    việc.
                                    Bạn có thể tham khảo thư mẫu hoặc tự viết một bức thư tự giới thiệu hoàn chỉnh.
                                </p>
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fw-700 mt-4 mb-2 d-block">Nội dung thư:</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group g-mt-15">
                                            <textarea class="w-full" name="introduction" id="mf-apply-content" rows="4"
                                                      style="height: 186px; width: 100%; border: 1px solid #ccc; border-radius: 8px;">
{{old('introduction') ? old('introduction') :($appliedJob->introduction)}}
                                            </textarea>
                                            @error('introduction')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn-sm btn-primary">Sửa hồ sơ ứng tuyển</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--<!-- job support -->
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
                            <input type="text" placeholder="Nhập email của bạn"
                                   class="newsletter-email form-control">
                            <a href="#" class="input-group-addon"><i class="fa fa-lg fa-envelope-o colorb"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- (end) job support -->--}}


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
                            Bách Khoa,Hà Nội
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
<script type="text/javascript" src="{{asset('js/readmore.js')}}"></script>
<script type="text/javascript">
    $('.catelog-list').readmore({
        speed: 75,
        maxHeight: 150,
        moreLink: '<a href="#">Xem thêm<i class="fa fa-angle-down pl-2"></i></a>',
        lessLink: '<a href="#">Rút gọn<i class="fa fa-angle-up pl-2"></i></a>'
    });
</script>
<script>
    document.querySelector("html").classList.add('js');

    var fileInput = document.querySelector(".input-file"),
        button = document.querySelector(".input-file-trigger"),
        the_return = document.querySelector(".file-return");

    button.addEventListener("keydown", function (event) {
        if (event.keyCode === 13 || event.keyCode === 32) {
            fileInput.focus();
        }
    });
    button.addEventListener("click", function (event) {
        fileInput.focus();
        return false;
    });
    fileInput.addEventListener("change", function (event) {
        the_return.innerHTML = this.files[0].name;
    });
</script>
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
<script type="text/javascript">
    @if (count($errors) > 0)
    $('#changeApply').modal('show');
    @endif
</script>
@jquery
@toastr_js
@toastr_render
</body>
</html>
