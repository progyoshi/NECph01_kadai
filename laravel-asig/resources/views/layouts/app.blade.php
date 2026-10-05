<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title', 'ことばの本棚')</title>
</head>

<body class="min-h-screen bg-[#f3f1e9] text-[#303a32] antialiased selection:bg-[#c8d2c3]">
    <div class="min-h-screen bg-[radial-gradient(ellipse_at_top,_rgba(129,143,119,0.13),_transparent_52%)]">
        @include('layouts.navigation')
        <main class="mx-auto max-w-6xl px-6 py-10 sm:px-8 sm:py-14">
            @yield('content')
        </main>
    </div>
</body>

</html>
