@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 0px 50px">
            <div class="col-md-12" style="display: inline-flex;">
                <span><img src="{{ asset('https://png.icons8.com/metro/1600/time.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 60px;padding-left: 10px;padding-right: 50px;">Work history</span>

                <select style="border-radius: 10px;height: 30px;width: 60px;vertical-align: middle;line-height: 30px;margin: 15px 0px;outline: none">
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                </select>

                <select style="border-radius: 10px;height: 30px;width: 60px;vertical-align: middle;line-height: 30px;margin: 15px 0px;outline: none;margin-left: 10px">
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                </select>

            </div>
        </div>
        <div class="row justify-content-center" style="padding: 0px 50px">
            <div class="col-md-12">
                work calender
            </div>
        </div>
    </div>
@endsection