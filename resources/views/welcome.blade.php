<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome_css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome_css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome_css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body>
<div class="container py-5">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#"><img src="{{asset('img/siteImg/logo1.png')}}" style="width:180px;height:60px;" ></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav mr-auto">

                </ul><span class="navbar-text actions"> <a class="login" href="{{route('login')}}">Log In</a><a class="btn btn-light action-button" role="button" href="{{route('register')}}">Sign Up</a></span></div>
        </div>

    </nav>
    <div class="row">
        <div class="col">

            <div id="map" style="width:100%;height:500px;">
                <div style="width: 1110px; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </div>


        </div>
    </div>
    <br><br><br>
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-title">
                Accident Average
            </div>
            <div class="card-body">
                <div class="col"> <div class="chart-area" style="height:400px;width:800px;padding: 0;padding-top: 16px;padding-right: 0;margin-right: 0px;">
                        <canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;January&quot;,&quot;February&quot;,&quot;March&quot;,&quot;April&quot;,&quot;May&quot;,&quot;June&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:&quot;#4e73df&quot;,&quot;borderColor&quot;:&quot;#4e73df&quot;,&quot;data&quot;:[&quot;{{$accData[0][0]}}&quot;,&quot;{{$accData[0][1]}}&quot;,&quot;{{$accData[0][2]}}&quot;,&quot;{{$accData[0][3]}}&quot;,&quot;{{$accData[0][4]}}&quot;,&quot;{{$accData[0][5]}}&quot;,&quot;15&quot;,&quot;20&quot;],&quot;fill&quot;:true}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>

                </div>
            </div>
        </div>
    <div class="col">

        <div class="card">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-title">
                    Injuries and Casualities
                </div>
                <div class="card-body">
                    <div class="col">    <div class="chart-area" style="height:400px;width:800px;padding: 0;padding-top: 16px;padding-right: 0;margin-left: 0px;"><canvas data-bs-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Deaths&quot;,&quot;backgroundColor&quot;:&quot;#ef2b2d&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;,&quot;borderWidth&quot;:&quot;1&quot;,&quot;data&quot;:[&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;,&quot;98&quot;]},{&quot;label&quot;:&quot;Injuries&quot;,&quot;backgroundColor&quot;:&quot;#f96b07&quot;,&quot;data&quot;:[&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;,&quot;85&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;position&quot;:&quot;top&quot;},&quot;title&quot;:{&quot;display&quot;:false},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;#0080ff&quot;,&quot;zeroLineColor&quot;:&quot;#0080ff&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#141654&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;#0080ff&quot;,&quot;zeroLineColor&quot;:&quot;#0080ff&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#141654&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}]}}}"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col">
    <div class="footer-basic">

    </div>
        </div>
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

    {{--    userDash styles--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/dash/Navigation-with-Button.css')}}">
    <link rel="stylesheet" href="{{asset('css/dash/Footer-Basic.css')}}">
</div>
</body>

</html>
