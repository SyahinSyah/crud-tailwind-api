<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'books' =>  Book::paginate(5)
            ]);
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        // Book::create($request->except(['_tokens']));


        // explaination (long code)
        $book = new Book();
        $book->name = $request->name;
        $book->quantity = $request->quantity;
        $book->description = $request->description;
        $book->save();
        return redirect('/books');





    }
}
