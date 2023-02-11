<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <form method="POST" action="{{route('posts.store')}}">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    @csrf

                    Title:
                    <br>
                    <input  type="text" name="title" class=" block mt-1 w-full font-medium text-sm text-gray-700 dark:text-gray-300">
                    <br><br>
                    Post Text:
                    <textarea  type="text" name="post_text" class=" block mt-1 w-full font-medium text-sm text-gray-700 dark:text-gray-300"></textarea>
                    <br><br>
                    Category:
                    <br>
                    <select name="category_id"  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>

                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit" >Save</button>

                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
