<h1>게시글 작성</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red;">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div>
        <label>제목</label>
        <input type="text" name="title" value="{{ old('title') }}">
    </div>

    <div>
        <label>내용</label>
        <textarea name="content">{{ old('content') }}</textarea>
    </div>

    <button type="submit">작성</button>
</form>
