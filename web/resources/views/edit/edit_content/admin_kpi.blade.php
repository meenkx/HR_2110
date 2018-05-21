@extends('edit.edit_main')
@section('edit')
    <div class="row justify-content-center" style="padding: 0px 50px;">
        <div class="col-md-12" style="padding: 20px 0px;">
            <div class="col-md-12" style="margin-top: 10px;margin-bottom: 20px">
                <select id="dropdown_admindepartment_kpi">
                    <option value disabled selected>Select department</option>
                    <option value="january">aa</option>
                    <option value="febuary">bb</option>
                    <option value="march">cc</option>
                </select>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Control</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td><button type="button" class="btn btn-default" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#profile">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                        <td><button type="button" class="btn btn-default" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#profile">Edit</button></td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                        <td><button type="button" class="btn btn-default" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#profile">Edit</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
