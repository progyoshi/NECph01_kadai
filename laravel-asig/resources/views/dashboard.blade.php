@extends('layouts.app')

@section('title', '本一覧 | ことばの本棚')

@section('content')
<section>
    @if (session('status'))
        <p role="status" class="mb-5 rounded-xl border border-[#cbd8c6] bg-[#edf3e9] px-4 py-3 text-sm text-[#405642]">{{ session('status') }}</p>
    @endif
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div class="max-w-2xl">
            <p class="mb-3 text-xs font-semibold tracking-[0.2em] text-[#7b8977]">MY BOOKSHELF</p>
            <h1 class="text-3xl font-semibold leading-tight tracking-tight text-[#303a32] sm:text-4xl">ことばを綴る、みんなの本棚。</h1>
            <p class="mt-3 text-base leading-7 text-[#73786e]">ここに集まる文章が、少しずつ一冊の本になっていきます。</p>
        </div>
        <a href="{{ route('books.create') }}" class="inline-flex shrink-0 items-center justify-center rounded-xl bg-[#536b55] px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#405642]">＋ 本を作る</a>
    </div>

    @if ($books->isEmpty())
        <div class="rounded-2xl border border-dashed border-[#cfd4c9] bg-white/70 px-6 py-12 text-center">
            <p class="text-3xl" aria-hidden="true">🌱</p>
            <p class="mt-3 font-medium text-[#344239]">本棚はまだ空です</p>
            <p class="mt-1 text-sm text-[#73786e]">最初の本を作って、物語を始めましょう。</p>
        </div>
    @else
        <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($books as $book)
                <li>
                    <a href="{{ route('books.show', $book) }}" class="group block h-full rounded-2xl border border-[#dcded4] bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-[#aab7a5] hover:shadow-md">
                        <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#edf0e8] text-lg text-[#536b55]" aria-hidden="true">▤</span>
                        <h2 class="text-lg font-semibold text-[#344239] group-hover:text-[#536b55]">{{ $book->title }}</h2>
                        <p class="mt-2 text-sm text-[#73786e]">物語を読む <span aria-hidden="true">→</span></p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</section>
@endsection
