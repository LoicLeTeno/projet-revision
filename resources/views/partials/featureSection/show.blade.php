<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Home (Feature Section Show Id: $show->id)") }}
        </h2>
    </x-slot>

    @include('layouts.flash')

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
                    <!-- ======= Features Section ======= -->
                    <section id="features" class="features pb-5">
                        <div class="container" data-aos="fade-up">
                            <div class="row justify-center" data-aos="zoom-in" data-aos-delay="100">
                                <div class="col-lg-3 col-md-4">
                                    <div class="icon-box">
                                        <i class="{{ $show->icon }}" style="color: {{ $show->color }};"></i>
                                        <h3><a href="{{ $show->link }}">{{ $show->titre }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- End Features Section -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
