<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            글 수정
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if ($errors->any())
                    <ul class="mb-4 text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method="POST" action="{{ route('posts.update', $post) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block font-medium">제목</label>
                        <input
                            type="text"
                            name="title"
                            value="{{ old('title', $post->title) }}"
                            class="w-full border rounded px-3 py-2"
                        >
                    </div>

                    <div>
                        <label class="block font-medium">내용</label>
                        <textarea
                            name="content"
                            rows="8"
                            class="w-full border rounded px-3 py-2"
                        >{{ old('content', $post->content) }}</textarea>
                    </div>

                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('posts.show', $post) }}"
                           class="px-4 py-2 border rounded">
                            취소
                        </a>

                        <button class="bg-blue-600 text-white px-4 py-2 rounded">
                            수정
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
