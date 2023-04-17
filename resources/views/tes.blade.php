@extends('Template/layout')

@section('css')
<link rel="stylesheet" href="register.css">
<link rel="stylesheet" href="style.css">
@stop

@section('content')

<!-- CONTENT -->
<div class="wrapper">
      <div class="container-lg main">
        <div class="row">
          <div class="col-md-6 img-left">
            <!-- Ini Foto -->
            <!-- <img src="login.png" alt=""> -->
          </div>

          <div class="col-md-6 right">
            <div class="input-box">
              <header>
                Register
              </header>
                <div class="input-field">
                  <input type="text" class="input" id="email" required autocomplete="off" placeholder="Email">
                </div>
                <div class="input-field">
                  <input type="text" class="input" id="username" required autocomplete="off" placeholder="Username">
                </div>
                <div class="input-field">
                  <input type="number" class="input" id="phone" required autocomplete="off" placeholder="Phone">
                </div>
                <div class="input-field">
                  <input type="password" class="input" id="password" required placeholder="Password">
                </div>
                <div class="input-field">
                  <input type="password" class="input" id="re-password" required placeholder="Reattempt password">
                </div>
                <div class="button">
                  <button type="submit" class="submit">Create Account</button>    
                </div>

            </div>

          </div>
        </div>
      </div>
    </div>
@stop