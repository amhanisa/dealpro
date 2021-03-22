@extends('layouts.app')

@section('content')
<section class="hero h-screen w-full overflow-hidden">
    <div class="w-full h-screen relative overflow-hidden">
        <div id="yt-hero" class="absolute yt-bg"></div>
    </div>
    <div class="absolute w-full h-screen top-0 z-10 hero-cover">
        <img src="{{ asset('img/hero.webp') }}" alt="Hero Image - Raker DealPro" class="object-cover w-full h-screen">
    </div>
    <div class="absolute h-screen w-full z-10 top-0 bg-black bg-opacity-50">
        <div class="absolute bottom-0 w-full">
            <div class="block container mx-auto px-5 pb-32 md:pb-16">
                <span class="block text-3xl md:text-7xl text-center text-white w-full">
                    #<span class="font-bold">deal</span>withthe<span class="font-bold">pro</span>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5">
        <div class="grid grid-flow-col md:grid-flow-row grid-cols-3 gap-4">
            <div>
                <p>
                    We are event organizer, event production vendor, printing, fashion and medical scrub provider based
                    in Bandung, West Java. Established 13 years ago, DealPro Indonesia is exactly what you think of a
                    creative industry.
                </p>
            </div>
            <div>
                <p>
                    With our portfolio in corporate events, exhibitions, MICE, marketing activations, we are confident
                    to help your company grow through your creative ideas.
                </p>
            </div>
            <div>
                <p>DealPro Indonesia believes that every moment matters. Our ideas to combine innovation, excitement, &
                    creativity collide with extraordinary dreams will create extraordinary experience!
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-32 overflow-x-hidden bg-gray-900 text-gray-400">
    <div class="container mx-auto">
        <div class="swiper-container swiper-service ">
            <div class="swiper-wrapper">
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out border-2 border-gray-600 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('event') }}">
                            <img src="{{ asset('img/service/service.png') }}" alt="DealPro Event" class="mb-5">
                            <h2 class="font-bold text-center text-xl text-white">DealPro Event</h2>
                            <p class="text-center">Our professional & creative event organizer will grant your wishful
                                moment to a spectacular experience</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out border-2 border-gray-600 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('production') }}">
                            <img src="{{ asset('img/service/service.png') }}" alt="DealPro Event" class="mb-5">
                            <h2 class="font-bold text-center text-xl text-white">Deal Production</h2>
                            <p class="text-center">National acclaimed event production supplier with high skilled staff
                                to construct your event installation</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out border-2 border-gray-600 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('printing') }}">
                            <img src="{{ asset('img/service/service.png') }}" alt="DealPro Event" class="mb-5">
                            <h2 class="font-bold text-center text-xl text-white">DealPrint Indonesia</h2>
                            <p class="text-center">From outdoor to indoor printing, our print, promotion & packaging
                                experts are ready to turn your project into a thing of beauty
                            </p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out border-2 border-gray-600 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('clothing') }}">
                            <img src="{{ asset('img/service/service.png') }}" alt="DealPro Event" class="mb-5">
                            <h2 class="font-bold text-center text-xl text-white">DCLTH</h2>
                            <p class="text-center">Boost your company branding through the unique experience of fashion
                                customization
                            </p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out border-2 border-gray-600 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('medical') }}">
                            <img src="{{ asset('img/service/service.png') }}" alt="DealPro Event" class="mb-5">
                            <h2 class="font-bold text-center text-xl text-white">Deal Medical</h2>
                            <p class="text-center">Performance scrubs for nurses and medical staff that feel great and
                                look outstanding to maintain professional appearances
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination home-service-pagination"></div>
        </div>
    </div>
</section>

<section class="hero h-screen overflow-x-hidden">
    <div class="swiper-container swiper-number">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/home-1.jpg') }}" alt="Home Background" class="object-cover w-full h-screen">
                <div class="absolute w-full bottom-0 pb-16 z-10 px-5">
                    <div class="block container mx-auto text-white">
                        <p class="font-bold  md:text-4xl">We have worked for more than</p>
                        <p class="font-bold text-4xl md:text-7xl" data-aos="fade-left">
                            Over <br>
                            1000 <br>
                            Events
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/home-2.jpg') }}" alt="Home Background" class="object-cover w-full h-screen">
                <div class="absolute w-full bottom-0 pb-16 z-10">
                    <div class="block container mx-auto text-white px-5">
                        <p class="font-bold  md:text-4xl">We help</p>
                        <p class="font-bold  text-4xl md:text-7xl">
                            12+ <br>
                            clients in a year
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/home-3.jpg') }}" alt="Home Background" class="object-cover w-full h-screen">
                <div class="absolute w-full bottom-0 pb-16 z-10 px-5">
                    <div class="block container mx-auto text-white">
                        <p class="font-bold text-4xl md:text-7xl ">
                            50K <br>
                            visitor in event
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</section>

<section class="py-32 overflow-hidden">
    <div class="container mx-auto">
        <h2 class="font-bold text-center text-4xl">Our Greatest Client</h2>
        <div class="swiper-container swiper-client ">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/honda.png') }}" alt="Honda" class="client-logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/mercedes.png') }}" alt="Mercedes Benz" class="client-logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/pupuk-indonesia.png') }}" alt="Pupuk Indonesia"
                            class="client-logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/kimia-farma.png') }}" alt="Kimia Farma" class="client-logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/pupuk-kujang.png') }}" alt="Pupuk Kujang" class="client-logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/gadis.png') }}" alt="Gadis Magazine" class="client-logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/jtrust.png') }}" alt="J Trust Bank" class="client-logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/kawasaki.png') }}" alt="Kawasaki" class="client-logo">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/kotbar-parahyangan.png') }}" alt="Kota Baru Parahyangan"
                            class="client-logo">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="w-30 md:w-60">
                        <img src="{{ asset('img/client/poltek-praktisi.png') }}" alt="Politeknik Praktisi"
                            class="client-logo">
                    </div>
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</section>

<section class="py-32 overflow-x-hidden bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5" data-aos="fade-left">
        <p>After 13 years, DealPro Indonesia believes that every moment matters. Our ideas to combine innovation,
            excitement, & creativity collide with extraordinary dreams will create extraordinary experience!</p>
    </div>
    <div id="player"></div>
</section>

@stop
