@extends('layouts.app')

@section('content')
<div class="login">
    <header>
        <h1 class="text-center">{{ trans('translate.app_name') }}</h1>
    </header>

    <div class="authForm">
        <h3 class="text-center">{{ trans('translate.log_in_to_your_account') }}</h3>

        <form method="POST" action="{{ route('login') }}" class="validateJSForm form-signin">
            @csrf

            <div class="form-group">
                <label for="email" class="sr-only">{{ trans('translate.email') }}</label>

                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} required autofocus" autocomplete="off" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ trans('translate.email') }}">

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password" class="sr-only">{{ trans('translate.password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} required" autocomplete="off" name="password" required placeholder="{{ trans('translate.password') }}" data-parsley-minlength="6">

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <button class="btn solso-email btn-block" type="submit">
                    <i class="fa fa-sign-in"></i>{{ __('Login') }}
                </button>
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</label>
                <a class="pull-right" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            </div>
        </form>
    </div>
</div>

@endsection
