<x-app-layout>
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

</x-app-layout>
