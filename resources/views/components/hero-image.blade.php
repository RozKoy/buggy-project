@props([
    'image' => '#',
    'alt' => 'Image',
])

<div {{ $attributes->merge(['class' => 'relative min-h-96 md:min-h-screen bg-cover w-full bg-cover bg-center bg-no-repeat']) }} style="background-image: url({{ $image }})">
    <div class="absolute inset-0 bg-black/50">
        <div class="flex items-start md:items-center justify-center w-full h-full">
            {{ $slot }}
        </div>
    </div>
</div>
