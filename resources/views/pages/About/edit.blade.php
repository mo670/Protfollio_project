@extends('layouts.admin_layout')
@section('main')
<main>
  <div class="container-fluid">
      <h1 class="mt-4">ABOUT</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="#">edit PAge</a></li>
          <li class="breadcrumb-item active">Main</li>
      </ol>
  <form action="{{route('updateabout', $about->id)}}" method="POST" enctype="multipart/form-data">
      @csrf

      @method('PATCH')
      
      <div class="form-group col-md-4 mt-3">
        <div class="mb-3">

            <label for="title"><h5>title1</h5></label>
        <input type="text" class="form-control" id="title1" name="title1" value="{{$about->title1}}">
        </div> 
        <div class="mb-5">
            <label for="sub_title"><h5> title2</h5></label>
            <input type="text" class="form-control" id="title2" name="title2"value="{{$about->title2}}">
        </div>
       
      <div class="mb-5">
          <label for="sub_title"><h5>image</h5></label>
          <img src="/img/{{$about->image}}" alt="no image">
          <input type="file" class="form-control" id="image" name="image"  >
      </div>
     

        <div class="mb-5">
          <label for="sub_title"><h5>Description</h5></label>
          <textarea type="text" class="form-control" id="description" name="description">"{{$about->description}}"</textarea>
      </div>

    
<input type="submit" name="submit" class="btn btn-primary mt-5">
</div>
</form>
</main>
@endsection