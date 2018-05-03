
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
        #datepicker {
            /*max-width: 500px;*/
            height: 500px;
            width: 100%;
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


    {{--content--}}
    <div class="container" style="margin-top: 30px;">
        <div class="row" style="display: inline-flex;width: 100%">
            <div class="wd5" style="width: 50%"><div id="datepicker"></div></div>
            <div class="wt5" style="width: 50%;border-left: 0.5px solid #808080;margin-left: 30px;padding: 0px 30px;">
                <div class="row" style="display: inline-flex;height: 90px;">
                    <div class="col-1" style="position: relative;top: -10px;">
                        <span style="font-size: 100px;color: #808080" class="demo-today">03</span>
                    </div>
                    <div class="col-11" style="border-left: 0.5px solid #808080;border-left-width: 5px;margin-left: 15px;padding-left: 15px;vertical-align: middle;color: #808080">
                        <div>
                            <p style="margin-top: 0px;margin-bottom: 0px"><span style="font-size: 42px;line-height: 1;color: #808080" class="month">May</span></p>
                            <p style="margin-bottom: 0px;margin-top: 4px"><span style="font-size: 42px;line-height: 1;color: #808080" class="year">2018</span></p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px">
                    <div>
                        <span style="vertical-align: middle;line-height: 25px;padding-left: 15px;font-size: 20px;"><span class="dot_green"></span>Activity / Detail / date</span>
                        <span><button type="button" class="btn btn-default open-popup" style="    border: 1px solid red;color: red;width: 100px;background-color: white;padding: 10px;border-radius: 15px;margin-left: 10px;" data-toggle="modal" data-target="#profile">Edit</button></span>
                    </div>
                </div>
                <div class="row" style="background-color: aliceblue;margin-top: 20px;padding: 20px 15px;">
                    <div class="title">- ไม่มีกิจกรรม</div>
                </div>
            </div>
        </div>
    </div>

{{--    {{ $Depart_ID }}--}}
    <script src="{{ asset('js/calender/datepickk.js') }}" type="text/javascript"></script>
    <script>

        var type = {!! json_encode($type) !!};
        var Depart_ID = {!! json_encode($Depart_ID) !!};
        type = '';
        Depart_ID = '';
        if ( type = 'Low')
        {
            var low = {
                start: new Date(2018,4,1),
                end: new Date(2018,4,11),
                backgroundColor: '#87bde7',
                color: '#ffffff',
                legend: 'CSS Conf.'
            };
        }
        else if (type = 'medium'){
            var medium = {
                dates: [
                    {start: new Date(2018,4,12), end: new Date(2018,4,15)},
                ],
                backgroundColor: '#ffc439',
                color: '#ffffff',
                legend: 'Holidays'
            };
        }
        else if (type = 'high'){
            var high = {
                dates: [
                    {start: new Date(2018,4,12), end: new Date(2018,4,15)},
                ],
                // backgroundColor: '#ffc439',
                backgroundColor: '#ff3939',
                color: '#ffffff',
                legend: 'Holidays'
            };
        }
        console.log(type);
        console.log(Depart_ID);
        var datepicker = new Datepickk({
            container: document.querySelector('#datepicker'),
            inline: true,
            range: false,
            maxSelections: 1,
            highlight: [low,medium,high]
        });

        datepicker.setDate = Date.now();

        datepicker.onSelect = function(checked){
            var state = (checked)?'selected':'unselected';
            // alert(this.toLocaleDateString() + ' ' + state)
            console.log(this.toLocaleDateString())
            var date = this.toLocaleDateString().split('/');
            var date_convert = date[2]+'-'+date[0]+'-'+date[1];
            console.log(date_convert);
            sendDate(date_convert);
            document.getElementsByClassName("demo-today")[0].innerHTML = date[1];
            document.getElementsByClassName("month")[0].innerHTML = date[0];
            document.getElementsByClassName("year")[0].innerHTML = date[2];
        };

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
