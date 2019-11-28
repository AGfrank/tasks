@extends('layouts.app')

@section('section_title')
{{strtoupper(__('section.title.login'))}}
@endsection
@section('section_app', 'login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if (session('status_err'))
        <div class="col-md-8">
            <div class="alert alert-danger" role="alert">
                {{ session('status_err') }}
            </div>
        </div>
    @endif
        <div class="col-md-8">
            <div id="formLogin" class="card">
                <div class="card-header" style="text-align:center; font-family:verdana; padding-top:20px; color:white; font-size:20px;">
                    <h3 class="text-center">{{strtoupper(__('page.login.title'))}}</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ strtoupper(__('page.login.email_address')) }}</label>
                            <div class="col-md-6 input-group">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ strtoupper($errors->first('email')) }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ strtoupper(__('page.login.password')) }}</label>
                            <div class="col-md-6 input-group">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <span class="input-group-btn">
                                    <button id="show_password" class="btn btn-secondary" type="button">
                                        <span class="fas fa-eye"></span>
                                    </button>
                                </span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ strtoupper($errors->first('password')) }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ strtoupper(__('page.login.remember_me')) }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ strtoupper(__('page.login.login')) }}
                                </button>
                                @if (Route::has('password.reset'))
                                    <a class="btn btn-link" href="{{ route('password.reset') }}">
                                        {{ strtoupper(__('page.login.restore_password')) }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
