@extends('layouts.guest.app')

@section('content')
    <x-hero-image image="{{ asset('media/element/bg-activity-packages.png') }}" alt="Buggy Ride">
        <div class="relative my-auto flex w-full max-w-screen-2xl flex-col items-center justify-center gap-4 p-6 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="text-center text-2xl font-extrabold sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl">
                Activity Packages
            </h1>
            <p class="text-center text-xs font-bold sm:text-sm md:text-base lg:text-lg xl:text-xl">
                From thrilling ATV rides to white-water rafting and relaxing tubing,
                <br>
                our activity packages let you experience Bali’s nature and adventure your way.
            </p>
        </div>
    </x-hero-image>

    <div class="w-full bg-white">
        @if ($packages->count())
            <div class="mx-auto grid w-full max-w-screen-2xl justify-items-center py-14 md:grid-cols-2 lg:py-20">
                @foreach ($packages as $key => $item)
                    <x-card-product type_card="{{ $key % 2 == 0 ? 'left' : 'right' }}" img="/storage/{{ $item['image'] }}" alt_img="Buggy Adventure" title="{{ $item['name'] }}" description="{{ $item['spec'] }}" url="{{ route('detail', ['id' => $item['id']]) }}" />
                @endforeach
            </div>
        @endif
        @if (!$packages->count())
            <p class="w-full py-14 text-center text-xs text-black sm:text-sm md:text-base lg:py-20 lg:text-lg xl:text-xl">NO DATA</p>
        @endif
    </div>
@endsection
