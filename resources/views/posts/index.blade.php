<h1>게시글 목록</h1>

<ul>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
</ul>
