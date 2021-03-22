<header class="fixed top-0 w-full z-50 header">
    <div class="container mx-auto flex justify-between items-center">

        <a href="/">
            <img src="{{ asset('img/dealpro-white.svg') }}" alt="Logo DealPro Indonesia" class="logo-dealpro">
        </a>

        <nav class="nav" id="menu">
            <ul class="nav-content">
                <li>
                    <a href="/" class="text-3xl md:text-base">Home</a>
                </li>
                <li>
                    <div class="dropdown text-3xl md:text-base cursor-pointer">Company
                        <span class="dropdown dropdown-icon inline-block align-middle ml-1">
                            <svg class="h-6 w-6 md:h-4 md:w-4 " viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </span>
                        <div class="dropdown-content text-white md:text-black">
                            <a href="{{ url('about-us') }}">About Us</a>
                            <a href="{{ url('career') }}">Career</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown text-3xl md:text-base cursor-pointer">Services
                        <span class="dropdown dropdown-icon inline-block align-middle ml-1">
                            <svg class="h-6 w-6 md:h-4 md:w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </span>
                        <div class="dropdown-content text-white md:text-black">
                            <a href="{{ url('event') }}">Event Organizer</a>
                            <a href="{{ url('production') }}">Production</a>
                            <a href="{{ url('printing') }}">Printing</a>
                            <a href="{{ url('clothing') }}">Clothing</a>
                            <a href="{{ url('medical') }}">Medical</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{ url('works') }}" class="text-3xl md:text-base">Portofolio</a>
                </li>
                <li>
                    <a href="{{ url('work-with-us') }}" class="text-3xl md:text-base">Work with Us</a>
                </li>
            </ul>
        </nav>

        <div id="nav-toggler">
            <svg width="40" height="40" viewBox="0 0 100 100">
                <path class="line1" d="M80,30H20C9.68,30,2.33,44.01,9.68,60.01c7.11,15.48,23.87,29.46,40.82,32.1c16.17,2.52,35.54-6.88,20.72-20.9
    L28.79,28.79" />
                <line class="line2" x1="20" y1="50" x2="80" y2="50" />
                <path class="line3"
                    d="M20,70h60c11.92-1.32,16.66-14.73,12.89-36.97C90.85,20.99,80,18.39,71.21,28.79L28.79,71.21" />
            </svg>
        </div>

    </div>
</header>
