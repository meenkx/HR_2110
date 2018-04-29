@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 10px 50px">
            <div class="col-md-12" style="display: inline-flex;">
                <span style="line-height: 85px;"><img src="{{ asset('img/icon/money.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 85px;padding-left: 10px;padding-right: 50px;">Salary Edit</span>
                <div style="    display: inline-flex;width: 50%;height: 45px;vertical-align: middle;margin: 20px 0px;">
                    <div class="form-group" style="display: inherit;">
                        <label style="width: 100px;font-size: 20px">Location : </label>
                        <input type="text" name="search" class="search" placeholder="Search edit people" style="width: 255px;height: 45px">
                    </div>
                    <select id="dropdown_year_salaryEdit">
                        <option value disabled selected>Select month</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                    </select>
                    <select id="dropdown_month_salaryEdit">
                        <option value disabled selected>Select date</option>
                        <option value="january">January</option>
                        <option value="febuary">Febuary</option>
                        <option value="march">March</option>
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