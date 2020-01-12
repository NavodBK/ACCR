@extends('layouts.dashLayout')

@section('content')
    <div class="container">

        <div class="container py-5">
            <div class="p-5 bg-white rounded shadow mb-5">

                <!-- Bordered tabs-->
                <ul id="myTab1" role="tablist" class="nav nav-tabs nav-pills with-arrow flex-column flex-sm-row text-center">
                    <li class="nav-item flex-sm-fill">
                        <a id="contact1-tab" data-toggle="tab" href="#dprofile" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">My Profile</a>
                    </li>

                    <li class="nav-item flex-sm-fill">
                        <a id="contact1-tab" data-toggle="tab" href="#vehicle" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">Vehicles</a>
                    </li>

                    <li class="nav-item flex-sm-fill">
                        <a id="contact1-tab" data-toggle="tab" href="#report" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">Report</a>
                    </li>

                    <li class="nav-item flex-sm-fill">
                        <a id="contact1-tab" data-toggle="tab" href="#record" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">Records</a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                        <a id="contact1-tab" data-toggle="tab" href="#claim" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">Claims</a>
                    </li>



                </ul>
                <div id="myTab1Content" class="tab-content">
                    <div id="dprofile" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
                        <div class="container">
                            <p>Change or update your profile</p>
                            <form action="{{route('user.update')}}" method="post" class="was-validated">
                                @csrf
                                <div class="form-group">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" name="fName" value="{{$user->fName}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" name="lName" value="{{$user->lName}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="email">E mail:</label>
                                    <input type="text" class="form-control" id="email" placeholder="aaa@bbb.xxx" name="email" value="{{$user->email}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{$user->address}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" id="dob" name="date" value="{{$user->dob}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="identity">NIC / Passport ID:</label>
                                    <input type="text" class="form-control" id="identity" placeholder="Enter NIC/ Passport ID" name="nic" value="{{$user->nic}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="dLicense">Driving License ID:</label>
                                    <input type="text" class="form-control" id="dLicense" placeholder="Enter Driving License ID" name="dln" value="{{$user->dln}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" required> I agree on terms and conditions.
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>



                    </div>
                    <div id="vehicle" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                        <div class="container">
                            <div class="card">
                                <form action="{{route('vehicle.store')}}" method="post">
                                    @csrf
                                <h5 class="card-header">Add Vehicle</h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="vmaker">Vehicle Type:</label>
                                        <br>

                                        <select class="form-control" name="type">
                                            <option value="Car">Car</option>
                                            <option value="Bicycle">Bicycle</option>
                                            <option value="Bike">Bike</option>
                                            <option value="Van">Van</option>
                                            <option value="SUV">SUV</option>
                                            <option value="Lorry">Lorry</option>
                                            <option value="Bus">Bus</option>
                                            <option value="Other">Other</option>
                                        </select>

                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="vmaker">Vehicle Manufaturer:</label>
                                        <input type="text" class="form-control" id="vmaker" placeholder="vmaker" name="manufac" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="vmodel">Model:</label>
                                        <input type="text" class="form-control" id="vmodel" placeholder="Enter Vehicle Model" name="model" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rnumbe">Registration Number:</label>
                                        <input type="text" class="form-control" id="rnumber" placeholder="aaa@bbb.xxx" name="regNum" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rnumbe">Color:</label>
                                        <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rnumbe">Insurance Provider:</label>
                                        <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="insProvider" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rnumbe">Insurance ID:</label>
                                        <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="insPNo" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add Vehicle</button>
                                </div>
                                </form>
                                </div>
                            </div>

                            <div class="card">
                                <h5 class="card-header" style="margin-top: 20px;">My Vehicles</h5>
                                <div class="card-body">
                                    @foreach($vehicles as $vehicle)
                                        <form action="{{route('vehicle.store')}}" method="post">
                                            @csrf
                                            <h5 class="card-header" style="margin-top: 20px;">{{$vehicle->regNum}}</h5>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="vmaker">Vehicle Type:</label>
                                                    <br>
                                                    <select class="form-control" name="type" >
                                                        <option value="Car" selected>Car</option>
                                                        <option value="Bike">Bike</option>
                                                        <option value="Van">Van</option>
                                                        <option value="SUV">SUV</option>
                                                        <option value="Lorry">Lorry</option>
                                                        <option value="Bus">Bus</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="vmaker">Vehicle Manufaturer:</label>
                                                    <input type="text" class="form-control" id="vmaker" placeholder="vmaker" name="manufac" required value="{{$vehicle->manufac}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="vmodel">Model:</label>
                                                    <input type="text" class="form-control" id="vmodel" placeholder="Enter Vehicle Model" name="model" required value="{{$vehicle->model}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rnumbe">Registration Number:</label>
                                                    <input type="text" class="form-control" id="rnumber" placeholder="aaa@bbb.xxx" name="regNum" required value="{{$vehicle->regNum}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rnumbe">Color:</label>
                                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required value="{{$vehicle->color}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rnumbe">Insurance Provider:</label>
                                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="insProvider" required value="{{$vehicle->insProvider}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rnumbe">Insurance ID:</label>
                                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="insPNo" required value="{{$vehicle->insPNo}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update</button>

                                            </div>
                                        </form>
                                        <form action="{{route('vehicle.delete')}}" method="post">
                                            @csrf
                                            <input type="text" name="id" hidden value="{{$vehicle->id}}">
                                            <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                    <div id="report" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">


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

                        <div class="container">


                            <form action="/action_page.php" class="was-validated">
                                <div class="form-group">
                                    <label for="rnumbe">Vehicle ID:</label>
                                    <select class="form-control" required >
                                        <option value="Car">CBA-2356</option>
                                        <option value="Bicycle">PB-8799</option>
                                        <option value="Bike">64-8952</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>

                                </div>
                                <div class="form-group">
                                    <label for="rnumbe">Date and Time:</label>
                                    <input type="datetime-local" class="form-control" id="color"name="color" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="rnumbe">Accident Type:</label>
                                    <select class="form-control" required>
                                        <option value="Car">Vehicle Rollover</option>
                                        <option value="Bicycle">Single Car Accident</option>
                                        <option value="Bike">Rear End Collision</option>
                                        <option value="Van">Side Impact Collision</option>
                                        <option value="SUV">Head on Collision</option>

                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="uname">Casulalities:</label>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            Injured <input type="text" class="form-control" id="color" placeholder="Vehicle ID" name="color" >

                                        </label>
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            Death <input type="text" class="form-control" id="color" placeholder="Vehicle ID" name="color" >

                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rnumbe">No of vehicles involved:</label>
                                    <input type="text" class="form-control" id="rnumber" placeholder="aaa@bbb.xxx" name="rnumbe" >
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="addinformation">Additional Information:</label>
                                    <textarea class="form-control" rows="5" id="addinformation"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Attachment(s) (Attach multiple files.)
                                    </label>
                                    <div class="col-sm-9">
                            <span class="btn btn-default btn-file">
                                <input id="input-2" name="input2[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                            </span>
                                    </div>

                                </div>


                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" required> I agree on Terms and Conditions.
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Report Accident</button><button type="reset" class="btn btn-danger" style="margin-left:10px;;">Reset</button>
                            </form>
                        </div>

                    </div>
                    <div id="record" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
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

                    <div id="claim" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">

                        <div class="form group">
                            <label for="rnumbe">Select Car :</label>
                            <select class="form-control" required>
                                <option value="Car">CBB-9755</option>
                                <option value="Bicycle">Single Car Accident</option>
                                <option value="Bike">Rear End Collision</option>
                                <option value="Van">Side Impact Collision</option>
                                <option value="SUV">Head on Collision</option>

                            </select>
                        </div>

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
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
@endsection
