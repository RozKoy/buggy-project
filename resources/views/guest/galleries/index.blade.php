@extends('layouts.guest.app')

@php
    $collections = collect([
        [
            'title' => 'Single ATV + Rafting',
            'description' => 'Rafting — Ride solo on 1 ATV + 1 rafting pack (for 1 person)',
            'img' => '/media/element/about-us.png',
        ],
        [
            'title' => 'Tandem ATV + Rafting',
            'description' => '2 people on 1 ATV + 2 rafting packs',
            'img' => '/media/element/find-us.png',
        ],
        [
            'title' => 'Single ATV 300 CC + Rafting',
            'description' => 'Powerful solo ride (300cc) + 1 rafting pack',
            'img' => '/media/element/gallery.png',
        ],
        [
            'title' => 'Tandem ATV 300 CC + Rafting',
            'description' => '300cc ride for 2 + 2 rafting packs',
            'img' => '/media/element/home.png',
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

    <div class="w-full bg-white space-y-8 md:space-y-12 lg:space-y-16 xl:space-y-20 px-6" x-data="{
        preview: '{{ $collections->first()['img'] }}'
    }">
        <div id="preview" class="w-full max-w-screen-2xl mx-auto flex flex-col gap-8 text-black pt-14 lg:pt-20">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
                CAPTURED THRILLS
            </h3>
            <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold text-center">
                Discover the highlights of our buggy adventure through photos.
            </p>
            <img x-bind:src="preview" alt="" srcset="" class="mx-auto w-11/12 md:w-8/12">
        </div>
        <div class="w-full max-w-screen-2xl mx-auto flex flex-wrap justify-center items-center gap-5 pb-14 lg:pb-20">
            @foreach ($collections as $key => $item)
                <a href="#preview" class="w-80 aspect-video bg-no-repeat bg-cover bg-center" style="background-image: url('{{ $item['img'] }}')" title="{{ $item['title'] }}" x-on:click="preview = '{{ $item['img'] }}'">
                </a>
            @endforeach
        </div>
    </div>
@endsection
