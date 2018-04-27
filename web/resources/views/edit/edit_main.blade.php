@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 10px 50px">
            <div class="col-md-12" style="display: inline-flex;">
                <span style="line-height: 85px;"><img src="{{ asset('img/icon/data.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 85px;padding-left: 10px;padding-right: 50px;">Edit</span>
                <table style="font-size: 25px;background-color: #ffc439;height: 85%;border-radius: 15px 15px 0px 0px;text-align: center;width: 750px;position: relative;bottom: -23px;">
                    <tbody>
                        <tr>
                            <td style="background-color: #fff139;border-radius: 15px 0px 0px 0px;border-right: 1px solid white;width: 90px;">&nbsp;Profile</td>
                            <td style="border-right: 1px solid white;width: 90px">&nbsp;Work history</td>
                            <td style="border-right: 1px solid white;width: 90px">&nbsp;Work calender</td>
                            <td style="border-right: 1px solid white;width: 90px">&nbsp;KPI</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @yield('edit')
    </div>
@endsection