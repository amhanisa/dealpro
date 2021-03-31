@extends('layouts.app')

@section('content')

<section class="py-32 bg-gray-900 text-gray-300">
    <div class="container w-full md:w-sm-container mx-auto px-5 ">
        <div class="grid grid-flow-row-dense md:grid-cols-2 gap-4 md:mb-64 mb-32">
            <div class="flex flex-col justify-center" data-aos="fade-up">
                <span class="font-bold uppercase tracking-widest mb-5">Honda</span>
                <a href="{{ url('works/honda-live') }}">
                    <h2 class="font-bold text-2xl md:text-5xl text-white">Honda Live Exhibition</h2>
                    <span class="block mt-3 text-green-500">View detail</span>
                </a>
            </div>
            <div class="rounded-lg overflow-hidden">
                <a href="{{ url('works/honda-live') }}">
                    <img data-src="{{ asset('img/works/honda-live/honda-live.jpg') }}"
                        alt="Honda Exhibition Live on Youtube" class="object-cover h-full w-full lazy"
                        data-aos="fade-left">
                </a>
            </div>
        </div>
        <div class="grid grid-flow-row-dense md:grid-cols-2 gap-4 md:mb-64 mb-32">
            <div class="flex flex-col justify-center" data-aos="fade-up">
                <span class="font-bold uppercase tracking-widest mb-5">Pupuk Indonesia</span>
                <a href="{{ url('works/pupuk-indonesia') }}">
                    <h2 class="font-bold text-2xl md:text-5xl text-white">Penandatanganan Joint Business Plan and
                        Launching Customer Centric Model</h2>
                    <span class="block mt-3 text-green-500">View detail</span>
                </a>
            </div>
            <div class="rounded-lg overflow-hidden">
                <a href="{{ url('works/pupuk-indonesia') }}">
                    <img data-src="{{ asset('img/works/pupuk-indonesia/pupuk-indonesia.jpg') }}"
                        alt="Honda Exhibition Live on Youtube" class="object-cover h-full w-full lazy"
                        data-aos="fade-left">
                </a>
            </div>
        </div>
        <div class="grid grid-flow-row-dense md:grid-cols-2 gap-4 md:mb-64 mb-32">
            <div class="flex flex-col justify-center" data-aos="fade-up">
                <span class="font-bold uppercase tracking-widest mb-5">Honda</span>
                <a href="{{ url('works/honda-exhibition') }}">
                    <h2 class="font-bold text-2xl md:text-5xl text-white">Honda Exhibition</h2>
                    <span class="block mt-3 text-green-500">View detail</span>
                </a>
            </div>
            <div class="rounded-lg overflow-hidden">
                <a href="{{ url('works/honda-exhibition') }}">
                    <img data-src="{{ asset('img/works/honda-exhibition/honda-exhibition.jpg') }}"
                        alt="Honda Exhibition Live on Youtube" class="object-cover h-full w-full lazy"
                        data-aos="fade-left">
                </a>
            </div>
        </div>
    </div>
</section>


@stop
