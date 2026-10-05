<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BookController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:39']
        ]);
        $book = $request->user()->books()->create($validated);

        return redirect()->route('books.show', $book);
    }


    public function show(Book $book)
    {


        return view('books.show', [
            'book' => $book,
        ]);
    }

    public function index()
    {
        return view('books.index');
    }

    public function create()
    {
        return view('books.create');
    }
}
