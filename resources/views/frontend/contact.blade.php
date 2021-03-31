<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{  isset($metaDescription) ? $metaDescription : 'DealPro Indonesia' }}">
    <title>{{  isset($title) ? $title . ' - DealPro Indonesia' : 'DealPro Indonesia' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#111827">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#111827">

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BKH1170PE1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-BKH1170PE1');

    </script>

    @yield('head')
</head>

<body class="antialiased">
    @include('layouts.header')

    <section class="py-32 px-5 bg-gray-900 min-h-screen md:flex md:justify-center md:items-center">

        <div>

            <h1 class="font-bold text-6xl text-red-500">Let's do <br>something <br>with <br> the Pros</h1>
            <p class="text-white mt-10">Our teams are excited to collaborate with <br> your idea and creativity.</p>
            <div class="flex justify-center my-10">
                <a href="mailto:contact@dealpro.id"
                    class="text-red-500 text-2xl py-2 px-5 border-red-500 hover:bg-red-500 hover:text-white border-2">contact@dealpro.id</a>
            </div>

            <span class="block tracking-widest uppercase font-bold text-xs mb-2 text-white">Headquarter</span>
            <p class=" text-gray-300">
                Jl. Brigadir Jend. Katamso no. 19A <br>
                Kota Bandung <br>
                Jawa Barat 40122
            </p>

            <ul class="flex justify-between mt-8">
                <li>
                    <a href="https://www.instagram.com/dealpro.id">
                        <svg class="h-8 w-8 text-white hover:text-red-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" /></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCpiWu8kNr8vbakRX8LALCYQ">
                        <svg class="h-8 w-8 text-white hover:text-red-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" />
                            <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" /></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/dealpro-indonesia/">
                        <svg class="h-8 w-8 text-white hover:text-red-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" /></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/DealProIndonesia">
                        <svg class="h-8 w-8 text-white hover:text-red-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>




    </section>


</body>

<script src="{{ mix('js/app.js') }}"></script>

@yield('script')

</html>
