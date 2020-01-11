@extends('layouts.dashLayout')

@section('content')
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
                        <form method="post" action="{{route('user.update')}}" class="was-validated">
                            @csrf
                            <div class="form-group">
                                <label for="firstName">First Name:</label>
                                <input type="text" class="form-control" id="fName"  name="fName" required value="{{$user['fName']}}">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name:</label>
                                <input type="text" class="form-control" id="lName"  name="lName" required value="{{$user['lName']}}">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="Phone">Phone number</label>
                                <input type="text" class="form-control" id="phone"  name="phone" required value="{{$user['phone']}}">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="email">E mail:</label>
                                <input type="email" class="form-control" id="email"  name="email" required value="{{$user['email']}}">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="address"  name="address" required value="{{$user['address']}}">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" class="form-control" id="dob" name="dob" required value="{{$user['dob']}}">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="identity">NIC / Passport ID:</label>
                                <input type="text" class="form-control" id="nic" name="nic" required value="{{$user['nic']}}">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="dLicense">Driving License ID:</label>
                                <input type="text" class="form-control" id="dln"  name="dln" required value="{{$user['dln']}}">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="pwd">Password:</label>--}}
{{--                                <input type="password" class="form-control" id="pwd"  name="pswd" required>--}}
{{--                                <div class="valid-feedback">Valid.</div>--}}
{{--                                <div class="invalid-feedback">Please fill out this field.</div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="pwd">Password (Repeat):</label>--}}
{{--                                <input type="password" class="form-control" id="pwd"  name="pswd" required>--}}
{{--                                <div class="valid-feedback">Valid.</div>--}}
{{--                                <div class="invalid-feedback">Please fill out this field.</div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="lastName">Insurance Policy Provider:</label>--}}
{{--                                <input type="text" class="form-control" id="lastName"  name="lastName" required>--}}
{{--                                <div class="valid-feedback">Valid.</div>--}}
{{--                                <div class="invalid-feedback">Please fill out this field.</div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="lastName">Other:</label>--}}
{{--                                <input type="text" class="form-control" id="lastName"  name="lastName" required>--}}
{{--                                <div class="valid-feedback">Valid.</div>--}}
{{--                                <div class="invalid-feedback">Please fill out this field.</div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="lastName">Insurance Policy ID:</label>--}}
{{--                                <input type="text" class="form-control" id="lastName"  name="lastName" required>--}}
{{--                                <div class="valid-feedback">Valid.</div>--}}
{{--                                <div class="invalid-feedback">Please fill out this field.</div>--}}
{{--                            </div>--}}




                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>



                </div>
                <div id="vehicle" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                    <div class="container">
                        <div class="card">
                            <h5 class="card-header">Add Vehicle</h5>
                            <div class="card-body">
                                <form method="post" action="{{route('vehicle.store')}}" class="was-validated">
                                    @csrf
                                    <div class="form-group">
                                        <label for="manufac">Vehicle Manufaturer:</label>
                                        <input type="text" class="form-control" id="manufac" placeholder="vmaker" name="manufac" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model:</label>
                                        <input type="text" class="form-control" id="model" placeholder="Enter Vehicle Model" name="model" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="regNum">Registration Number:</label>
                                        <input type="text" class="form-control" id="regNum" placeholder="aaa@bbb.xxx" name="regNum" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="color">Color:</label>
                                        <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="insProvider">Insurance Provider:</label>
                                        <input type="text" class="form-control" id="insProvider" placeholder="aaa@bbb.xxx" name="insProvider" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="insPNo">Insurance ID:</label>
                                        <input type="text" class="form-control" id="insPNo" placeholder="aaa@bbb.xxx" name="insPNo" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                <button type="submit" class="btn btn-primary">Add Vehicle</button>
                                </form>
                            </div>
                        </div>


                        <div class="card" style="margin-top: 20px;">
                            <h5 class="card-header">My Vehicles</h5>
                            @foreach($vehicles as $vehicle)
                                <div class="container " style="margin-top:10px; margin-bottom: 10px;">
                                    <div class="card">
                                        <h5 class="card-header" >{{$vehicle['regNum']}}</h5>
                                        <div class="card-body">
                                            <form method="post" action="user/vehicle/update">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="vmaker">Vehicle Manufaturer:</label>
                                                    <input type="text" class="form-control" id="vmaker"  name="vmaker" required value="{{$vehicle['manufac']}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="vmodel">Model:</label>
                                                    <input type="text" class="form-control" id="vmodel" placeholder="Enter Vehicle Model" name="vmodel" required value="{{$vehicle['model']}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rnumbe">Registration Number:</label>
                                                    <input type="text" class="form-control" id="rnumber" placeholder="aaa@bbb.xxx" name="rnumbe" required value="{{$vehicle['regNum']}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rnumbe">Color:</label>
                                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required value="{{$vehicle['color']}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rnumbe">Insurance Provider:</label>
                                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required value="{{$vehicle['insProvider']}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rnumbe">Insurance ID:</label>
                                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required value="{{$vehicle['insPNo']}}">
                                                    <div class="valid-feedback">Valid.</div>
                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>

                                            </form>


                                        </div>
                                    </div>
                                </div>
                                    @endforeach

                        </div>




                <div id="report" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">


                    <div id="googleMap" style="width:100%;height:400px;"></div>

                    <script>

                        function myMap() {
                            var mapProp = {
                                center: new google.maps.LatLng(51.508742, -0.120850),
                                zoom: 5,
                            };
                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                        }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmDQvaGFw0yJ3O52ne38tcxnuR9IW97rs&callback=myMap"></script>

                    <div class="container">

                        <form action="/action_page.php" class="was-validated">
                            <div class="form-group">
                                <label for="uname">Casulalities:</label>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Injured

                                    </label>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Death

                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="addinformation">Additional Information:</label>
                                <textarea class="form-control" rows="5" id="addinformation"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Attachment(s)
                                    (Attach multiple files.)
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
                            <button type="submit" class="btn btn-primary">Report Accident</button>
                        </form>
                    </div>

                </div>
                <div id="record" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                    <div class="container">

                        <table class="table table-light table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Invalid</td>
                                <td>Invalid</td>
                                <td>Invalid</td>
                            </tr>
                            <tr>
                                <td>Invalid</td>
                                <td>Invalid</td>
                                <td>Invalid</td>
                            </tr>
                            <tr>
                                <td>Invalid</td>
                                <td>Invalid</td>
                                <td>Invalid</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>







                </div>
                <div id="claim" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">








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
@endsection
