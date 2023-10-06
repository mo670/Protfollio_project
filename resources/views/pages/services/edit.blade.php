@extends('layouts.admin_layout')
@section('main')
<main>
  <div class="container-fluid">
      <h1 class="mt-4">Services</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="#">CREate PAge</a></li>
          <li class="breadcrumb-item active">Main</li>
      </ol>
  <form action="{{route('updateservice',$service->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
     
      @method('put')
          <div class="form-group col-md-4 mt-3">
              <div class="mb-3">
                  <label for="title"><h5>front aswome icon</h5></label>
              <input type="text" class="form-control" id="icon" value="{{$service->icon}}"name="icon">
              </div>
              <div class="mb-5">
                  <label for="sub_title"><h5> Title</h5></label>
                  <input type="text" class="form-control" id="title" value="{{$service->title}}"name="title" >
              </div>
              <div class="mb-5">
                <label for="sub_title"><h5>Description</h5></label>
                <textarea type="text" class="form-control" id="description" name="description">"{{$service->description}}" </textarea>
            </div>
             
          </div>
      </div>
      <input type="submit" name="submit" class="btn btn-primary mt-5">
  </div>
  </form>
</main>
@endsection