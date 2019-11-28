<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset("img/favicon.ico") }}" type="image/x-icon"/>

<!-- Title App -->
@Auth
<title>@yield('section_title') - {{ config('app.name', __('titles.main')) }}</title>
@else
<title>{{ config('app.name', __('titles.main')) }} - @yield('section_title')</title>
@endauth
