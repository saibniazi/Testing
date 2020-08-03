@extends('LayoutMaster.layout')
@section('content')
<div> 
    <h1>Create user </h1>
    <form action="{{route('userstore')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">City</label>
        <input type="text" class="form-control" name="city">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Country</label>
        <input type="text" class="form-control" name="country">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Contact</label>
        <input type="text" class="form-control" name="contact">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">photo</label>
        <input type="file" name="photo" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection