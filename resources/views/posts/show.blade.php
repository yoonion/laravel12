<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-4">

                <div class="text-gray-800 whitespace-pre-line">
                    {{ $post->content }}
                </div>

                <div class="flex space-x-4">
                    @can('update', $post)
                        <a href="{{ route('posts.edit', $post) }}"
                           class="text-blue-600 hover:underline">
                            수정
                        </a>
                    @endcan

                    @can('delete', $post)
                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">
                                삭제
                            </button>
                        </form>
                    @endcan
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
