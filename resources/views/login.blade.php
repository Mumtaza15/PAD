<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Project Exhibition </title>
  <link href="https://fonts.googleapis.com/css?family=inter" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  <!-- <link rel="stylesheet" href="style.css"> -->

  <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

</head>

<body>

<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!--------- <title>Responsive Navigation Menu</title>------>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

	<!-- NAVBAR -->
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
        <li><button type="button" class="btn btn-primary"
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


	<!-- CONTENT -->
	<div class="content">
		<div class="left">
		</div>
		<div class="right">
			<form>
        <h1 align="center" 
        style="
        font-weight: 700;
        font-size: 32px;
        line-height: 150%;
        /* identical to box height, or 48px */
        
        text-align: center;
        letter-spacing: -0.011em;
        
        /* padding-bottom: 8em; */
        color: #0C003F;">
        Login
        <br>

				 <input type="text" placeholder="Username"> 
				 <input type="text" placeholder="Password">
         
         <br>

				 <button type="button" class="btn btn-primary"
          style="--bs-btn-padding-y: .25rem; 
          --bs-btn-padding-x: .5rem; 
          --bs-btn-font-size: .75rem; 
          padding: 12.8219px 64.1096px;
          gap: 5.34px;
          
          width: 173.22px;
          height: 51.64px;
          
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
        <br>
        <p>Don’t have an account? <a href="/register" style="color: #15C0A4;">Register Now</a></p>
        
        
			</form>
		</div>
	</div>
  <!-- end content -->

  <!-- footer -->
  <!-- <footer style="display: flex;">
    <div class="icon" style="float: left;">
      <p><img src="logo.png" width="20px" height="20px"> © 2022 TRPL SV UGM </p>
    </div>
  </footer> -->

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
        <!-- <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a> -->
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram fa-3x" style="color: white;"></i>
        </a>
        <!-- <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a> -->
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
    <!-- Copyright -->
    <div class="text-center p-4" style="color: white">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://trpl.sv.ugm.ac.id/">trpl.sv.ugm.ac.id</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>