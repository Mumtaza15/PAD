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

    <!-- <div class="container">
        <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="register.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-6">
            <div class="card-body">
                <h1 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h1>
                <p class="card-text"><a><i class="fas fa-calendar mr-2"></i>  24 Maret - 25 Maret 2023</a></p>
                <p class="card-text"><a><i class="fas fa-file mr-2"></i>  10 projects submitted</a></p>
                <button>Active</button>
            </div>
            </div>
            <div class="col-md-2 rightView">
                <p>View</p>
            </div>
        </div>
        </div>
    </div> -->

    <div class="wrapper">
      <div class="container-lg main">
        <div class="row">
          <div class="col-md-4 img-left">
            <!-- Ini Foto -->
            <!-- <img src="login.png" alt=""> -->
          </div>

          <div class="col-sm-7 right">
            <!-- <div class="input-box"> -->
            <div class="card-body">
                <h4 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h4>
                <p class="card-text"><a><i class="fas fa-calendar mr-2"></i>  24 Maret - 25 Maret 2023</a></p>
                <p class="card-text"><a><i class="fas fa-file mr-2"></i>  10 projects submitted</a></p>
                <button>Active</button>
            </div>
            <!-- </div> -->
          </div>

        <div class="col-md-1 viewDetail">
            <a href="/detailEvent" class="goDetail">View</a>
            <!-- <p>View<a href="/home" style="color: ##15C0A4">website</a>.</p> -->
        </div>

        </div>
      </div>
    </div>
    
    <div class="wrapper">
      <div class="container-lg main">
        <div class="row">
          <div class="col-md-4 img-left">
            <!-- Ini Foto -->
            <!-- <img src="login.png" alt=""> -->
          </div>

          <div class="col-sm-7 right">
            <!-- <div class="input-box"> -->
            <div class="card-body">
                <h4 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h4>
                <p class="card-text"><a><i class="fas fa-calendar mr-2"></i>  24 Maret - 25 Maret 2023</a></p>
                <p class="card-text"><a><i class="fas fa-file mr-2"></i>  10 projects submitted</a></p>
                <button>Active</button>
            </div>
            <!-- </div> -->
          </div>

        <div class="col-md-1 viewDetail">
            <a href="/detailEvent" class="goDetail">View</a>
            <!-- <p>View<a href="/home" style="color: ##15C0A4">website</a>.</p> -->
        </div>

        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="container-lg main">
        <div class="row">
          <div class="col-md-4 img-left">
            <!-- Ini Foto -->
            <!-- <img src="login.png" alt=""> -->
          </div>

          <div class="col-sm-7 right">
            <!-- <div class="input-box"> -->
            <div class="card-body">
                <h4 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h4>
                <p class="card-text"><a><i class="fas fa-calendar mr-2"></i>  24 Maret - 25 Maret 2023</a></p>
                <p class="card-text"><a><i class="fas fa-file mr-2"></i>  10 projects submitted</a></p>
                <button>Active</button>
            </div>
            <!-- </div> -->
          </div>

        <div class="col-md-1 viewDetail">
            <a href="/detailEvent" class="goDetail">View</a>
            <!-- <p>View<a href="/home" style="color: ##15C0A4">website</a>.</p> -->
        </div>

        </div>
      </div>
    </div>

    <!-- <div class="wrapper">
      <div class="container-lg main">
        <div class="card float-left">
            <div class="row ">
                <div class="card float-right">
                <div class="row">
                    <div class="col-sm-5">
                    <img class="d-block mw-100" src="register.jpg" alt="">
                    </div>
                    <div class="col-sm-5">
                    <div class="card-block">
                        <h4 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h4>
                        <a><i class="fas fa-calendar mr-2"></i>  24 Maret - 25 Maret 2023</a>
                        <br><br>
                        <a><i class="fas fa-file mr-2"></i>  10 projects submitted</a>
                        <br><br>
                        <button>Active</button>
                    </div>
                    </div>
                    <div class="col-sm-2 rightView">
                        <p>View</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <br>
    <br> -->

    <!-- <div class="container">

    <div class="col-md-4">

    <div class="card">
        <div class="image pull-left">

        </div>
        <div class="content pull-left">
        <h4>
    Title Goes Here
    </h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        <br>
        <button class="btn btn-default btn-read">
            Read more
        </button>
        </div>
        <div class="clearfix">
        </div>
    </div>
    </div>
    </div> -->
@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop