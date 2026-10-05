@extends('layouts.app')

@section('title', $book->title . ' | 文章の木')

@section('content')
<div class="mx-auto max-w-4xl">
    <header class="mb-8 rounded-2xl border border-[#dcded4] bg-white p-6 shadow-sm sm:p-8">
        <p class="mb-2 text-sm font-medium tracking-wide text-[#71836f]">みんなで育てる物語</p>
        <h1 class="wrap-break-word text-3xl font-bold tracking-tight text-[#303a32] sm:text-4xl">{{ $book->title }}</h1>
            @if ((int) auth()->user()->getAuthIdentifier() === (int) $book->user_id)
        <div class="mt-5 flex flex-wrap gap-3 border-t border-[#e5e7df] pt-5">
            <a href="{{ route('books.edit', $book) }}" class="rounded-lg border border-[#cfd4c9] px-4 py-2 text-sm font-medium text-[#536054] transition hover:bg-[#f3f5ef]">タイトルを編集</a>
            <form method="POST" action="{{ route('books.destroy', $book) }}" onsubmit="return confirm('この本と、投稿された文章をすべて削除します。よろしいですか？');">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-lg border border-rose-200 px-4 py-2 text-sm font-medium text-rose-700 transition hover:bg-rose-50">本を削除</button>
            </form>
        </div>
        @endif
    </header>

    <section aria-label="文章一覧" class="rounded-2xl border border-[#dcded4] bg-white p-5 shadow-sm sm:p-8">
        @forelse ($sentences as $sentence)
        @include('sentences._tree', [
        'book' => $book,
        'sentence' => $sentence,
        'depth' => 0,
        ])
        @empty
        <div class="rounded-xl border border-dashed border-emerald-200 bg-emerald-50/60 px-6 py-10 text-center">
            <p class="text-2xl" aria-hidden="true">🌿</p>
            <p class="mt-3 font-medium text-emerald-900">この本にはまだ文章がありません</p>
        </div>
        @endforelse
    </section>
</div>
@endsection
