@extends('layouts.admin_layout')
@section('main')
<table class="table">
    <thead>
      
        <tr>
        
        
        <th scope="col">Title</th>
        <th scope="col">subTitle</th>
        <th scope="col">client</th>
        <th scope="col">Catagory</th>
        <th scope="col">Description</th>
        <th scope="col">big image</th>
        <th scope="col">small image</th>
         <th scope="col">Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($protfollio as $protfollio)

        
            
       
        <td>{{$protfollio->title}}</td>
        <td>{{$protfollio->subtitle}}</td>
        <td>{{$protfollio->client}}</td>
        <td>{{$protfollio->catagory}}</td>
        <td>{{$protfollio->description}}</td>
        
        <td>
          <img  style="width: 90px"  src="/img/{{$protfollio->big_image}}" alt="nothing">
        </td>

            <td>
              <img style="width:40px"      src="/img/{{$protfollio->small_image}}" alt="nothing">
            </td>

        <td>
           
           <a class="btn btn-danger btn-sm" href="{{route('editprotfollio',$protfollio->id)}}">edit</a> 
           <a class="btn btn-warning btn-sm" href="{{route('deleteprotfollio',$protfollio->id)}}">Delete</a> 
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection