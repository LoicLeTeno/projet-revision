<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Home (Popular Item Section Show Id: $show->id)") }}
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
                        <div class="container" data-aos="fade-up">
                            <div class="row justify-center" data-aos="zoom-in" data-aos-delay="100">
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                    <div class="course-item">
                                        <img src={{ asset('storage/img/' . $show->image) }}
                                            class="img-fluid" alt="...">
                                        <div class="course-content">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4>{{ $show->desp }}</h4>
                                                <p class="price">${{ $show->price }}</p>
                                            </div>

                                            <h3><a href="/course-details"></a>{{ $show->title }}</h3>
                                            <p>{{ $show->text }}</p>
                                            <div class="trainer d-flex justify-content-between align-items-center">
                                                <div class="trainer-profile d-flex align-items-center">
                                                    <img src={{ asset('storage/img/trainers/' . $show->photo) }}
                                                        class="img-fluid" alt="">
                                                    <span>{{ $show->name }}</span>
                                                </div>
                                                <div class="trainer-rank d-flex align-items-center">
                                                    <i class="bx bx-user"></i>&nbsp;{{ $show->view }}
                                                    &nbsp;&nbsp;
                                                    <i class="bx bx-heart"></i>&nbsp;{{ $show->love }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Course Item-->
                            </div>
                        </div>
                    </section><!-- End Popular Courses Section -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
