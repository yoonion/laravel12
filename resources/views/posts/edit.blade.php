<h1>게시글 수정</h1>

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label>제목</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
    </div>

    <div>
        <label>내용</label>
        <textarea name="content">{{ old('content', $post->content) }}</textarea>
    </div>

    <button type="submit">수정</button>
</form>
