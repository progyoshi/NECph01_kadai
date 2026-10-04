<!DOCTYPE html>
<html lang="ja">
<!-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) -->
<!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
</head>

<body>
    <h1>ユーザー登録</h1>

    <form method="POST" action="/register">
        @csrf

        <div>
            <label for="name">名前</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required>
        </div>

        <div>
            <label for="email">メールアドレス</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required>
        </div>

        <div>
            <label for="password">パスワード</label>
            <input
                type="password"
                id="password"
                name="password"
                required>
        </div>

        <div>
            <label for="password_confirmation">パスワード（確認）</label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                required>
        </div>

        <button type="submit">登録</button>
    </form>

    <a href="/login">ログインはこちら</a>
</body>

</html>