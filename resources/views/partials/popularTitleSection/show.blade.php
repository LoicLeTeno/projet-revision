<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home (Popular Title Section Show)') }}
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
                    <!-- ======= Popular Courses Section ======= -->
                    <section id="popular-courses" class="courses py-0">
                        <div class="container flex justify-center" data-aos="fade-up">
                            <div class="section-title">
                                <h2>{{ $show->titre }}</h2>
                                <p>{{ $show->sous_titre }}</p>
                            </div>
                        </div>
                    </section><!-- End Popular Courses Section -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
