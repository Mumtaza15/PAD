@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="rank.css">
<link rel="stylesheet" href="navbar.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/home" >Home</a></li>
    <li><a class="nav-link scrollto active" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')

    <div class="container d-flex justify-content-center mb-4">
            <div class="input-group-prepend search-title">
                <label class="input-group-text" for="inputGroupSelect01">Looking for best projects?</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
                <option selected>Pameran Proyek PAD Mahasiswa TRPL 2021</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
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
                <tr class="rank1">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr class="rank2">
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr class="rank3">
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
                
                <tr>
                <th scope="row">4</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>

                <tr>
                <th scope="row">5</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>

                <tr>
                <th scope="row">6</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>

                <tr>
                <th scope="row">7</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>

                <tr>
                <th scope="row">8</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>

                <tr>
                <th scope="row">9</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>

                <tr>
                <th scope="row">10</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </section>

@stop

@section('js')
@stop