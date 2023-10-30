@extends('layouts.admin_layout')
@section('main')
<main>
  <div class="container-fluid">
      <h1 class="mt-4">Services</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="#">CREate PAge</a></li>
          <li class="breadcrumb-item active">Main</li>
      </ol>
  <form action="{{route('submitProtfollio')}}" method="POST" enctype="multipart/form-data">
      @csrf
     
      
          <div class="form-group col-md-4 mt-3">
              <div class="mb-3">

                  <label for="title"><h5>title</h5></label>
              <input type="text" class="form-control" id="title" name="title">
              </div> 
              <div class="mb-5">
                  <label for="sub_title"><h5> subtitle</h5></label>
                  <input type="text" class="form-control" id="subtitle" name="subtitle" >
              </div>
             
            <div class="mb-5">
                <label for="sub_title"><h5>Client</h5></label>
                <input type="text" class="form-control" id="client" name="client" >
            </div>
            <div class="mb-5">
                <label for="sub_title"><h5>Catagory</h5></label>
                <input type="text" class="form-control" id="catagory" name="catagory" >
            </div>

            





              <div class="mb-5">
                <label for="sub_title"><h5>Description</h5></label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
            </div>

            <div class="mb-5">
                <label for="sub_title"><h5> big image</h5></label>
                <img  style="height:70px,weight:70px"   src="" class="img-thumbnail">
                <input type="file" clafiles="form-control" id="big_image" name="big_image" >
            </div>
            <div class="mb-5">
                <label for="sub_title"><h5> small_image</h5></label>
                <img  style="height:40px,weight:40px"   src="" class="img-thumbnail">
                <input type="file" clafiless="form-control" id="small_image" name="small_image" >
            </div>
             
          </div>
      </div>
      <input type="submit" name="submit" class="btn btn-primary mt-5">
  </div>
  </form>
</main>
@endsection