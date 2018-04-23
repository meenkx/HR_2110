@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 10px 50px">
            <div class="col-md-11" style="display: inline-flex;">
                <span style="line-height: 85px;"><img src="{{ asset('img/icon/data.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 85px;padding-left: 10px;padding-right: 50px;">Edit</span>
                <table style="background-color: #ffc439;height: 100%;border-radius: 15px 15px 0px 0px;text-align: center;width: 750px;position: relative;bottom: -11px;">
                    <tbody>
                        <tr>
                            <td style="border-right: 1px solid white;width: 90px">&nbsp;asdasd</td>
                            <td style="border-right: 1px solid white;width: 90px">&nbsp;asdasdasd</td>
                            <td style="border-right: 1px solid white;width: 90px">&nbsp;asdasd</td>
                            <td style="border-right: 1px solid white;width: 90px">&nbsp;asdasd</td>
                            <td style="border-right: 1px solid white;width: 90px">&nbsp;asdasda</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1">
                <span>
                    <img src="{{ asset('img/icon/plus.png') }}" alt="" style="width: 85px;">
                </span>
            </div>
        </div>
        <div class="row justify-content-center" style="padding: 0px 50px;">
            <div class="col-md-12">
                <table class="table table-bordered" style="margin-top: 50px;text-align: center">
                    <thead>
                    <tr>
                        <th class="col-md-1" style="text-align: center">Photo</th>
                        <th class="col-md-2" style="text-align: center">Name</th>
                        <th class="col-md-1" style="text-align: center">Position</th>
                        <th class="col-md-6" style="text-align: center">Job</th>
                        <th class="col-md-2" style="text-align: center">Contact</th>
                    </tr>
                    </thead>
                    <tr>
                        <td class="col-md-1" style="text-align: center;vertical-align: middle;"><img src="{{ asset('img/icon/June_2017_BNK48_Nayika_Srinian.jpg') }}" alt="" class="pic_intable"></td>
                        <td class="col-md-2" style="vertical-align: middle;">Ms. NAYIKA SRINIAN</td>
                        <td class="col-md-1" style="vertical-align: middle;"><span style="color: #7914dd;font-weight: bold">HEAD</span></td>
                        <td class="col-md-6" style="vertical-align: middle;"></td>
                        <td class="col-md-2" style="vertical-align: middle;"></td>
                    </tr>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection