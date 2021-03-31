@extends('layouts.app')

@section('content')
<section class="h-96 overflow-hidden">
    <img src="{{ asset('img/hero.webp') }}" alt="DealPro Indonesia" class="object-cover w-full h-full">
    <div class="absolute top-0 bg-black bg-opacity-60 w-full h-96">
    </div>
    <div class="absolute w-full top-0 h-96 z-10">
        <div class="flex flex-col h-full justify-end items-start text-white">
            <div class="container mx-auto px-5">
                <h2 class="font-bold text-4xl text-red-500">Introducing</h2>
                <h1 class="font-bold text-6xl text-red-500 mb-6">DealPro Indonesia</h1>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5 md:w-sm-container">
        <img src="{{ asset('img/dealpro.svg') }}" alt="Logo DealPro Indonesia" class="md:h-48 mx-auto">
        <p class="mb-4 text-justify">Established 13 years ago, DealPro Indonesia is besotted one-stop solution for your
            event and
            marketing needs.
            With our wealth of experiences, creative ideas, professional crews and event workers, we are ready to
            transform your concept of a wonderful moment into reality.
        </p>

        <p class="mb-4 text-justify">
            To meet your high expectation of a momentous moment, DealPro Indonesia also provides some services that you
            can access separately concerning what you need.
        </p>
        <p class="mb-4 text-justify">
            We can help you from designing and printing a pack of well-designed business cards to a gigantic outdoor
            banner to promote your business with DealPrint Indonesia. You can also improve your company branding with
            the unique experiment of fashion customization with Deal Cloth’s DCLTH. DealPro Indonesia also supports
            medical workers by providing performance scrubs for nurses and medical staff that feel great and look
            outstanding to maintain professional appearances.

        </p>
        <p class="mb-4 text-justify">
            DealPro Indonesia has worked for more than 1.000 events across Indonesia and achieved several honorable
            recognitions including the most reputable event organizer in West Java. But our spirit will never fade away,
            we are eager to achieve and help more industry to grow together with DealPro Indonesia.
        </p>

</section>

<!-- <section class="overflow-x-hidden">

    <div class="swiper-container swiper-about-us">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/home-1.jpg') }}" alt="Home Background" class="object-cover w-full h-screen">
                <div class="absolute w-full top-0 h-full z-10 px-5">
                    <div class="flex h-full justify-center items-center text-white">
                        <h2 class="font-bold text-center text-4xl md:text-7xl" data-aos="fade-left">
                            EVENT ORGANIZER
                        </h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/home-1.jpg') }}" alt="Home Background" class="object-cover w-full h-screen">
                <div class="absolute w-full top-0 h-full z-10 px-5">
                    <div class="flex h-full justify-center items-center text-white">
                        <h2 class="font-bold text-center text-4xl md:text-7xl" data-aos="fade-left">
                            PRODUCTION
                        </h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/home-1.jpg') }}" alt="Home Background" class="object-cover w-full h-screen">
                <div class="absolute w-full top-0 h-full z-10 px-5">
                    <div class="flex h-full justify-center items-center text-white">
                        <h2 class="font-bold text-center text-4xl md:text-7xl" data-aos="fade-left">
                            PRINTING
                        </h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/home-1.jpg') }}" alt="Home Background" class="object-cover w-full h-screen">
                <div class="absolute w-full top-0 h-full z-10 px-5">
                    <div class="flex h-full justify-center items-center text-white">
                        <h2 class="font-bold text-center text-4xl md:text-7xl" data-aos="fade-left">
                            CLOTHING
                        </h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/home-1.jpg') }}" alt="Home Background" class="object-cover w-full h-screen">
                <div class="absolute w-full top-0 h-full z-10 px-5">
                    <div class="flex h-full justify-center items-center text-white">
                        <h2 class="font-bold text-center text-4xl md:text-7xl" data-aos="fade-left">
                            MEDICAL
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    </div>
</section> -->

<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-5 text-gray-300">
        <h2 class="text-center text-white text-4xl font-bold mb-12">Our Services</h2>
        <div class="flex justify-center items-center">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5 w-full md:w-auto">
                <div class="aspect-w-2 md:aspect-w-3 aspect-h-1 w-auto md:h-64 col-span-2 md:col-span-3 relative"
                    data-aos="fade-up">
                    <img src="{{ asset('img/about-us/event.jpg') }}" alt="DealPro Event"
                        class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h2 class="font-bold text-center text-3xl">
                            EVENT ORGANIZER
                        </h2>
                    </div>
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative" data-aos="fade-up">
                    <img src="{{ asset('img/about-us/printing.jpg') }}" alt="DealPrint"
                        class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h2 class="font-bold text-center text-3xl">
                            PRINTING
                        </h2>
                    </div>
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative" data-aos="fade-up">
                    <img src="{{ asset('img/about-us/medical.jpg') }}" alt="DealMedical"
                        class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h2 class="font-bold text-center text-3xl">
                            MEDICAL
                        </h2>
                    </div>
                </div>
                <div class="aspect-w-1 md:aspect-w-2 aspect-h-1 w-auto md:h-64 md:col-span-2 relative"
                    data-aos="fade-up">
                    <img src="{{ asset('img/about-us/production.jpg') }}" alt="DealProduction"
                        class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h2 class="font-bold text-center text-3xl">
                            PRODUCTION
                        </h2>
                    </div>
                </div>
                <div class="aspect-w-1 aspect-h-1 w-auto md:w-64 relative" data-aos="fade-up">
                    <img src="{{ asset('img/about-us/clothing.jpg') }}" alt="DCLTH"
                        class="object-cover w-full h-full rounded-xl">
                    <div
                        class="absolute w-full h-full top-0 flex justify-center items-center bg-black bg-opacity-60 rounded-xl">
                        <h2 class="font-bold text-center text-3xl">
                            CLOTHING
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5 md:w-sm-container">
        <div class="grid grid-cols-2 grid-flow-col auto-cols-min">
            <img src="{{ asset('svg/dealwiththepro.svg') }}" alt="deal with the pro tagline" class="w-48 my-auto">
            <p class="my-auto">
                Our motto represents our confidence and motivation to lead West Java’s creative industry.
                #dealwiththepro is
                not only a textual slogan that you can find across our social media posts, but also our proven work and
                dedication to help you recreate your idea of a beautiful moment.
            </p>
        </div>

    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5 flex justify-center">
        <a href="{{ url('works') }}" class="text-center px-6 py-2 bg-red-500 text-white">
            See Our Portfolio
        </a>
    </div>
</section>

@stop
