@extends('layouts.app')

@section('content')
<section class="relative pt-32 pb-10 bg-gray-900 overflow-hidden">
    <img src="{{ asset('svg/career-cover.svg') }}" alt="Career Doodle"
        class="absolute top-0 object-cover h-full w-full opacity-10">
    <div class="relative container mx-auto px-5 z-30">
        <h1 class="font-bold text-4xl md:text-6xl text-red-500">Career</h1>
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300">
    <div class="container mx-auto px-5">
        <p>Kita buka lowongan buat kamu gabung ke dalam keluarga kami.</p>
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300 overflow-x-hidden">
    <div class="container mx-auto px-5">
        <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
            <div class="md:w-80">
                <h2 class="font-bold text-xl text-white">Professional</h2>
                <hr class="border-t-2">
            </div>
            <div>
                <div class="mb-5 px-6 py-3 border-2 border-transparent shadow-lg rounded-md bg-gray-800"
                    data-aos="fade-left">
                    <div class="accordion flex justify-between items-center cursor-pointer py-3">
                        <div>
                            <h4 class="font-bold text-white">Copywriter</h4>
                            <p>Lotem ipsum dolor sit amet</p>
                        </div>
                        <span class="accordion-icon">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </span>
                    </div>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <hr class="border-t-2 mb-4">
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro sapiente quasi
                            eius modi. Ea
                            sunt, culpa repudiandae, quidem quod tempora perferendis animi architecto magni quibusdam
                            hic,
                            sit tenetur placeat accusamus!</p>

                        <ol class="list-inside list-decimal">
                            <li>Umur max. 25 tahun</li>
                            <li>Lulusan S1 Marketing</li>
                            <li>Bisa bekerja dalam tekanan</li>
                        </ol>

                        <p class="text-center">Send your <strong>CV</strong> and <strong>Portfolio</strong> to <a
                                href="mailto:contact@dealpro.id"
                                class="text-red-500 hover:text-red-700">contact@dealpro.id</a> with
                            subject
                            [Name] - [Position].</p>
                    </div>
                </div>


                <div class="mb-5 px-6 py-3 border-2 border-gray-600 shadow-lg rounded-md" data-aos="fade-left">

                    <div class="accordion flex justify-between items-center cursor-pointer py-3">
                        <div>
                            <h4 class="font-bold text-white">Copywriter</h4>
                            <p>Lotem ipsum dolor sit amet</p>
                        </div>
                        <span class="accordion-icon">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </span>
                    </div>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <hr class="border-t-2 mb-4">
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro sapiente quasi
                            eius modi. Ea
                            sunt, culpa repudiandae, quidem quod tempora perferendis animi architecto magni quibusdam
                            hic,
                            sit tenetur placeat accusamus!</p>

                        <ol class="list-inside list-decimal">
                            <li>Umur max. 25 tahun</li>
                            <li>Lulusan S1 Marketing</li>
                            <li>Bisa bekerja dalam tekanan</li>
                        </ol>

                        <p class="text-center">Send your <strong>CV</strong> and <strong>Portfolio</strong> to <a
                                href="mailto:contact@dealpro.id"
                                class="text-red-500 hover:text-red-700">contact@dealpro.id</a> with
                            subject
                            [Name] - [Position].</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900 text-gray-300 overflow-x-hidden">
    <div class="container mx-auto px-5">
        <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
            <div class="md:w-80">
                <h2 class="font-bold text-xl">Internship</h2>
                <hr class="border-t-2">
            </div>
            <div>

                <div class="mb-5 px-6 py-3 border-2 border-gray-600 shadow-lg rounded-md" data-aos="fade-left">

                    <div class="accordion flex justify-between items-center cursor-pointer py-3">
                        <div>
                            <h4 class="font-bold text-white">Copywriter</h4>
                            <p>Lotem ipsum dolor sit amet</p>
                        </div>
                        <span class="accordion-icon">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </span>
                    </div>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <hr class="border-t-2 mb-4">
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro sapiente quasi
                            eius modi. Ea
                            sunt, culpa repudiandae, quidem quod tempora perferendis animi architecto magni quibusdam
                            hic,
                            sit tenetur placeat accusamus!</p>

                        <ol class="list-inside list-decimal">
                            <li>Umur max. 25 tahun</li>
                            <li>Lulusan S1 Marketing</li>
                            <li>Bisa bekerja dalam tekanan</li>
                        </ol>

                        <p class="text-center">Send your <strong>CV</strong> and <strong>Portfolio</strong> to <a
                                href="mailto:contact@dealpro.id"
                                class="text-red-500 hover:text-red-700">contact@dealpro.id</a> with
                            subject
                            [Name] - [Position].</p>
                    </div>
                </div>
                <div class="mb-5 px-6 py-3 border-2 border-gray-600 shadow-lg rounded-md" data-aos="fade-left">

                    <div class="accordion flex justify-between items-center cursor-pointer py-3">
                        <div>
                            <h4 class="font-bold text-white">Copywriter</h4>
                            <p>Lotem ipsum dolor sit amet</p>
                        </div>
                        <span class="accordion-icon">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </span>
                    </div>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <hr class="border-t-2 mb-4">
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro sapiente quasi
                            eius modi. Ea
                            sunt, culpa repudiandae, quidem quod tempora perferendis animi architecto magni quibusdam
                            hic,
                            sit tenetur placeat accusamus!</p>

                        <ol class="list-inside list-decimal">
                            <li>Umur max. 25 tahun</li>
                            <li>Lulusan S1 Marketing</li>
                            <li>Bisa bekerja dalam tekanan</li>
                        </ol>

                        <p class="text-center">Send your <strong>CV</strong> and <strong>Portfolio</strong> to <a
                                href="mailto:contact@dealpro.id"
                                class="text-red-500 hover:text-red-700">contact@dealpro.id</a> with
                            subject
                            [Name] - [Position].</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@stop
