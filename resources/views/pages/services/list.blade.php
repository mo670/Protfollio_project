@extends('layouts.admin_layout')
@section('main')
<table class="table">
    <thead>
      
        <tr>
        
        <th scope="col">Icon</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($service as $service)
            
       
        <td>{{$service->icon}}</td>
        <td>{{$service->title}}</td>
        <td>{{$service->description}}</td>

        <td>
           
           <a class="btn btn-danger btn-sm" href="{{url('editservice',$service->id)}}">Update</a> 
           <a class="btn btn-warning btn-sm" href="{{url('deleteservice',$service->id)}}">Delete</a> 
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection