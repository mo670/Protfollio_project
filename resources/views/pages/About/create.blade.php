@extends('layouts.admin_layout')
@section('main')
<main>
  <div class="container-fluid">
      <h1 class="mt-4">Services</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="#">CREate PAge</a></li>
          <li class="breadcrumb-item active">Main</li>
      </ol>
  <form action="{{route('submitabout')}}" method="POST" enctype="multipart/form-data">
      @csrf
     
      
          <div class="form-group col-md-4 mt-3">
              <div class="mb-3">

                  <label for="title"><h5>title1</h5></label>
              <input type="text" class="form-control" id="title1" name="title1">
              </div> 
              <div class="mb-5">
                  <label for="sub_title"><h5> title2</h5></label>
                  <input type="text" class="form-control" id="title1" name="title2" >
              </div>
             
            <div class="mb-5">
                <label for="sub_title"><h5>image</h5></label>
                <input type="file" class="form-control" id="client" name="image" >
            </div>
           

              <div class="mb-5">
                <label for="sub_title"><h5>Description</h5></label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
            </div>

          
      <input type="submit" name="submit" class="btn btn-primary mt-5">
  </div>
  </form>
</main>
@endsection