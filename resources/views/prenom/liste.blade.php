<x-guest-layout>
    <div class="text-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Liste des prénoms entre 1900 et 2021
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Prénoms -->
                    @foreach ($prenoms as $prenom)
                        <div class="p-2 text-gray-900 dark:text-gray-100">
                            <h4 class="text-lg font-bold">{{ $prenom->PRENOM }}</h4>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
