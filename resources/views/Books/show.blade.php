@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-outline-primary" href="{{ route('books.index') }}"> Go to Index page </a>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->name }}</h5>
                        <p class="card-text" >{{ $book->description }} </p>
                        <p class="text-end"> Author:<a href="">{{ $book->author->name  }}</a></p>
                        <a href="{{ route('books.edit', $book->id) }} " class="btn btn-primary">Edit</a>
                    </div>
                </div>
        </div>
    </div>

@endsection
