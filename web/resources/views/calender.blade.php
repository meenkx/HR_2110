<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{--Calendar--}}
    <link href="{{ asset('css/calender/helloWeek.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/calender/calender_custom.css') }}">
    <style>
        html,body{
            font-family: 'Kanit', sans-serif;
            overflow-x: hidden;
        }
        .dot_green {
            height: 25px;
            width: 25px;
            background-color: #71d653;
            border-radius: 50%;
            display: inline-block;
        }

    </style>
</head>
<body>

        <!-- Calendar -->
        <div style="display: inline-flex">
            <div class="hello-week">
                <div class="hello-week__header">
                    <button class="btn demo-prev" style="font-size: 30px;line-height: 0px;background-color: transparent;">◀</button>
                    <div class="hello-week__label"></div>
                    <button class="btn demo-next" style="font-size: 30px;line-height: 0px;background-color: transparent;">▶</button>
                </div>
                <div class="hello-week__week"></div>
                <div class="hello-week__month"></div>
            </div>

            <div style="border-left: 0.5px solid #808080;margin-left: 30px;padding: 0px 30px;" class="container-fluid">
                <div class="row" style="display: inline-flex;">
                    <div class="col-md-1">
                        <span style="font-size: 100px;color: #808080" class="demo-today">26</span>
                    </div>
                    <div class="col-md-11" style="border-left: 0.5px solid #808080;border-left-width: 5px;margin-left: 15px;padding-left: 15px;vertical-align: middle;color: #808080">
                        <div style="height: 115px;padding: 17px 0px">
                            <p><span style="font-size: 42px;line-height: 1;color: #808080" class="month">November</span></p>
                            <p><span style="font-size: 42px;line-height: 1;color: #808080" class="year">2018</span></p>
                        </div>
                    </div>
                </div>
                <div class="row" style="display: inline-flex;margin-top: 30px">
                    <span class="dot_green"></span>
                    <span style="vertical-align: middle;line-height: 25px;padding-left: 15px">Activity / Detail / date</span>
                    <span><button type="button" class="btn btn-default open-popup" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#profile">Edit</button></span>
                </div>
                <div class="row">
                    <div class="text_zone">

                    </div>
                </div>
            </div>
        </div>
        {{--<div class="demo-exemplo">--}}
            {{--<p><strong>Today:</strong> </p>--}}
            {{--<ul class="demo-today"><span>n/a</span></ul>--}}
            {{--<p><strong>Last Picked Day:</strong></p>--}}
            {{--<ul class="demo-last"><span>n/a</span></ul>--}}
            {{--<p><strong>Picked Days:</strong></p>--}}
            {{--<ul class="demo-picked"><span>n/a</span></ul>--}}
        {{--</div>--}}

<script src="{{ asset('js/calender/helloWeek.js') }}" type="text/javascript"></script>
<script>
    const prev = document.querySelector('.demo-prev');
    const next = document.querySelector('.demo-next');
    const today = document.querySelector('.demo-today');
    const picked = document.querySelector('.demo-picked');
    const last = document.querySelector('.demo-last');

    const month = document.querySelector('.month');
    const years = document.querySelector('.year');

    var day_convert = null;
    function updateInfo() {

        if (this.today) {
            today.innerHTML = '';
            var li = document.createElement('li');
            //li.innerHTML = this.today;
            var res = this.today.split("/");
            var day = res[0];
            var monthh = res[1];
            var yearr = res[2];
            var monthhh;
            switch (monthh){
                case '01':monthhh = "January";break;
                case '02':monthhh = "February";break;
                case '03':monthhh = "March";break;
                case '04':monthhh = "April";break;
                case '05':monthhh = "May";break;
                case '06':monthhh = "June";break;
                case '07':monthhh = "July";break;
                case '08':monthhh = "August";break;
                case '09':monthhh = "September";break;
                case '10':monthhh = "October";break;
                case '11':monthhh = "November";break;
                case '12':monthhh = "December";break;
            }
            li.innerHTML = day;
            month.innerHTML = '';
            month.innerHTML = monthhh;
            years.innerHTML = '';
            years.innerHTML = yearr;
            today.appendChild(li);
            day_convert = yearr+'-'+monthh+'-'+day;
            sendDate(day_convert);
            console.log("today - " + day_convert);
        }

        if (this.lastSelectedDay) {

            // picked.innerHTML = '';
            today.innerHTML = '';
            for (days of this.selectedDays) {
                var li = document.createElement('li');
                var res = days.split("/");
                var day = res[0];
                var monthh = res[1];
                var yearr = res[2];
                // var monthhh;
                // switch (monthh){
                //     case '01':monthhh = "January";break;
                //     case '02':monthhh = "February";break;
                //     case '03':monthhh = "March";break;
                //     case '04':monthhh = "April";break;
                //     case '05':monthhh = "May";break;
                //     case '06':monthhh = "June";break;
                //     case '07':monthhh = "July";break;
                //     case '08':monthhh = "August";break;
                //     case '09':monthhh = "September";break;
                //     case '10':monthhh = "October";break;
                //     case '11':monthhh = "November";break;
                //     case '12':monthhh = "December";break;
                // }
                // li.innerHTML = days;
                li.innerHTML = day;
                month.innerHTML = '';
                month.innerHTML = monthh;
                years.innerHTML = '';
                years.innerHTML = yearr;
                // picked.appendChild(li);
                today.appendChild(li);
                day_convert = '';
                day_convert = yearr+'-'+monthh+'-'+day;
                sendDate(day_convert);
                console.log("picked - " + day_convert);
            }

            last.innerHTML = '';
            var li = document.createElement('li');
            li.innerHTML = this.lastSelectedDay;
            last.appendChild(li);
            day_convert = '';
            console.log("pick date - " + day_convert);
        }
    }

    const myCalendar = new HelloWeek({
        selector: '.hello-week',
        lang: 'en',
        format: 'DD/MM/YYYY',
        monthShort: true,
        weekShort: true,
        disablePastDays: true,
        multiplePick: false,
        // minDate: 1520696057,
        // maxDate: 1522519829,
        onLoad: updateInfo,
        onChange: updateInfo,
        onSelect: updateInfo
    });

    prev.addEventListener('click', () => myCalendar.prev());
    next.addEventListener('click', () => myCalendar.next());


</script>
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
                $('.text_zone').html(data);
                console.log("data is - "+ data.getTime());
            }
        });
    }
</script>
</body>

</html>