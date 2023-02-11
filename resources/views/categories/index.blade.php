<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('categories.create')}}">Add new Category</a>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>

                            </tr>
                        </thead>
                    </table>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>

                                    {{$category->name}}
                                    <td>

                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                <a   href="{{route('categories.edit', $category)}}"> Edit   </a>
                                            </button>

                                        <form action="{{route('categories.destroy',$category)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('are you sure?')">Delete</button>
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
