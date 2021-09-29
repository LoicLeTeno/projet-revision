<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home (Count Section Show)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end  pt-3 px-3">
                    <a href="{{ route('back-home') }}">
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                            type="submit">Retour</button>
                    </a>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- ======= Counts Section ======= -->
                    <section id="counts" class="counts section-bg">
                        <div class="container">
                            <div class="row counters">
                                <div class=" text-center">
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $show->number }}"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>{{ $show->desp }}</p>
                                </div>
                            </div>
                        </div>
                    </section><!-- End Counts Section -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
