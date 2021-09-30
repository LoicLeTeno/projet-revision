@extends('layouts.index')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" style="background-image: url({{ asset('storage/img/' . $heroes[0]->image) }})"
        class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>{{ $heroes[0]->titre_pt_1 }}<br>{{ $heroes[0]->titre_pt_2 }}</h1>
            <h2>{{ $heroes[0]->sous_titre }}</h2>
            <a href="/courses" class="btn-get-started">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src={{ asset('storage/img/' . $abouts[0]->image) }} class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>{{ $abouts[0]->titre }}</h3>
                        <p class="fst-italic">
                            {{ $abouts[0]->text }}
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> {{ $abouts[0]->li_1 }}
                            </li>
                            <li><i class="bi bi-check-circle"></i> {{ $abouts[0]->li_2 }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ $abouts[0]->li_3 }}</li>
                        </ul>
                        <p>
                            {{ $abouts[0]->sous_text }}
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">
                <div class="row counters">
                    @foreach ($counts as $count)
                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $count->number }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>{{ $count->desp }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>{{ $whyUps[0]->titre }}</h3>
                            <p>
                                {{ $whyUps[0]->text }}
                            </p>
                            <div class="text-center">
                                <a href="/about" class="more-btn">{{ $whyUps[0]->button }} <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                @foreach ($whyDowns as $whyDown)
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="{{ $whyDown->icon }}"></i>
                                            <h4>{{ $whyDown->titre }}</h4>
                                            <p>{{ $whyDown->text }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($features as $feature)
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="{{ $feature->icon }}" style="color: {{ $feature->color }};"></i>
                                <h3><a href="{{ $feature->link }}">{{ $feature->titre }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Popular Courses Section ======= -->
        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $popularTitles[0]->titre }}</h2>
                    <p>{{ $popularTitles[0]->sous_titre }}</p>
                </div>

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    
                    @foreach ($popularItems as $popularItem)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <img src={{ asset('storage/img/' .$popularItem->image) }} class="img-fluid" alt="...">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4>{{ $popularItem->desp }}</h4>
                                        <p class="price">${{ $popularItem->price }}</p>
                                    </div>

                                    <h3><a href="/course-details"></a>{{ $popularItem->title }}</h3>
                                    <p>{{ $popularItem->text }}</p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <img src={{ asset('storage/img/trainers/' .$popularItem->photo) }} class="img-fluid" alt="">
                                            <span>{{ $popularItem->name }}</span>
                                        </div>
                                        <div class="trainer-rank d-flex align-items-center">
                                            <i class="bx bx-user"></i>&nbsp;{{ $popularItem->view }}
                                            &nbsp;&nbsp;
                                            <i class="bx bx-heart"></i>&nbsp;{{ $popularItem->love }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Course Item-->
                    @endforeach

                </div>
            </div>
        </section><!-- End Popular Courses Section -->

        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($trainers as $trainer)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ asset('storage/img/trainers/' .$trainer->photo) }}" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>{{ $trainer->name }}</h4>
                                <span>{{ $trainer->desp }}</span>
                                <p>
                                    {{ $trainer->texte }}
                                </p>
                                <div class="social">
                                    <a href="{{ $trainer->link_twitter }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $trainer->link_facebook }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $trainer->link_instagram }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $trainer->link_linkedin }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Trainers Section -->
    </main><!-- End #main -->
@endsection
