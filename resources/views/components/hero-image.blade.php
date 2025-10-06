@props([
  'image' => '#', 
  'alt' => 'Image'
])
<div {{ $attributes->merge(['class' => 'relative inset-0 w-full']) }}>
  <img src="{{ $image }}" alt="{{ $alt }}"
    class="w-full h-full object-cover" />
  <div class="absolute inset-0 bg-black/40">
    <div class="flex items-center justify-center w-full h-full">
      {{ $slot }}
    </div>
  </div> <!-- overlay -->
</div>
