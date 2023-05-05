@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="detailEvent.css">
<link rel="stylesheet" href="navbar.css">
@stop

@section('content')

    <div class="d-flex justify-content-center justify-content-lg-between p-4">
        <div class="mini-title mt-3 jarak">
            <hr class="vertical-line"/>
                <h4>Latest Events</h4>
        </div>

        <div class="btn-more mt-4">
            <h6>View more →</h6>
        </div>
    </div>

    <div class="d-flex flex-column justify-content-center">
        <h1>Pameran Proyek PAD Mahasiswa TRPL 2021</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat maiores doloribus sed deleniti inventore natus suscipit delectus autem odit. Perspiciatis adipisci non vero error iusto quia debitis. Quo, voluptas officia?</p>
        <img src="register.jpg" width="20px" height="20px"><p>Tessssss</p>
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

@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop