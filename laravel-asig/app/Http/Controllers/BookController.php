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
            'title' => ['required', 'string', 'max:39'],
            'body' => ['required', 'string', 'max:99'],
        ]);

        $book = $request->user()->books()->create([
            'title' => $validated['title'],
        ]);

        $book->sentences()->create([
            'body' => $validated['body'],
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('books.show', ['book' => $book->id]);
    }


    public function show(Book $book)
    {
        $sentences = $book->sentences()
            ->with('user')
            ->whereNull('parent_id')
            ->get();

        return view('books.show', [
            'book' => $book,
            'sentences' => $sentences,
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
