<h1>게시글 상세</h1>

<h1>{{ $post->title }}</h1>

<div>
    {{ $post->content }}
</div>

@can('update', $post)
    <a href="{{ route('posts.edit', $post->id) }}">
        수정
    </a>
@endcan

@can('delete', $post)
    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit">삭제</button>
    </form>
@endcan


