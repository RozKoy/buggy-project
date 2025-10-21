@extends('layouts.guest.app')

@section('content')
    <!-- Hero Image -->
    <x-hero-image image="{{ asset('media/element/home.svg') }}" alt="Buggy Ride">
        <!-- Hero Content -->
        <div class="relative flex flex-col items-center justify-center text-center px-4 mt-96 gap-12 md:gap-16">
            <h1 class="text-4xl md:text-6xl lg:text-8xl font-extrabold leading-tight">
                Bali’s Most Exciting <br />
                <span class="text-[#C8A565]">Buggy</span> Ride
            </h1>
            <a href="#book" class="px-20 md:px-28 lg:px-36 py-5 text-xl md:text-2xl lg:text-3xl bg-[#162818] hover:bg-green-700 rounded-3xl font-semibold transition shadow-[inset_0_8px_5px_-4px_rgba(255,255,255,0.75)]">
                BOOK NOW
            </a>
        </div>
    </x-hero-image>

    <div class="relative flex flex-col items-center justify-center text-center py-20">
        <p class="leading-loose text-lg md:text-xl lg:text-2xl px-20 md:px-44 lg:px-80">
            Get behind the wheel of a fully automatic UTV Buggy and explore Bali like never before! Our exclusive 7 km private track takes you through muddy trails, rice fields, splashy waterholes, lush jungle paths, and even a mysterious crocodile cave.
        </p>
    </div>

    <div id="default-carousel" class="relative w-full hidden md:block" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-60 overflow-hidden rounded-lg md:h-72">
            @for ($i = 0; $i < 5; $i++)
                {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ $i % 2 === 0 ? asset('media/element/bg-utv-packages.png') : asset('media/element/bg-activity-packages.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div> --}}
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex w-full h-full items-center gap-8 px-20">
                        @for ($j = 0; $j < 4; $j++)
                            <div class="flex-1 rounded-xl overflow-hidden">
                                <img src="{{ $j % 2 === 0 ? asset('media/element/bg-utv-packages.png') : asset('media/element/bg-activity-packages.png') }}" class="object-cover" alt="...">
                            </div>
                        @endfor
                    </div>
                </div>
            @endfor
            {{-- <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div> --}}
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="relative flex flex-col items-center justify-center text-center py-20 gap-16">
        <p class="leading-loose text-lg md:text-xl lg:text-2xl px-20 md:px-44 lg:px-80">
            With professional instructors, full safety gear, and insurance coverage, you can enjoy the thrill with peace of mind. Whether you ride solo or share the adventure in a tandem buggy, every moment is packed with adrenaline, laughter, and unforgettable views.
        </p>
        <p class="leading-loose text-lg md:text-xl lg:text-2xl px-20 md:px-44 lg:px-80">
            End your ride with a refreshing river bath experience — floating on natural spring water surrounded by canyon walls, waterfalls, and hidden caves. The perfect blend of thrill and nature in one adventure!
        </p>
    </div>

    <div class="bg-white flex flex-col gap-6 md:gap-8 text-black py-20">
        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
            Our Services
        </h3>
        <div class="w-1/4 h-1 md:h-1.5 bg-[#C8A565] mx-auto"></div>
        <div class="flex flex-wrap justify-center p-16 gap-12">
            <div class="flex-1 border-4 border-[#C8A565] flex flex-col p-5 items-center">
                <p class="font-bold text-center text-xl">UTV Buggy Ride</p>
                <div class="w-36 aspect-square bg-slate-300 my-10"></div>
                <ul class="list-disc text-xl pl-10">
                    <li>
                        Estimated Duration ±1 hour
                    </li>
                    <li>
                        7 km Track, (Cave, Waterhole, Rice Fields, Mud, Jungle, Circuit and Fun Speed
                    </li>
                </ul>
            </div>
            <div class="flex-1 border-4 border-[#C8A565] flex flex-col p-5 items-center">
                <p class="font-bold text-center text-xl">River Bathing Experience</p>
                <div class="w-36 aspect-square bg-slate-300 my-10"></div>
                <p class="text-xl text-center">
                    After your ride, relax in the river with a floating boat while enjoying Natural waterfall, Fresh spring water, Hidden canyon & Ancient cave
                </p>
            </div>
            <div class="flex-1 border-4 border-[#C8A565] flex flex-col p-5 items-center">
                <p class="font-bold text-center text-xl">Protected Adventure</p>
                <div class="w-36 aspect-square bg-slate-300 my-10"></div>
                <ul class="list-disc text-xl pl-10">
                    <li>
                        Complete safety gear (helmet & boots) provided
                    </li>
                    <li>
                        Guided by professional instructor
                    </li>
                    <li>
                        Insurance
                    </li>
                    <li>
                        Beginner-friendly tracks with full supervision
                    </li>
                </ul>
            </div>
            <div class="flex-1 border-4 border-[#C8A565] flex flex-col p-5 items-center">
                <p class="font-bold text-center text-xl">Ride Inclusions</p>
                <div class="w-36 aspect-square bg-slate-300 my-10"></div>
                <ul class="list-disc text-xl pl-10">
                    <li>
                        Welcome Drink
                    </li>
                    <li>
                        Lunch ( Fried Rice / Fried Noodles)
                    </li>
                    <li>
                        Locker
                    </li>
                    <li>
                        Shower; Towel & Soap
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="px-12 md:px-20 lg:px-24 grid md:grid-cols-2 py-20 justify-items-center">
        @for ($i = 0; $i < 6; $i++)
            <x-card-product type_card="{{ $i % 2 == 0 ? 'left' : 'right' }}" img="{{ asset('media/element/home.svg') }}" alt_img="Buggy Adventure" title="Buggy Adventure" description="Tackle trails, feel the freedom your powered off-road adventure awaits." url="#" />
        @endfor
    </div>

    <div class="bg-white flex flex-col gap-8 text-black py-20">
        <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
            Experience The Ride
        </h3>
        <div class="w-1/4 h-1 md:h-1.5 bg-[#C8A565] mx-auto"></div>
        <div class="mx-auto w-11/12 md:w-10/12 aspect-video rounded-3xl bg-slate-300"></div>
    </div>
@endsection
