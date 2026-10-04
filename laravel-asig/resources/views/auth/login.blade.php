<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>

<body>
    <h1>ログイン</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="/login">
        @csrf

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
            <label>
                <input type="checkbox" name="remember">
                ログイン状態を保持する
            </label>
        </div>

        <button type="submit">ログイン</button>
    </form>

    <a href="/register">ユーザー登録はこちら</a>
</body>

</html>