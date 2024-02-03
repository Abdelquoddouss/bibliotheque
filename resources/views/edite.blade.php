

<x-app-layout>
    <!-- ... Header ... -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard :') }}
        <br> 
        <br>
        <!-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex"> -->
                    <x-nav-link :href="('liste')" :active="request()->routeIs('dashboard')">
                        {{ __('utilisateur') }}
                    </x-nav-link>
                    <br>
                    <br>
                    <x-nav-link :href="('books')" :active="request()->routeIs('dashboard')">
                        {{ __('Books') }}
                    </x-nav-link>
              
            
            </h2>
    </x-slot>

    <div class="py-12">
        <section class="container px-4 mx-auto">
            <div class="p-4 md:p-5">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Editer le livre</h3>

                <form class="space-y-4" action="{{ route('books.update', $book->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" value="{{ $book->title }}" name="title" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">author</label>
                        <input type="text" value="{{ $book->author }}" name="author" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
                        <input type="text" value="{{ $book->genre }}" name="genre" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description</label>
                        <input type="text" value="{{ $book->description }}" name="description" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Publication_year</label>
                        <input type="text" value="{{ $book->publication_year }}" name="publication_year" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">available_copies</label>
                        <input type="number" value="{{ $book->available_copies }}" name="available_copies" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">total_copies</label>
                        <input type="number" value="{{ $book->total_copies }}" name="total_copies" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>

                    <button type="submit" name="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour</button>
                </form>
            </div>
        </section>
    </div>
</x-app-layout>
