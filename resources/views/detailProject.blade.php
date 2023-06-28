@extends('Template/layoutRev')

@section('css')
<!-- <link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="detailProject.css"> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/">Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')

<!-- <link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="detailProject.css"> -->

    <div class="bagTop">
        <div class="d-flex justify-content-center justify-content-lg-between p-4">
            <div class="mini-title mt-3 jarak">
                <h2>{{ $project->project_name }}</h2>
            </div>

            <div class="d-flex gap-2 mt-4">
                <button class="share-btn btn btn-outline-dark" id="shareButton"><a><i class="fa fa-share mr-2"></i>  Share</a></button>
                <div>
                    @if(Auth::check())
                        @if(Auth::user()->votes->contains($project->id))
                            <form action="{{ route('unvote', $project) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-primary"><i class="bi bi-heart-fill"></i> Unvote</button>
                            </form>
                        @else
                            @if(Auth::user()->votes->where('event_id', $project->event_id)->isNotEmpty())
                                <button type="submit" class="btn btn-primary" disabled><i class="bi bi-heart"></i> Vote</button>
                            @else
                                <form action="{{ route('vote', $project) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-heart"></i> Vote</button>
                                </form>
                            @endif
                        @endif
                    @else
                        <a href="/login" class="btn btn-primary"><i class="bi bi-heart"></i> Vote</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <iframe width="1080" height="520" src="{{ $project->video_link }}">
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
        <p>{{ $project->description }}</p>
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
                        <img src="{{ asset('storage/' . $project->member1_photo) }}" class="rounded-circle mt-2" width="48px" height="48px"/>
                        <small>{{ $project->member1_name }}</small>
                        <small>{{ $project->member1_role }}</small>
                    </span>
                    <br>
                    <span>
                        <img src="{{ asset('storage/' . $project->member2_photo) }}" class="rounded-circle mt-2" width="48px" height="48px"/>
                        <small>{{ $project->member2_name }}</small>
                        <small>{{ $project->member2_role }}</small>
                    </span>
                    <br>
                    <span>
                        <img src="{{ asset('storage/' . $project->member3_photo) }}" class="rounded-circle mt-2" width="48px" height="48px"/>
                        <small>{{ $project->member3_name }}</small>
                        <small>{{ $project->member3_role }}</small>
                    </span>
                    <br>
                    <span>
                        <img src="{{ asset('storage/' . $project->member4_photo) }}" class="rounded-circle mt-2" width="48px" height="48px"/>
                        <small>{{ $project->member4_name }}</small>
                        <small>{{ $project->member4_role }}</small>
                    </span>
                    <br>
                    <span>
                        <img src="{{ asset('storage/' . $project->member5_photo) }}" class="rounded-circle mt-2" width="48px" height="48px"/>
                        <small>{{ $project->member5_name }}</small>
                        <small>{{ $project->member5_role }}</small>
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
                            <li>{{ $project->dosen_pembimbing }}</li>
                            <li class="text-capitalize">{{ $project->category }}</li>
                            <li>{{ \Carbon\Carbon::parse($project->created_at)->format('d F Y') }}</li>
                            <li><a href="/home" class="textNyala">{{ $project->event_id }}</a></li>
                            <li><a href="{{ $project->demo_link }}" target="_blank" class="textNyala">{{ $project->demo_link }}</a></li>
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