<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link href="{{ asset('css/logins/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body style="background-image: url({{asset('img/siteImg/colombo.jpg')}})">
<div class="container">
    <div class="login-clean" >
        <form method="post" action="{{ route('login') }}">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-person"></i></div>
            <div class="form-group">
                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="form-group"><button class="button" type="submit">Log In</button></div>

            @if (Route::has('password.request'))
                <a class="forgot" href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
            <a class="forgot" href="{{'register'}}">Need to Register?</a>

        </form>
        <div class="center">

            <div class="flex">
                <div class="sameRow"><a href="{{route('rda.login')}}"><button class="quickbtn" type="submit">RDA</button></a></div>
                <div class="sameRow"><a href="{{route('ins.login')}}"><button class="quickbtn" type="submit">Insurance</button></a></div>
                <div class="sameRow"><a href="{{route('police.login')}}"><button class="quickbtn" type="submit">Police</button></a></div>

            </div>


        </div>
    </div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>
