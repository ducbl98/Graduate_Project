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
                        <a class="nav-link" href="{{route('job.all')}}">Vi???c L??m IT</a>
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
                            <a class="dropdown-item" href="{{route('seeker.profile.show')}}">Trang c?? nh??n</a>
                            <a class="dropdown-item" href="{{route('seeker.change-password.show')}}">Thay ?????i m???t kh???u</a>
                            <a class="dropdown-item" href="{{route('seeker.job.apply.list')}}">C??ng vi???c ???? ???ng tuy???n</a>
                            <a class="dropdown-item" href="{{route('seeker.job.save.list')}}">C??ng vi???c ???? l??u</a>
                            <a class="dropdown-item" href="{{route('seeker.company.response.list')}}">Ph???n h???i t??? nh?? tuy???n d???ng</a>
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


<!-- published recuitment -->
<div class="container-fluid published-recuitment-wrapper">
    <div class="container published-recuitment-content">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-12 recuitment-inner">
                <div class="recuitment-form">
                    <h3 class="rect-heading" style="font-size: 28px; padding-left: 22px; font-weight: 500;">H??? s??</h3>
                    <hr class="break-line">
                    {{--                    <a href="#" class="btn-sm btn-primary float-right" style="margin-top: -45px"><i class="fa fa-user mr-2"></i>C???p Nh???t T??i Kho???n</a>--}}
                    <div class="user--profile-right">
                        <div class="user--profile-group">
                            <h2 class="user--profile-title-group">Th??ng tin </h2>
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
                                                <label class="lbcfip">Ch???n ???nh ...</label>
                                                <input type="submit" id="sbAvatar" value="???" style="display: none;">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="FamilyName" class="required">
                                                    H??? v?? t??n
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
                                                    Ng??y sinh
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
                                                    S??? ??i???n tho???i
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
                                                    ?????a ch??? Email
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
                                                    Gi???i t??nh
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <span id="span-email" class="span-display" style="display: block;">
                                                    {{ $seekerProfile->seeker->gender ? $seekerProfile->seeker->gender == 0 ? 'Nam' : 'N???' : 'No Information' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="EmailAddress" class="required">
                                                    ?????a ch???
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
                            <h2 class="user--profile-title-group" style="margin-bottom: -10px;">H???c v???n </h2>
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
                                                                    Chuy??n ngh??nh
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
                                                                    K???t qu??? ????o t???o
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
                                                                    T???
                                                                </label>
                                                                <label id="LabelWorkingTime_11642"
                                                                       class="required edu-exp-label"
                                                                       style="display: block;">
                                                                    Th???i gian
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
                            <h2 class="user--profile-title-group" style="margin-bottom: -10px;">Kinh nghi???m </h2>
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
                                                                    Ch???c danh c??ng vi???c
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
                                                                    T??n c??ng ty
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
                                                                    T???
                                                                </label>
                                                                <label id="LabelWorkingTime_11642"
                                                                       class="required edu-exp-label"
                                                                       style="display: block;">
                                                                    Th???i gian l??m vi???c
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
                            <h2 class="user--profile-title-group" style="margin-bottom: -10px;">K??? n??ng
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
{{--                                Vi???c l??m t????ng t???--}}
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
{{--                                    [HCM] 02 Solution Architects???Up to $2000--}}
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
                                Qu???n l?? ???ng tuy???n
                            </h3>
                            <h3 class="menu-ql-ntv">
                                Danh s??ch ph???n h???i
                            </h3>
{{--                            <h3 class="menu-ql-ntv">--}}
{{--                                Qu???n l?? tin tuy???n d???ng--}}
{{--                            </h3>--}}
{{--                            <h3 class="menu-ql-ntv">--}}
{{--                                Qu???n l?? ???ng vi??n--}}
{{--                            </h3>--}}
{{--                            <h3 class="menu-ql-ntv">--}}
{{--                                H??? tr??? v?? th??ng b??o--}}
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
                <h5 class="modal-title" id="editInformation">C???p nh???p th??ng tin t??i kho???n</h5>
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
                                    <option value="1" {{$seekerProfile->seeker->gender == 1 ? 'selected' : ''}}>N???
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
                    <button class="btn btn-primary" type="submit">C???p Nh???t T??i Kho???n</button>
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
                <h5 class="modal-title" id="addEducation">Th??m tr??nh ????? h???c v???n</h5>
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
                                <label class="control-label">C?? s??? gi??o d???c</label>
                                <input name="facility" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Chuy??n ng??nh</label>
                                <input name="major" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">K???t qu??? h???c t???p</label>
                                <input name="degree" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Ng??y b???t ?????u</label>
                                <input type="date" name="time_start" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tr???ng th??i</label>
                                <input  name="state" class="form-control iptt"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">Th??m m???i</button>
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
                <h5 class="modal-title" id="editEducation">S???a tr??nh ????? h???c v???n</h5>
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
                                <label class="control-label">C?? s??? gi??o d???c</label>
                                <input id="eEdu-facility" name="facility" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Chuy??n ng??nh</label>
                                <input id="eEdu-major" name="major" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">K???t qu??? h???c t???p</label>
                                <input id="eEdu-degree" name="degree" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Ng??y b???t ?????u</label>
                                <input type="date" id="eEdu-start" name="time_start" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tr???ng th??i</label>
                                <input  id="eEdu-state" name="state" class="form-control iptt"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">C???p nh???t</button>
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
                <h5 class="modal-title" id="addExperience">Th??m kinh nghi???m l??m vi???c</h5>
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
                                <label class="control-label">T??n ch???c v???</label>
                                <input name="name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">T??n c??ng ty</label>
                                <input name="company_name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Ng??y b???t ?????u</label>
                                <input type="date" name="time_start" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Ng??y k???t th??c</label>
                                <input type="date" name="time_finish" class="form-control iptt"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">Th??m m???i</button>
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
                <h5 class="modal-title" id="editExperience">S???a kinh nghi???m l??m vi???c</h5>
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
                                <label class="control-label">T??n ch???c v???</label>
                                <input id="eExp-name" name="name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">T??n c??ng ty</label>
                                <input id="eExp-com-name" name="company_name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="control-label">Ng??y b???t ?????u</label>
                                <input id="eExp-start" type="date" name="time_start" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Ng??y k???t th??c</label>
                                <input id="eExp-finish" type="date" name="time_finish" class="form-control iptt"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn-sm btn-primary" type="submit">C???p nh???t</button>
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
                <h5 class="modal-title" id="addSkill">Th??m k??? n??ng</h5>
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
                                <label class="control-label">T??n k??? n??ng</label>
                                <input name="name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">M???c ?????</label>
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
                    <button class="btn-sm btn-primary" type="submit">Th??m m???i</button>
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
                <h5 class="modal-title" id="editSkill">S???a k??? n??ng</h5>
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
                                <label class="control-label">T??n k??? n??ng</label>
                                <input id="eSk-name" name="name" class="form-control iptt"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">M???c ?????</label>
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
                    <button class="btn-sm btn-primary" type="submit">Thay ?????i</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- (end) Modal edit skill -->

{{--<!-- job support -->
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
                            <input type="text" placeholder="Nh???p email c???a b???n"
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
