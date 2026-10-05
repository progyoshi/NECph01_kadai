<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body class="min-h-screen bg-[#0b0b0d] text-zinc-100 antialiased selection:bg-red-500/30">
    <div class="min-h-screen bg-[radial-gradient(ellipse_at_top,_rgba(239,68,68,0.10),_transparent_48%)]">
        <header class="border-b border-white/10 bg-black/30">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5">
                <a href="/dashboard" class="flex items-center gap-3 text-sm font-semibold tracking-wide text-white">
                    <span class="grid size-9 place-items-center rounded-xl bg-red-600 text-lg font-black shadow-lg shadow-red-950/40">L</span>
                    <span>Laravel <span class="text-zinc-500">/</span> Dashboard</span>
                </a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="rounded-lg border border-white/15 px-4 py-2 text-sm font-medium text-zinc-300 transition hover:border-red-400/60 hover:bg-red-500/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-[#0b0b0d]">
                        ログアウト
                    </button>
                </form>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-6 py-14 sm:py-20">
            <div class="mb-10">
                <p class="mb-3 text-xs font-bold uppercase tracking-[0.24em] text-red-400">Workspace</p>
                <h1 class="text-4xl font-black tracking-tight text-white sm:text-5xl">Dashboard<span class="text-red-500">.</span></h1>
                <p class="mt-4 text-base text-zinc-400">ログインしています。</p>
            </div>

            <section aria-labelledby="account-heading" class="max-w-2xl overflow-hidden rounded-2xl border border-white/10 bg-zinc-900/80 shadow-2xl shadow-black/30">
                <div class="border-b border-white/10 px-6 py-5 sm:px-8">
                    <h2 id="account-heading" class="text-lg font-bold text-white">アカウント</h2>
                    <p class="mt-1 text-sm text-zinc-400">現在ログイン中のユーザー情報</p>
                </div>
                <div class="flex items-center gap-4 px-6 py-7 sm:px-8">
                    <div class="grid size-12 shrink-0 place-items-center rounded-full bg-red-500/15 text-lg font-bold text-red-300 ring-1 ring-inset ring-red-400/25">
                        {{ mb_substr(auth()->user()->name, 0, 1) }}
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-semibold uppercase tracking-wider text-zinc-500">ユーザー名</p>
                        <p class="mt-1 truncate text-lg font-semibold text-white">{{ auth()->user()->name }}</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>