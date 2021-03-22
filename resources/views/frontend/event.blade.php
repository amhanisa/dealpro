@extends('layouts.app')

@section('content')

<section class="py-32 bg-gray-900">
    <div class="container mx-auto px-5">
        <h1 class="font-bold text-4xl md:text-6xl text-yellow-600">DealPro Event</h1>
    </div>
</section>




<section class="py-32">
    <div class="container mx-auto px-5">
        <p>
            Who we are
        </p>
        <p> DealPro Event is both off air and hybrid event division of DealPro Indonesia. The passionate team of DealPro
            Event is ready to transform your idea of a great moment into something even more beautiful in reality.
        </p>
        <p> The team consists of the most devoted planners and creative workers in Bandung. With thousands of
            experiences in
            hand, DealPro Event sets a new standard of event activity for marketing, corporate gathering, webinar and
            streaming event, concert, and exhibition.
        </p>
        <p> Indonesia’s largest annual event of Merceday Benz, Honda Bandung Center Exhibition, Pupuk Indonesia & Pupuk
            Kujang Corporate event are some of DealPro Event’s diverse portfolio.
        </p>
    </div>

</section>
<section class="py-32">
    <div class="container mx-auto">
        <h2 class="font-bold text-center text-xl">Our Clients</h2>

        <div class="flex flex-wrap justify-center space-x-4 space-y-4 my-5">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
            <img src="{{ asset('img/service/service.png') }}" alt="Client" class="w-64">
        </div>
    </div>
</section>
@stop
