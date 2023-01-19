@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('books.create') }}" class="btn btn-outline-primary">Go To Creat Page </a> <br>
                @foreach($books as $book)
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->name }}</h5>
                            <p class="card-text" >{{ $book->description }} </p>
                            <form action="{{ route('books.destroy', $book->id)  }}" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-primary" href="{{route('books.show', $book->id)}}"> READ MORE </a>
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger" type="submit"> DELETE </button>
                                    </div>
                                    <div class="col-6 " style="border: 3px black;">
                                        <p class="text-end"> Author:<a href="">{{ $book->author->name  }}</a></p>
                                    </div>`
                                </div>

                            </form>

                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
@endsection
