@extends('edit.edit_main')
@section('edit')
    <div class="row justify-content-center" style="padding: 0px 50px;">
        <div class="col-md-12" style="padding: 20px 0px;">
            <div style="display: inline-flex;width: 100%">
                <select id="dropdown_month">
                    <option value disabled selected>Select date</option>
                    <option value="january">January</option>
                    <option value="febuary">Febuary</option>
                    <option value="march">March</option>
                </select>
                <select id="dropdown_year">
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
                <select id="dropdown_department">
                    <option value disabled selected>Select department</option>
                    <option value="january">aa</option>
                    <option value="febuary">bb</option>
                    <option value="march">cc</option>
                </select>
                <input type="text" name="search" class="search" placeholder="Search edit people">
            </div>
            <div style="padding: 30px 10px;">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Email</th>
                        <th>Control</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                        <td><button type="button" class="btn btn-default" style="border: 1px solid red;color: red;width: 100px;" data-toggle="modal" data-target="#profile">Edit</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection