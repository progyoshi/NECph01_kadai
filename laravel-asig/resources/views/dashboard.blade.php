<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1 class="text-3xl text-blue-600 font-extrabold">Dashboard</h1>

    <p>ログインしています。</p>

    <p>ユーザー名：{{ auth()->user()->name }}</p>
    <p>メールアドレス：{{ auth()->user()->email }}</p>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
</body>

</html>