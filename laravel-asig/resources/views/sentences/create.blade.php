<h1>続きを書く</h1>

<h2>{{ $book->title }}</h2>

<p>元の文章：</p>
<p>{{ $parentSentence->body }}</p>

<form method="POST" action="{{ route('books.sentences.store', [$book, $parentSentence]) }}">
    @csrf

    <div>
        <label for="body">続きを書く</label>
        <textarea
            id="body"
            name="body"
            required></textarea>
    </div>

    <button type="submit">投稿する</button>
</form>