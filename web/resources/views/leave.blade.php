@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center" style="border-bottom: 1px solid black;padding: 10px 50px">
            <div class="col-md-12" style="display: inline-flex;">
                <span style="line-height: 85px;"><img src="{{ asset('img/icon/copy.png') }}" alt="" width="50px"></span>
                <span style="font-size: 35px;font-weight: bold;vertical-align: middle;line-height: 85px;padding-left: 10px;padding-right: 50px;">Leave</span>
            </div>
        </div>
        <div class="row justify-content-center" style="padding: 0px 50px;">
            <form class="form-horizontal" action="/action_page.php" style="width: 100%;padding: 30px 100px;display: inline-flex;">
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email"><span style="font-size: 20px;">Date:</span></label>
                        <div class="col-sm-3">
                            <select id="dropdown_date">
                                <option value disabled selected>Select date</option>
                                <option value="january">January</option>
                                <option value="febuary">Febuary</option>
                                <option value="march">March</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select id="dropdown_day">
                                <option value disabled selected>Select day</option>
                                <option value="mon">MON</option>
                                <option value="febuary">Febuary</option>
                                <option value="march">March</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Annotation"><span style="font-size: 20px;margin-left: -30px;">Annotation:</span></label>
                        <div class="col-sm-10" style="padding-left: 22px;">
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <span style="font-size: 20px;font-weight: bold">Upload evidence:</span>

                </div>
            </form>


            </div>
        </div>
    </div>
@endsection