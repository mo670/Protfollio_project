@extends('layouts.admin_layout')
@section('main')
<table class="table">
    <thead>
      
        <tr>
        
        
        <th scope="col">Title1</th>
        <th scope="col">Title2</th>
        <th scope="col">image</th>
    
        <th scope="col">Description</th>
        
         <th scope="col">Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($about as $about)

        
            
       
        <td>{{$about->title1}}</td>
        <td>{{$about->title2}}</td>
        <td>
          <img  style="width: 90px" src="/img/{{$about->image}}" alt="nothing">
        </td>
        
        <td>{{$about->description}}</td>
        

        <td>
           
           <a class="btn btn-danger btn-sm" href="{{route('editabout',$about->id)}}">edit</a> 
           <a class="btn btn-warning btn-sm" href="{{route('deleteabout',$about->id)}}">Delete</a> 
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection