<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img navbarObrazok"
                     src=" {{ asset('images/m2i8N4N4K9i8K9d3.png') }}" alt="pokebal">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ">
                    @auth
                        <a class="nav-link" href="{{ route('user.index') }}">{{ __('Users') }}</a>
                    @endauth
                </ul>
                <ul class="navbar-nav mr-auto">
{{--                    @auth--}}
                        <a class="nav-link" href="{{ route('pokedex.index') }}">{{ __('Pokedex') }}</a>
{{--                    @endauth--}}
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

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-center mt-5">
        <!-- Grid container -->
        <div class="container p-4">

            <!-- Section: Social media -->
            <div class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i
                        class="bi bi-facebook"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i
                        class="bi bi-twitter"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i
                        class="bi bi-instagram"></i></a>

                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i
                        class="bi bi-github"></i></a>
            </div>
            <!-- Section: Social media -->


            <!-- Section: Text -->
            <div class="mb-4 ">
                <p class="vlastne">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                    distinctio earum repellat quaerat voluptatibus placeat nam,
                    commodi optio pariatur est quia magnam eum harum corrupti dicta,
                    aliquam sequi voluptate quas.
                </p>
            </div>
            <!-- Section: Text -->


        </div>
        <!-- Grid container -->

    </footer>
    <!-- Footer -->
</div>
</body>
</html>
