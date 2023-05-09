@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="detailEvent.css">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="home.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/home" >Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')
    <br>
    <div class="d-flex justify-content-center justify-content-lg-between p-4">
        <button class="float-left">
            Active
        </button>

        <button class="float-right">
        <p class="card-text"><a><i class="fa fa-share mr-2"></i> Share</a></p>
        </button>
    </div>

    <div class="container d-flex flex-column text-center">
        <h1>Pameran Proyek PAD Mahasiswa TRPL 2021</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat maiores doloribus sed deleniti inventore natus suscipit delectus autem odit. Perspiciatis adipisci non vero error iusto quia debitis. Quo, voluptas officia?</p>
        <!-- <img src="register.jpg" width="20px" height="20px"><p>Tessssss</p> -->
        <p class="card-text"><a><i class="fas fa-calendar mr-2"></i>  24 Maret - 25 Maret 2023</a></p>
    </div>

    <div class="d-flex justify-content-center justify-content-lg-between p-5">
        <div class="mini-title mt-3 jarak">
            <hr class="vertical-line"/>
                <h4>Participating Projects</h4>
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

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop