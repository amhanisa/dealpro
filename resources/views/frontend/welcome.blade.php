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

<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5">
        <div class="grid grid-rows-3 grid-cols-1 md:grid-rows-1 md:grid-cols-3 gap-4">
            <div class="border-2 p-4 border-green-500" data-aos="fade-up" data-aos-delay="100">
                <h2 class="font-bold text-green-500 mb-1">Who we are?</h2>
                <hr class="border-t-2 border-green-500 w-1/2 mb-4">
                <p>
                    We are event organizer, event production vendor, printing, fashion and medical scrub provider based
                    in Bandung, West Java. Established 13 years ago, DealPro Indonesia is exactly what you think of a
                    creative industry.
                </p>
            </div>
            <div class="border-2 p-4 border-yellow-500" data-aos="fade-up" data-aos-delay="200">
                <h2 class="font-bold text-yellow-500 mb-1">We are eager to help everyone</h2>
                <hr class="border-t-2 border-yellow-500 w-1/2 mb-4">
                <p>
                    With our portfolio in corporate events, exhibitions, MICE, marketing activations, we are confident
                    to help your company grow through your creative ideas.
                </p>
            </div>
            <div class="border-2 p-4 border-blue-500" data-aos="fade-up" data-aos-delay="300">
                <h2 class="font-bold text-blue-500 mb-1">What we believe in</h2>
                <hr class="border-t-2 border-blue-500 w-1/2 mb-4">
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
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out bg-gray-800 border-2 border-transparent hover:border-red-500 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('event') }}">
                            <img data-src="{{ asset('img/service/event.gif') }}" alt="DealPro Event Icon"
                                class="mb-5 lazy">
                            <h2 class="font-bold text-center text-xl text-white">DealPro Event</h2>
                            <p class="text-center">Our professional & creative event organizer will grant your wishful
                                moment to a spectacular experience</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out bg-gray-800 border-2 border-transparent hover:border-red-500 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('production') }}">
                            <img data-src="{{ asset('img/service/production.gif') }}" alt="DealProduction Icon"
                                class="mb-5 lazy">
                            <h2 class="font-bold text-center text-xl text-white">Deal Production</h2>
                            <p class="text-center">National acclaimed event production supplier with high skilled staff
                                to construct your event installation</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out bg-gray-800 border-2 border-transparent hover:border-red-500 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('printing') }}">
                            <img data-src="{{ asset('img/service/printing.gif') }}" alt="DealPrint Icon"
                                class="mb-5 lazy">
                            <h2 class="font-bold text-center text-xl text-white">DealPrint Indonesia</h2>
                            <p class="text-center">From outdoor to indoor printing, our print, promotion & packaging
                                experts are ready to turn your project into a thing of beauty
                            </p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out bg-gray-800 border-2 border-transparent hover:border-red-500 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('clothing') }}">
                            <img data-src="{{ asset('img/service/clothing.gif') }}" alt="DCLTH Icon" class="mb-5 lazy">
                            <h2 class="font-bold text-center text-xl text-white">DCLTH</h2>
                            <p class="text-center">Boost your company branding through the unique experience of fashion
                                customization
                            </p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide home-service-slide">
                    <div
                        class="transform scale-100 hover:scale-105 transition duration-150 ease-in-out bg-gray-800 border-2 border-transparent hover:border-red-500 shadow-xl rounded-lg p-8 h-full w-80 lg:w-56 2xl:w-72 mx-4">
                        <a href="{{ url('medical') }}">
                            <img data-src="{{ asset('img/service/medical.gif') }}" alt="Deal Medical Icon"
                                class="mb-5 lazy">
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
                        <p class="font-bold md:text-4xl">We have worked for more than</p>
                        <p class="font-bold text-4xl md:text-7xl" data-aos="fade-left">
                            +1000 <br>
                            Events across Indonesia
                        </p>
                        <p> From product launching to corporate event, we help every company to grow with creative
                            ideas
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
                        <p>Whether you are a government, non-profit organization, growing startup or established
                            company, we are here for you!</p>
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
                            +50.000 <br>
                            Satisfied attendees
                        </p>
                        <p>Coming to our event, implemented our value to share joy through creativity</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</section>

<section class="py-16 overflow-hidden bg-gray-900 text-gray-400">

    <h2 class="font-bold text-center text-lg md:text-2xl mb-16 text-white">We are honored to work with <br> leading
        companies and government officials</h2>
    <!-- <div class="swiper-container swiper-client ">
        <div class="swiper-wrapper">
            <div class="swiper-slide ">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/honda.png') }}" alt="Honda" class="client-logo">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/mercedes.png') }}" alt="Mercedes Benz" class="client-logo">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/pupuk-indonesia.png') }}" alt="Pupuk Indonesia" class="client-logo">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/kimia-farma.png') }}" alt="Kimia Farma" class="client-logo">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/pupuk-kujang.png') }}" alt="Pupuk Kujang" class="client-logo">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/gadis.png') }}" alt="Gadis Magazine" class="client-logo">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/jtrust.png') }}" alt="J Trust Bank" class="client-logo">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/kawasaki.png') }}" alt="Kawasaki" class="client-logo">
                </div>
            </div>

            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/kotbar-parahyangan.png') }}" alt="Kota Baru Parahyangan"
                        class="client-logo">
                </div>
            </div>

            <div class="swiper-slide">
                <div class="w-32 md:w-60 mx-auto">
                    <img src="{{ asset('img/client/poltek-praktisi.png') }}" alt="Politeknik Praktisi"
                        class="client-logo">
                </div>
            </div>
        </div>
    </div> -->

    <div class="container mx-auto px-5 md:w-sm-container">
        <div class="flex flex-wrap justify-center">
            <img data-aos="fade-up" data-aos-delay="300" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/pupuk-indonesia.png') }}" alt="Pupuk Indonesia">
            <img data-aos="fade-up" data-aos-delay="350" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/pupuk-kujang.png') }}" alt="Pupuk Kujang">
            <img data-aos="fade-up" data-aos-delay="400" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/honda.png') }}" alt="Honda">
            <img data-aos="fade-up" data-aos-delay="450" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/kimia-farma.png') }}" alt="Kimia Farma">
            <img data-aos="fade-up" data-aos-delay="500" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/mercedes.png') }}" alt="Mercedes Benz">
            <img data-aos="fade-up" data-aos-delay="550" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/bjb.png') }}" alt="Bank BJB">
            <img data-aos="fade-up" data-aos-delay="600" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/summarecon.png') }}" alt="Summarecon Bandung">
            <img data-aos="fade-up" data-aos-delay="650" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/hdci.png') }}" alt="HDCI Bandung">
            <img data-aos="fade-up" data-aos-delay="700" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/jafra.png') }}" alt="JAFRA">
            <img data-aos="fade-up" data-aos-delay="750" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/bijb.png') }}" alt="BIJB">
            <img data-aos="fade-up" data-aos-delay="800" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/jtrust.png') }}" alt="J Trust Bank">
            <img data-aos="fade-up" data-aos-delay="850" class="lazy w-32 md:w-48"
                src="{{ asset('img/clients/gadis.png') }}" alt="Gadis Magazine">
        </div>
    </div>
    <h2 class="font-bold text-center text-lg md:text-2xl my-16 text-white" data-aos="fade-up" data-aos-delay="1000">...
        and many more
    </h2>
</section>

@stop
