@extends('LayoutMaster.layout')
@section('content')
<div>
    <h1>All User</h1>
    <a href="{{route('usercreate')}}">
    <button>Add new user</button>
    </a>
</div><hr>
<div>
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Contact</th>
            <th scope="col">image</th>
            <th scope="">Roles</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->country}}</td>
            <td>{{$user->contact}}</td>
            <td><img src="{{asset($user->photo)}}" alt="no image"></td>
            @foreach($userpro as $upro)
            <td>{{$upro->rolename}}, </td>
            @endforeach
            <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Edit</button>
                <button type="button" class="btn btn-secondary">Delete</button>
                </div>
            </td>
        </tr>
    @endforeach    
    </tbody>
    </table>
</div>
@endsection