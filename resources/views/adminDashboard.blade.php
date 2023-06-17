@extends('Template/layoutAdmin')

@section('css')
<link href="dashboard.css" rel="stylesheet">
@stop

@section('navbar')
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/adminDashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Events -->
            <li class="nav-item">
                <a class="nav-link" href="/adminEvents">
                    <i class="fas fa-solid fa-calendar"></i>
                    <span>Events</span></a>
            </li>

            <!-- Nav Item - Projects -->
            <li class="nav-item">
                <a class="nav-link" href="/adminProjects">
                    <i class="fas fa-solid fa-laptop"></i>
                    <span>Projects</span></a>
            </li>

            <!-- Nav Item - Users -->
            <li class="nav-item">
                <a class="nav-link" href="adminUsers">
                    <i class="fas fa-solid fa-user"></i>
                    <span>Users</span></a>
            </li>
            
            <!-- Nav Item - Approval -->
            <li class="nav-item">
                <a class="nav-link" href="/adminApproval">
                <i class="fas fa-solid fa-user-check"></i>
                    <span>Approval</span></a>
            </li>
@stop

@section('content')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<br>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Events</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $events->count('id') }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Projects</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $projects->count('id') }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-laptop fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users->count('id') }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary" style="color:white;">Approval Overview</h6>
                        <!-- <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div> -->
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="card mb-2">
                            <div class="row m-2">
                                <div class="card-body col-md-8">
                                    <h3>PortalBuku</h3>
                                    <span>by <a>4one</a>
                                    </span>
                                </div>
                                <div class="card-body col-md-4 d-flex flex-row-reverse">
                                    <center>
                                    <br>
                                    <!-- <a href="#" class="accept">Accept <span class="fa fa-check"></span></a> -->
                                    <a href="#" class="accept">Accept</a>
                                    <a href="#" class="deny">Decline</a>
                                    </center>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop