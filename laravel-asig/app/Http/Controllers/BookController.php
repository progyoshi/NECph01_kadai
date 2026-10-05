<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        $books = Book::query()->latest()->get();

        return view('dashboard', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function edit(Request $request, Book $book)
    {
        abort_unless((int) $request->user()->getAuthIdentifier() === (int) $book->user_id, 403);

        return view('books.edit', [
            'book' => $book,
        ]);
    }

    public function update(Request $request, Book $book)
    {
        abort_unless((int) $request->user()->getAuthIdentifier() === (int) $book->user_id, 403);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:39'],
        ]);

        $book->update([
            'title' => $validated['title'],
        ]);

        return redirect()->route('books.show', $book);
    }

    public function destroy(Request $request, Book $book)
    {
        abort_unless((int) $request->user()->getAuthIdentifier() === (int) $book->user_id, 403);

        DB::transaction(function () use ($book) {
            $book->sentences()->update(['parent_id' => null]);
            $book->sentences()->delete();
            $book->delete();
        });

        return redirect()->route('dashboard')->with('status', '本を削除しました。');
    }
}
