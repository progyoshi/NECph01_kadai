<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン | ことばの本棚</title>
</head>

<body class="min-h-screen bg-[#f3f1e9] text-[#303a32] antialiased selection:bg-[#c8d2c3]">
    <main class="flex min-h-screen items-center justify-center px-5 py-12">
        <div class="w-full max-w-md">
            <a href="/login" class="mb-8 flex items-center justify-center gap-3 text-sm font-semibold tracking-wide text-[#344239]">
                <span>ことばの本棚</span>
            </a>

            <section class="overflow-hidden rounded-2xl border border-[#dedfd6] bg-[#fbfaf6] shadow-[0_18px_50px_rgba(55,65,52,0.08)]">
                <div class="border-b border-[#e5e5dc] px-6 py-6 sm:px-8">
                    <p class="mb-2 text-xs font-medium tracking-[0.2em] text-[#83907e]">おかえりなさい</p>
                    <h1 class="text-2xl font-semibold tracking-tight text-[#303a32]">ログイン</h1>
                    <p class="mt-2 text-sm leading-6 text-[#777b72]">いつもの場所で、続きを綴りましょう。</p>
                </div>

                <div class="px-6 py-7 sm:px-8">
                    @if ($errors->any())
                    <div role="alert" class="mb-6 rounded-xl border border-[#d9b9ad] bg-[#f6ebe6] px-4 py-3 text-sm text-[#805446]">
                        <ul class="list-inside list-disc space-y-1">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="/login" class="space-y-5">
                        @csrf

                        <div>
                            <label for="name" class="mb-2 block text-sm font-medium text-[#4c574c]">ユーザー名</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="username"
                                class="w-full rounded-xl border border-[#d9dbd1] bg-[#f7f6f0] px-4 py-3 text-[#303a32] outline-none transition placeholder:text-[#a3a499] focus:border-[#879783] focus:ring-2 focus:ring-[#879783]/20">
                        </div>

                        <div>
                            <label for="password" class="mb-2 block text-sm font-medium text-[#4c574c]">パスワード</label>
                            <input type="password" id="password" name="password" required autocomplete="current-password"
                                class="w-full rounded-xl border border-[#d9dbd1] bg-[#f7f6f0] px-4 py-3 text-[#303a32] outline-none transition placeholder:text-[#a3a499] focus:border-[#879783] focus:ring-2 focus:ring-[#879783]/20">
                        </div>

                        <label class="flex cursor-pointer items-center gap-3 text-sm text-[#73786e]">
                            <input type="checkbox" name="remember" class="size-4 rounded border-[#c7cbbf] bg-[#f7f6f0] text-[#71816e] focus:ring-[#879783] focus:ring-offset-[#fbfaf6]">
                            ログイン状態を保持する
                        </label>

                        <button type="submit" class="w-full rounded-xl bg-[#71816e] px-4 py-3 font-semibold text-white transition hover:bg-[#5f705d] focus:outline-none focus:ring-2 focus:ring-[#71816e] focus:ring-offset-2 focus:ring-offset-[#fbfaf6]">
                            ログイン
                        </button>
                    </form>
                </div>
            </section>

            <p class="mt-6 text-center text-sm text-[#777b72]">
                はじめての方は
                <a href="/register" class="font-semibold text-[#637660] underline-offset-4 hover:text-[#465a47] hover:underline">ユーザー登録</a>
            </p>
        </div>
    </main>
</body>

</html>