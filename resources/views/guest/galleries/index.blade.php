@extends('layouts.guest.app')

@php
    $collections = collect([
        [
            'title' => 'Single ATV + Rafting',
            'description' => 'Rafting — Ride solo on 1 ATV + 1 rafting pack (for 1 person)',
            'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        ],
        [
            'title' => 'Tandem ATV + Rafting',
            'description' => '2 people on 1 ATV + 2 rafting packs',
            'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        ],
        [
            'title' => 'Single ATV 300 CC + Rafting',
            'description' => 'Powerful solo ride (300cc) + 1 rafting pack',
            'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        ],
        [
            'title' => 'Tandem ATV 300 CC + Rafting',
            'description' => '300cc ride for 2 + 2 rafting packs',
            'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        ],
        [
            'title' => 'Single ATV + Tubing',
            'description' => '1 ATV for 1 person + 1 tubing pack',
            'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        ],
        [
            'title' => 'Tandem ATV + Tubing',
            'description' => '1 ATV for 2 people + 2 tubing packs',
            'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        ],
    ]);
@endphp

@section('content')
    <x-hero-image image="{{ asset('media/element/gallery.png') }}" alt="Buggy Ride">
        <div class="w-full max-w-screen-2xl relative flex flex-col items-center justify-center p-6 my-auto gap-4 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="font-extrabold text-center text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                Gallery
            </h1>
        </div>
    </x-hero-image>

    <div class="w-full bg-white space-y-8 md:space-y-12 lg:space-y-16 xl:space-y-20 px-6">
        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-8 text-black pt-14 lg:pt-20">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
                CAPTURED THRILLS
            </h3>
            <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold text-center">
                Discover the highlights of our buggy adventure through photos.
            </p>
            <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg" alt="" srcset="" class="mx-auto w-11/12 md:w-8/12">
        </div>
        <div class="w-full max-w-screen-2xl mx-auto flex flex-wrap justify-center items-center gap-5 pb-14 lg:pb-20">
            @for ($i = 0; $i < 5; $i++)
                @foreach ($collections as $key => $item)
                    <div class="w-80 aspect-video overflow-hidden" title="{{ $item['title'] }}">
                        <img src="{{ $item['img'] }}" alt="" srcset="" class="object-cover">
                    </div>
                @endforeach
            @endfor
        </div>
    </div>
@endsection
