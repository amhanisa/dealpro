@extends('layouts.app')

@section('content')

<section class="pt-32 pb-16 bg-gray-900 text-gray-300">
    <div class="container w-full md:w-1/2 mx-auto px-5">


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
    <div class="container w-full md:w-1/2 mx-auto px-5">
        <div class="aspect-w-16 aspect-h-9 mb-6">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/P5Zt8THRCuQ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <h3 class="text-white font-bold text-xl mb-4">Problem</h3>
        <p class="mb-4">Honda Bandung Center aimed to increase people's awareness of their products and improve their
            sales portfolio in 2021. To achieve this target, creative approaches and well planned activation strategies
            were needed.
        </p>
        <h3 class="text-white font-bold text-xl mb-4">Solution</h3>
        <p class="mb-4">DealPro Indonesia through DealPro Event initiated the Honda Exhibition in order to increase
            people's awareness about Honda Bandung Center's products. This event was held in Trans Studio Mall Bandung
            and was following Covid-19 safety protocol such as providing an automatic hand sanitizer and restricting
            visitors' number to the exhibition. DealPro Event was providing virtual customer service experience through
            Zoom digital meeting platform.
        </p>
        <p class="mb-4">DealPro Event also helped Honda Bandung Center to optimize digital marketing through effective
            social media activity like virtual quiz, promotional video, Tiktok Challenge and Media publication
            gathering.
        </p>

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
