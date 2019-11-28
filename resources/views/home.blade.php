@extends('layouts.app')

@section('section_title')
{{strtoupper(__('section.title.home'))}}
@endsection
@section('section_app', 'home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if (session('status_scs'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('status_scs') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('status_wrn'))
            <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('status_wrn') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('status_err'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('status_err') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
    </div>
</div>
@endsection
