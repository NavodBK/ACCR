@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row">
            <div class="col">
                <h1 class="text-center"style="width: 100%">Users</h1>
            </div><div class="col">
                <a href="{{route('admin.addUser.submit')}}"><div class="btn btn-dark" style="margin-left: 40%;">Add new users</div></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="4" class="text-center"> <h3>RDA Staff</h3></th>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($staff['rda'] as $rda)
                            <tr>
                                <th scope="row">{{$rda->id}}</th>
                                <td>{{$rda->fName}}</td>
                                <td>{{$rda->lName}}</td>
                                <td>{{$rda->email}}</td>
                            </tr>
                            <p></p>
                        @endforeach
                    <tr>
                    </tbody>
                </table>

            </div>
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="4" class="text-center"> <h3>insuranceStaff</h3></th>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($staff['ins'] as $ins)
                        <tr>
                            <th scope="row">{{$ins->id}}</th>
                            <td>{{$ins->fName}}</td>
                            <td>{{$ins->lName}}</td>
                            <td>{{$ins->email}}</td>
                        </tr>
                        <p></p>

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
            <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="4" class="text-center"> <h3>Police Staff</h3></th>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($staff['police'] as $police)
                            <tr>
                                <th scope="row">{{$police->id}}</th>
                                <td>{{$police->fName}}</td>
                                <td>{{$police->lName}}</td>
                                <td>{{$police->email}}</td>
                            </tr>
                            <p></p>

                        @endforeach
                    </tbody>
                </table>
            </div>
                <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="4" class="text-center"> <h3>Admin Staff</h3></th>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($staff['admin'] as $admin)
                            <tr>
                                <th scope="row">{{$admin->id}}</th>
                                <td>{{$admin->fName}}</td>
                                <td>{{$admin->lName}}</td>
                                <td>{{$admin->email}}</td>
                            </tr>
                            <p></p>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
