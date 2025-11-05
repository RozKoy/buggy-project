@extends('layouts.guest.app')

@php
    $collections = collect([
        // [
        //     'title' => 'Single ATV + Rafting',
        //     'description' => 'Rafting — Ride solo on 1 ATV + 1 rafting pack (for 1 person)',
        //     'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        // ],
        // [
        //     'title' => 'Tandem ATV + Rafting',
        //     'description' => '2 people on 1 ATV + 2 rafting packs',
        //     'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        // ],
        // [
        //     'title' => 'Single ATV 300 CC + Rafting',
        //     'description' => 'Powerful solo ride (300cc) + 1 rafting pack',
        //     'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        // ],
        // [
        //     'title' => 'Tandem ATV 300 CC + Rafting',
        //     'description' => '300cc ride for 2 + 2 rafting packs',
        //     'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        // ],
        // [
        //     'title' => 'Single ATV + Tubing',
        //     'description' => '1 ATV for 1 person + 1 tubing pack',
        //     'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        // ],
        // [
        //     'title' => 'Tandem ATV + Tubing',
        //     'description' => '1 ATV for 2 people + 2 tubing packs',
        //     'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
        // ],
    ]);
@endphp

@section('content')
    <x-hero-image image="{{ asset('media/element/bg-utv-packages.png') }}">
        <div class="w-full max-w-screen-2xl relative flex flex-col items-center justify-center p-6 my-auto gap-4 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="font-extrabold text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl">
                UTV Packages
            </h1>
            <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold text-center">
                Select your adventure ride solo with a Single UTV, or double the excitement
                <br>
                with a Tandem UTV, perfect for sharing the journey in style.
            </p>
        </div>
    </x-hero-image>

    <div class="w-full bg-white">
        @if ($collections->count())
            <div class="w-full max-w-screen-2xl mx-auto grid md:grid-cols-2 py-14 lg:py-20 justify-items-center">
                @foreach ($collections as $key => $item)
                    <x-card-product type_card="{{ $key % 2 == 0 ? 'left' : 'right' }}" img="{{ $item['img'] }}" alt_img="Buggy Adventure" title="{{ $item['title'] }}" description="{{ $item['description'] }}" url="#" />
                @endforeach
            </div>
        @endif
        @if (!$collections->count())
            <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl text-center text-black w-full py-14 lg:py-20">NO DATA</p>
        @endif
    </div>
@endsection
