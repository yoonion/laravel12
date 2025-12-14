<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            글쓰기
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

                <form method="POST" action="{{ route('posts.store') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block font-medium">제목</label>
                        <input
                            type="text"
                            name="title"
                            value="{{ old('title') }}"
                            class="w-full border rounded px-3 py-2"
                        >
                    </div>

                    <div>
                        <label class="block font-medium">내용</label>
                        <textarea
                            name="content"
                            rows="8"
                            class="w-full border rounded px-3 py-2"
                        >{{ old('content') }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded">
                            작성
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
