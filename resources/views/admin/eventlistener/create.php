@extends('layouts.app')
@section('content')
<div>
    <h2 class="text-center">
        Contact Us
    </h2>
</div>
<form action="{{ route('event.create') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">From</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email">

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
