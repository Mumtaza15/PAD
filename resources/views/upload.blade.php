@extends('Template/layoutRev')

@section('title')
<title>Upload Page</title>
@stop

@section('css')
<link rel="stylesheet" href="upload.css">
<link rel="stylesheet" href="navbar.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto" href="/home" >Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')
<div class="title">
--Project--
</div>

<div class="wrapper">
    <div class="form">
       <div class="inputfield">
          <label>Project Name</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Description</label>
          <input type="text" class="input">
       </div>  
       <!-- <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input">
       </div>  -->

      <div class="inputfield">
          <label>Thumbnail Picture</label>
          <input type="file" class="form-control" id="customFile" />
       </div>

       <div class="inputfield">
          <label>Video Link</label>
          <input type="text" class="input">
       </div>
        
        <div class="inputfield">
          <label>Event</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="select1">PAD1</option>
              <option value="select2">PAD2</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Dosen Pembimbing</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Category</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="select1">Website</option>
              <option value="select2">Mobile</option>
              <option value="select3">Game</option>
            </select>
          </div>
       </div> 

       <div class="inputfield">
          <label>Website Link</label>
          <input type="text" class="input">
       </div>
    </div>
</div>	
      <!-- <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea"></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div> -->


<div class="title">
--Member--
</div>

<div class="wrapper">
    <div class="form">
       <div class="inputfield">
          <label>Team Name</label>
          <input type="text" class="input">
       </div>  

      <div class="inputfield">
          <label>Name 1</label>
          <input type="text" class="input">
      </div>

      <div class="inputfield">
          <label>Role 1</label>
          <input type="text" class="input">
      </div>

      <div class="inputfield">
          <label>Picture 1</label>
          <input type="file" class="form-control" id="customFile" />
      </div>

       <!-- <div class="inputfield">
          <label>Website Link</label>
          <input type="text" class="input">
       </div> -->
    </div>
</div>

<center>
<button type="button" class="btn btn-success">Accept</button>
<button type="button" class="btn btn-danger">Decline</button>
<center>
   
</div>

    
<br>

@stop

@section('js')
@stop
