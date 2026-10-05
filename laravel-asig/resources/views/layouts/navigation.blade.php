<header class="sticky top-0 z-20 border-b border-[#dcded4] bg-[#f8f7f2]/95 shadow-sm backdrop-blur">
    <nav aria-label="メインナビゲーション" class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-6 py-3 sm:px-8">
        <a href="{{ route('dashboard') }}" class="text-base font-semibold tracking-wide text-[#344239]">
            ことばの本棚
        </a>
        <div class="flex flex-wrap items-center gap-3 sm:gap-5">
            <a href="{{ route('dashboard') }}" class="text-sm font-medium text-[#536054] transition hover:text-[#263c2d]">本一覧</a>
            <a href="{{ route('books.create') }}" class="rounded-lg bg-[#536b55] px-3 py-2 text-sm font-medium text-white transition hover:bg-[#405642]">本を作る</a>
            <span class="hidden text-sm text-[#73786e] sm:inline">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="rounded-lg border border-[#cfd4c9] px-3 py-2 text-sm font-medium text-[#536054] transition hover:border-[#879583] hover:bg-[#e9ece4] focus:outline-none focus:ring-2 focus:ring-[#82917e]">ログアウト</button>
            </form>
        </div>
    </nav>
</header>
