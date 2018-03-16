@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center h-100" style="background-color: white">
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--type your code here--}}
        <div class="col-md-4 col-centered">
            <img src="{{ asset('img/icon/logo2.jpg') }}" class="responsive_img_logo2" alt="">

        </div>
        <div class="col-md-8">
            <div class="loginbox1">
                Sing In
            </div>
            <div>

                <form action="/action_page.php">
                    <div>USERNAME :</div>
                    <input type="text" name="firstname" class="form-control inputcssusername">
                    <br>
                    <div>PASSWORD :</div>
                    <div class="input-group">
<<<<<<< HEAD
                        <div style="padding-right: 20px;width: 74%;" class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-user"></i>
                            <input type="password" name="lastname" class="form-control inputcss">
=======
                        <div style="padding-right: 20px;width: 74%;">
                            <input type="password" name="lastname" class="form-control inputcsspass">
>>>>>>> 103ee23489274429d5fa097aab0097f6ab35290a
                        </div>

                        <div>
                            <button type="submit" class="btn btn-default submitcsss" aria-label="Left Align">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> GO!
                            </button>
                        </div>
                    </div>
                </form>

                <div class="invalid_error">
                    Invalid username or password.
                </div>
                <div style="text-align: center;">
                    Forgot Password ?
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
