@extends('layouts.app')

@section('content')

<section class="h-screen overflow-x-hidden">
    <!-- <div class="absolute z-10 w-full">
        <div class="container mx-auto mt-32">
            <h1 class="font-bold text-center text-4xl md:text-6xl text-white">DealPro Event</h1>
        </div>
    </div> -->
    <div class="swiper-container swiper-event">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/event/event.jpg') }}" alt="Home Background"
                    class="object-cover w-full h-screen">
                <div class="absolute w-full bottom-0 pb-16 z-10 px-5">
                    <div class="block container mx-auto text-white">
                        <p>DealPro Event is both off air and hybrid event division of DealPro Indonesia. The passionate
                            team of DealPro Event is ready to transform your idea of a great moment into something even
                            more beautiful in reality.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/event/event2.jpg') }}" alt="Home Background"
                    class="object-cover w-full h-screen">
                <div class="absolute w-full bottom-0 pb-16 z-10">
                    <div class="block container mx-auto text-white px-5">
                        <p>The team consists of the most devoted planners and creative workers in Bandung. With
                            thousands of experiences in hand, DealPro Event sets a new standard of event activity for
                            marketing, corporate gathering, webinar and streaming event, concert, and exhibition.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="absolute w-full h-screen bg-black bg-opacity-60">
                </div>
                <img src="{{ asset('img/event/event3.jpg') }}" alt="Home Background"
                    class="object-cover w-full h-screen">
                <div class="absolute w-full bottom-0 pb-16 z-10 px-5">
                    <div class="block container mx-auto text-white">
                        <p>Indonesia’s largest annual event of Merceday Benz, Honda Bandung Center Exhibition, Pupuk
                            Indonesia & Pupuk Kujang Corporate event are some of DealPro Event’s diverse portfolio. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</section>

<section class="py-32 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5 md:w-sm-container">
        <h1 class="font-bold text-6xl text-red-500 mb-8">DealPro Event</h1>
        <p>DealPro Event is both off air and hybrid event division of DealPro Indonesia. The passionate
            team of DealPro Event is ready to transform your idea of a great moment into something even
            more beautiful in reality.
        </p>
    </div>
</section>



<section class="py-32 bg-gray-900 overflow-x-hidden">
    <div class="container mx-auto px-5 mb-16" data-aos="fade-left">
        <div class="h-64 relative">
            <img data-src="{{ asset('img/event/event4.jpg') }}" alt="Event Planning"
                class="lazy object-cover w-full h-full rounded-xl">

            <div
                class="absolute top-0 w-full h-full flex flex-col items-center justify-center bg-black bg-opacity-60 rounded-xl">
                <h2 class="font-bold text-white text-xl md:text-4xl">EVENT PLANNING & CONSULTANT</h2>
                <p class=" text-center text-white px-10">We carefully plan an entertaining event and incredible
                    experience for your guests hassle-free
                </p>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-5 mb-16" data-aos="fade-left">
        <div class="h-64 relative">
            <img data-src="{{ asset('img/event/event6.jpg') }}" alt="Corporate Event"
                class="lazy object-cover w-full h-full rounded-xl">

            <div
                class="absolute top-0 w-full h-full flex flex-col items-center justify-center bg-black bg-opacity-60 rounded-xl">
                <h2 class="font-bold text-white text-xl md:text-4xl">CORPORATE EVENT</h2>
                <p class=" text-center text-white px-10">We deliver quality results for all your meetings, public and
                    corporate events
                </p>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-5 mb-16" data-aos="fade-left">
        <div class="h-64 relative">
            <img data-src="{{ asset('img/event/event5.jpg') }}" alt="Exhibition & Marketing Activation"
                class="lazy object-cover w-full h-full rounded-xl">

            <div
                class="absolute top-0 w-full h-full flex flex-col items-center justify-center bg-black bg-opacity-60 rounded-xl">
                <h2 class="font-bold text-white text-xl md:text-4xl">EXHIBITION & MARKETING ACTIVATION
                </h2>
                <p class=" text-center text-white px-10">Our teams work hard to understand your businesses to create the
                    perfect environment to build meaningful, lasting relationships with your customers
                </p>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-5 mb-16" data-aos="fade-left">
        <div class="h-64 relative">
            <img data-src="{{ asset('img/event/event7.jpg') }}" alt="MICE"
                class="lazy object-cover w-full h-full rounded-xl">

            <div
                class="absolute top-0 w-full h-full flex flex-col items-center justify-center bg-black bg-opacity-60 rounded-xl">
                <h2 class="font-bold text-white text-xl md:text-4xl">MICE
                </h2>
                <p class=" text-center text-white px-10">Our meticulous conference planning is an important ingredient
                    to our growth and success
                </p>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-5 mb-16" data-aos="fade-left">
        <div class="h-64 relative">
            <img data-src="{{ asset('img/event/event8.jpg') }}" alt="Gathering"
                class="lazy object-cover w-full h-full rounded-xl">

            <div
                class="absolute top-0 w-full h-full flex flex-col items-center justify-center bg-black bg-opacity-60 rounded-xl">
                <h2 class="font-bold text-white text-xl md:text-4xl">GATHERING
                </h2>
                <p class=" text-center text-white px-10">We specialise in indoor and outdoor events including team
                    building activities, outbonds, and company fun days
                </p>
            </div>
        </div>
    </div>

</section>
@stop
