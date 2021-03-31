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
                <p>Honda Exhibition 2021</p>
            </div>
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Year</h1>
                <p>2021</p>
            </div>
            <div class="col-span-3">
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Focus</h1>
                <p>Displaying Honda Bandung Center’s products to the public and increasing people’s awareness in social
                    media
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container w-full md:w-sm-container mx-auto px-5">
        <div class="aspect-w-16 aspect-h-9 my-12">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/P5Zt8THRCuQ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <h3 class="text-center text-white font-bold text-xl mb-4 mt-8">Problem</h3>
        <hr class="w-16 border-t-2 border-red-500 mx-auto mb-8">
        <p class="mb-4">Honda Bandung Center aimed to increase people's awareness of their products and improve their
            sales portfolio in 2021. To achieve this target, creative approaches and well planned activation strategies
            were needed.
        </p>
        <h3 class="text-center text-white font-bold text-xl mb-4 mt-8">Solution</h3>
        <hr class="w-16 border-t-2 border-red-500 mx-auto mb-8">
        <p class="mb-4">DealPro Indonesia through DealPro Event initiated the Honda Exhibition in order to increase
            people's awareness about Honda Bandung Center's products. This event was held in Trans Studio Mall Bandung
            and was following Covid-19 safety protocol such as providing an automatic hand sanitizer and restricting
            visitors' number to the exhibition. DealPro Event was providing virtual customer service experience through
            Zoom digital meeting platform.
        </p>
        <img data-src="{{ asset('img/works/honda-exhibition/honda-exhibition2.jpg') }}" alt="Honda Exhibition"
            class="lazy my-8">
        <img data-src="{{ asset('img/works/honda-exhibition/honda-exhibition3.jpg') }}" alt="Honda Exhibition"
            class="lazy my-8">
        <img data-src="{{ asset('img/works/honda-exhibition/honda-exhibition4.jpg') }}" alt="Honda Exhibition"
            class="lazy my-8">
        <img data-src="{{ asset('img/works/honda-exhibition/honda-exhibition5.jpg') }}" alt="Honda Exhibition"
            class="lazy my-8">
        <p class="mb-4">DealPro Event also helped Honda Bandung Center to optimize digital marketing through effective
            social media activity like virtual quiz, promotional video, Tiktok Challenge and Media publication
            gathering.
        </p>
        <div class="grid grid-cols-3 gap-4">
            <img data-src="{{ asset('img/works/honda-exhibition/honda-exhibition6.jpg') }}" alt="Honda Exhibition"
                class="lazy my-8">
            <img data-src="{{ asset('img/works/honda-exhibition/honda-exhibition7.jpg') }}" alt="Honda Exhibition"
                class="lazy my-8">
            <img data-src="{{ asset('img/works/honda-exhibition/honda-exhibition8.jpg') }}" alt="Honda Exhibition"
                class="lazy my-8">
        </div>

    </div>
</section>


@stop
