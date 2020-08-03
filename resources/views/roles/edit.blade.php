@extends('LayoutMaster.layout')
@section('content')


    <form action="{{route('roleupdate', $role->id)}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text"  name="title" class="form-control" value="{{$role->title}}">
            <button type="submit" class="btn btn-primary">update</button>
        </div>
    </form>


@endsection