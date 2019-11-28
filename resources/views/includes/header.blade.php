<header>
    @guest
    <nav id="navbar-login" class="navbar navbar-expand-md navbar-light navbar-laravel conf">
        <div class="container mt-2 mb-3">
            <a class="brand" href="{{ url('/') }}">
                <h1>{{ __('titles.main') }}</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{strtoupper(__('menu.menu.languages'))}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (app()->getLocale() == 'es')
                            <a class="dropdown-item" href="{{route('locale', 'en')}}">{{strtoupper(__('menu.topbar.change_english'))}}</a>
                            @else
                            <a class="dropdown-item" href="{{route('locale', 'es')}}">{{strtoupper(__('menu.topbar.change_spanish'))}}</a>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endguest
    @auth
        @include('includes.topbar')
    @endauth
</header>
