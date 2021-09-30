<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Home (Why Us Section 'Présentation' Show)") }}
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
                    <!-- ======= Why Us Section ======= -->
                    <section id="why-us" class="why-us py-0">
                        <div class="container" data-aos="fade-up">
                            <div class="row justify-center py-0">
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="content">
                                        <h3>{{ $show->titre }}</h3>
                                        <p>
                                            {{ $show->text }}
                                        </p>
                                        <div class="text-center">
                                            <a href="/about" class="more-btn">{{ $show->button }} <i
                                                    class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- End Why Us Section -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
