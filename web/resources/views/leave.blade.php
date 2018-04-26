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
                            <select id="dropdown_month">
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
                <div class="col-md-5">
                    <span style="font-size: 20px;font-weight: bold">Upload evidence:</span>
                    {{--dropzone bootstrap--}}
                    <div class="container" style="background-color: #f5f6fa;width: 100%;padding: 20px;border-radius: 15px;margin-top: 15px;">
                        <!-- HTML heavily inspired by https://blueimp.github.io/jQuery-File-Upload/ -->
                        <div id="actions" class="row" style="margin-top: 0em;">
                            <div class="col-lg-12" style="border: 3px dotted #c2cdda;padding: 20px;border-radius: 10px;">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button dz-clickable">
                                     <i class="glyphicon glyphicon-plus"></i>
                                     <span>Add files...</span>
                                 </span>
                                <button type="submit" class="btn btn-primary start">
                                    <i class="glyphicon glyphicon-upload"></i>
                                    <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning cancel">
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                    <span>Cancel upload</span>
                                </button>
                            </div>
                            <div class="col-lg-12">
                                <!-- The global file processing state -->
                                <span class="fileupload-process">
                                    <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                       <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>
                                    </div>
                                 </span>
                            </div>
                        </div>

                        <div class="table table-striped files" id="previews">
                            <div id="template" class="file-row dz-image-preview" style="background-color: transparent">
                                <!-- This is used as the file preview template -->

                                <div style="width: 90px">
                                    <span class="preview"><img data-dz-thumbnail></span>
                                </div>
                                <div>
                                    <p class="name" data-dz-name style="text-align: left;"></p>
                                    <p class="size" data-dz-size style="text-align: left;"></p>
                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                </div>
                                <div>
                                    {{--<p class="size" data-dz-size></p>--}}
                                    <p>Status upload</p>
                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary start">
                                        <i class="glyphicon glyphicon-upload"></i>
                                        <span>Start</span>
                                    </button>
                                    <button data-dz-remove class="btn btn-warning cancel">
                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                        <span>Cancel</span>
                                    </button>
                                    <button data-dz-remove class="btn btn-danger delete">
                                        <i class="glyphicon glyphicon-trash"></i>
                                        <span>Delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            </div>
        </div>
    </div>
@endsection