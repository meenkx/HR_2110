@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 10px 50px">
            <div class="col-md-12" style="display: inline-flex;">
                <span style="line-height: 85px;"><img src="{{ asset('img/icon/payment.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 85px;padding-left: 10px;padding-right: 50px;">Payment</span>
                <div style="    display: inline-flex;width: 500px;height: 45px;vertical-align: middle;margin: 20px 0px;">
                    <div class="form-group" style="display: inherit;">
                        <label style="width: 170px">Location : </label>
                        <input type="text" name="search" class="search" placeholder="Search edit people" style="height: 45px">
                    </div>
                    <select id="dropdown_department_payment">
                        <option value disabled selected>Select department</option>
                        <option value="january">aa</option>
                        <option value="febuary">bb</option>
                        <option value="march">cc</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding: 50px 50px;">
            <div class="col-md-12">

                <table class="table table-bordered" style="text-align: center">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Control</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><img src="{{ asset('img/icon/June_2017_BNK48_Nayika_Srinian.jpg') }}" alt="" class="pic_intable"></th>
                        <td style="vertical-align: middle">Ms. NAYIKA SRINIAN</td>
                        <td style="vertical-align: middle">sasdasdasd</td>
                        <td style="vertical-align: middle">
                            <button type="button" class="btn btn-default open-popup" style="border: 1px solid red;color: red;width: 100px;" >Edit</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection