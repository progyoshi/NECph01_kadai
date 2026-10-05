<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
</head>

<body class="min-h-screen bg-[#f3f1e9] text-[#303a32] antialiased selection:bg-[#c8d2c3]">
    <div class="min-h-screen bg-[radial-gradient(ellipse_at_top,_rgba(129,143,119,0.13),_transparent_52%)]">
        <header class="border-b border-[#dcded4] bg-[#f8f7f2]/85">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4 sm:px-8">
                <a href="/dashboard" class="flex items-center gap-3 text-sm font-semibold tracking-wide text-[#344239]">
                    <span>ことばの本棚</span>
                </a>
                <a href="route('books.index')" class="flex items-center gap-3 text-sm font-semibold tracking-wide text-[#344239]">
                    <span>本棚を見る</span>
                </a>
                <a href="route('books.create')" class="flex items-center gap-3 text-sm font-semibold tracking-wide text-[#344239]">
                    <span>本を作る</span>
                </a>
                <div class="flex">{{auth()->user()->name}}
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="rounded-lg border border-[#cfd4c9] px-4 py-2 text-sm font-medium text-[#536054] transition hover:border-[#879583] hover:bg-[#e9ece4] focus:outline-none focus:ring-2 focus:ring-[#82917e] focus:ring-offset-2 focus:ring-offset-[#f3f1e9]">
                            ログアウト
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-6 py-14 sm:px-8 sm:py-20">
            <div class="mb-10 max-w-2xl">
                <p class="mb-3 text-xs font-semibold tracking-[0.2em] text-[#7b8977]">MY PAGE</p>
                <h1 class="text-3xl font-semibold leading-tight tracking-tight text-[#303a32] sm:text-4xl">ことばを綴る、<br class="sm:hidden">みんなの本棚。</h1>
                <p class="mt-4 text-base leading-7 text-[#73786e]">ここに集まる文章が、少しずつ一冊の本になっていきます。</p>
            </div>
        </main>
    </div>
</body>

</html>