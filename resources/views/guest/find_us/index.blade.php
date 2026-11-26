@extends('layouts.guest.app')

@section('title', 'Find Us')

@section('content')
    <x-hero-image image="{{ asset('media/element/find-us.png') }}" alt="Buggy Ride">
        <div class="relative my-auto flex w-full max-w-screen-2xl flex-col items-center justify-center gap-4 p-6 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="text-center text-3xl font-extrabold sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                FIND US
            </h1>
        </div>
    </x-hero-image>

    <div class="w-full space-y-8 bg-white px-6 md:space-y-12 lg:space-y-16 xl:space-y-20">
        <div class="mx-auto flex w-full max-w-screen-2xl flex-col gap-8 py-14 text-black lg:py-20">
            <h3 class="text-center text-xl font-bold md:text-2xl lg:text-3xl">
                OUR LOCATION
            </h3>
            <p class="text-center text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
                Find us at our exciting off-road locations and experience the thrill of nature with our expert team!
            </p>
            <a href="https://maps.app.goo.gl/FeTCvRUkwM8QP4nbA" target="_blank" class="mx-auto my-5 flex flex-wrap justify-center gap-10 rounded-2xl bg-black p-5 text-white shadow transition hover:bg-opacity-75 md:my-10 md:p-10">
                <img src="{{ asset('media/general/logo.svg') }}" alt="Logo" class="w-52" />
                <div class="flex flex-col justify-between gap-5">
                    <p class="text-xl font-semibold md:text-2xl lg:text-3xl">
                        Buggy Bali Adventure
                    </p>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
                        Jl. Raya Singapadu Kaler, Singapadu Kaler,
                        <br>
                        Kec. Sukawati, Kabupaten Gianyar, Bali 80571
                    </p>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
                        +6285337284090
                    </p>
                </div>
            </a>
            {{-- <a href="https://maps.app.goo.gl/nEU3Le54vohE6QdS8" target="_blank" class="mx-auto bg-[#985D2F] hover:bg-opacity-75 rounded-2xl flex flex-wrap justify-center gap-10 p-5 md:p-10 my-5 md:my-10 text-white shadow transition">
                <img src="{{ asset('media/general/logo.png') }}" alt="Logo" class="w-52" />
                <div class="flex flex-col justify-between gap-5">
                    <p class="text-xl md:text-2xl lg:text-3xl font-semibold">
                        Beji River Adventure
                    </p>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
                        Jl. Raya Singapadu No.10, Singapadu Kaler,
                        <br>
                        Kec. Sukawati, Kabupaten Gianyar, Bali 80571
                    </p>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
                        +6282237676603
                    </p>
                </div>
            </a> --}}
        </div>
    </div>
@endsection
