@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm">
                Graph
            </div>
            <div class="col-sm">
                Graph
            </div>
            <div class="col-sm">
                Graph
            </div>
        </div>
        <div class="row">
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
    </div>
    </div>

@endsection
