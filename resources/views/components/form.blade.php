<x-card>
  {{-- Header --}}
  <x-card-header>
    {{ $header }}
  </x-card-header>
  <form id="{{ $id }}" action="{{ $action }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{-- Content --}}
      <div class="py-4">
          {{ $slot }}
      </div>
  </form>
</x-card>
