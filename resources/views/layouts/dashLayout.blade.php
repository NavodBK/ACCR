<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ACCR') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">{{ config('app.name', 'ACCR') }}</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                     id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">

                    </ul>
                    @guest
                        <span class="navbar-text actions">
                            <a class="login" href="{{route('login')}}">Log In</a>
                            <a class="btn btn-light action-button" role="button" href="{{route('register')}}">Sign Up</a>
                        </span>
                    @else
                        <span class="navbar-text actions">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf

                            </form>
                            <div
                                        <button class="btn btn-primary" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</button>
                            </div>
                        </span>
                    @endguest
                </div>
            </div>
        </nav>
    </div>

    <div>
        @yield('content')
    </div>

</body>
</html>
