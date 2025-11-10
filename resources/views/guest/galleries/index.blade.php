@extends('layouts.guest.app')

@section('content')
    <x-hero-image image="{{ asset('media/element/gallery.png') }}" alt="Buggy Ride">
        <div class="w-full max-w-screen-2xl relative flex flex-col items-center justify-center p-6 my-auto gap-4 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="font-extrabold text-center text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                Gallery
            </h1>
        </div>
    </x-hero-image>

    @if ($galleries->count())
        <div class="w-full bg-white space-y-8 md:space-y-12 lg:space-y-16 xl:space-y-20 px-6" x-data="{
            items: {{ json_encode($galleries) }},
            preview: {{ json_encode($galleries->first()) }},
        }">
            <div id="preview" class="w-full max-w-screen-2xl mx-auto flex flex-col gap-8 text-black pt-14 lg:pt-20">
                <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
                    CAPTURED THRILLS
                </h3>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold text-center">
                    Discover the highlights of our buggy adventure through photos.
                </p>
                <img x-bind:src="`/storage/${preview.image}`" alt="" srcset="" class="mx-auto w-11/12 md:w-8/12">
            </div>
            <div class="w-full max-w-screen-2xl mx-auto flex flex-wrap justify-center items-center gap-5 pb-14 lg:pb-20">

                <template x-for="item in items">
                    <a href="#preview" x-bind:class="`w-80 aspect-video bg-no-repeat bg-cover bg-center ${item.id === preview.id ? 'border-4 border-[#C8A565]' : ''}`" x-bind:style="`background-image: url('/storage/${item.image}')`" x-on:click="preview = item">
                    </a>
                </template>

            </div>
        </div>
    @else
        <p class="bg-white text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl text-center text-black w-full py-14 lg:py-20">NO DATA</p>
    @endif
@endsection
