@extends('edit.edit_main')
@section('edit')
    <div class="row justify-content-center" style="padding: 0px 50px;">
        <div class="col-md-12">
            {{--<div style="padding: 30px 0px">--}}
                {{--<input type="text" name="search" class="search" placeholder="Search edit people">--}}
            {{--</div>--}}

            <div class="row justify-content-center" style="padding: 60px 20px;margin: 0px;">

                <div class="col-md-3">
                    <div class="img-picture-profile" style="text-align: center">
                        <img src="{{ asset('../img/icon/June_2017_BNK48_Nayika_Srinian.jpg') }}" alt="">
                    </div>
                    <div style="text-align: center;padding: 30px 0px;">
                        {{--onclick="location.href = '#popup-article';"--}}
                        <button type="button" class="btn btn-default open-popup" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#profile">Edit</button>
                    </div>

                </div>

                <div class="col-md-9">
                    <div>
                        <div style="border-bottom: 1px solid black;font-size: 30px;font-weight: bold;">
                            General information
                        </div>
                        <div style="display: inline-flex;">
                            <div style="padding-top: 15px;font-size: 18px;line-height: 1.8;width: 630px;">
                                <div>
                                    <span style="font-weight: bold">Name :</span> <span>Ms. Nayika Srinian</span>
                                    <span style="padding-left: 40px;font-weight: bold">Birthday :</span> <span>November 10, 1996</span>
                                    <span style="padding-left: 40px;font-weight: bold">Age :</span> <span>26</span>
                                </div>
                                <div>
                                    <span style="font-weight: bold">Gender :</span> <span><img src="{{ asset('../img/icon/femenine.png') }}" alt="" width="15px" height="15px"></span>
                                    <span style="padding-left: 40px;font-weight: bold">Marital :</span> <span>Single</span>
                                    <span style="padding-left: 40px;font-weight: bold">Education :</span> <span>Mahidol University</span>
                                </div>
                            </div>
                            <div style="line-height: 80px;vertical-align: middle;padding-left: 60px;">
                                <button type="button" class="btn btn-default trigger" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#General_information">Edit</button>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 70px">
                        <div style="border-bottom: 1px solid black;font-size: 30px;font-weight: bold;">
                            Contact information
                        </div>
                        <div style="display: inline-flex;">
                            <div style="padding-top: 15px;font-size: 18px;line-height: 1.8;width: 630px;">
                                <div>
                                    <span style="font-weight: bold">E-mail :</span> <span>nayika_bnk48@mail.in.th</span>
                                    <span style="padding-left: 40px;font-weight: bold">Mobile :</span> <span>088-46250</span>

                                </div>
                                <div>
                                    <span style="font-weight: bold">Work Phone :</span> <span>02-1234567</span>
                                    <span style="padding-left: 40px;font-weight: bold">Emergency Contact :</span> <span>085-2148856</span>
                                </div>
                            </div>
                            <div style="line-height: 80px;vertical-align: middle;padding-left: 60px;">
                                <button type="button" class="btn btn-default" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#Contact_information">Edit</button>
                            </div>
                        </div>

                    </div>

                    <div style="margin-top: 70px">
                        <div style="border-bottom: 1px solid black;font-size: 30px;font-weight: bold;">
                            Job information
                        </div>
                        <div style="display: inline-flex;">
                            <div style="padding-top: 15px;font-size: 18px;line-height: 1.8;width: 630px;">
                                <div>
                                    <span style="font-weight: bold">Department :</span> <span>Introduction International</span>
                                </div>
                                <div>
                                    <span style="font-weight: bold">Job :</span> <span>bioresource & environmental biotechnology</span>
                                </div>
                            </div>
                            <div style="line-height: 80px;vertical-align: middle;padding-left: 60px;">
                                <button type="button" class="btn btn-default" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#Job_information">Edit</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    {{--modal--}}
    <div class="modal fade" id="General_information" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="modal-header" style="display: initial;">
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                        <h4 class="modal-title" id="myModalLabel">General information</h4>
                    </div>

                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name </label>
                                    <input type="text" name="Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Birthday </label>
                                    <input type="date"  name="Birthday" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Age </label>
                                    <input type="text" id="Age" name="Age" class="form-control" disabled >
                                </div>
                                <div class="form-group">
                                    <label>Gender </label>
                                    <input type="text" name="Gender" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Marital </label>
                                    <input type="text" name="Marital" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Education </label>
                                    <input type="text" name="Education" class="form-control">
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
    <div class="modal fade" id="Contact_information" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="modal-header" style="display: initial;">
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                        <h4 class="modal-title" id="myModalLabel">Contact information</h4>
                    </div>

                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>E-mail </label>
                                    <input type="email" name="E-mail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mobile </label>
                                    <input type="text" name="Mobile" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Work Phone </label>
                                    <input type="text" name="Work Phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Emergency Contact </label>
                                    <input type="text" name="Emergency Contact" class="form-control">
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
    <div class="modal fade" id="Job_information" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="modal-header" style="display: initial;">
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                        <h4 class="modal-title" id="myModalLabel">Job information</h4>
                    </div>

                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Department </label>
                                    <input type="text" name="Department" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Job </label>
                                    <input type="text" name="Job" class="form-control" >
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
    <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="modal-header" style="display: initial;">
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                        <h4 class="modal-title" id="myModalLabel">Profile photo</h4>
                    </div>

                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Department </label>
                                    <input type="text" name="Department" class="form-control">
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
@endsection
