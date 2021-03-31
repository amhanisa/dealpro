@extends('layouts.app')

@section('content')
<section class="hero h-screen w-full overflow-hidden">
    <div class="w-full h-screen relative overflow-hidden">
        <div id="yt-production" class="absolute yt-bg"></div>
    </div>
    <div class="absolute w-full h-screen top-0 z-10 production-cover">
        <img src="{{ asset('img/production/header.jpg') }}" alt="Hero Image - Workshop Ligar"
            class="object-cover w-full h-screen">
    </div>
    <div class="absolute h-screen w-full z-10 top-0 bg-black bg-opacity-50">
        <div class="absolute bottom-0 w-full">
            <div class="block container mx-auto px-5 pb-32 md:pb-16">
                <!-- <h1 class="font-bold text-6xl text-red-500">DealProduction</h1> -->
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900">
    <div class="container mx-auto md:w-sm-container px-5 text-gray-300">
        <h1 class="font-bold text-6xl text-red-500 mb-8">Deal Production</h1>
        <p>Deal Production is a nationally acclaimed event production supplier based in Bandung. For more than 13 years,
            Deal Production has been a leading event production provider for numerous national and international events
            in Indonesia. Not only for event purposes, our creative designers are also excited to help you craft your
            store installation, exhibition, or any other offline marketing activation for your business.</p>
    </div>
</section>
<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-5 text-gray-300">
        <h2 class="text-center text-white text-4xl font-bold mb-6">Our Works</h2>
        <div class="flex justify-center items-center">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5 w-full md:w-auto">
                <div class="aspect-w-2 md:aspect-w-1 aspect-h-1 w-auto md:w-64 col-span-2 md:col-span-1 relative">
                    <img src="{{ asset('img/production/production.jpg') }}" alt="Test"
                        class="object-cover w-full h-full rounded-xl">
                    <!-- <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div> -->
                </div>
                <div class="aspect-w-1 md:aspect-w-2 aspect-h-1 w-auto md:h-64 md:col-span-2 relative">
                    <img src="{{ asset('img/production/production2.jpg') }}" alt="Production Work"
                        class="object-cover w-full h-full rounded-xl">
                    <!-- <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div> -->
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/production/production3.jpg') }}" alt="Production Work"
                        class="object-cover w-full h-full rounded-xl">
                    <!-- <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div> -->
                </div>
                <div class="aspect-w-2 md:aspect-w-1 aspect-h-1 w-auto md:w-64 col-span-2 md:col-span-1 relative">
                    <img src="{{ asset('img/production/production5.jpg') }}" alt="Production Work"
                        class="object-cover w-full h-full rounded-xl">
                    <!-- <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div> -->
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/production/production4.jpg') }}" alt="Production Work"
                        class="object-cover w-full h-full rounded-xl">
                    <!-- <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div> -->
                </div>


                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative">
                    <img src="{{ asset('img/production/production7.jpg') }}" alt="Production Work"
                        class="object-cover w-full h-full rounded-xl">
                    <!-- <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div> -->
                </div>
                <div class="aspect-w-2 md:aspect-w-1 aspect-h-1 w-auto md:w-64 col-span-2 md:col-span-1 relative">
                    <img src="{{ asset('img/production/production6.jpg') }}" alt="Production Work"
                        class="object-cover w-full h-full rounded-xl">
                    <!-- <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h3 class="font-bold">Spanduk</h3>
                    </div> -->
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
