@extends('Template/layoutAdmin')

@section('css')
<link href="dashboard.css" rel="stylesheet">
@stop

@section('navbar')
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/adminDashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Events -->
            <li class="nav-item active">
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
                <a class="nav-link" href="/adminUsers">
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
            <h1 class="h3 mb-0 text-gray-800">Events</h1>
            <a href="/adminAddEvent" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> + Add</a>
        </div>

        <!-- Content Row -->
        <div class="row">
        <table class="table">
            <thead class="table-dark text-center">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                <th scope="row">1</th>
                <td><img src="register.jpg" width="250" height="120"></td>
                <td>PortalBuku</td>
                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Quod harum officiis commodi nihil, inventore repellat aliquid eius, 
                    earum repudiandae omnis cumque laboriosam quia quidem ipsam amet dolores! Beatae, est natus.
                </td>
                <td><input type="date" value="2017-06-01" disabled/></td>
                <td><input type="date" value="2018-06-01" disabled/></td>
                <td><button type="button" class="btn" style="color:white;background-color:#0C003F;">Review</button></td>
                <td><button class="edit-btn"><a><i class="fas fa-regular fa-pen"></i></a></button></td>
                <td><button class="delete-btn"><a><i class="fas fa-regular fa-trash"></i></a></button></td>
                </tr>

                <tr>
                <th scope="row">2</th>
                <td>
                    <!-- dibuat formatnya begini: https://www.youtube.com/embed/(nama_token) -->
                    <iframe src="https://www.youtube.com/embed/fKRtnMYMW08"></iframe>
                </td>
                <td>PortalBuku</td>
                <td>4one</td>
                <td><button type="button" class="btn" style="color:white;background-color:#0C003F;">Review</button> <button type="button" class="btn" style="color:white;background-color:#15C0A4;">Accept</button> <button type="button" class="btn btn-danger">Decline</button>
                </tr>

                <tr>
                <th scope="row">3</th>
                <td>
                    <!-- dibuat formatnya begini: https://www.youtube.com/embed/(nama_token) -->
                    <iframe src="https://www.youtube.com/embed/fKRtnMYMW08"></iframe>
                </td>
                <td>PortalBuku</td>
                <td>4one</td>
                <td><button type="button" class="btn" style="color:white;background-color:#0C003F;">Review</button> <button type="button" class="btn" style="color:white;background-color:#15C0A4;">Accept</button> <button type="button" class="btn btn-danger">Decline</button>
                </tr>
                
            </tbody>
        </table>
        </div>
        </div>


@stop

@section('js')
<script>
window.scrollTo(0, document.body.scrollHeight);
</script>
<!-- <script src="navbar.js"></script> -->
@stop