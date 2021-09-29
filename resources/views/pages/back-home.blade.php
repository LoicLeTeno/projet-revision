<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    {{-- HERO section --}}
    <section>
        <h3 class="container">Hero Section</h3>
        @include('partials.homeHero.back')
    </section>

    {{-- ABOUT section --}}
    <section class="pt-0">
        <h3 class="container">About Section</h3>
        @include('partials.aboutSection.back')
    </section>

    {{-- Count section --}}
    <section class="pt-0">
        <h3 class="container">Count Section</h3>
        @include('partials.countSection.back')
    </section>

        {{-- Why Us section --}}
        <section class="pt-0">
            <h3 class="container">Why  Us Section</h3>
            <h5 class="flex justify-center mt-3 mb-1">Card</h5>
            @include('partials.whyUpSection.back')
        </section>
</x-app-layout>
