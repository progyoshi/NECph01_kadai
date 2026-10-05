@extends('layouts.app')

@section('title', '続きを書く | ' . $book->title)

@section('content')
<div class="mx-auto max-w-2xl">
    <a href="{{ route('books.show', $book) }}" class="mb-5 inline-flex text-sm font-medium text-[#536b55] hover:text-[#344239]">← {{ $book->title }} に戻る</a>
    <section class="rounded-2xl border border-[#dcded4] bg-white p-6 shadow-sm sm:p-8">
        <p class="mb-2 text-sm font-medium tracking-wide text-[#71836f]">物語の続きを</p>
        <h1 class="text-2xl font-semibold text-[#303a32]">続きを書く</h1>
        <div class="mt-5 rounded-xl bg-[#f3f5ef] p-4">
            <p class="mb-2 text-xs font-semibold tracking-wide text-[#71836f]">元の文章</p>
            <p class="whitespace-pre-wrap leading-7 text-[#465348]">{{ $parentSentence->body }}</p>
        </div>
        <form method="POST" action="{{ route('books.sentences.store', [$book, $parentSentence]) }}" class="mt-6 space-y-4">
            @csrf
            <div>
                <label for="body" class="mb-2 block text-sm font-medium text-[#465348]">あなたの文章</label>
                <textarea id="body" name="body" rows="5" required class="w-full rounded-lg border border-[#cfd4c9] px-4 py-3 focus:border-[#71836f] focus:outline-none focus:ring-2 focus:ring-[#dce5d8]" placeholder="続きを書いてください">{{ old('body') }}</textarea>
                @error('body')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="w-full rounded-lg bg-[#536b55] px-4 py-3 font-medium text-white transition hover:bg-[#405642]">投稿する</button>
        </form>
    </section>
</div>
@endsection
