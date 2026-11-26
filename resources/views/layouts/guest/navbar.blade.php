<header x-data="{ open: false }" class="fixed left-0 right-0 z-50 bg-black/5 px-6 py-4 backdrop-blur-xl lg:py-6">
    <div class="mx-auto flex max-w-screen-2xl flex-wrap items-center justify-between text-base font-bold text-[#C8A565] sm:text-lg lg:text-xl xl:text-2xl">
        <a href="{{ route('home') }}" class="flex basis-auto items-center space-x-2 font-bold transition hover:text-white">
            <img src="{{ asset('media/general/logo.svg') }}" alt="Logo" class="w-12 sm:w-14 lg:w-16 xl:w-20" />
            <span>Buggy Bali <br> Adventure</span>
        </a>

        <nav class="hidden items-center gap-6 lg:flex xl:gap-10">
            <a href="{{ route('utv-packages') }}" class="transition hover:text-white">UTV Packages</a>
            <a href="{{ route('our-track') }}" class="transition hover:text-white">Our Track</a>
            {{-- <a href="{{ route('activity-packages') }}" class="hover:text-white transition">Activity Packages</a> --}}
            <a href="{{ route('gallery') }}" class="transition hover:text-white">Gallery</a>
            <a href="{{ route('about-us') }}" class="transition hover:text-white">About Us</a>
        </nav>

        <a href="{{ route('find-us') }}" class="group hidden items-center justify-center rounded-[50%] border-2 border-[#C8A565] px-4 py-0.5 text-sm font-medium transition hover:border-white hover:text-white sm:px-6 sm:py-1 sm:text-base lg:flex lg:px-8 lg:text-lg xl:px-10 xl:py-2 xl:text-xl">
            <i class="fa-solid fa-location-dot mx-2"></i>
            <span class="text-white transition group-hover:text-[#C8A565]">FIND US</span>
        </a>

        <button @click="open = !open" class="lg:hidden">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav x-show="open" x-transition class="mt-4 flex w-full flex-col items-center gap-4 rounded-lg p-4 backdrop-blur lg:hidden">
            <a href="{{ route('utv-packages') }}" class="transition hover:text-white">UTV Packages</a>
            <a href="{{ route('our-track') }}" class="transition hover:text-white">Our Track</a>
            {{-- <a href="{{ route('activity-packages') }}" class="hover:text-white transition">Activity Packages</a> --}}
            <a href="{{ route('gallery') }}" class="transition hover:text-white">Gallery</a>
            <a href="{{ route('about-us') }}" class="transition hover:text-white">About Us</a>
            <a href="{{ route('find-us') }}" class="group flex items-center justify-center rounded-[50%] border-2 border-[#C8A565] px-4 py-0.5 text-sm font-medium transition hover:border-white hover:text-white sm:px-6 sm:py-1 sm:text-base lg:px-8 lg:text-lg xl:px-10 xl:py-2 xl:text-xl">
                <i class="fa-solid fa-location-dot mx-2"></i>
                <span class="text-white transition group-hover:text-[#C8A565]">FIND US</span>
            </a>
        </nav>
    </div>
</header>
