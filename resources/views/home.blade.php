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
                        <form action="/action_page.php" class="was-validated">
                            <div class="form-group">
                                <label for="firstName">First Name:</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" name="firstName" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name:</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" name="lastName" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="email">E mail:</label>
                                <input type="text" class="form-control" id="email" placeholder="aaa@bbb.xxx" name="email" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" class="form-control" id="dob" name="date" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="identity">NIC / Passport ID:</label>
                                <input type="text" class="form-control" id="identity" placeholder="Enter NIC/ Passport ID" name="identity" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="dLicense">Driving License ID:</label>
                                <input type="text" class="form-control" id="dLicense" placeholder="Enter Driving License ID" name="dLicense" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password (Repeat):</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password (Repeat)" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Insurance Policy Provider:</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter Insurance Policy Provider" name="lastName" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Other:</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter Other" name="lastName" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Insurance Policy ID:</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter Insurance Policy ID" name="lastName" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>




                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
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
                            <h5 class="card-header">Add Vehicle</h5>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="vmaker">Vehicle Manufaturer:</label>
                                    <input type="text" class="form-control" id="vmaker" placeholder="vmaker" name="vmaker" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="vmodel">Model:</label>
                                    <input type="text" class="form-control" id="vmodel" placeholder="Enter Vehicle Model" name="vmodel" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="rnumbe">Registration Number:</label>
                                    <input type="text" class="form-control" id="rnumber" placeholder="aaa@bbb.xxx" name="rnumbe" required>
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
                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="rnumbe">Insurance ID:</label>
                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="rnumbe">Insurance Package:</label>
                                    <input type="text" class="form-control" id="color" placeholder="aaa@bbb.xxx" name="color" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Vehicle</button>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header">My Vehicles</h5>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="submit" class="btn btn-primary">Remove</button>
                            </div>
                        </div>
                    </div>

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
