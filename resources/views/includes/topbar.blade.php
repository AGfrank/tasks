<nav id="navbar-system" class="navbar navbar-expand-md navbar-light navbar-laravel conf">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}" style="width:33%;">
            <h1>{{ __('titles.main') }}</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="nav justify-content-end navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown mr-5">
                    @if (app()->getLocale() == 'es')
                    <a class="nav-link" href="{{route('locale', 'en')}}">
                        {{strtoupper(__('menu.topbar.change_english'))}}
                    </a>
                    @else
                    <a class="nav-link" href="{{route('locale', 'es')}}">
                        {{strtoupper(__('menu.topbar.change_spanish'))}}
                    </a>
                    @endif
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{strtoupper(Auth::user()->name)}} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{strtoupper(__('menu.topbar.logout'))}}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="menu" class="menu">
    <div class="menu-down">
        <ul class="nav nav-tabs container notify-row">
            <li class="nav-item">
                <a class="nav-link" href="{{route('task.index')}}" data-nav="taks">{{strtoupper(__('menu.topbar.tasks'))}}</a>
            </li>
        </ul>
    </div>
</div>
