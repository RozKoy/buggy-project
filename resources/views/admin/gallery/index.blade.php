@extends('layouts.admin.app')
@section('content')
  <!-- Breadcrumb -->
  <x-breadcrumb :breadcrumbs="[
      ['title' => 'Home', 'url' => '#'],
      ['title' => 'GALLERY', 'url' => '#'],
      ['title' => 'List', 'url' => null],
  ]" />
  <!-- Display Success Message -->
  @if (session('success'))
    <x-alert variant="success">{{ session('success') }} </x-alert>
  @endif
  <!-- Content -->
  <x-card>
    <div class="flex flex-wrap justify-end items-center mb-4">
      <x-button data-modal-target="default-modal" data-modal-toggle="default-modal">Add image</x-button>
    </div>
    @if (count($galleries) > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($galleries as $gallery)
          <div class="bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg transition-shadow">
            <div class="relative">
              <div class="h-48 overflow-hidden rounded-t-lg bg-gray-100">
                <img class="w-full h-full object-cover" src="{{ asset('storage/' . $gallery->image) }}" alt="image">
              </div>
              <!-- Delete Icon Button -->
              <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this data?');"
                class="absolute top-2 right-0 mr-2">
                @csrf
                @method('DELETE')
                <button type="submit"
                  class="p-2 bg-red-600 hover:bg-red-700 rounded-lg shadow-lg transition-colors group">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                  </svg>
                </button>
              </form>
            </div>
          </div>
        @endforeach
      </div>
    @else
    <p class="text-center text-gray-500">No images found.</p>
    @endif
  </x-card>
  <!-- Main modal -->
  <div id="default-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
        <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
          @csrf
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              Upload Image
            </h3>
            <button type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
              data-modal-hide="default-modal">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4 w-full">
            <div class="mb-6">
              <x-label for="image">Image</x-label>
              <x-input-field type="file" id="image" name="image" required />
              <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
            <x-button type="submit" class="mr-3">Upload</x-button>
            <x-button data-modal-hide="default-modal" variant="light">Cancel</x-button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
