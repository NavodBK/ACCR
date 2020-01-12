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
                    <li class="nav-item flex-sm-fill">
                        <a id="conversation-tab" data-toggle="tab" href="#conversation" role="tab" aria-controls="conversation" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">conversation</a>
                    </li>
                </ul>
                <div id="myTab1Content" class="tab-content">
                    <div id="home1" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">

                        <div id="map" style="width:100%;height:400px;"></div>

                        <script>

                            function myMap() {

                                var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                                var myCenter = new google.maps.LatLng(6.9271, 79.8612);
                                var mapCanvas = document.getElementById("map");
                                var mapOptions = {center: myCenter, zoom: 16};
                                var map = new google.maps.Map(mapCanvas, mapOptions);
                                var marker = new google.maps.Marker({position:myCenter});
                                marker.setMap(map);
                            }
                        </script>

                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmDQvaGFw0yJ3O52ne38tcxnuR9IW97rs&callback=myMap"></script>



                    </div>

                    <div id="profile1" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
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
                    <div id="contact1" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
                        <div class="container">

                            <table class="table table-light table-hover">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Vehicle ID</th>
                                    <th>Location</th>
                                    <th>Description</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>01/15/2020 04:08 PM
                                    </td>
                                    <td>CAA-9856</td>
                                    <td>Kurana Rd,N </td>
                                    <td></td>
                                    <td>Unconfirmed</td>
                                </tr>
                                <tr>
                                    <td>12/21/2019 12:50 PM
                                    </td>
                                    <td>PB-7856</td>
                                    <td>HighLevel rd, </td>
                                    <td></td>
                                    <td>Confirmed</td>
                                </tr>
                                <tr>
                                    <td>10/30/2019 09:45 AM
                                    </td>
                                    <td>CBB-9755</td>
                                    <td>Kawatayama,</td>
                                    <td>Need Police Immediately</td>
                                    <td>Confirmed</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div id="conversation" role="tabpanel" aria-labelledby="conversation-tab" class="tab-pane fade px-4 py-5">
                        <div class="container">
                            <button class="open-button" onclick="openForm()">Chat</button>

                            <div class="chat-popup" id="myForm">
                                <form action="/action_page.php" class="form-container">


                                    <label for="msg"><b>Message</b></label>
                                    <textarea placeholder="Type message.." name="msg" required></textarea>

                                    <button type="submit" class="btn">Send</button>
                                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                </form>
                            </div>

                            <script>
                                function openForm() {
                                    document.getElementById("myForm").style.display = "block";
                                }

                                function closeForm() {
                                    document.getElementById("myForm").style.display = "none";
                                }
                            </script>


                        </div>
                    </div>
                    <!-- End bordered tabs -->
                </div>

                <div class="footer-basic">
                    <footer>

                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Home</a></li>

                            <li class="list-inline-item"><a href="#">About</a></li>
                            <li class="list-inline-item"><a href="#">Terms</a></li>
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        </ul>
                        <p class="copyright">TARS © 2020 Powered by Government of Sri Lanka </p>
                    </footer>

                </div>

            </div>


@endsection
