@extends('Template/layoutRev')

@section('css')
<!-- <link rel="stylesheet" href="event.css"> -->
<!-- <link rel="stylesheet" href="navbar.css"> -->
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/" >Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto active" href="/event">Event</a></li>
@stop

@section('content')

<link rel="stylesheet" href="event.css">
<link rel="stylesheet" href="navbar.css">

    <div class="d-flex justify-content-center">
        <h1 style="font-weight: bold">--Event--</h1>
    </div>
    <div class="col-md-5 d-flex mx-auto">
        <div class="input-group mb-1">
          <form action="{{ route('event.search') }}" method="POST">
          @csrf
            <input type="text" class="form-control" placeholder="Looking for an event?" name="keyword" value="{{ $keyword ?? '' }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search mx-1 my-2"></i>
                </button>
            </div>
          </form>
        </div>
    </div>

    @foreach ($events as $event)
    <div class="wrapper" style="margin-top: -30px; margin-bottom: -90px;">
      <div class="container-lg main">
        <div class="row">
          <div class="col-md-4">
            <!-- Ini Foto -->
            <img src="{{ asset('storage/' . $event->event_picture) }}" alt="" class="img-fluid rounded-start object-fit-cover">
          </div>

          <div class="col-sm-7 right ps-4">
            <!-- <div class="input-box"> -->
              <div class="card-body">
                <h4 class="card-title mb-3" style="font-weight: bold;">{{ $event->event_name }}</h4>
                <p class="card-text"><a><i class="fas fa-calendar me-2" style="color: #15C0A4;"></i>{{ \Carbon\Carbon::parse($event->submission_start)->format('d F') }} - {{ \Carbon\Carbon::parse($event->submission_end)->format('d F Y') }}</a></p>
                <p class="card-text"><a><i class="fas fa-file me-2" style="color: #15C0A4;"></i>{{ $event->project_count }} projects submitted</a></p>
                @if ($event->status_event == 'active')
                  <button class="text-capitalize">{{ $event->status_event }}</button>
                @elseif ($event->status_event == 'finished')
                  <button class="text-capitalize" style="background-color: gray;">{{ $event->status_event }}</button>
                @endif
            </div>
            <!-- </div> -->
          </div>

        <div class="col-md-1 viewDetail" style="margin-left: -15px;">
            <a href="{{ route('event.show', ['id' => $event->id]) }}" class="goDetail">View</a>
        </div>

        </div>
      </div>
    </div>
    @endforeach

    <br><br><br><br>
    
@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop