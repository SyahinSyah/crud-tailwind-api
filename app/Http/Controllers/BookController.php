<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
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

    // public function store(Request $request)
    // {
    //     // dd($request);
    
    //     // // explaination (long code)
    //     // $book = new Book();
    //     // $book->name = $request->name;
    //     // $book->quantity = $request->quantity;
    //     // $book->description = $request->description;
    //     // $book->save();
       

    //     // or

    //     Book::create($request->except([ '_tokens']));

    //     return redirect('/books');
    // }

    public function store(BookRequest $request)
    {
        Book::create($request->except('_tokens'));

        return redirect('books');
    }

    public function update(Book $book)
    {
        return view('book.update' , [
            'book' => $book 
        ]);
    }

    // or

    // public function update($book)
    // {
    //     $bookObj = Book::find($book);

    //     return  view('book.update' , [
    //         'book' =>$bookObj
    //     ]);

    // }


    public function updated(Book $book , BookRequest $request)
    {
        $book->update($request->except('_tokens'));

        return redirect('/books');
    }
    
    // or

    // public function updated(BookRequest $request, $book)
    // {
    //     $newbook = Book::find($book);

    //     $newbook->name = $request->name;
    //     $newbook->quantity = $request->quantity;
    //     $newbook->description = $request->description;
    //     $newbook->save();

    //     return redirect('/books');

    // }
        public function destroy(Book $book)
        {
            $book->delete();
            return redirect('/books');
        }



}

