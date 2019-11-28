<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')

<body id="@yield('section_app')">
    @include('includes.header')

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('includes.footer')
</body>
</html>
