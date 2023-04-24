<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IniLayout</title>
        <link href="https://fonts.googleapis.com/css?family=inter" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        @yield('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top header-inner-pages">
            <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="index.html">Tempo</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="logo.png" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                <!-- <li><a class="active" href="#">Home</a></li> -->
                @yield('nav')
                <li>
                    <button type="button" class="btn-login">
                        Login
                    </button>
                </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <!-- start content-->
        @yield('content')
        <!-- end content-->

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-green text-muted">
            <!-- Section: Social media -->
            <div class="footer-wrapper">
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="color: white">
                <!-- Left -->
                <div class="me-4 d-none d-lg-block jarak">
                    <div class="clearfix">
                    <img class="img-footer" src="logo.png" width="60px" height="60px">
                    <span>Teknologi Rekayasa Perangkat Lunak<br>
                    Sekolah Vokasi<br>
                    Universitas Gadjah Mada<br></span>
                    </div>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div class="iconz" style="display: flex; align-items: center;">
                    <a href="" class="me-4 link-secondary">
                    <i class="fab fa-facebook fa-2x" style="color: white;"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                    <i class="fab fa-twitter fa-2x" style="color: white;"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                    <i class="fab fa-instagram fa-2x" style="color: white;"></i>
                    </a>
                </div>
                <!-- Right -->
                </section>
            </div>
            <!-- Copyright -->
            <div class="text-center p-4" style="color: white">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://trpl.sv.ugm.ac.id/">trpl.sv.ugm.ac.id</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

        @yield('js')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>