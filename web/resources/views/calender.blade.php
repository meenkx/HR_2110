
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{--Calendar--}}
    <link rel='stylesheet prefetch' href='{{ asset('css/calender/calender_custom.css') }}'>
    <style>
        html,body{
            font-family: 'Kanit', sans-serif;
            overflow-x: hidden;
        }
        .dot_green {
            height: 17px;
            width: 17px;
            background-color: #71d653;
            border-radius: 50%;
            display: inline-block;
            margin-right: 10px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"/>

    {{--content--}}
    <div class="container" style="margin-top: 30px;">
        <div class="row" style="display: inline-flex;width: 100%">
            <div class="wd5" style="width: 50%">
                <div class="row">
                    <div class="panel-body">
                        {!! $calendar->calendar() !!}
                        {{--{{ $calendar->calendar() }}--}}
                    </div>
                </div>
            </div>
            <div class="wt5" style="width: 50%;border-left: 0.5px solid #808080;margin-left: 30px;padding: 0px 30px;">
                <div class="row" style="margin-top: 30px">
                    <div>
                        <span style="vertical-align: middle;line-height: 25px;padding-left: 15px;font-size: 20px;"><span class="dot_green"></span>Activity / Detail / date</span>
                        <span><button type="button" class="btn btn-default open-popup" style="    border: 1px solid red;color: red;width: 100px;background-color: white;padding: 10px;border-radius: 15px;margin-left: 10px;" data-toggle="modal" data-target="#profile">Edit</button></span>
                    </div>
                </div>
                <div class="row" style="background-color: aliceblue;margin-top: 20px;padding: 20px 15px;">
                    {{--no date--}}
                    <div class="title" id="NoDate">- ไม่มีกิจกรรม</div>
                    {{--have date--}}
                    {{--<div class="row justify-content-center" style="padding: 0px 50px;" id="HaveDate">--}}
                        {{--<div class="embed-responsive embed-responsive-16by9">--}}
                            {{--<iframe class="embed-responsive-item" src="{{ route('calender_edit') }}"></iframe>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>


    {{--script--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

    {!! $calendar->script() !!}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        function sendDate(data) {
            $value=data;
            console.log("loop senddata - " + $value);
            $.ajax({
                type : 'get',
                url : '{{ route('calender_eiei') }}',
                data:{'Calender':$value},
                success:function(data){
                    // $('tbody').html(data);
                    // $('#search_content_zone').html(data);
                    console.log("data is - " + data);
                    if(data !== ""){
                        $('.title').html(data);
                    }
                    else{
                        var x  = document.getElementsByClassName("title");
                        x[0].innerHTML = "- ไม่มีกิจกรรม";
                    }
                    // var date = new Date("Wednesday, May 30, 2018 2:55:24 PM");
                    // console.log("data is - "+ date.getTime());
                }
            });
        }
    </script>
