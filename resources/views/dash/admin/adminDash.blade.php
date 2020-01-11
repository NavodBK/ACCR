@extends('layouts.dashLayout')
@section('content')
        <body id="page-top">
            <div id="wrapper">
                <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
                    <div class="container-fluid d-flex flex-column p-0">
                        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">

                            <div class="sidebar-brand-text mx-3"><img src={{asset('img/siteImg/logo.png')}} style="width:180px;height:60px;" ></div>
                        </a>
                        <hr class="sidebar-divider my-0">
                        <ul class="nav navbar-nav text-light" id="accordionSidebar">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link " href="{{route('admin.admins')}}"><i class="fas fa-user"></i><span>Admin</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.police')}}"><i class="fas fa-table"></i><span>Police</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.rda')}}"><i class="fas fa-window-maximize"></i><span>RDA</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.ins')}}"><i class="fas fa-window-maximize"></i><span>Insuarance</span></a></li>
                        </ul>
                        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                    </div>
                </nav>

                    <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card shadow border-left-primary py-2">
                                            <div class="card-body">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col mr-2">
                                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Insurance Companies</span></div>
                                                        <div class="text-dark font-weight-bold h5 mb-0"><span>{{$ins}}</span></div>
                                                    </div>
                                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card shadow border-left-success py-2">
                                            <div class="card-body">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col mr-2">
                                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Police Officers</span></div>
                                                        <div class="text-dark font-weight-bold h5 mb-0"><span>{{$police}}</span></div>
                                                    </div>
                                                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card shadow border-left-info py-2">
                                            <div class="card-body">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col mr-2">
                                                        <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>System Administrators</span></div>
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>{{$admin}}</span></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card shadow border-left-warning py-2">
                                            <div class="card-body">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col mr-2">
                                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>RDA Staff</span></div>
                                                        <div class="text-dark font-weight-bold h5 mb-0"><span>{{$rda}}</span></div>
                                                    </div>
                                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card shadow border-left-warning py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col mr-2">
                                                <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Users</span></div>
                                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{$user}}</span></div>
                                            </div>
                                                <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
        </body>
@endsection

