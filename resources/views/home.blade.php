<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col p-6 text-center text-gray-900 dark:text-gray-100">
                    {{ __("Boards") }}
                    <x-board-list></x-board-list>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
