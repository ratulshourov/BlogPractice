@extends('layouts.app')

@section('content')

<form action="/catgory-store" method="post">
@csrf
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" name ="name" id="" aria-describedby="emailHelp">
    
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection