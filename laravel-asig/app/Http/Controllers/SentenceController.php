<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Sentence;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    //
    public function index()
    {
        return view('sentence.index');
    }

    public function create(Book $book, Sentence $sentence)
    {
        return view('sentences.create', [
            'book' => $book,
            'parentSentence' => $sentence,
        ]);
    }

    public function store(Request $request, Book $book, Sentence $sentence)
    {
        $validated = $request->validate([
            'body' => ['required', 'string'],
        ]);

        $book->sentences()->create([
            'body' => $validated['body'],
            'user_id' => $request->user()->id,
            'parent_id' => $sentence->id,
        ]);

        return redirect()->route('books.show', [
            'book' => $book->id,
        ]);
    }
    
    public function show(Book $book, Sentence $sentence)
    {
        $sentence->load('user');

        return view('sentences.show', [
            'book' => $book,
            'sentence' => $sentence,
        ]);
    }
}
