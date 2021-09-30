<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home (Hero Show)') }}
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
                    <!-- ======= Hero Section ======= -->
                    <section id="hero" style="background-image: url({{ asset('storage/img/' .$show->image) }})"
                        class="d-flex justify-content-center align-items-center">
                        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
                            <h1>{{ $show->titre_pt_1 }}<br>{{ $show->titre_pt_2 }}</h1>
                            <h2>{{ $show->sous_titre }}</h2>
                            <a href="/courses" class="btn-get-started">Get Started</a>
                        </div>
                    </section><!-- End Hero -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
