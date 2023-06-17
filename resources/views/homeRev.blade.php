@extends('Template/layoutRev')

@section('title')
<title>Home Page</title>
@stop

@section('css')
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="navbar.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto active" href="/" >Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')
  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Project Exhibition</h1>
            <h2>Software Engineering Technology Study Program DTEDI SV UGM</h2>
            <div class="container d-flex justify-content-center">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Project
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Looking for something?">
                    <div class="input-group-append">
                        <button class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
            <a href="#about" class="btn-get-started scrollto">All</a>
            <a href="#about" class="btn-get-started scrollto">Aplikasi</a>
            <a href="#about" class="btn-get-started scrollto">Game</a>
            <a href="#about" class="btn-get-started scrollto">Website</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <div class="konten">
        <!-- Event -->
        <section id="events" class="events">
            <div class="container my-5">

                <div class="section-title">
                <h2>--Events--</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="d-flex justify-content-center justify-content-lg-between p-4">
                    <div class="mini-title mt-3 jarak">
                        <hr class="vertical-line"/>
                        <h4>Latest Events</h4>
                    </div>

                    <div class="btn-more mt-4">
                        <h6>View more →</h6>
                    </div>
                </div>

                <div class="row justify-content-center">
                    
                    @foreach ($latest_events as $event)
                    <div class="card my-2" style="width: 16rem;">
                        <img class="card-img-top object-fit-cover" src="{{ asset('storage/' . $event->event_picture) }}" alt="Card image cap" style="height: 140px;">
                        <div class="card-body">
                            <a href="/event" class="card-title">
                                <h5 style="font-weight: bold">{{ $event->event_name }}</h5>
                            </a>
                            <p>{{ \Carbon\Carbon::parse($event->submission_start)->format('d F') }} - {{ \Carbon\Carbon::parse($event->submission_end)->format('d F Y') }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
            </section><!-- End Event Section -->

            <section>
                <div class="wrapper">
                <div class="container-lg box">
                    <div class="row square">
                    <div class="col-md-6 img-left">
                        <!-- Ini Foto -->
                        <!-- <img src="login.png" alt=""> -->
                    </div>

                    <div class="col-md-6 right">
                        <div class="input-box">
                            <header>
                                Vote Event
                            </header>
                            <div class="input-field">
                                <p>
                                    Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                                </p>
                            </div>
                            <div class="button">
                                <a href="/detailEvent">
                                    <button type="submit" class="submit">Lets go!</button>  
                                </a>  
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </section>


            <!-- Project -->
            <section>
            <!-- <section id="events" class="events"> -->
            <div class="container my-5">

                <div class="section-title">
                <h2>--Projects--</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="d-flex justify-content-center justify-content-lg-between p-4 mini-title-adjust">
                    <div class="mini-title mt-3 jarak">
                            <hr class="vertical-line"/>
                        <h4>Latest Projects</h4>
                    </div>

                    <div class="btn-more mt-4">
                        <a href="/project" class="card-title">                                   
                            <h6>View more →</h6>
                        </a>
                    </div>
                </div>
                
                <div class="row mt-2 justify-content-center">

                    @foreach ($latest_projects as $project)
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{ asset('storage/' . $project->project_picture1) }}" alt="Card image cap">
                        <div class="p-3 card-body">
                            <div class="row"> 
                                <div class="col-md-6">
                                    <a href="/detailProject" class="card-title">
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

                <div class="d-flex justify-content-center justify-content-lg-between p-4">
                    <div class="mini-title mt-3 jarak">
                            <hr class="vertical-line"/>
                        <h4>Popular Project</h4>
                    </div>

                    <div class="btn-more mt-4">
                        <h6>View more →</h6>
                    </div>
                </div>

                <div class="row mt-2 justify-content-center">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="register.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h6>
                            <p class="card-text">24 Maret - 25 Maret 2023</p>
                        </div>
                    </div>
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="register.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h6>
                            <p class="card-text">24 Maret - 25 Maret 2023</p>
                        </div>
                    </div>
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="register.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h6>
                            <p class="card-text">24 Maret - 25 Maret 2023</p>
                        </div>
                    </div>
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="register.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h6>
                            <p class="card-text">24 Maret - 25 Maret 2023</p>
                        </div>
                    </div>
                </div>

            </div>
            </section><!-- End Projects Section -->
    </div>
@stop

@section('js')
@stop