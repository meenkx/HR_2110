@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 0px 50px">
            <div class="col-md-12" style="display: inline-flex;">
                <span><img src="{{ asset('https://png.icons8.com/metro/1600/time.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 60px;padding-left: 10px;padding-right: 50px;">Work history</span>

                <select style="border-radius: 10px;height: 30px;width: 70px;vertical-align: middle;line-height: 30px;margin: 15px 0px;outline: none;padding-left: 10px">
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                    <option value="2018">2018</option>
                </select>

                <select style="border-radius: 10px;height: 30px;width: 115px;vertical-align: middle;line-height: 30px;margin: 15px 0px;outline: none;margin-left: 10px;padding-left: 10px" id="option_css">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="April">April</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>

            </div>
        </div>
        <div class="row justify-content-center" style="padding: 0px 50px">
            <div class="col-md-12">
                <table class="table table-bordered" style="margin-top: 50px">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Check in</th>
                        <th>Check out</th>
                        <th>Status</th>
                        <th>Annotation</th>
                        <th>Confirm</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>31/03/1997</td>
                        <td>31/03/1997</td>
                        <td>31/03/1997</td>
                        <td>31/03/1997</td>
                        <td>31/03/1997</td>
                        <td>31/03/1997</td>
                    </tr>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection