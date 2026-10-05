@extends('layouts.app')

@section('title', '本を編集 | ' . $book->title)

@section('content')
<div class="mx-auto max-w-2xl rounded-2xl border border-[#dcded4] bg-white p-6 shadow-sm sm:p-8">
    <p class="mb-2 text-sm font-medium tracking-wide text-[#71836f]">本の設定</p>
    <h1 class="mb-6 text-2xl font-semibold text-[#303a32]">本を編集</h1>
    <form method="POST" action="{{ route('books.update', $book) }}" class="space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="mb-2 block text-sm font-medium text-[#465348]">本のタイトル</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required maxlength="39" class="w-full rounded-lg border border-[#cfd4c9] px-4 py-3 focus:border-[#71836f] focus:outline-none focus:ring-2 focus:ring-[#dce5d8]">
            @error('title')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-wrap gap-3">
            <button type="submit" class="rounded-lg bg-[#536b55] px-5 py-3 font-medium text-white transition hover:bg-[#405642]">保存する</button>
            <a href="{{ route('books.show', $book) }}" class="rounded-lg border border-[#cfd4c9] px-5 py-3 font-medium text-[#536054] transition hover:bg-[#f3f5ef]">戻る</a>
        </div>
    </form>
</div>
@endsection