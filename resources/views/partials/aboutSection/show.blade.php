<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home (About Section Show)') }}
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
                    <!-- ======= About Section ======= -->
                    <section id="about" class="about py-0">
                        <div class="container" data-aos="fade-up">

                            <div class="row">
                                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                                    <img src="{{ asset('storage/img/' .$show->image) }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                                    <h3>{{ $show->titre }}</h3>
                                    <p class="fst-italic">
                                        {{ $show->text }}
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i> {{ $show->li_1 }}
                                        </li>
                                        <li><i class="bi bi-check-circle"></i> {{ $show->li_2 }}</li>
                                        <li><i class="bi bi-check-circle"></i> {{ $show->li_3 }}</li>
                                    </ul>
                                    <p>
                                        {{ $show->sous_text }}
                                    </p>

                                </div>
                            </div>

                        </div>
                    </section><!-- End About Section -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
