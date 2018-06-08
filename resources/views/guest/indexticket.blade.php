@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-12">
        <h3>{{ trans('translate.guest_ticket') }}</h3>

        <div class="row">
            <form action="{{ route('guest.store') }}" class="validateJSForm top20">
                @csrf
                <div class="form-group col-md-6">
                    <label for="name">{{ trans('translate.name') }}</label>
                    <input type="text" name="name" class="form-control required"
                    autocomplete="off" required autofocus placeholder="{{ trans('translate.name') }}" value="{{ old('name') }}">

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="email">{{ trans('translate.email') }}</label>
                    <input type="email" id="email" name="email" class="form-control required"
                    autocomplete="off" placeholder="{{ trans('translate.email') }}" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="title"> {{ trans('translate.title') }} </label>
                    <input type="text" name="title" class="form-control required"
                    autocomplete="off" placeholder="{{ trans('translate.title') }}" value="{{ old('title') }}">

                    @if ($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group col-md-2">
                    <label for="department_id">{{ trans('translate.department') }}</label>
                    <select name="department_id" class="form-control required">
                        <option value="" selected>{{ trans('translate.choose') }}</option>
                        @foreach($data->departments as $d)
                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('department_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('department_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-2">
                    <label for="type_id">{{ trans('translate.ticket_type') }}</label>
                    <select name="type_id" class="form-control required">
                        <option value="" selected>{{ trans('translate.choose') }}</option>
                        @foreach($data->types as $t)
                            <option value="{{ $t->id }}">{{ $t->name }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('type_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('type_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-2">
                    <label for="priority_id">{{ trans('translate.priority') }}</label>
                    <select name="priority_id" class="form-control required">
                        <option value="" selected>{{ trans('translate.choose') }}</option>
                        @foreach($data->priorities as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('priority_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('priority_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-12">
                    <label for="content"> {{ trans('translate.message') }} </label>
                    <textarea name="content" class="form-control required solsoEditor" rows="7" autocomplete="off">{{ old('content') }}</textarea>

                    @if ($errors->has('content'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-12">
                    <input type="hidden" name="guest" value="1">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-share"></i> {{ trans('translate.send') }}
                    </button>
                </div>
            </form>	
        </div>
	</div>
</div>

@endsection