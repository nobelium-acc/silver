<x-dash-layout>
    <x-slot name="title">Page not found</x-slot>
    <div class="container flex flex-col items-center px-6 mx-auto">
        <svg class="w-12 h-12 mt-8 text-main" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                clip-rule="evenodd"></path>
        </svg>
        <h1 class="text-9xl font-semibold text-gray-700 dark:text-gray-200">
            404
        </h1>
        <p class="text-gray-700 dark:text-gray-300">
            Page not found. Check the address or
            <a class="text-main hover:underline dark:text-main" href="{{route('dashboard.index')}}">
                go back
            </a>
            .
        </p>
    </div>
</x-dash-layout>