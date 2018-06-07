@extends('layouts.app')

@section('content')
<div class="login">
    <header>
        <h1 class="text-center">{{ trans('translate.app_name') }}</h1>
    </header>

    <div class="authForm">
        <h3 class="text-center">{{ trans('translate.forgot_password') }}</h3>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="form-signin" id="signinForm">
            @csrf

            <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="{{ trans('translate.email') }}">

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <button class="btn solso-pdf btn-block" type="submit">
                    <i class="fa fa fa-share"></i>{{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
