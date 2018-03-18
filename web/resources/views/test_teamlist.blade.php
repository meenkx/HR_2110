@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 0px 50px">
            <div class="col-md-12" style="display: inline-flex;">
                <span><img src="{{ asset('img/icon/followers.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 60px;padding-left: 10px;padding-right: 50px;">Team List</span>
                <span><img src="{{ asset('img/icon/copy-machine.png') }}" alt="" style="    border: 1px solid black;
    border-radius: 100px;
    vertical-align: middle;
    height: 64px;
    line-height: 64px;
    width: 64px;"></span>
            </div>
        </div>
        <div class="row justify-content-center" style="padding: 0px 50px">
            <div class="col-md-12">
                <table class="table table-bordered" style="margin-top: 50px">
                    <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Job</th>
                        <th>Contact</th>
                    </tr>
                    </thead>
                    <tr>
                        <td style="text-align: center;"><img src="{{ asset('img/icon/June_2017_BNK48_Nayika_Srinian.jpg') }}" alt="" class="pic_intable"></td>
                        <td>Ms. NAYIKA SRINIAN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection