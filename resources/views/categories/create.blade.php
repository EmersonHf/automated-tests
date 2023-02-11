<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Category Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <form method="POST" action="{{route('categories.store')}}">

                    @csrf

                    name:
                    <br>
                    <input  type="text" name="name" class=" block mt-1 w-full font-medium text-sm text-gray-700 dark:text-gray-300" />
                    <br>
                    <br>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit" >Save</button>

                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
