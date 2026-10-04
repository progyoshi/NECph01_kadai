<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>

    <p>ログインしています。</p>

    <p>ユーザー名：{{ auth()->user()->name }}</p>
    <p>メールアドレス：{{ auth()->user()->email }}</p>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
</body>

</html>