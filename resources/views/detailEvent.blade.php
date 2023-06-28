@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="public/detailEvent.css?">
<link rel="stylesheet" href="public/navbar.css">
<link rel="stylesheet" href="public/home.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/" >Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')

<link rel="stylesheet" href="public/detailEvent.css?">
<link rel="stylesheet" href="public/navbar.css">
<link rel="stylesheet" href="public/home.css">

    <br>
    <div class="bagTop">
        <div class="d-flex justify-content-center justify-content-lg-between p-4">
            <button class="float-left btn px-4 text-capitalize" style="background: #15C0A4; color: white;">
                {{ $event->status_event }}
            </button>

            <button class="float-right btn btn-outline-dark" id="shareButton">
                <p class="card-text"><a><i class="fa fa-share mr-2"></i> Share</a></p>
            </button>
        </div>
    </div>

    <div class="container d-flex flex-column text-center">
        <h1>{{ $event->event_name }}</h1>
        <p>{{ $event->description }}</p>
        <!-- <img src="register.jpg" width="20px" height="20px"><p>Tessssss</p> -->
        <p class="card-text"><a><i class="fas fa-calendar mr-2"></i>  {{ \Carbon\Carbon::parse($event->submission_start)->format('d F') }} - {{ \Carbon\Carbon::parse($event->submission_end)->format('d F Y') }}</a></p>
    </div>

    <div class="d-flex justify-content-center justify-content-lg-between p-5">
        <div class="mini-title mt-3 jarak">
            <hr class="vertical-line"/>
                <h4>Participating Projects</h4>
        </div>
    </div>

    <div class="row mt-2 justify-content-center">
        @foreach ($projects as $project)
        <div class="card" style="width: 23rem;">
            <img class="card-img-top" src="{{ asset('storage/' . $project->project_picture1) }}" alt="Card image cap">
            <div class="p-3 card-body">
                <div class="row"> 
                    <div class="col-md-6">
                        <a href="{{ route('project.show', ['id' => $project->id]) }}" class="card-title">
                            <h5 class="card-title" style="font-weight: bold">{{ $project->project_name }}</h6>
                        </a>
                        <p class="card-text">{{ $project->team_name }}</p>
                    </div>

                    <div class="col-md-6 text-end">
                        <a id="heart"><span class="like"><i class="bi bi-heart"></i><br>{{ $project->votes }}</span></a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
<script>
    document.getElementById("shareButton").addEventListener("click", function() {
    // Mendapatkan URL halaman saat ini
    var currentUrl = window.location.href;

    // Membuat elemen input untuk menampung URL
    var tempInput = document.createElement("input");
    tempInput.value = currentUrl;
    document.body.appendChild(tempInput);

    // Menyalin URL ke clipboard
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);

    // Memberikan umpan balik ke pengguna
    alert("URL telah disalin ke clipboard!");
    });
</script>
@stop