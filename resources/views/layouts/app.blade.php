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
        <div id="formContent">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="brand-logo">
                            <h2 class="icon-laravel-custom"><i class="fa-brands fa-laravel"></i></h2>
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <h1>{{ config('app.name', 'Laravel') }}</h1>
                            </a>
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light" style="font-weight: 300;margin-top: -10px;">Sign in to continue.</h6>
                    </div>
            <main class="py-4">
                @yield('content')

            </main>
        </div>
    </div>
</body>

</html>