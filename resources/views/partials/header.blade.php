<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">{{ $headers[0]->nav }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{ request()->is('/') ? 'text-success' : 'text-black ' }}" href="/">{{ $headers[1]->nav }}</a></li>
                <li><a class="{{ request()->is('about') ? 'text-success' : 'text-black ' }}" href="/about">{{ $headers[2]->nav }}</a>
                </li>
                <li><a class="{{ request()->is('courses') ? 'text-success' : 'text-black ' }}"
                        href="/courses">{{ $headers[3]->nav }}</a></li>
                <li><a class="{{ request()->is('trainers') ? 'text-success' : 'text-black ' }}"
                        href="/trainers">{{ $headers[4]->nav }}</a></li>
                {{-- <li><a href="events.html">Events</a></li> --}}
                {{-- <li><a href="pricing.html">Pricing</a></li> --}}

                <li><a class="{{ request()->is('contact') ? 'text-success' : 'text-black ' }}"
                        href="/contact">{{ $headers[5]->nav }}</a>
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
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">{{ $headers[6]->nav }}</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">{{ $headers[7]->nav }}
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm  text-gray-700 dark:text-gray-500 underline">{{ $headers[8]->nav }}</a>
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
