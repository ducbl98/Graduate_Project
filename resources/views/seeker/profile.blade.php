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
                            <a class="dropdown-item" href="{{route('seeker.job.save.list')}}">Công việc đã lưu</a>
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
            <div class="col-md-8 col-sm-12 col-12 recuitment-inner">
                <div class="recuitment-form">
                    <h3 class="rect-heading" style="font-size: 28px; padding-left: 22px; font-weight: 500;">Hồ sơ</h3>
                    <hr class="break-line">
                    {{--                    <a href="#" class="btn-sm btn-primary float-right" style="margin-top: -45px"><i class="fa fa-user mr-2"></i>Cập Nhật Tài Khoản</a>--}}
                    <div class="user--profile-right">
                        <div class="user--profile-group">
                            <h2 class="user--profile-title-group">Thông tin </h2>
                            <div class="row rowdiv">
                                <div class="col-md-3 col-xs-12">
                                    <div class="row">
                                        <form action="{{ route('seeker.profile.updateAvatar') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $seekerProfile->seeker->id }}" name="id"/>
                                            <div id="ImgPreview" class="img">
                                                <img id="blah"
                                                     src="{{ $seekerProfile->seeker->avatar_url ? asset('storage/'.$seekerProfile->seeker->avatar_url) : "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/OOjs_UI_icon_userAvatar-constructive.svg/1024px-OOjs_UI_icon_userAvatar-constructive.svg.png" }}">
                                                <input type="file" accept="image/*" name="seeker_avatar" id="imgInp"
                                                       class="custom-fileinput">
                                                <label class="lbcfip">Chọn ảnh ...</label>
                                                <input type="submit" id="sbAvatar" value="✓" style="display: none;">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="FamilyName" class="required">
                                                    Họ và tên
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <span id="span-name" class="span-display" style="display: block;">
                                                    {{$seekerProfile->name}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="BirthYear">
                                                    Ngày sinh
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <span id="span-birthday" class="span-display" style="display: block;">
                                                    {{ $seekerProfile->seeker->birthday ? $seekerProfile->seeker->birthday : 'No Information' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="text" class="required">
                                                    Số điện thoại
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <span id="span-phone" class="span-display" style="display: block;">
                                                    {{ $seekerProfile->seeker->phone_number }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="EmailAddress" class="required">
                                                    Địa chỉ Email
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <span id="span-email" class="span-display" style="display: block;">
                                                    {{ $seekerProfile->email }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="EmailAddress" class="required">
                                                    Giới tính
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <span id="span-email" class="span-display" style="display: block;">
                                                    {{ $seekerProfile->seeker->gender ? $seekerProfile->seeker->gender == 0 ? 'Nam' : 'Nữ' : 'No Information' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="EmailAddress" class="required">
                                                    Địa chỉ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <span id="span-email" class="span-display" style="display: block;">
                                                    {{ $seekerProfile->seeker->address ? $seekerProfile->seeker->address : 'No Information' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-1">
                                    <p style="float: right;">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#editInformation">
                                            {{--                                            <i class="fa fa-edit" id="edit-pencil-info">--}}
                                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"
                                               id="edit-pencil-info"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr class="break-line">
                                </div>
                            </div>

                            <!-- </form> -->
                            <h2 class="user--profile-title-group" style="margin-bottom: -10px;">Học vấn </h2>
                            <div class="row">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#addEducation"
                                   style="float: right; display: block; text-align: center; width: 25px; height: 25px; position: relative; right: -91%; background: #3F51B5; border-radius: 50%; line-height: 27px; color: #fff;">
                                    <span class="fa fa-plus"></span>
                                </a>
                                <div class="col-md-12">
                                    <div class="user_exp_edu Experience_11642 div-exp-height">
                                        <div class="row rowdiv1">
                                            @foreach($seekerProfile->seeker->educations as $education)
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <span id="span-Position-11642"
                                                                      class="span-display-education-univer"
                                                                      style="display: block;color: yellowgreen;font-size: 20px;font-weight: 500;">
                                                                {{$education->facility}}
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="CompanyName" id="LabelCompanyName_11642"
                                                                       class="required edu-exp-label">
                                                                    Chuyên nghành
                                                                </label>
                                                                <span id="span-CompanyName-11642"
                                                                      class="span-display-education"
                                                                      style="display: block;">
                                                                {{$education->major}}
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="CompanyName" id="LabelCompanyName_11642"
                                                                       class="required edu-exp-label">
                                                                    Kết quả đào tạo
                                                                </label>
                                                                <span id="span-CompanyName-11642"
                                                                      class="span-display-education"
                                                                      style="display: block;">
                                                                {{$education->degree}}
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="FromDateExp" id="LabelFromDateExp_11642"
                                                                       class="required edu-exp-label"
                                                                       style="display: none;">
                                                                    Từ
                                                                </label>
                                                                <label id="LabelWorkingTime_11642"
                                                                       class="required edu-exp-label"
                                                                       style="display: block;">
                                                                    Thời gian
                                                                </label>
                                                                <span id="span-time-Exp-11642"
                                                                      class="span-display-education"
                                                                      style="display: block;">
                                                                {{Carbon\Carbon::parse($education->time_start)->format('Y-m-d')}} - {{$education->state}}
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="float: right;">
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#editEducation" data-id="{{$education->id}}"
                                                           data-facility="{{$education->facility}}"
                                                           data-major="{{$education->major}}"
                                                           data-degree="{{$education->degree}}"
                                                           data-start="{{Carbon\Carbon::parse($education->time_start)->format('Y-m-d')}}"
                                                           data-state="{{$education->state}}">
                                                            <i class="fa fa-pencil-square-o fa-lg"
                                                               style="margin-right: 20px" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{route('seeker.education.delete',['id'=> $education->id])}}">
                                                            <i class="fa fa-trash fa-lg"
                                                               style="margin: 15px 20px 0 0;color: red"
                                                               aria-hidden="true"></i>
                                                        </a>
                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <hr class="break-line">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- </form> -->
                            <h2 class="user--profile-title-group" style="margin-bottom: -10px;">Kinh nghiệm </h2>
                            <div class="row">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#addExperience"
                                   style="float: right; display: block; text-align: center; width: 25px; height: 25px; position: relative; right: -91%; background: #3F51B5; border-radius: 50%; line-height: 27px; color: #fff;">
                                    <span class="fa fa-plus"></span>
                                </a>
                                <div class="col-md-12">
                                    <div class="user_exp_edu Experience_11642 div-exp-height">
                                        <div class="row rowdiv1">
                                            @foreach($seekerProfile->seeker->experiences as $experience)
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="Position" id="LabelPosition_11642"
                                                                       class="required edu-exp-label">
                                                                    Chức danh công việc
                                                                </label>
                                                                <span id="span-Position-11642"
                                                                      class="span-display-education-univer"
                                                                      style="display: block;">
                                                                {{$experience->name}}
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="CompanyName" id="LabelCompanyName_11642"
                                                                       class="required edu-exp-label">
                                                                    Tên công ty
                                                                </label>
                                                                <span id="span-CompanyName-11642"
                                                                      class="span-display-education"
                                                                      style="display: block;">
                                                                {{$experience->company_name}}
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="FromDateExp" id="LabelFromDateExp_11642"
                                                                       class="required edu-exp-label"
                                                                       style="display: none;">
                                                                    Từ
                                                                </label>
                                                                <label id="LabelWorkingTime_11642"
                                                                       class="required edu-exp-label"
                                                                       style="display: block;">
                                                                    Thời gian làm việc
                                                                </label>
                                                                <span id="span-time-Exp-11642"
                                                                      class="span-display-education"
                                                                      style="display: block;">
                                                                {{Carbon\Carbon::parse($experience->time_start)->format('Y-m-d')}} - {{Carbon\Carbon::parse($experience->time_finish)->format('Y-m-d')}}
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="float: right;">
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#editExperience" data-id="{{$experience->id}}"
                                                           data-name="{{$experience->name}}"
                                                           data-cname="{{$experience->company_name}}"
                                                           data-start="{{Carbon\Carbon::parse($experience->time_start)->format('Y-m-d')}}"
                                                           data-finish="{{Carbon\Carbon::parse($experience->time_finish)->format('Y-m-d')}}">
                                                            <i class="fa fa-pencil-square-o fa-lg"
                                                               style="margin-right: 20px" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{route('seeker.experience.delete',['id'=> $experience->id])}}">
                                                            <i class="fa fa-trash fa-lg"
                                                               style="margin: 15px 20px 0 0;color: red"
                                                               aria-hidden="true"></i>
                                                        </a>
                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <hr class="break-line">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- </form> -->
                            <h2 class="user--profile-title-group" style="margin-bottom: -10px;">Kỹ năng
                            </h2>
                            <div class="row">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#addSkill"
                                   style="float: right; display: block; text-align: center; width: 25px; height: 25px; position: relative; right: -91%; background: #3F51B5; border-radius: 50%; line-height: 27px; color: #fff;">
                                    <span class="fa fa-plus"></span>
                                </a>
                                <div class="col-md-12">
                                    <div class="user_exp_edu Experience_11642 div-exp-height">
                                        <div class="row rowdiv2">
                                            @foreach($seekerProfile->seeker->skills as $skill)
                                                <div class="col-md-5">
                                                    {{ $skill->name }}
                                                </div>
                                                <div class="col-md-5">
                                                    <span style="color: #ffc107">
                                                        @for($i=0;$i<$skill->level;$i++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                        @for($i=0;$i<5-$skill->level;$i++)
                                                            <i class="fa fa-star-o"></i>
                                                        @endfor

                                                    </span>
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="float: right;">
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#editSkill" data-id="{{$skill->id}}"
                                                           data-name="{{$skill->name}}" data-level="{{$skill->level}}">
                                                            <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="float: right;">
                                                        <a href="{{route('seeker.skill.delete',["id"=>$skill->id])}}">
                                                            <i class="fa fa-trash fa-lg"
                                                               style="color: red"
                                                               aria-hidden="true"></i>
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <br>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <hr class="break-line">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row">
                                    <div class="col-md-3">
                                        <span id="add-experience" onclick="genSingleExperience()" style="cursor: pointer">
                                            <i class="cl-icon-plus-circle-full add-education-img"></i>
                                        </span>
                                    </div>
                            </div> -->
                            <form id="frm-experience">
                                <div id="experience-section"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
{{--                <div class="side-bar mb-3">--}}
{{--                    <div class="block-sidebar" style="margin-bottom: 20px;">--}}
{{--                        <header>--}}
{{--                            <h3 class="title-sidebar font-roboto bg-primary">--}}
{{--                                Việc làm tương tự--}}
{{--                            </h3>--}}
{{--                        </header>--}}
{{--                    </div>--}}
{{--                    <div class="job-tt-contain">--}}
{{--                        <div class="job-tt-item">--}}

{{--                            <a href="#" class="thumb">--}}
{{--                                <div style="background-image: url('/img/alipay-logo.png');"></div>--}}
{{--                            </a>--}}

{{--                            <div class="info">--}}
{{--                                <a href="#" class="jobname">--}}
{{--                                    Fullstack .NET Developer (Angular/React)--}}
{{--                                </a>--}}
{{--                                <a href="#" class="company">--}}
{{--                                    Alipay Software--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="job-tt-item">--}}

{{--                            <a href="#" class="thumb">--}}
{{--                                <div style="background-image: url('/img/fpt-logo.png');"></div>--}}
{{--                            </a>--}}

{{--                            <div class="info">--}}
{{--                                <a href="#" class="jobname">--}}
{{--                                    [HCM] 02 Solution Architects–Up to $2000--}}
{{--                                </a>--}}
{{--                                <a href="#" class="company">--}}
{{--                                    FPT Software--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="job-tt-item">--}}

{{--                            <a href="#" class="thumb">--}}
{{--                                <div style="background-image: url('/img/alipay-logo.png');"></div>--}}
{{--                            </a>--}}

{{--                            <div class="info">--}}
{{--                                <a href="#" class="jobname">--}}
{{--                                    Fullstack .NET Developer (Angular/React)--}}
{{--                                </a>--}}
{{--                                <a href="#" class="company">--}}
{{--                                    Alipay Software--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="job-tt-item">--}}

{{--                            <a href="#" class="thumb">--}}
{{--                                <div style="background-image: url('/img/alipay-logo.png');"></div>--}}
{{--                            </a>--}}

{{--                            <div class="info">--}}
{{--                                <a href="#" class="jobname">--}}
{{--                                    Fullstack .NET Developer (Angular/React)--}}
{{--                                </a>--}}
{{--                                <a href="#" class="company">--}}
{{--                                    Alipay Software--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="job-tt-item">--}}

{{--                            <a href="#" class="thumb">--}}
{{--                                <div style="background-image: url('/img/alipay-logo.png');"></div>--}}
{{--                            </a>--}}

{{--                            <div class="info">--}}
{{--                                <a href="#" class="jobname">--}}
{{--                                    Fullstack .NET Developer (Angular/React)--}}
{{--                                </a>--}}
{{--                                <a href="#" class="company">--}}
{{--                                    Alipay Software--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="job-tt-item">--}}

{{--                            <a href="#" class="thumb">--}}
{{--                                <div style="background-image: url('/img/alipay-logo.png');"></div>--}}
{{--                            </a>--}}

{{--                            <div class="info">--}}
{{--                                <a href="#" class="jobname">--}}
{{--                                    Fullstack .NET Developer (Angular/React)--}}
{{--                                </a>--}}
{{--                                <a href="#" class="company">--}}
{{--                                    Alipay Software--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="job-tt-item">--}}

{{--                            <a href="#" class="thumb">--}}
{{--                                <div style="background-image: url('/img/alipay-logo.png');"></div>--}}
{{--                            </a>--}}

{{--                            <div class="info">--}}
{{--                                <a href="#" class="jobname">--}}
{{--                                    Fullstack .NET Developer (Angular/React)--}}
{{--                                </a>--}}
{{--                                <a href="#" class="company">--}}
{{--                                    Alipay Software--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
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

<!-- MODAL  -->
<!-- Modal edit info -->
<div class="modal fade" id="editInformation" tabindex="-1" role="dialog" aria-labelledby="editInformation"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInformation">Cập nhập thông tin tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('seeker.profile.updateProfile')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$seekerProfile->id}}"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input name="name" class="form-control iptt" value="{{$seekerProfile->name}}"/>
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input disabled name="email" class="form-control iptt"
                                       value="{{$seekerProfile->email}}"/>
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Phone</label>
                                <input name="phone_number" class="form-control iptt"
                                       value="{{$seekerProfile->seeker->phone_number}}"/>
                            </div>
                            @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Birthday</label>
                                <input type="date" name="birthday" class="form-control iptt"
                                       value="{{Carbon\Carbon::parse($seekerProfile->seeker->birthday)->format('Y-m-d')}}"/>
                            </div>
                            @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select name="gender" class="form-control iptt">
                                    <option value="0">Nam</option>
                                    <option value="1" {{$seekerProfile->seeker->gender == 1 ? 'selected' : ''}}>Nữ
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input name="address" class="form-control iptt"
                                       value="{{$seekerProfile->seeker->address}}"/>
                            </div>
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Cập Nhật Tài Khoản</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- (end) Modal edit info -->

<!-- Modal add education-->
<div class="modal fade" id="addEducation" tabindex="-1" role="dialog" aria-labelledby="addEducation"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEducation">Thêm trình độ học vấn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('seeker.education.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Cơ sở giáo dục</label>
                                <input name="facility" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Chuyên ngành</label>
                                <input name="major" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Kết quả học tập</label>
                                <input name="degree" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Ngày bắt đầu</label>
                                <input type="date" name="time_start" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Trạng thái</label>
                                <input  name="state" class="form-control iptt"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- (end) Modal add education -->

<!-- Modal edit education-->
<div class="modal fade" id="editEducation" tabindex="-1" role="dialog" aria-labelledby="editEducation"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEducation">Sửa trình độ học vấn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('seeker.education.edit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="eEdu-id"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Cơ sở giáo dục</label>
                                <input id="eEdu-facility" name="facility" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Chuyên ngành</label>
                                <input id="eEdu-major" name="major" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Kết quả học tập</label>
                                <input id="eEdu-degree" name="degree" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Ngày bắt đầu</label>
                                <input type="date" id="eEdu-start" name="time_start" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Trạng thái</label>
                                <input  id="eEdu-state" name="state" class="form-control iptt"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- (end) Modal edit education -->

<!-- Modal add experience-->
<div class="modal fade" id="addExperience" tabindex="-1" role="dialog" aria-labelledby="addExperience"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addExperience">Thêm kinh nghiệm làm việc</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('seeker.experience.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tên chức vụ</label>
                                <input name="name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tên công ty</label>
                                <input name="company_name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Ngày bắt đầu</label>
                                <input type="date" name="time_start" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Ngày kết thúc</label>
                                <input type="date" name="time_finish" class="form-control iptt"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- (end) Modal add experience -->

<!-- Modal edit experience-->
<div class="modal fade" id="editExperience" tabindex="-1" role="dialog" aria-labelledby="editExperience"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editExperience">Sửa kinh nghiệm làm việc</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('seeker.experience.edit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="eExp-id"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tên chức vụ</label>
                                <input id="eExp-name" name="name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tên công ty</label>
                                <input id="eExp-com-name" name="company_name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Ngày bắt đầu</label>
                                <input id="eExp-start" type="date" name="time_start" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Ngày kết thúc</label>
                                <input id="eExp-finish" type="date" name="time_finish" class="form-control iptt"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- (end) Modal edit experience -->

<!-- Modal add skill-->
<div class="modal fade" id="addSkill" tabindex="-1" role="dialog" aria-labelledby="addSkill" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSkill">Thêm kỹ năng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('seeker.skill.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tên kỹ năng</label>
                                <input name="name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Mức độ</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="range-slider">
                                <input class="range-slider__range" type="range" value="0" min="1" max="5" step="1"
                                       name="level">
                                <span class="range-slider__value">0</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- (end) Modal add skill -->

<!-- Modal edit skill-->
<div class="modal fade" id="editSkill" tabindex="-1" role="dialog" aria-labelledby="editSkill" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSkill">Sửa kỹ năng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('seeker.skill.edit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="eSk-id"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tên kỹ năng</label>
                                <input id="eSk-name" name="name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Mức độ</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="range-slider">
                                <input class="range-slider__range" id="eSk-level" type="range"
                                       min="1" max="5" step="1" name="level">
                                <span class="range-slider__value">0</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">Thay đổi</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- (end) Modal edit skill -->

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
<script>
    var rangeSlider = function () {
        var slider = $('.range-slider'),
            range = $('.range-slider__range'),
            value = $('.range-slider__value');

        slider.each(function () {

            value.each(function () {
                var value = $(this).prev().attr('value');
                $(this).html(value);

            });

            range.on('input', function () {
                $(this).next(value).html(this.value);
            });
        });

    };

    rangeSlider();

    $(document).ready(function () {
        $('#myTable').DataTable();
    });

    <!-- Preview image before upload  -->
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
        $("#sbAvatar").attr('style', 'display: block');
    });

    $("#imgInp2").change(function () {
        readURL2(this);
        $("#sbAvatar2").attr('style', 'display: block');
    });

    $('#editExperience').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id');
        var name = button.data('name');
        var com_name = button.data('cname');
        var start = button.data('start');
        var finish = button.data('finish');
        console.log(id, name, com_name, start, finish);
        $("#eExp-id").val(id);
        $("#eExp-name").val(name);
        $("#eExp-com-name").val(com_name);
        $("#eExp-start").val(start);
        $("#eExp-finish").val(finish);
        // console.log();
        // alert(recipient);
    })

    $('#editSkill').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id');
        var name = button.data('name');
        var level = button.data('level');
        console.log(id,name,level);
        $("#eSk-id").val(id);
        $("#eSk-name").val(name);
        $("#eSk-level").val(level);
        $('.range-slider__value').html(level);
        // console.log();
        // alert(recipient);
    })

    $('#editEducation').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id');
        var facility = button.data('facility');
        var major = button.data('major');
        var degree = button.data('degree');
        var start = button.data('start');
        var state = button.data('state');
        console.log(id,facility,major,degree,start,state);
        $("#eEdu-id").val(id);
        $("#eEdu-facility").val(facility);
        $("#eEdu-major").val(major);
        $("#eEdu-degree").val(degree);
        $("#eEdu-start").val(start);
        $("#eEdu-state").val(state);
        // console.log();
        // alert(recipient);
    })
</script>
<script type="text/javascript">
    @if (count($errors) > 0)
    $('#editInformation').modal('show');
    @endif
</script>
@jquery
@toastr_js
@toastr_render
</body>
</html>
