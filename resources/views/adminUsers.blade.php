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
            <li class="nav-item active">
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
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> + Add</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
        <table class="table">
            <thead class="table-dark text-center">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <!-- <th scope="col">Phone</th> -->
                <!-- <th scope="col">Edit</th> -->
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $user)
                <tr>
                <th scope="row">1</th>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <!-- <td><input type="number" id="quantity" name="quantity" value="082138345696" disabled></td> -->
                <!-- <td><button class="edit-btn"><a><i class="fas fa-regular fa-pen"></i></a></button></td> -->
                <td><button class="delete-btn"><a><i class="fas fa-regular fa-trash"></i></a></button></td>
                </tr>
                @endforeach
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