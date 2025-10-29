<header x-data="{ open: false }" class="fixed left-0 right-0 z-50 flex flex-wrap items-center justify-between px-6 py-4 lg:py-6 bg-black/5 backdrop-blur-xl font-bold text-base sm:text-lg lg:text-xl xl:text-2xl text-[#C8A565]">
    <a href="{{ route('home') }}" class="basis-auto flex items-center space-x-2 font-bold hover:text-white transition">
        <img src="{{ asset('media/general/logo.svg') }}" alt="Logo" class="w-12 sm:w-14 lg:w-16 xl:w-20" />
        <span>Buggy Bali <br> Adventure</span>
    </a>

    <nav class="hidden lg:flex items-center gap-6 xl:gap-10">
        <a href="{{ route('utv-packages') }}" class="hover:text-white transition">UTV Packages</a>
        <a href="{{ route('activity-packages') }}" class="hover:text-white transition">Activity Packages</a>
        <a href="{{ route('gallery') }}" class="hover:text-white transition">Gallery</a>
        <a href="{{ route('about-us') }}" class="hover:text-white transition">About Us</a>
    </nav>

    <a href="#" class="group hidden lg:flex items-center justify-center px-4 sm:px-6 lg:px-8 xl:px-10 py-0.5 sm:py-1 xl:py-2 border-2 border-[#C8A565] hover:border-white rounded-[50%] font-medium text-sm sm:text-base lg:text-lg xl:text-xl hover:text-white transition">
        <i class="fa-solid fa-location-dot mx-2"></i>
        <span class="text-white group-hover:text-[#C8A565] transition">FIND US</span>
    </a>

    <button @click="open = !open" class="lg:hidden">
        <i class="fa-solid fa-bars"></i>
    </button>

    <nav x-show="open" x-transition class="lg:hidden w-full flex flex-col items-center gap-4 mt-4 p-4 rounded-lg backdrop-blur">
        <a href="{{ route('utv-packages') }}" class="hover:text-white transition">UTV Packages</a>
        <a href="{{ route('activity-packages') }}" class="hover:text-white transition">Activity Packages</a>
        <a href="{{ route('gallery') }}" class="hover:text-white transition">Gallery</a>
        <a href="{{ route('about-us') }}" class="hover:text-white transition">About Us</a>
        <a href="#" class="group flex items-center justify-center px-4 sm:px-6 lg:px-8 xl:px-10 py-0.5 sm:py-1 xl:py-2 border-2 border-[#C8A565] hover:border-white rounded-[50%] font-medium text-sm sm:text-base lg:text-lg xl:text-xl hover:text-white transition">
            <i class="fa-solid fa-location-dot mx-2"></i>
            <span class="text-white group-hover:text-[#C8A565] transition">FIND US</span>
        </a>
    </nav>
</header>
