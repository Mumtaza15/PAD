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
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>

    <body>
    <!-- Navbar -->
        <nav>
            <div class="logo">trpl</div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Rank</a></li>
                <li><a href="#">Event</a></li>
                <li>
                    <button type="button" class="btn btn-primary"
                        style="--bs-btn-padding-y: .25rem; 
                        --bs-btn-padding-x: .5rem; 
                        --bs-btn-font-size: .75rem; 

                        padding: 8px 32px;
                        gap: 5.34px;
                        
                        
                        background: #0C003F;
                        border-radius: 8px;
                        font-weight: 500;
                        font-size: 17.0959px;
                        line-height: 150%;

                        text-align: center;
                        letter-spacing: -0.011em;
                        ">
                        Login
                    </button>
                </li>
            </ul>
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