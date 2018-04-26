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
    <link href="{{ asset('profile.css') }}" rel="stylesheet">
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

    {{--dropdown--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/dropdown/dropdown.css') }}">
    <script src="{{ asset('js/dropdown/dropdown.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#dropdown_date').stbDropdown();
            $('#dropdown_day').stbDropdown();
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

    <style>
        .modal {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transform: scaleX(1.1) scaleY(1.1);
            transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
            font-family: sans-serif;
        }
        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 1rem 1.5rem;
            width: 24rem;
            border-radius: 0.5rem;
        }
        .close-button {
            float: right;
            width: 1.5rem;
            line-height: 1.5rem;
            text-align: center;
            cursor: pointer;
            border-radius: 0.25rem;
            background-color: lightgray;
        }
        .close-button:hover {
            background-color: darkgray;
        }
        .show-modal {
            opacity: 1;
            visibility: visible;
            transform: scaleX(1.0) scaleY(1.0);
            transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
        }
        @media only screen and (max-width: 50rem) {
            h1 {
                font-size: 1.5rem;
            }
            .modal-content {
                width: calc(100% - 5rem);
            }
        }
    </style>

</head>

<body>

<button class="trigger">Click here to trigger the modal!</button>
<div class="modal">
    <div class="modal-content">
        <span class="close-button">×</span>
        <h1>Hello, I am a modal!</h1>
    </div>
</div>

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
</body>

</html>
