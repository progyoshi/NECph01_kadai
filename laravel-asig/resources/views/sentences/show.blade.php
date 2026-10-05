@extends('layouts.app')

@section('title', '文章の詳細 | ' . $book->title)

@section('content')
<div class="mx-auto max-w-3xl">
    <a href="{{ route('books.show', $book) }}" class="mb-5 inline-flex text-sm font-medium text-[#536b55] hover:text-[#344239]">← {{ $book->title }} に戻る</a>
    <article class="rounded-2xl border border-[#dcded4] bg-white p-6 shadow-sm sm:p-8">
        <p class="whitespace-pre-wrap wrap-break-word text-lg leading-8 text-[#303a32]">{{ $sentence->body }}</p>
        <p class="mt-6 border-t border-[#e5e7df] pt-4 text-sm text-[#73786e]">作成者：{{ $sentence->user->name }}</p>
        <a href="{{ route('books.sentences.create', [$book, $sentence]) }}" class="mt-5 inline-flex rounded-lg bg-[#536b55] px-4 py-3 text-sm font-medium text-white transition hover:bg-[#405642]">＋ この文章の続きを書く</a>
    </article>
</div>
@endsection
