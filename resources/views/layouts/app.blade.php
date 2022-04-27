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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->

    {{-- <link rel="stylesheet" href="{{ asset('frontend/font/font-awesome-4.7.0/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('./backend/css/app.css') }}">
</head>
<body>
    <div class="wrapper fadeInDown">
    <div id="formContent" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="dashboard">
                <h2 class="icon-laravel-custom"><i class="fa-brands fa-laravel"></i></h2>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1>{{ config('app.name', 'Laravel') }}</h1>
                </a>
                <h2 class="icon-feather-custom"><i class="fa-solid fa-feather-pointed"></i> </h2>
            </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <!-- Tabs Titles -->
    <h2 class="uiactive">  <a class="nav-link @if (\Request::is('login')) active  @endif " href="{{ url('login') }}">{{ __('Login') }}</a> </h2>
    @endif
    @if (Route::has('register'))
    <h2 class="uiactive underlineHover">   <a class="nav-link @if (\Request::is('register')) active  @endif " href="{{ url('register') }}">{{ __('Register') }}</a> </h2>
    @endif
    <!-- Icon -->
    <div class="fadeIn first">
<h1 class="icon-login-custom">
    <i class="fa fa-sign-in" aria-hidden="true"></i>
</h1 >
    </div>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        <a class="navbar-brand nav2" href="{{ url('/') }}">
            <button class='btn-back' >Back Home</button>
              </a>
    </div>
    </div>
</body>
</html>
