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

    <!-- multiple select -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
                <form action="{{route('company.post.store')}}" method="POST" class="recuitment-form">
                    @csrf
                    <div class="accordion" id="accordionExample">
                        <div class="card recuitment-card">
                            <div class="card-header recuitment-card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a class="btn btn-link btn-block text-left recuitment-header" type="button"
                                       data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">
                                        ????ng tin tuy???n d???ng
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
                                        <label class="col-sm-3 col-form-label text-right label">Ti??u ?????<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title"  value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror"
                                                   placeholder="Nh???p ti??u ?????">
                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Email nh???n h??? s??<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="application_email" value="{{old('application_email')}}" class="form-control @error('application_email') is-invalid @enderror"
                                                   placeholder="Nh???p email li??n h???">
                                            @error('application_email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">S??? l?????ng c???n
                                            tuy???n</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="amount" value="{{old('amount')}}" class="form-control @error('amount') is-invalid @enderror"
                                                   placeholder="1">
                                            @error('amount')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Th???i gian l??m
                                            vi???c</label>
                                        <div class="col-sm-9">
                                            <input type="number" step=0.01 name="work_time"  value="{{old('work_time')}}" class="form-control @error('work_time') is-invalid @enderror"
                                                   placeholder="1.00">
                                            @error('work_time')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Y??u c???u kinh nghi???m<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="experience" value="{{old('experience')}}" class="form-control @error('experience') is-invalid @enderror"
                                                   placeholder="Nh???p y??u c???u kinh nghi???m">
                                            @error('experience')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Danh m???c<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-7">
                                            <select class="js-category-multiple @error('categories') is-invalid @enderror" name="categories[]" multiple="multiple">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{collect(old('categories'))->contains($category->id) ? 'selected' : ''}}>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('categories')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn-submit-recuitment" id="add-category">
                                                Th??m
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Danh m???c (b??? sung)<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9" id="optional-categories">
                                            @error('optional_category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{--<div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Danh m???c (b??? sung)<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="optional" class="form-control"
                                                   placeholder="Nh???p y??u c???u kinh nghi???m">
                                        </div>
                                    </div>--}}
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">Y??u c???u v??? c??ng ngh???<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-7">
                                            <select class="js-technique-multiple" name="techniques[]" multiple="multiple">
                                                @foreach($techniqueTypes as $techniqueType)
                                                    <optgroup label="{{$techniqueType->name}}">
                                                        @foreach($techniqueType->techniques as $technique)
                                                            <option value="{{$technique->id}}" {{collect(old('techniques'))->contains($technique->id) ? 'selected' : ''}}>{{$technique->name}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn-submit-recuitment" id="add-technique">
                                                Th??m
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">C??ng ngh??? (b??? sung)<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9" id="optional_techniques">
                                            @error('optional_technique')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">M???c l????ng<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-3">
                                            <input type="number" name="salary_min" value="{{old('salary_min')}}" class="form-control @error('salary_min') is-invalid @enderror"
                                                   id="jobSalaryFrom">
                                            @error('salary_min')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-1">
                                            <i class="fa fa-minus" aria-hidden="true"
                                               style="margin-top: 10px;margin-left: 10px;"></i>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" name="salary_max" value="{{old('salary_max')}}" class="form-control @error('salary_max') is-invalid @enderror"
                                                   id="jobSalaryTo">
                                            @error('salary_max')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="salary_unit" value="{{old('salary_unit')}}" class="form-control @error('salary_unit') is-invalid @enderror"
                                                   placeholder="Unit">
                                            @error('salary_unit')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">N??i l??m vi???c</label>
                                        <div class="col-sm-9">
                                            <select type="text" name="province_id" class="form-control @error('province_id') is-invalid @enderror"
                                                    id="jobProvince">
                                                <option value="" disabled selected>Ch???n n??i l??m vi???c</option>
                                                @foreach($provinces as $province)
                                                    <option value="{{$province->id}}" {{old('province_id') == $province->id ? 'selected' : ''}}>{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('province_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">?????a ch??? c??? th???<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address"  value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror"
                                                   placeholder="Nh???p ?????a ch???">
                                            @error('address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">H???n n???p h??? s??<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="date" name="expire" value="{{old('expire')}}" class="form-control @error('expire') is-invalid @enderror">
                                            @error('expire')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-right label">M?? t??? c??ng vi???c<span
                                                style="color: red" class="pl-2">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea type="text" id="summernote" name="details" class="form-control @error('details') is-invalid @enderror"
                                                      placeholder="Nh???p m?? t??? c??ng vi???c" rows="8">{{old('details')}}</textarea>
                                            @error('details')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rec-submit">
                        <button type="submit" class="btn-submit-recuitment" id="submit-post-create">
                            <i class="fa fa-floppy-o pr-2"></i>L??u Tin
                        </button>
                    </div>
                </form>

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
{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>--}}
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jobdata.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- Owl Stylesheets Javascript -->
<script src="{{asset('js/owlcarousel/owl.carousel.js')}}"></script>
<!-- Read More Plugin -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
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
        $('#summernote').summernote({
            placeholder: 'Nh???p m?? t??? c??ng vi???c...',
            tabsize: 1,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('.js-category-multiple').select2({
            placeholder: "Ch???n c??c danh m???c"
        });
        $('.js-technique-multiple').select2({
            placeholder: "Ch???n c??c c??ng ngh???"
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
                                    '<option value="0" disabled selected>Nh???p technique type</option>' +
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
            e.preventDefault();
            var html = '<div class="row" id="rw'+i+'">' +
                            '<div class="col-sm-5">' +
                                '<select type="text" name="technique_type_option[]" class="form-control" id="technique_type_option">' +
                                    '<option value="" disabled selected>Nh???p technique type</option>' +
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
</script>
</body>
</html>
