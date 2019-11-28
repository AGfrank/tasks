@extends('layouts.app')

@section('section_title')
{{strtoupper(__('section.title.restore_password'))}}
@endsection
@section('section_app', 'sendmailpass')
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ strtoupper(session('status')) }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ strtoupper(__('page.reset.email')) }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ strtoupper(__('page.reset.send_link_password')) }}
                                </button>
                                <br>
                                <a class="reset_pass" href="{{route('login')}}">{{ strtoupper(__('page.reset.login')) }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
