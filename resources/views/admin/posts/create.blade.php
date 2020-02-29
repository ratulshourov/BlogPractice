@extends('layouts.app')
@section('content')
<div>
    <h2 class="text-center">
        Create Post
    </h2>
</div>
<form action="post-store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea type="text" name="description" rows="5" cols="5" class="form-control" id="exampleInputPassword1" name="description"></textarea>
    </div>
    <div >
        <select name="category">
            @foreach($category as $data)

            <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>

       
    </div>
    <div >
        <select name="activeStatus">
           <option >Please Select Status</option>
           <option value="1" >Active</option>
           <option value="0" >Inactive</option>
        </select>

       
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">File</label>
        <input type="file" name="image" />
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection