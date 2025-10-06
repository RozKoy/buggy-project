<!-- Navbar -->
<header x-data="{ open: false }"
  class="text-[#C8A565] fixed inset-0 h-32 text-lg md:text-2xl font-bold z-20 px-6 md:px-12 py-4 flex items-center justify-between backdrop-blur bg-white/40">
  <!-- Logo -->
  <a href="{{url('/')}}" class="flex items-center space-x-2 font-bold">
    <img src="{{ asset('media/general/logo.svg') }}" alt="Logo" class="w-[60px] object-cover" />
    <span>Buggy <br> Bali Adventure</span>
  </a>

  <!-- Desktop Menu -->
  <nav class="hidden md:flex items-center space-x-8">
    <a href="{{url('utv-packages')}}" class="hover">UTV Packages</a>
    <a href="{{url('activity-packages')}}" class="hover">Activity Packages</a>
    <a href="{{url('gallery')}}" class="hover">Gallery</a>
    <a href="{{url('aboutus')}}" class="hover">About Us</a>
  </nav>

  <!-- Desktop Button -->
  <a href="#"
    class="hidden md:inline-flex items-center justify-center px-6 py-2 border border-[#C8A565] w-[237px] h-[60px] rounded-[65%] font-semibold hover:bg-[#C8A565] hover:text-white transition">
    <i class="fa-solid fa-location-dot mx-2"></i>
    <span class="text-white">FIND US</span>
  </a>

  <!-- Mobile Menu Button -->
  <button @click="open = !open" class="md:hidden focus:outline-none">
    <i class="fa-solid fa-bars"></i>
  </button>

  <!-- Mobile Dropdown -->
  <nav x-show="open" x-transition
    class="md:hidden absolute top-32 left-0 w-full backdrop-blur bg-white/40 flex flex-col items-center space-y-4 py-6 z-10">
    <a href="{{url('utv-packages')}}" class="hover">UTV Packages</a>
    <a href="{{url('activity-packages')}}" class="hover">Activity Packages</a>
    <a href="{{url('gallery')}}" class="hover">Gallery</a>
    <a href="{{url('aboutus')}}" class="hover">About Us</a>
    <a href="#"
      class="inline-flex items-center justify-center px-6 py-2 border border-[#C8A565] w-[237px] h-[60px] rounded-[65%] font-semibold hover:bg-[#C8A565] hover:text-white transition">
      <i class="fa-solid fa-location-dot mx-2"></i>
      <span class="text-white">FIND US</span>
    </a>
  </nav>
</header>
