@extends('layouts.app')

@section('content')
<section class="py-32 bg-gray-900">
    <div class="container mx-auto text-gray-300">
        <h1 class="font-bold text-6xl text-red-500">DealPrint</h1>
        <p class="mb-4">DealPrint Indonesia is eager to help your business with expertly designed printing necessities
            for branding and marketing purposes. From gigantic outdoor banners to a pack of well crafted business cards,
            lanyard, ID card, and merchandise, our print experts are ready to turn your project into a thing of beauty.
        </p>
        <p class="mb-4">As a premiere printing solution serving the West Java area, we take care and manage your request
            professionally. We use the latest print technology to produce cutting-edge printing results.
        </p>
    </div>
</section>
<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-5 text-gray-300">
        <h2 class="text-center text-white text-4xl font-bold mb-6">Our Services</h2>
        <div class="flex justify-center items-center">
            <div class="grid md:grid-cols-4 gap-5 w-full md:w-auto">
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/hero.webp') }}" alt="Test" class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div>
                </div>
                <div class="aspect-w-1 md:aspect-w-2 aspect-h-1 w-auto md:h-64 md:col-span-2 relative">
                    <img src="{{ asset('img/hero.webp') }}" alt="Test" class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div>
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/hero.webp') }}" alt="Test" class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div>
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/hero.webp') }}" alt="Test" class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div>
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/hero.webp') }}" alt="Test" class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div>
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/hero.webp') }}" alt="Test" class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div>
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/hero.webp') }}" alt="Test" class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5 flex justify-center">
        <a href="{{ url('contact') }}" class="text-center px-6 py-2 bg-red-500 text-white">
            Contact Us
        </a>
    </div>
</section>
@stop
