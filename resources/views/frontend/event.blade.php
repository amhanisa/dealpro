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

<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5 md:w-sm-container">
        <h1 class="text-white font-bold text-center text-xl md:text-2xl mb-5" data-aos="fade-up">Our Workflow</h1>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-01.svg') }}" class="w-16 md:w-24 mr-5" alt="Brief from client">
            <div>
                <h2 class="font-bold text-lg text-white">Brief from client</h2>
                <p>Listen and understanding your desire are our priority</p>
            </div>
        </div>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-02.svg') }}" class="w-16 md:w-24 mr-5" alt="Brainstorming">
            <div>
                <h2 class="font-bold text-lg text-white">Brainstorming</h2>
                <p>Brainstorming with our team to make something unbelieveaable for you and bring your dream event to
                    reality</p>
            </div>
        </div>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-03.svg') }}" class="w-16 md:w-24 mr-5" alt="Proposal">
            <div>
                <h2 class="font-bold text-lg text-white">Proposal</h2>
                <p>Pouring out the summary of our brainstorm into the first sketch</p>
            </div>
        </div>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-04.svg') }}" class="w-16 md:w-24 mr-5" alt="Present to Client">
            <div>
                <h2 class="font-bold text-lg text-white">Present to Client</h2>
                <p>Interpret our first sketch to start our journey</p>
            </div>
        </div>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-05.svg') }}" class="w-16 md:w-24 mr-5" alt="Final Proposal">
            <div>
                <h2 class="font-bold text-lg text-white">Final Proposal</h2>
                <p>Putting our mind into one to reach our goal</p>
            </div>
        </div>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-06.svg') }}" class="w-16 md:w-24 mr-5" alt="Create a Team">
            <div>
                <h2 class="font-bold text-lg text-white">Create a Team</h2>
                <p>Create the best team for your special day</p>
            </div>
        </div>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-07.svg') }}" class="w-16 md:w-24 mr-5" alt="The Day of Event">
            <div>
                <h2 class="font-bold text-lg text-white">The Day of Event</h2>
                <p>The realization of our spectacular event</p>
            </div>
        </div>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-08.svg') }}" class="w-16 md:w-24 mr-5" alt="Evaluation">
            <div>
                <h2 class="font-bold text-lg text-white">Evaluation</h2>
                <p>Analyze the event for better service</p>
            </div>
        </div>
        <div class="flex items-center mb-3" data-aos="fade-left">
            <img src="{{ asset('img/event/icon-event-09.svg') }}" class="w-16 md:w-24 mr-5" alt="Report">
            <div>
                <h2 class="font-bold text-lg text-white">Report</h2>
                <p>It's an honor to report our performance to you</p>
            </div>
        </div>
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
