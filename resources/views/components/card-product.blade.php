@props([
    'type_card' => 'left', // left or right
    'img' => '#',
    'alt_img' => 'Image',
    'title' => '-',
    'description' => '-',
    'url' => '#',
])
@php
    $type_card = $type_card === 'left' ? 'rounded-[0px_100px_0px_100px]' : 'rounded-[100px_0px_100px_0px]';
@endphp
<div {{ $attributes->merge(['class' => "relative w-[353px] h-[252px] lg:w-[403px] lg:h-[302px] xl:w-[606px] xl:h-[404px] overflow-hidden mb-8 $type_card"]) }}>
    <img src="{{ $img }}" alt="{{ $alt_img }}" class="w-full object-cover" loading="lazy">
    <div class="absolute h-1/2 bottom-0 p-10 text-white bg-gradient-to-b from-transparent to-[rgba(0,0,0,1)] w-full"></div>
    <div class="absolute bottom-0 p-8 lg:p-10 text-white bg-gradient-to-b from-transparent to-[rgba(0,0,0,1)] w-full">
        <h3 class="text-base md:text-lg font-bold">{{ $title }}</h3>
        <div class="flex flex-wrap items-center justify-between">
            <p class="text-sm md:text-base w-full lg:w-3/5 text-gray-200 mt-1">
                {{ $description }}
            </p>
            <a href="{{ $url }}" class="text-sm md:text-base mt-4 px-5 py-2 bg-[#C8A565] rounded-full font-semibold hover:scale-105 transition-transform">
                More Detail
            </a>
        </div>
    </div>
</div>
