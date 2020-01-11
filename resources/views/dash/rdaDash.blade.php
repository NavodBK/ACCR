@extends('layouts.dashLayout')

@section('content')


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
                    <a id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">Drivers</a>
                </li>
            </ul>
            <div id="myTab1Content" class="tab-content">
                <div id="home1" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">

                    <div id="googleMap" style="width:100%;height:400px;"></div>

                    <script>

                        function myMap() {
                            var mapProp= {
                                center:new google.maps.LatLng(51.508742,-0.120850),
                                zoom:5,
                            };
                            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmDQvaGFw0yJ3O52ne38tcxnuR9IW97rs&callback=myMap"></script>



                </div>

                <div id="profile1" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <div class="card-body">
                                    This is some text within a card body.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card shadow p-3 mb-5 bg-white rounded">
                                    <div class="card-body">
                                        This is some text within a card body.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <div class="card-body">
                                    This is some text within a card body.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card shadow p-3 mb-5 bg-white rounded">
                                    <div class="card-body">
                                        This is some text within a card body.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contact1" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">



                </div>
            </div>
            <!-- End bordered tabs -->
        </div>

        <div class="footer-basic">
            <footer>

                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Company Name © 2017</p>
            </footer>

        </div>

    </div>



@endsection
