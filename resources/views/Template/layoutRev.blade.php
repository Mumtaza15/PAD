<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IniLayout</title>
        <link href="https://fonts.googleapis.com/css?family=inter" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>

    <body>
    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <!-- start content-->
        @yield('content')
        <!-- end content-->

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-green text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="color: white">
            <!-- Left -->
            <div class="me-4 d-none d-lg-block">
                <img src="logo.png" width="60px" height="60px"><br>
                <span>Teknologi Rekayasa Perangkat Lunak<br>
                Sekolah Vokasi<br>
                Universitas Gadjah Mada<br></span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="iconz" style="display: flex; align-items: center;">
                <a href="" class="me-4 link-secondary">
                <i class="fab fa-facebook fa-3x" style="color: white;"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                <i class="fab fa-twitter fa-3x" style="color: white;"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                <i class="fab fa-instagram fa-3x" style="color: white;"></i>
                </a>
            </div>
            <!-- Right -->
            </section>
            <!-- Copyright -->
            <div class="text-center p-4" style="color: white">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://trpl.sv.ugm.ac.id/">trpl.sv.ugm.ac.id</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>