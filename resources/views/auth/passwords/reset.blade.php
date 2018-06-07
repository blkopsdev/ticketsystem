@extends('layouts.app')

@section('content')
<div class="login">
    <header>
        <h1 class="text-center">{{ trans('translate.app_name') }}</h1>
    </header>

    <div class="authForm">
        <h3 class="text-center">{{ __('Reset Password') }}</h3>

        <form method="POST" action="{{ route('password.request') }}" class="form-signin" id="signinForm">
            @csrf
            
            <input type="hidden" name="token" value="{{ $token }}">
            
            <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="{{ trans('translate.email') }}">

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ trans('translate.password' )}}">

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ trans('translate.confirm_password' )}}">
            </div>

            <div class="form-group">
                <button class="btn solso-pdf btn-block" type="submit">
                    <i class="fa fa fa-share"></i>{{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
             
@endsection
