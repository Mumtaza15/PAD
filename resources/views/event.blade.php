@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="event.css">
<link rel="stylesheet" href="navbar.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/" >Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto active" href="/event">Event</a></li>
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <h1>--Event--</h1>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="input-group mb-1">  
            <input type="text" class="form-control" placeholder="Looking for an event?">
                <div class="input-group-append">
                    <button class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
        </div>
    </div>

    @foreach ($events as $event)
    <div class="wrapper">
      <div class="container-lg main">
        <div class="row">
          <div class="col-md-4 img-left">
            <!-- Ini Foto -->
            <img src="{{ asset('storage/' . $event->event_picture) }}" alt="" class="object-fit-cover" style="width: 200px;">
          </div>

          <div class="col-sm-7 right">
            <!-- <div class="input-box"> -->
              <div class="card-body">
                <h4 class="card-title">{{ $event->event_name }}</h4>
                <p class="card-text"><a><i class="fas fa-calendar mr-2"></i> {{ $event->submission_start }} {{ $event->submission_end }}</a></p>
                <p class="card-text"><a><i class="fas fa-file mr-2"></i>10 projects submitted</a></p>
                <button>{{ $event->status_event }}</button>
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
    @endforeach
    
@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop