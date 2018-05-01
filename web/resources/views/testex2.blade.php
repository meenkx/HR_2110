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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
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
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
    <link rel="stylesheet" href="{{ asset('css/dropdown/dropdown.css') }}">
    <script src="{{ asset('js/dropdown/dropdown.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#dropdown_date').stbDropdown();
            $('#dropdown_day').stbDropdown();
            $('#dropdown_month').stbDropdown();
            $('#dropdown_year').stbDropdown();
            $('#dropdown_department').stbDropdown();
            $('#dropdown_department_kpi').stbDropdown();
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
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .about {
            margin: 70px auto 40px;
            padding: 8px;
            width: 260px;
            font: 10px/18px 'Lucida Grande', Arial, sans-serif;
            color: #bbb;
            text-align: center;
            text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
            background: #383838;
            background: rgba(34, 34, 34, 0.8);
            border-radius: 4px;
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
            background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
            background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
            -webkit-box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2), 0 0 6px rgba(0, 0, 0, 0.4);
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2), 0 0 6px rgba(0, 0, 0, 0.4);
        }
        .about a {
            color: #eee;
            text-decoration: none;
            border-radius: 2px;
            -webkit-transition: background 0.1s;
            -moz-transition: background 0.1s;
            -o-transition: background 0.1s;
            transition: background 0.1s;
        }
        .about a:hover {
            text-decoration: none;
            background: #555;
            background: rgba(255, 255, 255, 0.15);
        }

        .about-links {
            height: 30px;
        }
        .about-links > a {
            float: left;
            width: 50%;
            line-height: 30px;
            font-size: 12px;
        }

        .about-author {
            margin-top: 5px;
        }
        .about-author > a {
            padding: 1px 3px;
            margin: 0 -1px;
        }

        /*
         * Copyright (c) 2012-2013 Thibaut Courouble
         * http://www.cssflow.com
         *
         * Licensed under the MIT License:
         * http://www.opensource.org/licenses/mit-license.php
         */
        body {
            font: 13px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #404040;
            background: #f7f7f7;
        }

        .container {
            margin: 50px auto;
            width: 640px;
        }

        input {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 13px;
            color: #555860;
        }

        .search {
            position: relative;
            margin: 0 auto;
            width: 300px;
        }
        .search input {
            height: 26px;
            width: 100%;
            padding: 0 12px 0 25px;
            background: white url("../img/search.png") 8px 6px no-repeat;
            border: 1px solid;
            border-color: #a8acbc #babdcc #c0c3d2;
            border-radius: 13px;
            -webkit-appearance: textfield;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: inset 0 1px #e5e7ed, 0 1px #fcfcfc;
            box-shadow: inset 0 1px #e5e7ed, 0 1px #fcfcfc;
        }
        .search input:focus {
            outline: 0;
            border-color: #66b1ee;
            -webkit-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
            box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
        }
        .search input:focus + .search-ac {
            display: block;
        }

        .search-ac {
            display: none;
            position: absolute;
            top: 35px;
            left: 0;
            right: 0;
            z-index: 10;
            background: #fdfdfd;
            border: 1px solid;
            border-color: #cbcfe2 #c8cee7 #c4c7d7;
            border-radius: 3px;
            background-image: -webkit-linear-gradient(top, #fdfdfd, #eceef4);
            background-image: -moz-linear-gradient(top, #fdfdfd, #eceef4);
            background-image: -o-linear-gradient(top, #fdfdfd, #eceef4);
            background-image: linear-gradient(to bottom, #fdfdfd, #eceef4);
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        .search-ac:hover {
            display: block;
        }
        .search-ac li {
            display: block;
        }
        .search-ac li:first-child {
            margin-top: -1px;
        }
        .search-ac li:first-child:before, .search-ac li:first-child:after {
            content: '';
            display: block;
            width: 0;
            height: 0;
            position: absolute;
            left: 50%;
            margin-left: -5px;
            border: 5px outset transparent;
        }
        .search-ac li:first-child:before {
            border-bottom: 5px solid #c4c7d7;
            top: -11px;
        }
        .search-ac li:first-child:after {
            border-bottom: 5px solid #fdfdfd;
            top: -10px;
        }
        .search-ac li:first-child:hover:before, .search-ac li:first-child:hover:after {
            display: none;
        }
        .search-ac li:last-child {
            margin-bottom: -1px;
        }
        .search-ac a {
            display: block;
            position: relative;
            margin: 0 -1px;
            padding: 6px 40px 6px 10px;
            color: #808394;
            font-weight: 500;
            text-decoration: none;
            text-shadow: 0 1px white;
            border: 1px solid transparent;
            border-radius: 3px;
        }
        .search-ac a span {
            font-weight: 200;
        }
        .search-ac a:before {
            content: '';
            position: absolute;
            top: 50%;
            right: 10px;
            margin-top: -9px;
            width: 18px;
            height: 18px;
            background: url("../img/arrow.png") 0 0 no-repeat;
        }
        .search-ac a:hover {
            color: white;
            text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
            background: #338cdf;
            border-color: #2380dd #2179d5 #1a60aa;
            background-image: -webkit-linear-gradient(top, #59aaf4, #338cdf);
            background-image: -moz-linear-gradient(top, #59aaf4, #338cdf);
            background-image: -o-linear-gradient(top, #59aaf4, #338cdf);
            background-image: linear-gradient(to bottom, #59aaf4, #338cdf);
            -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
            box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
        }

        :-moz-placeholder {
            color: #a7aabc;
            font-weight: 200;
        }

        ::-webkit-input-placeholder {
            color: #a7aabc;
            font-weight: 200;
            line-height: 14px;
        }

        ::-webkit-search-decoration,
        ::-webkit-search-cancel-button {
            -webkit-appearance: none;
        }

        .lt-ie9 .search input {
            line-height: 26px;
        }

    </style>

</head>
<body class="my-login-page">
<div id="appp">
    <section class="container">
        <form class="search" method="post" action="index.html">
            <input type="search" name="q" placeholder="Search..." autocomplete="off">
            <ul class="search-ac">
                <li><a href="index.html">Search Result #1<br><span>Description...</span></a></li>
                <li><a href="index.html">Search Result #2<br><span>Description...</span></a></li>
                <li><a href="index.html">Search Result #3<br><span>Description...</span></a></li>
                <li><a href="index.html">Search Result #4</a></li>
            </ul>
        </form>
    </section>
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
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>--}}
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
{{--bootstrap--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
{{--login--}}
<script>
    $(function() {
        $("input[type='password'][data-eye]").each(function(i) {
            var $this = $(this);

            $this.wrap($("<div/>", {
                style: 'position:relative'
            }));
            $this.css({
                paddingRight: 60
            });
            $this.after($("<div/>", {
                html: 'Show',
                class: 'btn btn-warning btn-sm',
                id: 'passeye-toggle-'+i,
                style: 'position:absolute;right:10px;top:50%;transform:translate(0,-50%);-webkit-transform:translate(0,-50%);-o-transform:translate(0,-50%);padding: 7px 7px;font-size:12px;cursor:pointer;width:60px;margin: 0px -5px;'
            }));
            $this.after($("<input/>", {
                type: 'hidden',
                id: 'passeye-' + i
            }));
            $this.on("keyup paste", function() {
                $("#passeye-"+i).val($(this).val());
            });
            $("#passeye-toggle-"+i).on("click", function() {
                if($this.hasClass("show")) {
                    $this.attr('type', 'password');
                    $this.removeClass("show");
                    $(this).removeClass("btn-outline-warning");
                }else{
                    $this.attr('type', 'text');
                    $this.val($("#passeye-"+i).val());
                    $this.addClass("show");
                    $(this).addClass("btn-outline-warning");
                }
            });
        });
    });
</script>

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
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{ route('search') }}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    })
</script>
</body>
</html>
