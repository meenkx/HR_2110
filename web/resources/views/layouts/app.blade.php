<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ config('app.name') }} - {{ date('Y') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/teamlist.css') }}" rel="stylesheet">
    <link href="{{ asset('css/workhistory.css') }}" rel="stylesheet">
    <link href="{{ asset('css/popup_search.css') }}" rel="stylesheet">


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <style>
        .col-centered{
            float: none;
            margin: 0 auto;
            margin-top: auto;
            margin-bottom: auto;
        }
    </style>

    {{--dropdown--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/dropdown/dropdown.css') }}">
    <script src="{{ asset('js/dropdown/dropdown.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#dropdown_date').stbDropdown();
            $('#dropdown_day').stbDropdown();
            $('#dropdown_month').stbDropdown();
            $('#dropdown_year').stbDropdown();
            $('#dropdown_department').stbDropdown();
            $('#dropdown_admindepartment_kpi').stbDropdown();
            $('#dropdown_month_workhistory').stbDropdown();
            $('#dropdown_year_workhistory').stbDropdown();
            $('#dropdown_department_workhistory').stbDropdown();
            $('#dropdown_month_salary').stbDropdown();
            $('#dropdown_year_salary').stbDropdown();
            $('#dropdown_location_branchLocation').stbDropdown();
            $('#dropdown_department_branchLocation').stbDropdown();
            $('#dropdown_department_payment').stbDropdown();
            $('#dropdown_year_salaryEdit').stbDropdown();
            $('#dropdown_month_salaryEdit').stbDropdown();
        });
    </script>
    {{--dropzone--}}
    {{--<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css'>--}}
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    <style type="text/css">
        .removeImage {  position: absolute; right: 15px; top: 10px; border-radius: 50%; padding: 5px; cursor: pointer; }
        .upldPhoto{ text-align: center; margin-bottom: 20px; }
    </style>

    {{--config--}}
    <style>
        html,body{
            font-family: 'Kanit', sans-serif;
            overflow-x: hidden;
        }
        .navbar{
            border-radius: 0px;
        }
        /* unvisited link */
        a:link {text-decoration: none;}
        /* visited link */
        a:visited {text-decoration: none;}
        /* mouse over link */
        a:hover {text-decoration: none;}
        /* selected link */
        a:active {text-decoration: none;}

        .stb-select-container .stb-select{
            overflow-x: hidden;
        }
        .stb-select::-webkit-scrollbar-track
        {
            /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/
            border-radius: 0px;
            background-color: #F5F5F5;
        }
        .stb-select::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }
        .stb-select::-webkit-scrollbar-thumb
        {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

        /*modal center*/
        .modal-dialog {
            min-height: calc(100vh - 60px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: auto;
        }
        @media(max-width: 768px) {
            .modal-dialog {
                min-height: calc(100vh - 20px);
            }
        }

        /*bootstrap button*/
        .btn:focus, .btn:active {
            outline: none !important;
            box-shadow: none !important;
        }
        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open>.dropdown-toggle.btn-default {
            color: black;
            background-color: #f7f2f2;
            border-color: red; /*set the color you want here*/
        }
        .btn-warning{
            color: black;
            background-color: #F8C557;
            border-color: #F8C557;
        }
        .btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active, .open>.dropdown-toggle.btn-warning
        {
            color: #fff;
            background-color: black;
            border-color: black; /*set the color you want here*/
        }
        .btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open>.dropdown-toggle.btn-danger,
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary
        {
            color: #fff;
        }
        .button_hover:hover, .button_hover:focus, .button_hover:active, .button_hover.active, .open>.dropdown-toggle.button_hover {
            color: #ffc439;
        }
        .btn-default{
            background-color: white;
            border-color: white; /*set the color you want here*/
        }
        #edit_icon:hover , #edit_icon:focus{
            box-shadow: 0px 0px 10px 0px black;
            border-radius: 100px;
            cursor: pointer;
            transition: all .2s ease-out;
            animation: pulse 5s infinite;
        }
        @if (Route::getCurrentRoute()->uri() == 'edit' )
        .vertical-alignment-helper {
            display:table;
            height: 100%;
            width: 100%;
            pointer-events:none;
        }
        .vertical-align-center {
            /* To center vertically */
            display: table-cell;
            vertical-align: middle;
            pointer-events:none;
        }
        .modal-content {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            max-width:inherit; /* For Bootstrap 4 - to avoid the modal window stretching full width */
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            pointer-events:all;
        }
        @elseif(Route::getCurrentRoute()->uri() == 'admin_workhistory')
            .stb-select-container{
            width: 20% !important;
        }
        @elseif(Route::getCurrentRoute()->uri() == 'admin_kpi')
            .stb-select-container{
                width: 15% !important;
                margin-left: 0px;
            }
            .stb-select-container .stb-select{
                width: 101.5%;
            }
        @elseif(Route::getCurrentRoute()->uri() == 'admin_profile')
            .vertical-alignment-helper {
                display:table;
                height: 100%;
                width: 100%;
                pointer-events:none;
            }
            .vertical-align-center {
                /* To center vertically */
                display: table-cell;
                vertical-align: middle;
                pointer-events:none;
            }
            .modal-content {
                /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
                width:inherit;
                max-width:inherit; /* For Bootstrap 4 - to avoid the modal window stretching full width */
                height:inherit;
                /* To center horizontally */
                margin: 0 auto;
                pointer-events:all;
            }
            .modal-lg {
                width: 900px;
                margin: auto;
            }
        @elseif(Route::getCurrentRoute()->uri() == 'login')
            .py-4{
                height: 100vh;
            }
            .my-login-page .brand {
                width: 90px;
                height: 90px;
                overflow: hidden;
                border-radius: 50%;
                margin: 0 auto;
                margin: 40px auto;
                box-shadow: 0 0 40px rgba(0,0,0,.05);
            }

            .my-login-page .brand img {
                width: 100%;
            }

            .my-login-page .card-wrapper {
                width: 400px;
                margin: 0 auto;
            }

            .my-login-page .card {
                border-color: transparent;
                box-shadow: 0 0 40px rgba(0,0,0,.05);
            }

            .my-login-page .card.fat {
                padding: 10px;
            }

            .my-login-page .card .card-title {
                margin-bottom: 30px;
            }

            .my-login-page .form-control {
                border-width: 2.3px;
            }

            .my-login-page .form-group label {
                width: 100%;
            }

            .my-login-page .btn.btn-block {
                /*padding: 12px 10px;*/
            }

            .my-login-page .margin-top20 {
                margin-top: 20px;
            }

            .my-login-page .no-margin {
                margin: 0;
            }

            .my-login-page .footer {
                margin: 40px 0;
                color: #888;
                text-align: center;
            }

            .my-login-page .btn-outline-warning{

                color: black;
                border: 2px solid #F8C557;
                background-color: white;
                padding: 5px 7px !important;
            }

            @media screen and (max-width: 425px) {
                .my-login-page .card-wrapper {
                    width: 90%;
                    margin: 0 auto;
                }
            }

            @media screen and (max-width: 320px) {
                .my-login-page .card.fat {
                    padding: 0;
                }

                .my-login-page .card.fat .card-body {
                    padding: 15px;
                }
            }
        @elseif(Route::getCurrentRoute()->uri() == 'admin_notifications')
            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

            .switch input {display:none;}

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #d46262;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider {
                background-color: #4bd964;
            }

            input:focus + .slider {
                box-shadow: 0 0 1px #4bd964;
            }

            input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
        @elseif(Route::getCurrentRoute()->uri() == '/'){

        }
        @endif
    </style>

    <style>
        input[type=text]#search:focus + #search_content{
            display: block !important;
        }

        #search_content{
            display: none;
            background-color: white;
            border: 1px solid #ffc439;
            width: 800px;
            position: fixed;
            top: 71px;
            right: 228px;
            padding: 20px 15px;
            border-radius: 15px;
            z-index: 99;
        }
    </style>
    @yield('style')
</head>
<body class="my-login-page">
    <div id="app_">

        @desktop
            @if (Auth::guest())
            @else
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="navbar_web">
                <div class="container-fluid">
                    @guest
                    @else

                    @endguest
                    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                        {{--<span class="navbar-toggler-icon"></span>--}}
                    {{--</button>--}}
                    {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                        {{--<!-- Left Side Of Navbar -->--}}
                        {{--<ul class="navbar-nav mr-auto">--}}

                        {{--</ul>--}}

                        {{--<!-- Right Side Of Navbar -->--}}
                        {{--<ul class="navbar-nav ml-auto">--}}
                            {{--<!-- Authentication Links -->--}}
                            {{--@guest--}}
                                {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                                {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                            {{--@else--}}
                                {{--<li class="nav-item dropdown">--}}
                                    {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                        {{--{{ Auth::user()->Email }} <span class="caret"></span>--}}
                                    {{--</a>--}}

                                    {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                        {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                           {{--onclick="event.preventDefault();--}}
                                                       {{--document.getElementById('logout-form').submit();">--}}
                                            {{--{{ __('Logout') }}--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--@csrf--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--@endguest--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                        {{--<a class="navbar-brand" href="{{ url('/') }}" style="padding-right: 30px;border-right: 1px solid black">--}}
                        {{--<img src="{{ asset('img/icon/home.png') }}" alt="" class="homeicon">--}}
                        {{--</a>--}}
                        <div class="col-md-6">
                            <div style="padding-bottom: 3px;">
                                <span class="topbartext1">Ms. Nayika Srinian</span>
                                <button type="button" class="btn btn-default topbarbutton1" style="outline: none;width: 155px !important;">
                                    @if( Session::get('authen_type') == 'user' )
                                        <span style="color: #39a938;width: 150px !important;text-transform: uppercase">employee</span>
                                    @elseif( Session::get('authen_type') == 'admin' )
                                        <span style="color: #e22222;width: 150px !important;text-transform: uppercase">administrator</span>
                                    @elseif( Session::get('authen_type') == 'head' )
                                        <span style="color: #7914dd;width: 150px !important;text-transform: uppercase">head</span>
                                    @elseif( Session::get('authen_type') == 'hr_admin' )
                                        <span style="color: black;width: 150px !important;text-transform: uppercase">hr admin</span>
                                    @endif
                                </button>
                            </div>
                            <div>
                          <span class="topbartext2">
                              <span style="font-weight: bold">ID : </span>
                              <span>590701027</span>
                              <span style="font-weight: bold">Department : </span>
                              <span>Introduction International</span>
                          </span>
                            </div>
                        </div>
                        <div class="col-md-5" style="padding: 0px 25px;padding-left: 290px;">
                            {{--<input type="text" name="search" id="search" class="search" placeholder="Search people">--}}
                            <button type="button" class="btn button_hover" name="search" id="search_button" style="width: 100%;text-align: left;background-color: white;border-radius: 30px;padding-left: 20px;vertical-align: middle;height: 45px;margin: 0px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                                <img src="img/icon/magnifying-glass.png" alt="" width="20px" height="20px"><span style="padding-left: 15px;">Search people</span></button>
                        </div>

                        <div class="col-md-1" style="border-left: 1px solid black;margin: 0px 30px;height: 60px;line-height: 60px;">
                            {{--<div class="menu-toggle">--}}
                            {{--<img src="{{ asset('../img/icon/down-arrow.png') }}" alt="" style="width: 40px;">--}}
                            {{--</div>--}}
                            <div class="dropdown">
                                <a href="#menu" id="toggle"><span></span></a>

                                <div id="menu" style="display: inline-flex;">
                                    <ul style="padding-right: 15px">
                                        <li style="line-height: 30px !important;padding: 20px 0px;"><button type="button" class="btn btn-default trigger" style="border: 1px solid red;color: red;width: 90%;">Administrator</button></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('noti') }}"><span><img src="{{ asset('../img/icon/bell.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Notification</a></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('admin_branchLocation') }}"><span><img src="{{ asset('../img/icon/location.svg') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Branch location</a></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('admin_certificate') }}"><span><img src="{{ asset('../img/icon/certificate.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Certificate</a></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('admin_payment') }}"><span><img src="{{ asset('../img/icon/payment.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Payment</a></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('admin_salaryEdit') }}"><span><img src="{{ asset('../img/icon/salary.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>salary edit</a></li>
                                    </ul>

                                    {{--@if(Session::has('admin'))--}}
                                    <ul style="padding-left: 15px;border-left: 1px solid;">
                                        <li style="line-height: 30px !important;"><a href="{{ route('admin_profile') }}"><span><img src="{{ asset('../img/icon/user1.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Profile</a></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('admin_workhistory') }}"><span><img src="{{ asset('../img/icon/time.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Work history</a></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('admin_calender') }}"><span><img src="{{ asset('../img/icon/calendar.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Work calendar</a></li>
                                        {{--<li style="line-height: 30px !important;"><a href="#about"><span><img src="{{ asset('../img/icon/bell.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Notifications</a></li>--}}
                                        <li style="line-height: 30px !important;"><a href="{{ asset('leave') }}"><span><img src="{{ asset('../img/icon/copy.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Leave</a></li>
                                        <li style="line-height: 30px !important;"><a href="#contact"><span><img src="{{ asset('../img/icon/followers.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Team</a></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('salary') }}"><span><img src="{{ asset('../img/icon/money.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Salary</a></li>
                                        <li style="line-height: 30px !important;"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span><img src="{{ asset('../img/icon/logout.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Log out</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                                            {{ csrf_field() }}
                                        </form>
                                    </ul>
                                    {{--@endif--}}

                                </div>

                            </div>
                        </div>

                </div>
            </nav>
            @endif

            <div id="qnimate" class="off">
                <div id="search" class="open">
                    <button data-widget="remove" id="removeClass" class="close" type="button">×</button>
                    <form action="http://bootsnipp.com/user/snippets/508jR" method="" autocomplete="off">
                        {{--<input type="text" placeholder="Type search keywords here" value="" name="term" id="term">--}}
                        <input type="text" name="search" id="searchh" class="searchh" placeholder="Search people" style="border: 1px solid black">
                        <div style="position: absolute;width: 50%;top: 40%;transform: translateX(50%);">
                            <table class="table table-bordered table-hover" id="data">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Firstname</th>
                                    <th scope="col">Lastname</th>
                                    <th scope="col">Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

            <main class="py-4">
                @yield('content')
            </main>

        @elsedesktop
            <div style="height: 100vh;background: url('{{ asset('img/icon/browser_not_supported.png') }}') no-repeat center center fixed;-webkit-background-size: 100%;-moz-background-size: 100%;-o-background-size: 100%;background-size: 100%;background-color: #96d6f7;"></div>
        @enddesktop

    </div>

    {{--script zone--}}
    {{--dropzone--}}
    {{--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>--}}
    <script async src="{{ asset('js/dropzone.js') }}"></script>

    @yield('script')
    <script>
        $(document).ready(function(){
            var theToggle = document.getElementById('toggle');

            // based on Todd Motto functions
            // https://toddmotto.com/labs/reusable-js/

            // hasClass
            function hasClass(elem, className) {
                return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
            }
            // addClass
            function addClass(elem, className) {
                if (!hasClass(elem, className)) {
                    elem.className += ' ' + className;
                }
            }
            // removeClass
            function removeClass(elem, className) {
                var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
                if (hasClass(elem, className)) {
                    while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
                        newClass = newClass.replace(' ' + className + ' ', ' ');
                    }
                    elem.className = newClass.replace(/^\s+|\s+$/g, '');
                }
            }
            // toggleClass
            function toggleClass(elem, className) {
                var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
                if (hasClass(elem, className)) {
                    while (newClass.indexOf(" " + className + " ") >= 0 ) {
                        newClass = newClass.replace( " " + className + " " , " " );
                    }
                    elem.className = newClass.replace(/^\s+|\s+$/g, '');
                } else {
                    elem.className += ' ' + className;
                }
            }

            theToggle.onclick = function() {
                toggleClass(this, 'on');
                return false;
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            var $container = $('.dropdown-menu'),
                $list = $('.dropdown-menu ul'),
                listItem = $list.find('li');

            $(".dropdown .title").click(function () {
                if( $container.height() > 0) {
                    closeMenu(this);
                } else {
                    openMenu(this);
                }
            });

            $(".dropdown-menu li").click(function () {
                closeMenu(this);
            });

            function closeMenu(el) {
                $(el).closest('.dropdown').toggleClass("closed").find(".title").text($(el).text());
                $container.css("height", 0);
                $list.css( "top", 0 );
            }

            function openMenu(el) {
                $(el).parent().toggleClass("closed");

                $container.css({
                    height: 200
                })
                    .mousemove(function(e) {
                        var heightDiff = $list.height() / $container.height(),
                            offset = $container.offset(),
                            relativeY = (e.pageY - offset.top),
                            top = relativeY*heightDiff > $list.height()-$container.height() ?
                                $list.height()-$container.height() : relativeY*heightDiff;

                        $list.css("top", -top);
                    });
            }

        });
    </script>

    {{--popup--}}
    <script src="{{ asset('js/popup.js') }}"></script>

    {{--javascript config--}}
    {{--bootstrap--}}
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    {{--login--}}
    <script src="{{ asset('js/login.js') }}"></script>

    {{--search script--}}
    <script>
        {{--$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });--}}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript">
        $('#searchh').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url : '{{ route('search') }}',
                data:{'search':$value},
                success:function(data){
                    $('tbody').html(data);
                    // $('#search_content_zone').html(data);
                    console.log(data);
                }
            });
        })
    </script>
    <script>
        $(function(){
            $("#search_button").click(function () {
                $('#qnimate').addClass('popup-box-on');
            });

            $("#removeClass").click(function () {
                $('#qnimate').removeClass('popup-box-on');
            });
        })

    </script>
    <script>
        // console.log("looppp row");
        function getdata() {
            var table = document.getElementsByTagName("table")[0];
            var tbody = table.getElementsByTagName("tbody")[0];
            tbody.onclick = function (e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;
                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                // alert(data[1]);
                window.location.href = "/profile?profile="+data[1];
            };
        }
    </script>
    {{--form evident--}}
    <script src="{{ asset('js/formEvidentSubmit.js') }}"></script>
    {{--kpi--}}
    <script src="{{ asset('js/kpi.js') }}"></script>
</body>
</html>
