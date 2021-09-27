<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">Mentor</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{ request()->is('/') ? 'text-success' : 'text-black ' }}" href="/">Home</a></li>
                <li><a class="{{ request()->is('about') ? 'text-success' : 'text-black ' }}" href="/about">About</a>
                </li>
                <li><a class="{{ request()->is('courses') ? 'text-success' : 'text-black ' }}"
                        href="/courses">Courses</a></li>
                <li><a class="{{ request()->is('trainers') ? 'text-success' : 'text-black ' }}"
                        href="/trainers">Trainers</a></li>
                {{-- <li><a href="events.html">Events</a></li> --}}
                {{-- <li><a href="pricing.html">Pricing</a></li> --}}

                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="{{ request()->is('contact') ? 'text-success' : 'text-black ' }}"
                        href="/contact">Contact</a>
                    </li>
                <li><p class="flex mb-0 mx-10 pl-7">|</p></li>
                <li>
                    <div
                        class="d-flex">

                        {{-- Authentification --}}
                        @if (Route::has('login'))
                            <div class="hidden d-flex px-0 py-0 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm no-underline text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm no-underline text-gray-700 dark:text-gray-500 underline">Log
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm no-underline text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
    </nav><!-- .navbar -->

    {{-- <a class="{{ request()->is('courses') ? 'text-success' : 'text-black ' }}" href="/courses" class="get-started-btn">Get Started</a> --}}

    </div>


</header><!-- End Header -->
