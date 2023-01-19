@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a class="btn btn-outline-primary" href="{{ route('books.index') }}"> Go to Index Page </a>
                <form action="{{route('books.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nameleInput" placeholder="Enter name">
                        @error('name')
                        <div class="alert alert-danger" > {{$message}} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                            <label for="descriptionInput">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"  id="descriptionInput" rows="3"></textarea>
                        @error('description')
                        <div class="alert alert-danger" > {{$message}} </div>
                        @enderror
                    </div>

                    <div>
                        <label for="PageCountInput">Page count</label>
                        <input type="number" name="PageCount" class="form-control @error('PageCount') is-invalid @enderror" id="PageCountInput" >
                        @error('PageCount')
                            <div class="alert alert-danger" > {{$message}} </div>
                        @enderror
                    </div>

                    <div>
                        <label for="AuthorInput">Author</label>
                        <select class="form-select"  name="author_id" id="AuthorInput">
                            @foreach($authors as $author)
                                <option value="{{ $author->id  }}"> {{ $author->name }} </option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-outline-success" type="submit"> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

