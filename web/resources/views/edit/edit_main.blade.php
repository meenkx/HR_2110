@extends('layouts.app')

@section('content')
    {{--check session--}}
    <script> console.log("session status = {{ Session::get('authen_type') }}")</script>

    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 10px 50px">
            <div class="col-md-11" style="display: inline-flex;">


                    <span style="line-height: 85px;"><img src="{{ asset('img/icon/data.png') }}" alt="" width="50px"></span>
                    <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 85px;padding-left: 10px;padding-right: 50px;">Edit</span>
                <div class="btn-group" role="group" aria-label="Label edit" style="margin-top: 20px;margin-bottom: -10px;">
                        <button type="button" class="btn btn-warning" onclick="location.href='{{ route('admin_profile') }}'" style="width: 200px;margin-right: 0px;height: 100%;border-radius: 10px 0px 0px 0px;font-weight: bold;border-right: 3px solid white;">Profile</button>
                        <button type="button" class="btn btn-warning" onclick="location.href='{{ route('admin_workhistory') }}'" style="width: 200px;margin-right: 0px;height: 100%;border-radius: 0px;font-weight: bold;border-right: 3px solid white;">Work history</button>
                        <button type="button" class="btn btn-warning" onclick="location.href='{{ route('admin_calender') }}'" style="width: 200px;margin-right: 0px;height: 100%;border-radius: 0px;font-weight: bold;border-right: 3px solid white;">Work calender</button>
                        <button type="button" class="btn btn-warning" onclick="location.href='{{ route('admin_kpi') }}'" style="width: 200px;margin-right: 0px;height: 100%;border-radius: 0px 10px 0px 0px;font-weight: bold;">KPI</button>
                </div>

            </div>
            <div class="col-md-1">
                    <span id="imgClick">
                        <img src="{{ asset('img/icon/list.png') }}" alt="" style="width: 85px;" data-toggle="modal" data-target="#list" id="edit_icon" name="editicon">
                    </span>
            </div>
        </div>

        {{--modal zone--}}
        @if (Route::getCurrentRoute()->uri() == 'admin_profile' )
            <script>
                $(document).ready(function(){
                    // document.getElementById("imgClick").style.display = "none";
                    var test = document.getElementById('edit_icon');

                    function whatClicked(evt) {
                        // alert(evt.target.id); //เอาชื่อ ID
                        window.location.href = "/profileindex"
                    }
                    test.addEventListener("click", whatClicked, false);


                });
            </script>
        @elseif (Route::getCurrentRoute()->uri() == 'admin_workhistory' )
            <script>
                $(document).ready(function(){
                    document.getElementById("imgClick").style.display = "none"
                });
            </script>
        @elseif (Route::getCurrentRoute()->uri() == 'admin_calender' )
            <script>
                $(document).ready(function(){
                    document.getElementById("imgClick").style.display = "none"
                });
            </script>
        @elseif (Route::getCurrentRoute()->uri() == 'admin_kpi' )
            <script>
                $(document).ready(function(){
                    document.getElementById("imgClick").style.display = "none"
                });
            </script>
        @endif

        @yield('edit')
    </div>
@endsection