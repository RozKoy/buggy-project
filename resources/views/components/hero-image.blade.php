@props([
    'image' => '#',
    'alt' => 'Image',
])

<div {{ $attributes->merge(['class' => 'relative h-screen bg-cover w-full']) }}>
    <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-full object-cover" loading="lazy" />
    <div class="absolute inset-0 bg-black/50">
        <div class="flex items-start md:items-center justify-center w-full h-full">
            {{ $slot }}
        </div>
    </div>
</div>
