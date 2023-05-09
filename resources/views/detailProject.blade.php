@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="detailProject.css">

@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/home">Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')
    <div class="bagTop">
        <div class="d-flex justify-content-center justify-content-lg-between p-4">
            <div class="mini-title mt-3 jarak">
                <h2>PortalBuku</h2>
            </div>

            <div class="btn-more mt-4">
                <span>
                    <button class="share-btn"><a><i class="fa fa-share mr-2"></i>  Share</a></button>
                    <button class="vote-btn"><a><i class="fab fa-gratipay mr-2"></i>  Vote</a></button>
                </span>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <iframe width="1080" height="520" src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
    </div>

    <br><br>

    <div class="d-flex justify-content-start descHeader">
        <div class="mini-title mt-3 jarak">
            <hr class="vertical-line"/>
                <h4>Description</h4>
        </div>
    </div>

    <div class="d-flex descText">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod harum officiis commodi nihil, inventore repellat aliquid eius, earum repudiandae omnis cumque laboriosam quia quidem ipsam amet dolores! Beatae, est natus.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod harum officiis commodi nihil, inventore repellat aliquid eius, earum repudiandae omnis cumque laboriosam quia quidem ipsam amet dolores! Beatae, est natus.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod harum officiis commodi nihil, inventore repellat aliquid eius, earum repudiandae omnis cumque laboriosam quia quidem ipsam amet dolores! Beatae, est natus.
        </p>
    </div>

    <div class="wrapper">
      <div class="container-lg main">
        <div class="row">
          <div class="col-md-6 left">
            <div class="d-flex justify-content-start">
                <div class="mini-title mt-3 w-100">
                    <hr class="vertical-line"/>
                        <h4>Team Member</h4>

                    <span>
                        <img src="login.png" class="rounded-circle mt-2" width="48px" height="48px"/>
                        <small>Title</small>
                        <small>some text</small>
                    </span>
                    <br>
                    <span>
                        <img src="login.png" class="rounded-circle mt-2" width="48px" height="48px"/>
                        <small>Title</small>
                        <small>some text</small>
                    </span>
                    <br>
                    <span>
                        <img src="login.png" class="rounded-circle mt-2" width="48px" height="48px"/>
                        <small>Title</small>
                        <small>some text</small>
                    </span>
                </div>
            </div>
          </div>

          <div class="col-md-6 right">
            <div class="d-flex justify-content-start">
                    <div class="mini-title mt-3 w-100">
                        <hr class="vertical-line"/>
                            <h4>Information</h4>

                            <ul>
                            <li>Divi Galih Prasetyo Putri, S.Kom., M.Kom.</li>
                            <li>Pengembangan Website</li>
                            <li>24 Maret 2023</li>
                            <li><a href="/home" class="textNyala">Pameran Proyek PAD Mahasiswa TRPL 2021</a></li>
                            <li><a href="/home" class="textNyala">Link Demo</a></li>
                            </ul>

                    </div>
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