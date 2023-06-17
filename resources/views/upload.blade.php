@extends('Template/layoutRev')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

@section('title')
<title>Upload Page</title>
@stop

@section('css')
<link rel="stylesheet" href="upload.css">
<link rel="stylesheet" href="navbar.css">
@stop

@section('nav')
    <li><a class="nav-link scrollto active" href="/home" >Home</a></li>
    <li><a class="nav-link scrollto" href="/rank">Rank</a></li>
    <li><a class="nav-link scrollto" href="/event">Event</a></li>
@stop

@section('content')
<div class="title">
--Project--
</div>

<form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
@csrf

<div class="wrapper">
    <div class="form">
       <div class="inputfield">
          <label>Project Name</label>
          <input type="text" class="input" name="project_name">
       </div>  
        <div class="inputfield">
          <label>Description</label>
          <textarea class="input" name="description"></textarea>
          <!-- <input type="textarea" class="input"> -->
       </div>
       <div class="inputfield">
          <label>Category</label>
          <div class="custom_select">
            <select name="category">
              <option value="web">Select</option>
              <option value="web">Web</option>
              <option value="android">Android</option>
            </select>
          </div>
      </div> 
       <div class="inputfield">
          <label>Event</label>
          <div class="custom_select">
            <select name="event_id">
               @foreach ($events as $event)
                  <option value="{{ $event->id }}">{{ $event->event_name }}</option>
               @endforeach
            </select>
          </div>
       </div>
       <div class="inputfield">
          <label>Dosen Pembimbing</label>
          <input type="text" class="input" name="dosen_pembimbing">
      </div>
       <div class="inputfield">
          <label>Video Link</label>
          <input type="text" class="input" name="video_link">
       </div>
      <div class="inputfield">
          <label>Website Link</label>
          <input type="text" class="input" name="demo_link">
      </div>
    </div>
</div>


<div class="title">
--Pictures--
</div>

<div class="wrapper">
   <div class="form">
      <div class="inputfield">
         <label>Picture 1</label>
         <input type="file" class="input" name="project_picture1">
      </div> 
      <div class="inputfield">
         <label>Picture 2</label>
         <input type="file" class="input" name="project_picture2">
      </div> 
      <div class="inputfield">
         <label>Picture 3</label>
         <input type="file" class="input" name="project_picture3">
      </div> 
   </div>
</div>


<div class="title">
--Member--
</div>

<div class="wrapper">
   <div class="form">
      <div class="inputfield">
         <label>Team Name</label>
         <input type="text" name="team_name" class="input">
      </div>
      <div class="inputfield">
         <label>Member 1</label>
         <div class="row">
            <div class="col-md-5">
               <input type="text" name="member1_name" placeholder="Full Name" class="input">
            </div>
            <div class="col">
               <div class="custom_select">
                  <select name="member1_role">
                     <option value="p">Role</option>
                     <option value="p">Project Manager</option>
                     <option value="p">Front-End</option>
                  </select>
               </div>
            </div>
            <div class="col">
               <input type="file" name="member1_photo" placeholder="Photo" class="input">
            </div>
         </div>
      </div>
      <div class="inputfield">
         <label>Member 2</label>
         <div class="row">
            <div class="col-md-5">
               <input type="text" name="member2_name" placeholder="Full Name" class="input">
            </div>
            <div class="col">
               <div class="custom_select">
                  <select name="member2_role">
                     <option value="p">Role</option>
                     <option value="p">Project Manager</option>
                     <option value="p">Front-End</option>
                  </select>
               </div>
            </div>
            <div class="col">
               <input type="file" name="member2_photo" placeholder="Photo" class="input">
            </div>
         </div>
      </div>
      <div class="inputfield">
         <label>Member 3</label>
         <div class="row">
            <div class="col-md-5">
               <input type="text" name="member3_name" placeholder="Full Name" class="input">
            </div>
            <div class="col">
               <div class="custom_select">
                  <select name="member3_role">
                     <option value="p">Role</option>
                     <option value="p">Project Manager</option>
                     <option value="p">Front-End</option>
                  </select>
               </div>
            </div>
            <div class="col">
               <input type="file" name="member3_photo" placeholder="Photo" class="input">
            </div>
         </div>
      </div>
      <div class="inputfield">
         <label>Member 4</label>
         <div class="row">
            <div class="col-md-5">
               <input type="text" name="member4_name" placeholder="Full Name" class="input">
            </div>
            <div class="col">
               <div class="custom_select">
                  <select name="member4_role">
                     <option value="p">Role</option>
                     <option value="p">Project Manager</option>
                     <option value="p">Front-End</option>
                  </select>
               </div>
            </div>
            <div class="col">
               <input type="file" name="member4_photo" placeholder="Photo" class="input">
            </div>
         </div>
      </div>
      <div class="inputfield">
         <label>Member 5</label>
         <div class="row">
            <div class="col-md-5">
               <input type="text" name="member5_name" placeholder="Full Name" class="input">
            </div>
            <div class="col">
               <div class="custom_select">
                  <select name="member5_role">
                     <option value="p">Role</option>
                     <option value="p">Project Manager</option>
                     <option value="p">Front-End</option>
                  </select>
               </div>
            </div>
            <div class="col">
               <input type="file" name="member5_photo" placeholder="Photo" class="input">
            </div>
         </div>
      </div>
   </div>
</div>
<center>
   <button type="submit" class="btn btn-primary">Submit</button>
<center>

</form>
    
<br>

@stop

@section('js')

@stop
