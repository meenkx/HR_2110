@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 10px 50px">
            <div class="col-md-11" style="display: inline-flex;">
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
            <div class="col-md-1">
                <span>
                    <img src="{{ asset('img/icon/list.png') }}" alt="" style="width: 85px;" data-toggle="modal" data-target="#list">
                </span>
            </div>
        </div>

        {{--modal zone--}}
        <div class="modal fade" id="list" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog vertical-align-center modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="display: initial;">
                            {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                            <h4 class="modal-title" id="myModalLabel">Add user</h4>
                        </div>

                        <form action="" method="POST">
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="pic_zone" style="text-align: center">
                                        <img src="{{ asset('img/icon/upload_profile.png') }}" alt="" width="220px">
                                    </div>
                                    <div class="content_zone" style="text-align: center">
                                        <div style="font-size: 25px;font-weight: bold;border-bottom: 1px solid black;padding: 15px 0px;text-align: left;margin-top: 10px">
                                            General information
                                        </div>
                                        <div style="text-align: left;padding: 20px 0px;">
                                            <form class="form-inline" action="">
                                                <div style="display: inline-flex;">
                                                    <div class="form-group" style="display: inline-flex;">
                                                        <label for="name" style="width: 110px;margin: 5px 0px;">Name :</label>
                                                        <input type="text" class="form-control" id="name" style="margin: 5px 0px;">
                                                    </div>
                                                    <div class="form-group" style="padding-left: 30px;display: inline-flex;">
                                                        <label for="Birthday" style="width: 85px;">Birthday:</label>
                                                        <div style="display: inline-flex;width: 320px;">
                                                            <select id="dropdown_month">
                                                                <option value disabled selected>Date</option>
                                                                <option value="january">January</option>
                                                                <option value="febuary">Febuary</option>
                                                                <option value="march">March</option>
                                                            </select>
                                                            <select id="dropdown_year">
                                                                <option value disabled selected>Month</option>
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
                                                            <select id="dropdown_department">
                                                                <option value disabled selected>Year</option>
                                                                <option value="january">aa</option>
                                                                <option value="febuary">bb</option>
                                                                <option value="march">cc</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="display: inline-flex;">
                                                    <div class="form-group" style="display: inline-flex;">
                                                        <label for="Gender" style="width: 133px;margin: 5px 0px;">Gender :</label>
                                                        <select class="form-control" id="gender" style="margin-left: 15px">
                                                            <option>sex</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" style="display: inline-flex;">
                                                        <label for="Marital" style="width: 130px;margin: 5px 0px;padding-left: 20px;">Marital :</label>
                                                        <input type="text" class="form-control" id="Marital" style="margin: 5px 0px;margin-left: 20px">
                                                    </div>
                                                    <div class="form-group" style="display: inline-flex;">
                                                        <label for="Education" style="width: 180px;margin: 5px 0px;padding-left: 20px;">Education :</label>
                                                        <input type="text" class="form-control" id="Education" style="margin: 5px 0px;margin-left: 20px">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal" style="width: 100px">Close</button>
                                    <button type="submit" class="btn btn-primary" style="width: 175px">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @yield('edit')
    </div>
@endsection