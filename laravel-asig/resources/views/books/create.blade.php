<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Book create</title>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="max-w-2xl mx-auto px-4 py-10">
        <div class="bg-white rounded-lg shadow p-8">
            <h1 class="text-2xl font-bold mb-6"> 本を作成する </h1>
            <form method="POST" action="{{ route('books.store') }}">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block font-medium mb-2"> 本のタイトル </label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2" placeholder="タイトルを入力してください">
                    <label for="body" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2" placeholder="最初の文章を入力してください">最初の文章</label>
                    <textarea id="body" name="body"></textarea>
                    @error('title')
                    <p class="text-red-500 text-sm mt-2"> {{ $message }} </p>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-black text-white py-2 rounded-lg hover:bg-gray-800"> 本を作成する </button>
            </form>
        </div>
    </div>
</body>

</html>