<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">

    {{--bootstrap--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .col-centered{
            float: none;
            margin: 0 auto;
            margin-top: auto;
            margin-bottom: auto;
        }
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
                      <input type="text" name="search" class="search" placeholder="Search..">
                  </div>
                  <div class="col-md-1" style="border-left: 1px solid black;margin: 0px 30px;height: 60px;line-height: 60px;">
                      {{--<div class="menu-toggle">--}}
                      {{--<img src="{{ asset('../img/icon/down-arrow.png') }}" alt="" style="width: 40px;">--}}
                      {{--</div>--}}
                      <div class="dropdown">
                          <a href="#menu" id="toggle"><span></span></a>

                          <div id="menu">
                              <ul>
                                  <li style="line-height: 30px !important;"><a href="#home"><span><img src="{{ asset('../img/icon/calendar.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Work history</a></li>
                                  <li style="line-height: 30px !important;"><a href="#about"><span><img src="{{ asset('../img/icon/calendar.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Work zxxvzxv</a></li>
                                  <li style="line-height: 30px !important;"><a href="#contact"><span><img src="{{ asset('../img/icon/calendar.png') }}" alt="" style="width: 25px;margin-right: 15px;"></span>Resignation</a></li>
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
</body>
</html>
