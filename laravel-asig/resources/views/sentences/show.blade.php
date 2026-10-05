<h1>{{ $book->title }}</h1>

<h2>文章の詳細</h2>

<p>{{ $sentence->body }}</p>

<p>作成者：{{ $sentence->user->name }}</p>

<a href="{{ route('books.sentences.create', [$book, $sentence]) }}">
    この文章の続きを書く
</a>

<a href="{{ route('books.show', $book) }}">
    本の詳細に戻る
</a>