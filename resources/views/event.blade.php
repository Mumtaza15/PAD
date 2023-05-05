@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="event.css">
<link rel="stylesheet" href="navbar.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/home" >Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto active" href="/event">Event</a></li>
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <h1>--Event--</h1>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="input-group mb-3">  
            <input type="text" class="form-control" placeholder="Looking for an event?">
                <div class="input-group-append">
                    <button class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
        </div>
    </div>
    
    <div class="container">
        <div class="card float-left">
            <div class="row ">
                <div class="card float-right">
                <div class="row">
                    <div class="col-sm-5">
                    <img class="d-block w-100" src="https://picsum.photos/150?image=641" height="200px" width="160px" alt="">
                    </div>
                    <div class="col-sm-7">
                    <div class="card-block">
                        <h4 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h4>
                        <a><i class="fas fa-calendar mr-2"></i>24 Maret - 25 Maret 2023</a>
                        <br><br>
                        <a><i class="fas fa-file mr-2"></i>10 projects submitted</a>
                        <br><br>
                        <a href="#" class="btn btn-primary btn-sm float-right">Active</a>
                    </div>
                    <div class="rightView">
                        <p>View</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop