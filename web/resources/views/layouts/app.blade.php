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


    <!-- bootstrap --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <style>
        .col-centered{
            float: none;
            margin: 0 auto;
            margin-top: auto;
            margin-bottom: auto;
        }
    </style>

    {{--Calendar--}}
    <link href="{{ asset('css/calender/helloWeek.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maurovieirareis.github.io/hello-week/demos/css/demo.css">
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
        });
    </script>

    {{--dropzone--}}
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css'>
    <style>
        #actions {
            margin: 2em 0;
        }

        /* Mimic table appearance */
        div.table {
            display: table;
        }

        div.table .file-row {
            display: table-row;
        }

        div.table .file-row > div {
            display: table-cell;
            vertical-align: top;
            border-top: 1px solid #ddd;
            padding: 8px;
            vertical-align: middle;
        }

        div.table .file-row:nth-child(odd) {
            background: #f9f9f9;
        }

        /* The total progress gets shown by event listeners */
        #total-progress {
            opacity: 0;
            transition: opacity 0.3s linear;
        }

        /* Hide the progress bar when finished */
        #previews .file-row.dz-success .progress {
            opacity: 0;
            transition: opacity 0.3s linear;
        }

        /* Hide the delete button initially */
        #previews .file-row .delete {
            display: none;
        }

        /* Hide the start and cancel buttons and show the delete button */
        #previews .file-row.dz-success .start,
        #previews .file-row.dz-success .cancel {
            display: none;
        }

        #previews .file-row.dz-success .delete {
            display: block;
        }

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



        @if (Route::current()->getName() == 'test_workhistory' )
            .stb-select-container{
                width: 10% !important;
            }
        @elseif (Route::current()->getName() == 'edit' )
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
        @elseif(Route::current()->getName() == 'admin_workhistory')
            .stb-select-container{
            width: 20% !important;
        }
        @elseif(Route::current()->getName() == 'admin_kpi')
            .stb-select-container{
                width: 15% !important;
                margin-left: 0px;
            }
            .stb-select-container .stb-select{
                width: 101.5%;
            }
        @elseif(Route::current()->getName() == 'admin_profile')
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
        @elseif(Route::getCurrentRoute()->uri() == '/'){

        }
        @endif
    </style>
</head>
<body>
    <div id="app">


      <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
          <div class="container-fluid">
              @guest
                  {{--<a class="navbar-brand" href="{{ url('/') }}" style="padding-right: 30px;border-right: 1px solid black">--}}
                      {{--<img src="{{ asset('img/icon/home.png') }}" alt="" class="homeicon">--}}
                  {{--</a>--}}
                  <div class="col-md-6">
                      <div style="padding-bottom: 3px;">
                          <span class="topbartext1">Ms. Nayika Srinian</span>
                          <button type="button" class="btn btn-default topbarbutton1" style="outline: none">
                              <span style="color: #39a938">employee</span>
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
                  <div class="col-md-5" style="padding: 0px 25px;">
                      <input type="text" name="search" class="search" placeholder="Search people">
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
                                  <li style="line-height: 30px !important;"><a href="{{ route('admin_profile') }}"><span><img src="{{ asset('../img/icon/bell.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Notification</a></li>
                                  <li style="line-height: 30px !important;"><a href="{{ route('admin_workhistory') }}"><span><img src="{{ asset('../img/icon/location.svg') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Branch location</a></li>
                                  <li style="line-height: 30px !important;"><a href="{{ route('admin_calender') }}"><span><img src="{{ asset('../img/icon/certificate.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Certificate</a></li>
                                  <li style="line-height: 30px !important;"><a href="#about"><span><img src="{{ asset('../img/icon/payment.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Payment</a></li>
                                  <li style="line-height: 30px !important;"><a href="#contact"><span><img src="{{ asset('../img/icon/salary.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>salary edit</a></li>
                              </ul>

                              <ul style="padding-left: 15px;border-left: 1px solid;">
                                  <li style="line-height: 30px !important;"><a href="{{ route('admin_profile') }}"><span><img src="{{ asset('../img/icon/user1.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Profile</a></li>
                                  <li style="line-height: 30px !important;"><a href="{{ route('admin_workhistory') }}"><span><img src="{{ asset('../img/icon/time.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Work history</a></li>
                                  <li style="line-height: 30px !important;"><a href="{{ route('admin_calender') }}"><span><img src="{{ asset('../img/icon/calendar.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Work calendar</a></li>
                                  {{--<li style="line-height: 30px !important;"><a href="#about"><span><img src="{{ asset('../img/icon/bell.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Notifications</a></li>--}}
                                  <li style="line-height: 30px !important;"><a href="#contact"><span><img src="{{ asset('../img/icon/copy.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Resignation</a></li>
                                  <li style="line-height: 30px !important;"><a href="#contact"><span><img src="{{ asset('../img/icon/followers.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Team</a></li>
                                  <li style="line-height: 30px !important;"><a href="#contact"><span><img src="{{ asset('../img/icon/money.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Salary</a></li>
                                  <li style="line-height: 30px !important;"><a href="#contact"><span><img src="{{ asset('../img/icon/logout.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Log out</a></li>
                              </ul>
                          </div>


                      </div>
                  </div>
              @else

              @endguest
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                          {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{--script zone--}}
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

    {{--dropzone--}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js'></script>

    <script>

        window.onload = function(){


            // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
            var previewNode = document.querySelector("#template");
            previewNode.id = "";
            var previewTemplate = previewNode.parentNode.innerHTML;
            previewNode.parentNode.removeChild(previewNode);

            var myDropzone = new Dropzone(".container", { // Make the whole body a dropzone
            url: "/upload", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
            });

            myDropzone.on("addedfile", function (file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function () {
            myDropzone.enqueueFile(file);
            };
            });

            // Update the total progress bar
            myDropzone.on("totaluploadprogress", function (progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
            });

            myDropzone.on("sending", function (file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1";
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
            });

            // Hide the total progress bar when nothing's uploading anymore
            myDropzone.on("queuecomplete", function (progress) {
            document.querySelector("#total-progress").style.opacity = "0";
            });

            // Setup the buttons for all transfers
            // The "add files" button doesn't need to be setup because the config
            // `clickable` has already been specified.
            document.querySelector("#actions .start").onclick = function () {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
            };
            document.querySelector("#actions .cancel").onclick = function () {
            myDropzone.removeAllFiles(true);
            };

        };
    </script>

    {{--popup--}}
    <script>
        var modal = document.querySelector(".modal");
        var trigger = document.querySelector(".trigger");
        var closeButton = document.querySelector(".close-button");

        function toggleModal() {
            modal.classList.toggle("show-modal");
        }

        function windowOnClick(event) {
            if (event.target === modal) {
                toggleModal();
            }
        }

        trigger.addEventListener("click", toggleModal);
        closeButton.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);
    </script>

    {{--javascript config--}}

</body>
</html>
