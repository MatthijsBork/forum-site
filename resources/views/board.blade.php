<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-black shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col p-6 text-center text-gray-900 dark:text-gray-100">
                    <div>
                        {{ $board->name }}

                    </div>
                    <div>
                        {{ $board->description }}

                    </div>
                    <div class="flex flex-col gap-4">
                        @foreach ($board->posts as $post)
                            <x-post class="flex gap-3 flex-column" :post="$post">
                            </x-post>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
