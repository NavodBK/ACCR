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

{{--    adminDash--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{asset('js/dash/bs-init.js')}}"></script>
    <script src="{{asset('js/dash/script.min.js')}}"></script>
    <script src="{{asset('js/dash/theme.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{--    adminDash--}}
    <link rel="stylesheet" href="{{asset('css/dash/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dash/Tabs-with-Arrows.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


</head>
<body>
    <div class="container">

        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">{{ config('app.name', 'TARS') }}</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
                            <div>
                                        <button class="btn btn-primary" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</button>
                            </div>
                        </span>
                    @endguest
                </div>
            </div>
        </nav>
    </div>

    <div style="margin-top: 15px;">
        @yield('content')
    </div>

</body>
</html>
