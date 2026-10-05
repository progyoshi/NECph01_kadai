@extends('layouts.app')

@section('title', '本を作る | ことばの本棚')

@section('content')
<div class="mx-auto max-w-2xl rounded-2xl border border-[#dcded4] bg-white p-6 shadow-sm sm:p-8">
    <p class="mb-2 text-sm font-medium tracking-wide text-[#71836f]">新しい物語</p>
    <h1 class="mb-6 text-2xl font-semibold text-[#303a32]">本を作る</h1>
    <form method="POST" action="{{ route('books.store') }}" class="space-y-5">
        @csrf
        <div>
            <label for="title" class="mb-2 block text-sm font-medium text-[#465348]">本のタイトル</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required maxlength="39" class="w-full rounded-lg border border-[#cfd4c9] px-4 py-3 focus:border-[#71836f] focus:outline-none focus:ring-2 focus:ring-[#dce5d8]" placeholder="タイトルを入力してください">
            @error('title')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="body" class="mb-2 block text-sm font-medium text-[#465348]">最初の文章</label>
            <textarea id="body" name="body" required maxlength="99" rows="5" class="w-full rounded-lg border border-[#cfd4c9] px-4 py-3 focus:border-[#71836f] focus:outline-none focus:ring-2 focus:ring-[#dce5d8]" placeholder="物語の始まりを書いてください">{{ old('body') }}</textarea>
            @error('body')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="w-full rounded-lg bg-[#536b55] px-4 py-3 font-medium text-white transition hover:bg-[#405642]">本を作る</button>
    </form>
</div>
@endsection
