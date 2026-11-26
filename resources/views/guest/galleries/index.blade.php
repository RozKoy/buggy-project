@extends('layouts.guest.app')

@section('title', 'Gallery')

@section('content')
    <x-hero-image image="{{ asset('media/element/gallery.png') }}" alt="Buggy Ride">
        <div class="relative my-auto flex w-full max-w-screen-2xl flex-col items-center justify-center gap-4 p-6 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="text-center text-3xl font-extrabold sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                Gallery
            </h1>
        </div>
    </x-hero-image>

    @if ($galleries->count())
        <div class="w-full space-y-8 bg-white px-6 md:space-y-12 lg:space-y-16 xl:space-y-20" x-data="{
            items: {{ json_encode($galleries) }},
            preview: {{ json_encode($galleries->first()) }},
        }">
            <div id="preview" class="mx-auto flex w-full max-w-screen-2xl flex-col gap-8 pt-14 text-black lg:pt-20">
                <h3 class="text-center text-xl font-bold md:text-2xl lg:text-3xl">
                    CAPTURED THRILLS
                </h3>
                <p class="text-center text-xs font-bold sm:text-sm md:text-base lg:text-lg xl:text-xl">
                    Discover the highlights of our buggy adventure through photos.
                </p>
                <img x-bind:src="`/storage/${preview.image}`" loading="lazy" class="mx-auto w-11/12 md:w-8/12">
            </div>
            <div class="mx-auto flex w-full max-w-screen-2xl flex-wrap items-center justify-center gap-5 pb-14 lg:pb-20">

                <template x-for="item in items">
                    <a href="#preview" x-bind:class="`w-80 aspect-video bg-no-repeat bg-cover bg-center ${item.id === preview.id ? 'border-4 border-[#C8A565]' : ''}`" x-bind:style="`background-image: url('/storage/${item.image}')`" x-on:click="preview = item">
                    </a>
                </template>

            </div>
        </div>
    @else
        <p class="w-full bg-white py-14 text-center text-xs text-black sm:text-sm md:text-base lg:py-20 lg:text-lg xl:text-xl">NO DATA</p>
    @endif
@endsection
