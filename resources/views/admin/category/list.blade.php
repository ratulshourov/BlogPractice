@extends('layouts.app')

@section('content')

<div class="container">
        <div class="content card-default">
            <div class="card card-header">
                <h2>Category</h2>
            </div>
            <div class="row justify content-center">
                <div class="col md-8 offset-md-2">
                    <div class="card card-body">

                        <ul class="list-group my-5">
                            <?php $i=0;?>
                            @foreach($categoryList as $dt)
                            <li class="list-group-item">{{ ++$i }}.{{ $dt->name }}
                                <a href="/todos/{{ $dt->id }}" class="btn btn-primary btn-sm float-right">View</a>
                                <a href="/todos/destroy/{{ $dt->id }}" class="btn btn-danger btn-sm float-right">Delete</a>
                            </li>

                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>

        </div>
   

@endsection