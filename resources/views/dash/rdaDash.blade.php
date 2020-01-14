@extends('layouts.dashLayout')
@section('content')
    <div class="container">



        <div class="container py-5">
            <div class="p-5 bg-white rounded shadow mb-5">


                <!-- Bordered tabs-->
                <ul id="myTab1" role="tablist" class="nav nav-tabs nav-pills with-arrow flex-column flex-sm-row text-center">
                    <li class="nav-item flex-sm-fill">
                        <a id="home1-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 border active">Map</a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                        <a id="profile1-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 border">Analys</a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                        <a id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">Complaints</a>
                    </li>
                </ul>
                <div id="myTab1Content" class="tab-content">
                    <div id="home1" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">



                        <div id="map" style="width:100%;height:400px;">
                            <div style="width: 900px; height: 500px;">
                                {!! Mapper::render() !!}
                            </div>
                        </div>
                        @foreach($reports as $report)
                            @if($report->confirm == false)
                                    <div class="card">
                                        {{$url = $report->url}}
                                        <img class="card-img-top" src="{{asset('img/report/'.'/'.$url)}}" alt="Card image">
                                        <div class="card-header">{{$report->regNum}}</div>
                                        <div class="card-body" style = "width:100%">
                                            <p>{{$report->info}}</p>
                                            <p>{{$report->driverId}}</p>
                                            <p>{{$report->dnt}}</p>
                                            <p>{{$report->type}}</p>
                                            <p>{{$report->injured}}</p>
                                            <p>{{$report->death}}</p>
                                            <p>{{$report->numOfVehicle}}</p>

                                        </div>
                                    </div>
                           @endif
                        @endforeach
                    </div>
                    <div id="profile1" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                        <div class="row">
                            <div class="col">
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

{{--                                    <div class="card">--}}
{{--                                        <div class="card shadow p-3 mb-5 bg-white rounded">--}}
{{--                                            <div class="card-title">--}}
{{--                                                Injuries and Casualities--}}
{{--                                            </div>--}}
{{--                                            <div class="card-body">--}}
{{--                                                <div class="col">    <div class="chart-area" style="height:400px;width:800px;padding: 0;padding-top: 16px;padding-right: 0;margin-left: 0px;"><canvas data-bs-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Deaths&quot;,&quot;backgroundColor&quot;:&quot;#ef2b2d&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;,&quot;borderWidth&quot;:&quot;1&quot;,&quot;data&quot;:[&quot;{{$accCasual[0][0][0][0]}}&quot;,&quot;{{$accCasual[0][1][0]['death']}}&quot;,&quot;{{$accCasual[0][2][0]['death']}}&quot;,&quot;{{$accCasual[0][3][0]['death']}}&quot;,&quot;{{$accCasual[0][4][0]['death']}}&quot;,&quot;{{$accCasual[0][5][0]['death']}}&quot;,&quot;{{$accCasual[0][6][0]['death']}}&quot;,&quot;{{$accCasual[0][7][0]['death']}}&quot;,&quot;{{$accCasual[0][8][0]['death']}}&quot;,&quot;{{$accCasual[0][9][0]['death']}}&quot;,&quot;{{$accCasual[0][11][0]['death']}}&quot;,&quot;{{$accCasual[0][11][0]['death']}}&quot;]},{&quot;label&quot;:&quot;Injuries&quot;,&quot;backgroundColor&quot;:&quot;#f96b07&quot;,&quot;data&quot;:[&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;,&quot;{{$accCasual[0][0][0]['injured']}}&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;position&quot;:&quot;top&quot;},&quot;title&quot;:{&quot;display&quot;:false},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;#0080ff&quot;,&quot;zeroLineColor&quot;:&quot;#0080ff&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#141654&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;#0080ff&quot;,&quot;zeroLineColor&quot;:&quot;#0080ff&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#141654&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}]}}}"></canvas></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

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
                    <div id="contact1" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
                        <div class="container">

                            <table class="table table-light table-hover">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Vehicle ID</th>
                                    <th>Description</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reports as $report)
                                    @if($report->confirm == true)
                                <tr>
                                    <td>{{$report->dnt}}</td>
                                    <td>{{$report->regNum}}</td>
                                    <td>{{$report->info}}</td>
                                    <td>Unconfirmed</td>
                                </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>
                <!-- End bordered tabs -->
            </div>

            <div class="footer-basic">
                <footer>

                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Home</a></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><a href="#">Terms</a></li>
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p class="copyright">TARS © 2020 Powered by Government of Sri Lanka </p>
                </footer>

            </div>

        </div>
@endsection
