<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::orderBy('created_at', 'DESC')->get();
        return view('books.index', compact('books'));
    }


    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($request->validate([
            'title' => 'required|min:5',
            'author' => 'required',
            'year' => 'required|integer'
        ]));
        return redirect('/books');
    }
}
