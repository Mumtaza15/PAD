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
            <h1 class="h3 mb-0 text-gray-800">Add Event</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> + Add</a> -->
        </div>

        <!-- Content Row -->
        <div class="m-4">
        <!-- <div class="row m-4"> -->
        <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="form-group row">
                <label for="inputName" class="col-sm-6 col-form-label">Event Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="event_name" placeholder="Insert event name here">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputDescription" class="col-sm-6 col-form-label">Description</label>
                <div class="col-sm-6">
                <textarea name="description" rows="4" class="form-control">Insert event description here</textarea>
                </div>
            </div>

            <!-- <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-6 col-form-label">Status</label>
                <div class="col-sm-6">
                    <div class="custom_select">
                        <select name="status_event" style="padding: 6px;" disabled>
                            <option value="submission" selected>Submission</option>
                            <option value="active">Active</option>
                            <option value="finished">Finished</option>
                        </select>
                    </div>
                </div>
            </div> -->

            <div class="form-group row">
                <label for="inputDate" class="col-sm-6 col-form-label">Submission Dates</label>

                <div class="col-sm-3">
                <input name="submission_start" required="" type="datetime-local" class="form-control" placeholder="Insert start date" onfocus="(this.type='datetime-local')"/>
                </div>

                <div class="col-sm-3">
                <input name="submission_end" required="" type="datetime-local" class="form-control" placeholder="Insert end date" onfocus="(this.type='datetime-local')"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputDate" class="col-sm-6 col-form-label">Event Dates</label>

                <div class="col-sm-3">
                <input name="vote_start" required="" type="date" class="form-control" placeholder="Insert start date" onfocus="(this.type='date')"/>
                </div>

                <div class="col-sm-3">
                <input name="vote_end" required="" type="date" class="form-control" placeholder="Insert end date" onfocus="(this.type='date')"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPicture" class="col-sm-6 col-form-label">Event Picture</label>
                <div class="col-sm-6 mb-3">
                    <input class="form-control form-control-sm" name="event_picture" type="file">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-6 col-form-label"></label>
                <div class="col-sm-6 mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-sm btn-primary shadow-sm"> Add</button>
                </div>
            </div>
            
        </form>
        </div>

    </div>




@stop

@section('js')
<script>
window.scrollTo(0, document.body.scrollHeight);
</script>
<!-- <script src="navbar.js"></script> -->
@stop