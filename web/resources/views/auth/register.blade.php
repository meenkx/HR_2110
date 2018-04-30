@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="width: 100%;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DOB" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input id="DOB" type="date" class="form-control{{ $errors->has('DOB') ? ' is-invalid' : '' }}" name="DOB" value="{{ old('DOB') }}" required autofocus>

                                @if ($errors->has('DOB'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('DOB') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="Gender" type="text" class="form-control{{ $errors->has('Gender') ? ' is-invalid' : '' }}" name="Gender" value="{{ old('Gender') }}" required autofocus>

                                @if ($errors->has('Gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marital_status" class="col-md-4 col-form-label text-md-right">{{ __('Marital_status') }}</label>

                            <div class="col-md-6">
                                <input id="Marital_status" type="text" class="form-control{{ $errors->has('Marital_status') ? ' is-invalid' : '' }}" name="Marital_status" value="{{ old('Marital_status') }}" required autofocus>

                                @if ($errors->has('Marital_status'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Marital_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="Email" type="email" class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}" name="Email" value="{{ old('Email') }}" required>

                                @if ($errors->has('Email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>

                            <div class="col-md-6">
                                <input id="Tel" type="text" class="form-control{{ $errors->has('Tel') ? ' is-invalid' : '' }}" name="Tel" value="{{ old('Tel') }}" required>

                                @if ($errors->has('Tel'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Job_ID" class="col-md-4 col-form-label text-md-right">{{ __('Job_ID') }}</label>

                            <div class="col-md-6">
                                <input id="Job_ID" type="text" class="form-control{{ $errors->has('Job_ID') ? ' is-invalid' : '' }}" name="Job_ID" value="1" required>

                                @if ($errors->has('Job_ID'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Job_ID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Social_link" class="col-md-4 col-form-label text-md-right">{{ __('Social_link') }}</label>

                            <div class="col-md-6">
                                <input id="Social_link" type="text" class="form-control{{ $errors->has('Social_link') ? ' is-invalid' : '' }}" name="Social_link" required>

                                @if ($errors->has('Social_link'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Social_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Education" class="col-md-4 col-form-label text-md-right">{{ __('Education') }}</label>

                            <div class="col-md-6">
                                <input id="Education" type="text" class="form-control{{ $errors->has('Education') ? ' is-invalid' : '' }}" name="Education" required>

                                @if ($errors->has('Education'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="Photo" type="text" class="form-control{{ $errors->has('Photo') ? ' is-invalid' : '' }}" name="Photo" required>

                                @if ($errors->has('Photo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Emergency_Contact" class="col-md-4 col-form-label text-md-right">{{ __('Emergency_Contact') }}</label>

                            <div class="col-md-6">
                                <input id="Emergency_Contact" type="text" class="form-control{{ $errors->has('Emergency_Contact') ? ' is-invalid' : '' }}" name="Emergency_Contact" required>

                                @if ($errors->has('Emergency_Contact'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Social_link" class="col-md-4 col-form-label text-md-right">{{ __('Social_link') }}</label>

                            <div class="col-md-6">
                                <input id="Social_link" type="text" class="form-control{{ $errors->has('Social_link') ? ' is-invalid' : '' }}" name="Social_link" required>

                                @if ($errors->has('Social_link'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Social_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" style="width: 100%;margin: 0px;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
