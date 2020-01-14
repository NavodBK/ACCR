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
        <div class="container"><a class="navbar-brand" href="#"><img src="{{asset('img/siteImg/logo.png')}}" style="width:180px;height:60px;" ></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
    <br><br><br>
    <div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-title">
                        Accident Average
                    </div>
                    <div class="card-body">
                        <div class="col"> <div class="chart-area" style="height:400px;width:800px;padding: 0;padding-top: 16px;padding-right: 0;margin-right: 0px;"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;January&quot;,&quot;February&quot;,&quot;March&quot;,&quot;April&quot;,&quot;May&quot;,&quot;June&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:&quot;#4e73df&quot;,&quot;borderColor&quot;:&quot;#4e73df&quot;,&quot;data&quot;:[&quot;65&quot;,&quot;65&quot;,&quot;64&quot;,&quot;65&quot;,&quot;67&quot;,&quot;67&quot;,&quot;68&quot;],&quot;fill&quot;:true}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>

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
                                <div class="col">    <div class="chart-area" style="height:400px;width:800px;padding: 0;padding-top: 16px;padding-right: 0;margin-left: 0px;"><canvas data-bs-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Deaths&quot;,&quot;backgroundColor&quot;:&quot;#ef2b2d&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;,&quot;borderWidth&quot;:&quot;1&quot;,&quot;data&quot;:[&quot;12&quot;,&quot;15&quot;,&quot;11&quot;,&quot;14&quot;,&quot;10&quot;,&quot;15&quot;,&quot;8&quot;,&quot;9&quot;,&quot;12&quot;,&quot;8&quot;,&quot;12&quot;,&quot;10&quot;]},{&quot;label&quot;:&quot;Injuries&quot;,&quot;backgroundColor&quot;:&quot;#f96b07&quot;,&quot;data&quot;:[&quot;15&quot;,&quot;25&quot;,&quot;16&quot;,&quot;17&quot;,&quot;20&quot;,&quot;23&quot;,&quot;15&quot;,&quot;16&quot;,&quot;18&quot;,&quot;23&quot;,&quot;22&quot;,&quot;16&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;position&quot;:&quot;top&quot;},&quot;title&quot;:{&quot;display&quot;:false},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;#0080ff&quot;,&quot;zeroLineColor&quot;:&quot;#0080ff&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#141654&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;#0080ff&quot;,&quot;zeroLineColor&quot;:&quot;#0080ff&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#141654&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <div class="card-title">
                                    Vehicle Type Average
                                </div>
                                <div class="card-body">
                                    <div class="chart-area" style="height:400px;width:800px;padding: 0;padding-top: 16px;padding-right: 0;margin-right: 0px;"><canvas data-bs-chart="{&quot;type&quot;:&quot;pie&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Bike&quot;,&quot;Car&quot;,&quot;Bus&quot;,&quot;Lorry&quot;,&quot;Van&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:[&quot;#0051ba&quot;,&quot;#e8112d&quot;,&quot;#fca311&quot;,&quot;#1eb53a&quot;,&quot;#60330a&quot;],&quot;borderColor&quot;:[&quot;#4e73df&quot;,&quot;#4e73df&quot;,&quot;#4e73df&quot;,&quot;#4e73df&quot;,&quot;#4e73df&quot;],&quot;data&quot;:[&quot;60&quot;,&quot;98&quot;,&quot;89&quot;,&quot;75&quot;,&quot;50&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:true,&quot;reverse&quot;:false},&quot;title&quot;:{&quot;display&quot;:false}}}"></canvas></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>




    </div>
    <div class="footer-basic">
        <footer>

            <ul class="list-inline">
                <li class="list-inline-item"><a href="home.html" target="_blank">Home</a></li>
                <li class="list-inline-item"><a href="home.html" target="_blank">Contact</a></li>
                <li class="list-inline-item"><a href="about.html" target="_blank">About</a></li>
                <li class="list-inline-item"><a href="terms.html" target="_blank">Terms</a></li>
                <li class="list-inline-item"><a href="privacypolicy.html" target="_blank">Privacy Policy</a></li>
            </ul>
            <p class="copyright">TARS © 2020 Powered by Government of Sri Lanka </p>
        </footer>
    </div>
    <script
        src="assets/js/jquery.min.js">

    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
