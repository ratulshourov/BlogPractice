@extends('layouts.app')
@section('content')
    <div>
        <h2 class="text-center">
            Contact Us
        </h2>
    </div>
    <form action="/contact-entry" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">From</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea type="text" name="description" rows="5" cols="5" class="form-control" id="exampleInputPassword1"
                      name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
