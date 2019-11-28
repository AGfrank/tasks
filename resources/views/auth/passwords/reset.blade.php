@extends('layouts.app')

@section('section_title')
{{strtoupper(__('section.title.restore_password'))}}
@endsection
@section('section_app', 'restorepassword')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="formReset" class="card">
                <div class="card-header" style="text-align:center; font-family:verdana; padding-top:20px; color:white; font-size:20px;">
                    <img src="{{ asset('img/Logo HQMonitor.png') }}" alt="{{__('menu.topbar.brand')}}" class="d-block mx-auto img-fluid" style="width:50%;">
                    <br>
                    {{ strtoupper(__('page.reset.title')) }}
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.reset') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ strtoupper(__('page.reset.email')) }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ strtoupper(__('page.reset.password')) }}</label>
                            <div class="col-md-6 input-group">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <span class="input-group-btn">
                                    <button id="show_password" class="btn btn-secondary" type="button">
                                        <span class="fas fa-eye"></span>
                                    </button>
                                </span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ strtoupper(__('page.reset.confirm_password')) }}</label>
                            <div class="col-md-6 input-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <span class="input-group-btn">
                                    <button id="show_password_confirm" class="btn btn-secondary" type="button">
                                        <span class="fas fa-eye"></span>
                                    </button>
                                </span>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ strtoupper(__('page.reset.button')) }}
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
