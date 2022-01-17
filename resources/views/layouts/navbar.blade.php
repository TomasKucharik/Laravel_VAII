

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img"
                 src=" {{ asset('images/m2i8N4N4K9i8K9d3.png') }}"  alt="pokebal">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav mr-3">
                {{--                    @auth--}}
                <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                {{--                    @endauth--}}
            </ul>

            <ul class="navbar-nav mr-3">
                {{--                    @auth--}}
                <a class="nav-link" href="{{ route('pokedex.index') }}">{{ __('Pokedex') }}</a>
                {{--                    @endauth--}}
            </ul>

            <ul class="navbar-nav  mr-3">
                {{--                    @auth--}}
                <a class="nav-link" href="{{ url('newsUser') }}">{{ __('News') }}</a>
                {{--                    @endauth--}}
            </ul>

            <ul class="navbar-nav mr-3">
                {{--                    @auth--}}
                <a class="nav-link" href="{{ url('pagination') }}">{{ __('Stadions') }}</a>
                {{--                    @endauth--}}
            </ul>

            <ul class="navbar-nav mr-3">
                {{--                    @auth--}}
                <a class="nav-link" href="{{ url('gameUser') }}">{{ __('Games') }}</a>
                {{--                    @endauth--}}
            </ul>


            <ul class="navbar-nav ">
                @auth
{{--                    <a class="nav-link" href="{{ route('user.index') }}">{{ __('Admin| users') }}</a>--}}
                @endauth
            </ul>

            <ul class="navbar-nav  mr-3">
                @auth
{{--                    <a class="nav-link" href="{{ url('news') }}">{{ __('Admin| news') }}</a>--}}
                @endauth
            </ul>
            <ul class="navbar-nav  mr-3">
                @auth
{{--                    <a class="nav-link" href="{{ url('stadion') }}">{{ __('Admin| stadion') }}</a>--}}
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('user.index') }}">{{ __('Admin| users') }}</a>
                            <a class="dropdown-item" href="{{ url('news') }}">{{ __('Admin| news') }}</a>
                            <a class="dropdown-item" href="{{ url('pagination') }}">{{ __('Admin| stadion') }}</a>
                            <a class="dropdown-item" href="{{ url('game') }}">{{ __('Admin| games') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
