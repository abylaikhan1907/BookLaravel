<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        return view('Books.index',['books'=>Book::all()]);
    }

    public function create()
    {
        return view('Books.create', ['authors'=>Author::all()]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:255',
            'description'=>'required',
            'PageCount'=>'required|numeric',
            'author_id'=>'required|exists:authors,id'
        ]);
        Book::create($validated);
        return redirect()->route('books.index')->with('message','successfully stored');
    }

    public function show(Book $book)
    {
        return view('Books.show',['book'=>$book]);
    }

    public function edit(Book $book)
    {
        return view('Books.edit', ['book'=>$book, 'authors'=>Author::all()]);
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'PageCount'=>$request->input('PageCount'),
            'author_id'=>$request->input('author_id')
        ]);
        return redirect()->route('books.index');
    }


    public function destroy(){
        return redirect()->route('books.index');
    }
}
