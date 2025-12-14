<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            게시판
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">

            @auth
                <div class="flex justify-end">
                    <a href="{{ route('posts.create') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded">
                        글쓰기
                    </a>
                </div>
            @endauth

            @forelse ($posts as $post)
                <a href="{{ route('posts.show', $post) }}"
                   class="block bg-white shadow-sm rounded-lg p-4 hover:bg-gray-50 transition">

                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ $post->title }}
                    </h3>

                    <div class="mt-2 text-sm text-gray-600 flex justify-between">
                        <span>
                            작성자: {{ $post->user->name ?? '알 수 없음' }}
                        </span>

                        <span>
                            {{ $post->created_at->format('Y-m-d') }}
                        </span>
                    </div>
                </a>
            @empty
                <div class="bg-white p-6 rounded shadow-sm text-center text-gray-600">
                    아직 작성된 게시글이 없습니다.
                </div>
            @endforelse

        </div>
    </div>
</x-app-layout>
