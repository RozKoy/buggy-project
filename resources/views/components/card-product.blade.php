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
    <div class="absolute bottom-0 w-full bg-[linear-gradient(to_bottom,transparent,rgba(0,0,0,1),rgba(0,0,0,1))] p-8 text-white lg:p-10">
        <h3 class="text-base font-bold md:text-lg">{{ $title }}</h3>
        <div class="flex flex-wrap items-center justify-between">
            <p class="mt-1 w-full text-sm text-gray-200 md:text-base lg:w-3/5">
                {{ $description }}
            </p>
            <a href="{{ $url }}" class="mt-4 rounded-full bg-[#C8A565] px-5 py-2 text-sm font-semibold transition-transform hover:scale-105 md:text-base">
                More Detail
            </a>
        </div>
    </div>
</div>
