<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-sky-500">
                    {!! $chart->container() !!}
                </div>
                <!-- brouillon
                dark:text-gray-100
                text-gray-900

                -->
            </div>
        </div>
    </div>
    {!! $chart->script() !!}

</x-guest-layout>
