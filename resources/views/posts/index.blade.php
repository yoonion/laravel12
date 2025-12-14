<h1>게시글 목록</h1>

<ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </li>
    @endforeach
</ul>
