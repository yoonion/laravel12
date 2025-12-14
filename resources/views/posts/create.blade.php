<h1>게시글 작성</h1>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div>
        <label>제목</label>
        <input type="text" name="title">
    </div>

    <div>
        <label>내용</label>
        <textarea name="content"></textarea>
    </div>

    <button type="submit">작성</button>
</form>
