<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
</head>

<body>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
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