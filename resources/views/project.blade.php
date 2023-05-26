@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="project.css">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="home.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/home">Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto active" href="/event">Event</a></li>
@stop

@section('content')
    <div class="d-flex justify-content-center judul">
        <h1>--Project--</h1>
    </div><br>

    <div class="container d-flex justify-content-center">
        <div class="input-group mb-3 searchButton">
            <input type="text" class="form-control" placeholder="Search..">

            <div class="dropdown1">
                <button class="btnSegment btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
            </div>

            <div class="dropdown2">
                <button class="btnSegment btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Event
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
            </div>

            <div class="dropdown3">
                <button class="btnSegment btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Year
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
            </div>

                <div class="input-group-append">
                    <button class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex p-4 jarak-kanan">
        <div class="dropdownMini">
            <span class="span-by">Sort by:
                <button class="btnSegment btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Most Recent
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
            </span>
        </div>
    </div>

    <div class="row mt-2 justify-content-center">

    <div class="card" style="width: 23rem;">
        <img class="card-img-top" src="register.jpg" alt="Card image cap">
        <div class="p-3 card-body">
            <div class="row"> 
                <div class="col-md-6">
                    <h6 class="card-title">PortalBuku</h5>
                    <p class="card-text">By 4One</p>
                </div>

                <div class="col-md-6 text-end">
                    <a id="heart"><span class="like"><i class="fab fa-gratipay"></i><br>Like</span></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="width: 23rem;">
        <img class="card-img-top" src="register.jpg" alt="Card image cap">
        <div class="p-3 card-body">
            <div class="row"> 
                <div class="col-md-6">
                    <h6 class="card-title">PortalBuku</h5>
                    <p class="card-text">By 4One</p>
                </div>

                <div class="col-md-6 text-end">
                    <a id="heart"><span class="like"><i class="fab fa-gratipay"></i><br>Like</span></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="width: 23rem;">
        <img class="card-img-top" src="register.jpg" alt="Card image cap">
        <div class="p-3 card-body">
            <div class="row"> 
                <div class="col-md-6">
                    <h6 class="card-title">PortalBuku</h5>
                    <p class="card-text">By 4One</p>
                </div>

                <div class="col-md-6 text-end">
                    <a id="heart"><span class="like"><i class="fab fa-gratipay"></i><br>Like</span></a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br>

@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop