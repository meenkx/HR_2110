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
    {{--moment--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/locale/th.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <style>
        .col-centered{
            float: none;
            margin: 0 auto;
            margin-top: auto;
            margin-bottom: auto;
        }
        .borderless td, .borderless th {
            border: none;
        }
    </style>
    <style>
        .py-4{
            height: 100vh;
        }
    </style>
</head>
<body>

    <div class="container" style="vertical-align: middle;height: 100%">
        <div class="row justify-content-center align-items-center h-100" style="background-color: white;display: grid;text-align: center;" >
            <div style="font-size: 50px">TIMESTAMP</div>
            <div id="txt" style="color: #e83e8c;font-size: 30px"></div>
        </div>
        <div class="row justify-content-center align-items-center h-100" style="background-color: white;margin-top: 50px;" >
            <div class="col-sm">
                <div class="group">
                    <div class="col-sm" style="background-color: #eeeeee;padding: 20px;border-radius: 15px;margin: 20px 0px;">
                        <div style="font-size: 20px;margin-bottom: 10px">WORKING</div>
                        <div style="display: grid">
                            <button type="button" class="btn btn-success" onclick="workIn()">เข้าทำงาน</button>
                            <button type="button" class="btn btn-danger" style="margin-top: 10px">ออกงาน</button>
                        </div>
                    </div>
                    <div class="col-sm" style="background-color: #eeeeee;padding: 20px;border-radius: 15px;margin: 20px 0px;">
                        <div style="font-size: 20px;margin-bottom: 10px">OT</div>
                        <div style="display: grid">
                            <button type="button" class="btn btn-success">เข้าทำ OT</button>
                            <button type="button" class="btn btn-danger" style="margin-top: 10px">ออก OT</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="background-color: #f7f7f7;padding: 10px 100px;border-radius: 10px;height: 350px;">
                    <table class="table borderless" style="height: 100%;">
                        <tbody>
                        <tr>
                            <th scope="col">Work IN</th>
                            <th scope="col"><input type="text" class="form-control" readonly></th>
                        </tr>
                        <tr>
                            <th scope="col">Work OUT</th>
                            <th scope="col"><input type="text" class="form-control" readonly></th>
                        </tr>
                        <tr>
                            <th scope="col">Ot IN</th>
                            <th scope="col"><input type="text" class="form-control" readonly></th>
                        </tr>
                        <tr>
                            <th scope="col">Ot OUT</th>
                            <th scope="col"><input type="text" class="form-control" readonly></th>
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    {{--script--}}
    <script>
        var update = function () {
            document.getElementById('txt').innerHTML = "วันที่ " + moment().format("Do MMM YY") + " - " +" เวลา " + moment().format('h:mm:ss a');
        };
        $(document).ready(function(){
            update();
            setInterval(update, 1000);
        });
    </script>
    <script>
        var today = new Date();
        var datee = today.getFullYear()+"-"+today.getMonth()+"-"+moment().format('Do');
        var timee = moment().format('h:mm:ss');
        function workIn() {
            var dataArray={
                dates:datee,
                times:timee
            };
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/saveFormEv',
                data: dataArray,
                sucess: function(data){
                    console.log('save data Form Evident success: ' + data);
                }
            });
        }
    </script>

</body>
</html>
