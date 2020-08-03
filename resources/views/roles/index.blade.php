@extends('LayoutMaster.layout')
@section('content')
<h1>All  roles of users</h1>

<a href="{{route('rolecreate')}}"><button>Add new roles</button></a>

<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">User</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($roles as $rol)
    <tr>
      
      <td>{{$rol->id}}</td>
      <td>{{$rol->title}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <form action="{{route('roledestroy', $rol->id)}}" method="post">
            @csrf
            <button type="submit" class="btn btn-secondary">Delete</button>
            </form>
            <a href="{{route('roleedit', $rol->id)}}"><button type="button" class="btn btn-secondary">Edit</button></a>

        </div>
      </td>
    </tr>
     @endforeach
  </tbody>
</table>
@endsection