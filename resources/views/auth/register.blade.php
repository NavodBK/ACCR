<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reg_css/reg.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reg_css/styles.css') }}" rel="stylesheet">

</head>

<body>
<div class="register-photo">
    <div class="form-container">
        <div class="image-holder" style="background: url({{asset('img/siteImg/meeting.jpg')}});" ></div>
        <form method="post" action="{{ route('register') }}">
            @csrf
            <h2 class="text-center"><strong>Create</strong> an account.</h2>

            <div class="form-group">
                <input id="fName" class="form-control @error('fName') is-invalid @enderror" type="text" name="fName" placeholder="First Name" required value="{{ old('fName') }}"  autocomplete="fName">
                @error('fName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="lName" class="form-control @error('lName') is-invalid @enderror" type="text" name="lName" placeholder="Last Name" required value="{{ old('lName') }}"  autocomplete="lName">
                @error('lName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required value="{{ old('email') }}"  autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password(repeat)" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="dob" class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" placeholder="DD/MM/YYYY" required value="{{ old('dob') }}"  autocomplete="dob">
                @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="address" class="form-control @error('address') is-invalid @enderror" type="text" name="address" placeholder="Address" required value="{{ old('address') }}"  autocomplete="address">
                @error('address')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="nic" class="form-control @error('nic') is-invalid @enderror" type="text" name="nic" placeholder="NIC No." required value="{{ old('nic') }}"  autocomplete="nic">
                @error('nic')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="dln" class="form-control @error('dln') is-invalid @enderror" type="text" name="dln" placeholder="Driver License No." required value="{{ old('dln') }}"  autocomplete="dln">
                @error('dln')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="phone" class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" placeholder="Contact No." required value="{{ old('phone') }}"  autocomplete="phone">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div>
            <a class="already" href="{{route('login')}}">You already have an account? Login here.</a>
            <a class="already" href="/">Back to Home</a>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
