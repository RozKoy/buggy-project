@extends('layouts.guest.app')

@section('content')
    <x-hero-image image="{{ asset('media/element/bg-activity-packages.png') }}" alt="Buggy Ride">
        <div class="w-full max-w-screen-2xl relative flex flex-col items-center justify-center p-6 my-auto gap-4 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="font-extrabold text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl">
                Activity Packages
            </h1>
            <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold text-center">
                From thrilling ATV rides to white-water rafting and relaxing tubing,
                <br>
                our activity packages let you experience Bali’s nature and adventure your way.
            </p>
        </div>
    </x-hero-image>

    <div class="w-full bg-white">
        @if ($packages->count())
            <div class="w-full max-w-screen-2xl mx-auto grid md:grid-cols-2 py-14 lg:py-20 justify-items-center">
                @foreach ($packages as $key => $item)
                    <x-card-product type_card="{{ $key % 2 == 0 ? 'left' : 'right' }}" img="/storage/{{ $item['image'] }}" alt_img="Buggy Adventure" title="{{ $item['name'] }}" description="{{ $item['spec'] }}" url="{{ route('detail', ['id' => $item['id']]) }}" />
                @endforeach
            </div>
        @endif
        @if (!$packages->count())
            <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl text-center text-black w-full py-14 lg:py-20">NO DATA</p>
        @endif
    </div>
@endsection
