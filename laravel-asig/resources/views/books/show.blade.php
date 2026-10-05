<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $book->title }} | 文章の木</title>
</head>

<body class="min-h-screen bg-stone-50 text-stone-800">
    <main class="mx-auto max-w-4xl px-4 py-10 sm:px-6">
        <header class="mb-8 rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm sm:p-8">
            <p class="mb-2 text-sm font-medium tracking-wide text-emerald-700">みんなで育てる物語</p>
            <h1 class="text-3xl font-bold tracking-tight text-stone-800 sm:text-4xl">{{ $book->title }}</h1>
        </header>

        <section aria-label="文章一覧" class="rounded-2xl border border-stone-200 bg-white p-5 shadow-sm sm:p-8">
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
    </main>
</body>

</html>