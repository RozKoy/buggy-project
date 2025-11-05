@extends('layouts.guest.app')

@section('content')
    <x-hero-image image="{{ asset('media/element/find-us.png') }}" alt="Buggy Ride">
        <div class="w-full max-w-screen-2xl relative flex flex-col items-center justify-center p-6 my-auto gap-4 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="font-extrabold text-center text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                FIND US
            </h1>
        </div>
    </x-hero-image>

    <div class="w-full bg-white space-y-8 md:space-y-12 lg:space-y-16 xl:space-y-20 px-6">
        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-8 text-black py-14 lg:py-20">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
                OUR LOCATION
            </h3>
            <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl text-center">
                Find us at our exciting off-road locations and experience the thrill of nature with our expert team!
            </p>
            <div class="mx-auto bg-black rounded-2xl flex flex-wrap justify-center gap-10 p-5 md:p-10 my-5 md:my-10 text-white shadow">
                <img src="{{ asset('media/general/logo.svg') }}" alt="Logo" class="w-52" />
                <div class="flex flex-col justify-between gap-5">
                    <p class="text-xl md:text-2xl lg:text-3xl font-semibold">
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
            </div>
            <div class="mx-auto bg-[#985D2F] rounded-2xl flex flex-wrap justify-center gap-10 p-5 md:p-10 my-5 md:my-10 text-white shadow">
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
            </div>
        </div>
    </div>
@endsection
