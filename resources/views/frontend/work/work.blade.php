@extends('layouts.app')

@section('content')

<section class="py-32 bg-gray-900 text-gray-300">
    <div class="container w-full md:w-1/2 mx-auto px-5 ">


        <div class="grid grid-cols-2 gap-4 mb-10">
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs">Client</h1>
                <p class="text-white">Honda Main Dealer Bandung</p>
            </div>
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs">Project</h1>
                <p class="text-white">Honda Exhibition Live on Youtube</p>
            </div>
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs">Focus</h1>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum consequuntur
                    quidem minus nesciunt laborum tenetur neque cumque, accusantium eos velit quae est eveniet quia
                    distinctio officiis commodi explicabo facere tempora.</p>
            </div>
            <div>
                <h1 class="font-bold uppercase tracking-widest text-xs">Year</h1>
                <p class="text-white">2021</p>
            </div>
        </div>

        <img src="{{ asset('work/1-honda-exhibition-live/honda1.jpg') }}" alt="Honda Exhibition Live on Youtube">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio provident laboriosam et, dignissimos,
            delectus expedita quas rerum vero ut reiciendis nostrum numquam? Labore facilis iusto pariatur repellat ab
            sequi provident!</p>
        <img src="{{ asset('work/1-honda-exhibition-live/honda1.jpg') }}" alt="Honda Exhibition Live on Youtube">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde quod doloremque accusamus ea asperiores,
            suscipit quas obcaecati, nemo iusto ducimus sapiente possimus eveniet voluptatem nisi tenetur officia
            voluptate dolor vitae.</p>
    </div>
</section>


@stop
