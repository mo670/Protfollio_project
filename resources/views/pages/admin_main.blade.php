@extends('layouts.admin_layout')
@section('main')
<main>
{{-- <div class="container-fluid px-4">
    <h2 class="mt-4">Main Page</h2>
  <div class="row">
  <div class="form-group col-md-3 mt-3">
    <h3>background image</h3>
    <img style="height:30ch" src="{{asset('frontend/assets/img/header-bg.jpg')}}" class="img-thumbnail">
    <input type="file" id="resume" name="resume">
</div>
<form action="{{ route('submitmain') }}" method="POST" enctype="multipart/form-data">
  @csrf
<div class="row">
<div class="form-group col-md-4 mt-3">
<div class="col-md-3">
<label for="title">Title</label>
<input type="text" class="from-control" id="title" name="title">
  </div>
<br>
<br>

  <div class="col-md-3">
    <label for="title">Sub Title</label>
    <input type="text" class="from-control" id="title" name="subtitle">
      </div>
      <br>
      <br>
      <div>
        <h4> Upload Image </h4>
        <input type="file" id="resume" name="resume">
      </div>
</div>

  </div>
  <input type="submit" name="submit" class="btn btn-primary  mt-5">

  </div>
</div> --}}
<main>
  <div class="container-fluid">
      <h1 class="mt-4">Main</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Main</li>
      </ol>
  <form action="{{route('submitmain')}}" method="POST" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT')}}
      
          <div class="form-group col-md-3 mt-3">
              <h3>Background Image</h3>"
          <img style="height: 30vh" src="{{(@$main->bc_img)?url($main->bc_img):asset("assets/img/bc_img.jpg")}}"class="img-thumbnail">
          <input class="mt-3" type="file" id="bc_img" name="bc_img">
          </div>
          <div class="form-group col-md-4 mt-3">
              <div class="mb-3">
                  <label for="title"><h4>Title</h4></label>
              <input type="text" class="form-control" id="title" name="title" value="{{(@$main->title)?$main->title:"The title"}}">
              </div>
              <div class="mb-5">
                  <label for="sub_title"><h4>Sub Title</h4></label>
                  <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{(@$main->subtitle)?$main->subtitle:"Sub Title"}}">
              </div>
              <div>
                  <h4>Upload Resume</h4>
                  <input class="mt-2" type="file" id="resume" name="resume">
              </div>
          </div>
      </div>
      <input type="submit" name="submit" class="btn btn-primary mt-5">
  </div>
  </form>
</main>
@endsection
          
  

    


