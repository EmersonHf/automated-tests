<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('posts.create')}}">Add new Post</a>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                    </table>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>

                                    <td>{{$post->title}}</td>
                                    <td>{{$post->category->name}}</td>
                                    <td>

                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                <a   href="{{ route('posts.edit', $post) }}"> Edit Post  </a>
                                            </button>

                                        <form action="{{route('posts.destroy',$post)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('are you sure?')">Delete Post</button>
                                        </form>
                                    </td>

                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
