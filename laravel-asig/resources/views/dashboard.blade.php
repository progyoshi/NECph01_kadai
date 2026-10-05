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
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="rounded-lg border border-[#cfd4c9] px-4 py-2 text-sm font-medium text-[#536054] transition hover:border-[#879583] hover:bg-[#e9ece4] focus:outline-none focus:ring-2 focus:ring-[#82917e] focus:ring-offset-2 focus:ring-offset-[#f3f1e9]">
                        ログアウト
                    </button>
                </form>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-6 py-14 sm:px-8 sm:py-20">
            <div class="mb-10 max-w-2xl">
                <p class="mb-3 text-xs font-semibold tracking-[0.2em] text-[#7b8977]">MY PAGE</p>
                <h1 class="text-3xl font-semibold leading-tight tracking-tight text-[#303a32] sm:text-4xl">ことばを綴る、<br class="sm:hidden">みんなの本棚。</h1>
                <p class="mt-4 text-base leading-7 text-[#73786e]">ここに集まる文章が、少しずつ一冊の本になっていきます。</p>
            </div>

            <section aria-labelledby="account-heading" class="max-w-2xl overflow-hidden rounded-2xl border border-[#dedfd6] bg-[#fbfaf6] shadow-[0_18px_50px_rgba(55,65,52,0.07)]">
                <div class="border-b border-[#e5e5dc] px-6 py-5 sm:px-8">
                    <p class="mb-1 text-xs font-medium tracking-[0.16em] text-[#879081]">YOUR ACCOUNT</p>
                    <h2 id="account-heading" class="text-lg font-semibold text-[#39463b]">書き手のプロフィール</h2>
                </div>
                <div class="flex items-center gap-4 px-6 py-7 sm:px-8">
                    <div class="grid size-12 shrink-0 place-items-center rounded-full border border-[#d5ddd0] bg-[#e8ece4] text-lg font-semibold text-[#657764]">
                        {{ mb_substr(auth()->user()->name, 0, 1) }}
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-medium tracking-wide text-[#85897f]">ユーザー名</p>
                        <p class="mt-1 truncate text-lg font-semibold text-[#394239]">{{ auth()->user()->name }}</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>