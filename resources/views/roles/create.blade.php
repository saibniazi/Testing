@extends('LayoutMaster.layout')
@section('content')


<form action="{{route('rolestore')}}" method="post">
       @csrf
    <div class="form-group">
        <label for="">New Roles</label>
        <input type="text"  name="title" class="form-control"placeholder="Enter roles">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>


@endsection