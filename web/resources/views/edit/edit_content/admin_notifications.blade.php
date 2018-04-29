@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 10px 50px">
            <div class="col-md-12" style="display: inline-flex;">
                <span style="line-height: 85px;"><img src="{{ asset('img/icon/bell.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 85px;padding-left: 10px;padding-right: 50px;">Notifications</span>
            </div>
        </div>
        <div class="row justify-content-center" style="padding: 0px 50px;">
            <div class="col-md-12">
                {{--<table class="table table-bordered" style="margin-top: 50px;text-align: center">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th class="col-md-1" style="text-align: center">Photo</th>--}}
                        {{--<th class="col-md-2" style="text-align: center">Name</th>--}}
                        {{--<th class="col-md-1" style="text-align: center">Date/time</th>--}}
                        {{--<th class="col-md-5" style="text-align: center">Annotation</th>--}}
                        {{--<th class="col-md-2" style="text-align: center">File</th>--}}
                        {{--<th class="col-md-1" style="text-align: center">Confirm</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tr>--}}
                        {{--<td class="col-md-1" style="text-align: center;vertical-align: middle;"><img src="{{ asset('img/icon/June_2017_BNK48_Nayika_Srinian.jpg') }}" alt="" class="pic_intable"></td>--}}
                        {{--<td class="col-md-2" style="vertical-align: middle;">Ms. NAYIKA SRINIAN</td>--}}
                        {{--<td class="col-md-1" style="vertical-align: middle;"></td>--}}
                        {{--<td class="col-md-5" style="vertical-align: middle;"></td>--}}
                        {{--<td class="col-md-2" style="vertical-align: middle;"></td>--}}
                        {{--<td class="col-md-1" style="vertical-align: middle;">--}}
                            {{--<label class="switch">--}}
                                {{--<input type="checkbox">--}}
                                {{--<span class="slider round"></span>--}}
                            {{--</label>--}}
                            {{--<input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tbody>--}}
                    {{--</tbody>--}}
                {{--</table>--}}

                <table class="table table-bordered" style="margin-top: 50px;text-align: center">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date/time</th>
                        <th scope="col">Annotation</th>
                        <th scope="col">File</th>
                        <th scope="col">Confirm</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><img src="{{ asset('img/icon/June_2017_BNK48_Nayika_Srinian.jpg') }}" alt="" class="pic_intable"></th>
                        <td style="vertical-align: middle">Ms. NAYIKA SRINIAN</td>
                        <td style="vertical-align: middle"></td>
                        <td style="vertical-align: middle"></td>
                        <td style="vertical-align: middle"></td>
                        <td style="vertical-align: middle">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection