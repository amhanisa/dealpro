@extends('layouts.app')

@section('content')

<section class="pt-32 pb-16 bg-gray-900 text-gray-300">
    <div class="container w-full md:w-sm-container mx-auto px-5">


        <div class="grid grid-cols-3 gap-4 mb-10">
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Client</h1>
                <p>Pupuk Indonesia</p>
            </div>
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Project</h1>
                <p>Penandatanganan Joint Business Plan and Launching Customer Centric Model</p>
            </div>
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Year</h1>
                <p>2021</p>
            </div>
            <div class="col-span-3">
                <h1 class="font-bold uppercase tracking-widest text-xs text-red-500">Focus</h1>
                <p>Signing Ceremony of Joint Business Plan and Launching Customer Centric Model Program Pupuk Indonesia
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container w-full md:w-sm-container mx-auto px-5">
        <div class="aspect-w-16 aspect-h-9 my-12">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/zJutA7BaJ90"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <h3 class="text-center text-white font-bold text-xl mb-4 mt-8">Problem</h3>
        <hr class="w-16 border-t-2 border-red-500 mx-auto mb-8">
        <p class="mb-4">To improve customer satisfaction, Pupuk Indonesia wanted to introduce a new program of Customer
            Centric Model and exhibited the signing ceremony of Joint Business Plan.
        </p>
        <h3 class="text-center text-white font-bold text-xl mb-4 mt-8">Solution</h3>
        <hr class="w-16 border-t-2 border-red-500 mx-auto mb-8">
        <p class="mb-4">Dealpro Event hosted the proposed event by following Covid-19 safety protocol such as providing
            automated hand sanitizer and restricting visitors' number to the event. The guests were divided into two
            categories, offline attendees and online attendees through Zoom meeting application.
        </p>
        <img data-src="{{ asset('img/works/pupuk-indonesia/pupuk-indonesia2.jpg') }}" alt="Pupuk Indonesia"
            class="lazy mb-8">
        <img data-src="{{ asset('img/works/pupuk-indonesia/pupuk-indonesia3.jpg') }}" alt="Pupuk Indonesia"
            class="lazy mb-8">
        <img data-src="{{ asset('img/works/pupuk-indonesia/pupuk-indonesia4.jpg') }}" alt="Pupuk Indonesia"
            class="lazy mb-8">
    </div>
</section>


@stop
