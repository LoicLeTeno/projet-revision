<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Home (Trainer Section Edit Id: $show->id)") }}
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
                    <!-- ======= Trainers Section ======= -->
                    <section id="trainers" class="trainers py-0">
                        <div class="container" data-aos="fade-up">
                            <div class="row justify-center" data-aos="zoom-in" data-aos-delay="100">
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                    <div class="member">
                                        <img src="{{ asset('storage/img/trainers/' . $show->photo) }}"
                                            class="img-fluid" alt="">
                                        <div class="member-content">
                                            <h4>{{ $show->name }}</h4>
                                            <span>{{ $show->desp }}</span>
                                            <p>
                                                {{ $show->texte }}
                                            </p>
                                            <div class="social">
                                                <a href="{{ $show->link_twitter }}"><i class="bi bi-twitter"></i></a>
                                                <a href="{{ $show->link_facebook }}"><i
                                                        class="bi bi-facebook"></i></a>
                                                <a href="{{ $show->link_instagram }}"><i
                                                        class="bi bi-instagram"></i></a>
                                                <a href="{{ $show->link_linkedin }}"><i
                                                        class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- End Trainers Section -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
