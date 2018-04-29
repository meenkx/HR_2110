@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center h-100" style="background-color: white">

        {{--type your code here--}}
        <div class="col-md-5 col-centered" style="height: 385px;">
            <img src="{{ asset('img/icon/logo2.jpg') }}" class="responsive_img_logo2" alt="" style="margin: 0px auto">
        </div>

        <div class="col-md-7" style="padding: 0px 115px;">

            <section class="h-100">
                <div class="container h-100">
                    <div class="row justify-content-md-center h-100">
                        <div class="card-wrapper">
                            <div class="card fat">
                                <div class="card-body">
                                    <h4 class="card-title">Sign In</h4>
                                    <form method="POST">

                                        <div class="form-group">
                                            <label for="username" style="text-align: left">Username</label>

                                            <input id="username" type="text" class="form-control" name="username" value="" required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" style="text-align: left">Password
                                                <a href="forgot.html" class="float-right">
                                                    Forgot Password?
                                                </a>
                                            </label>
                                            <input id="password" type="password" class="form-control" name="password" required data-eye>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>

                                        <div class="form-group no-margin">
                                            <button type="submit" class="btn btn-warning btn-block" style="margin: 0px;width: 100%">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
</div>
@endsection
