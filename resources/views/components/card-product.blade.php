@props([
  'type_card' => 'left', // left or right
  'img' => '#',
  'alt_img' => 'Image',
  'title' => '-',
  'description' => '-',
  'url' => '#'
])
@php
  $type_card = $type_card === 'left' ? 'rounded-[0px_100px_0px_100px]' : 'rounded-[100px_0px_100px_0px]';
@endphp
<div class="relative w-[606px] h-[404px] {{$type_card}} overflow-hidden mb-8">
  <img src="{{$img}}" alt="{{$alt_img}}"
    class="w-full object-cover group-hover:scale-105 transition-transform duration-500">  
  <div class="absolute bottom-0 p-12 text-white bg-gradient-to-b from-transparent to-black w-full">
    <h3 class="text-lg font-bold">{{$title}}</h3>
    <div class="flex items-center justify-between">
      <p class="w-3/5 text-gray-200 mt-1">
        {{$description}}
      </p>
      <a href="{{ $url }}"
        class="mt-4 px-5 py-2 bg-[#C8A565] rounded-full font-semibold hover:scale-105 transition-transform">
        More Detail
      </a>
    </div>
  </div>
</div>