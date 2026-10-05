<article class="relative {{ $depth > 0 ? 'ml-4 border-l-2 border-emerald-200 pl-5 sm:ml-8 sm:pl-7' : '' }} {{ $depth > 0 ? 'mt-4' : '' }}">
    <span class="absolute -left-[7px] top-5 h-3 w-3 rounded-full border-2 border-white bg-emerald-500 shadow-sm" aria-hidden="true"></span>

    <div class="rounded-xl border border-emerald-100 bg-emerald-50/50 p-4 transition hover:border-emerald-200 hover:bg-emerald-50 sm:p-5">
        <p class="whitespace-pre-wrap leading-7 text-stone-800">{{ $sentence->body }}</p>

        <div class="mt-4 flex flex-col gap-3 border-t border-emerald-100 pt-3 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm text-stone-500">
                <span class="mr-1 text-emerald-700" aria-hidden="true">✿</span>
                作成者：{{ $sentence->user->name }}
            </p>
            <div class="flex flex-wrap gap-2 text-sm">
                <a href="{{ route('books.sentences.show', [$book, $sentence]) }}" class="rounded-lg px-3 py-2 font-medium text-emerald-800 transition hover:bg-white hover:text-emerald-950">
                    文章の詳細
                </a>
                <a href="{{ route('books.sentences.create', [$book, $sentence]) }}" class="rounded-lg bg-emerald-700 px-3 py-2 font-medium text-white transition hover:bg-emerald-800">
                    ＋続きを書く
                </a>
            </div>
        </div>
    </div>

    @foreach ($sentence->children()->with('user')->get() as $child)
    @include('sentences._tree', [
    'book' => $book,
    'sentence' => $child,
    'depth' => $depth + 1,
    ])
    @endforeach
</article>