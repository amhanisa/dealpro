@extends('layouts.app')

@section('content')

<section class="pt-32 pb-16 bg-gray-900 text-gray-300">
    <div class="container w-full md:w-sm-container mx-auto px-5">


        <div class="grid grid-cols-3 gap-4 mb-10">
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Client</h1>
                <p>Honda Bandung Center</p>
            </div>
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Project</h1>
                <p>Honda Exhibition Live on Youtube</p>
            </div>
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Year</h1>
                <p>2021</p>
            </div>
            <div class="col-span-3">
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Focus</h1>
                <p>Launching Honda City Hatchback and promotional live streaming on YouTube</p>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container w-full md:w-sm-container mx-auto px-5">
        <div class="aspect-w-16 aspect-h-9 my-12">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/DrJZYPGtSFc"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <h3 class="text-center text-white font-bold text-xl mb-4 mt-8">Problem</h3>
        <hr class="w-16 border-t-2 border-red-500 mx-auto mb-8">
        <p class="mb-4">Introducing the newest Honda City Hatchback, Honda Bandung Center wanted to approach people
            digitally so the
            audiences could engage through their smartphone easily.
        </p>
        <h3 class="text-center text-white font-bold text-xl mb-4 mt-8">Solution</h3>
        <hr class="w-16 border-t-2 border-red-500 mx-auto mb-8">
        <p class="mb-4">DealPro Event created Honda Exhibition Live on YouTube, a streaming program to showcase Honda’s
            latest product, Honda City Hatchback 2021. This event was held in main atrium Trans Studio Mall Bandung and
            was following Covid-19 safety protocol like providing an automatic hand sanitizer and restricting visitors'
            number to the exhibition. To attract visitors in Trans Studio Mall Bandung to the event venue, DealPro Event
            provided virtual entertainment by Project POP and B.R.I.N.K.A.
        </p>
        <div class="aspect-w-16 aspect-h-9 my-12">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/VViP9wwxx1o"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <p class="mb-4">The event was also streamed on YouTube and has been watched by over 2000 viewers. There were
            also quizzes and games so the audiences could engage with the event.
        </p>

        <img data-src="{{ asset('img/works/honda-live/honda-live2.jpg') }}" alt="Honda Live" class="lazy my-8">
        <img data-src="{{ asset('img/works/honda-live/honda-live3.jpg') }}" alt="Honda Live" class="lazy my-8">
        <img data-src="{{ asset('img/works/honda-live/honda-live4.jpg') }}" alt="Honda Live" class="lazy my-8">
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5 flex justify-center">
        <a href="https://www.youtube.com/watch?v=12yAuuCl5p4" class="text-center px-6 py-2 bg-red-500 text-white">
            Watch Full Program on Youtube
        </a>
    </div>
</section>


@stop
