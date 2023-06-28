@extends('Template/layoutRev')

@section('title')
<title>Rank Page</title>
@stop

@section('css')
<!-- <link rel="stylesheet" href="rank.css"> -->
<link rel="stylesheet" href="navbar.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/" >Home</a></li>
    <li><a class="nav-link scrollto active" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')
<link rel="stylesheet" href="rank.css">
    <div class="container d-flex justify-content-center mb-4">
            <div class="input-group-prepend search-title">
                <label class="py-3 px-3 border shadow-sm" style="background: white; border-radius: 6px 0px 0px 6px;" for="inputGroupSelect01">Looking for best projects?</label>
            </div>

            <form action="{{ route('rank.search') }}" method="GET">
                <select class="custom-select py-3 px-1" style="width: 200px;" id="keyword" name="keyword">
                    @foreach ($events as $event)
                        <option value="{{ $event->id }}" class="text-capitalize">{{ $event->event_name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary" style="margin-left: -3px;">
                    <i class="fas fa-search"></i>
                </button>
            </form>

        <!-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pameran Proyek PAD Mahasiswa TRPL 2021
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div> -->
    </div>

    <section>
        <div class="section-title my-4">
            <h2>--Best Project--</h2>
        </div>
        <table class="table table-bordered smooth">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Project Name</th>
                <th scope="col">Team Name</th>
                <th scope="col">Votes</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 0)
                @foreach ($results as $result)
                <tr class="rank1">
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $result->project_name }}</td>
                <td>{{ $result->team_name }}</td>
                <td>{{ $result->votes }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@stop

@section('js')
@stop