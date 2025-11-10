@extends('layouts.admin.app')
@section('content')
  <!-- Breadcrumb -->
  <x-breadcrumb :breadcrumbs="[['title' => 'Home', 'url' => '#'], ['title' => 'ATV', 'url' => '#'], ['title' => 'List', 'url' => null]]" />
  <!-- Display Success Message -->
  @if (session('success'))
    <x-alert variant="success">{{ session('success') }} </x-alert>
  @endif
  <!-- Content -->
  <x-card>
    <div class="flex flex-wrap justify-between items-center mb-4">
      <form class="mb-3 w-72">
        <div class="relative">
          <div class="absolute start-0 top-4 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </div>
          <x-input-field type="text" id="search" name="search" placeholder="Search..." class="py-3 pl-8 pr-3"
            value="{{ $search }}" />
          <x-button type="submit" size="sm" class="absolute top-2 right-3">Search</x-button>
        </div>
      </form>
      <a href="{{ route('admin.atv.create') }}" class=""><x-button>Add ATV Package</x-button></a>
    </div>
    <x-table id="atv-table" :headers="['No', 'Image', 'Name', 'Spec', 'Price', 'Actions']" :pagination="$atvs">
      @if (count($atvs) > 0)
        @foreach ($atvs as $index => $atv)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <td class="px-6 py-4">{{ $atvs->firstItem() + $index }}</td>
            <td class="px-6 py-4">
              @if ($atv->image)
                <img src="{{ asset('storage/' . $atv->image) }}" width="50" />
              @else
                No Image
              @endif
            </td>
            <th scope="row" class="px-6 py-4 font-medium text-black-900 whitespace-nowrap dark:text-white">
              {{ $atv->name }} {{ $atv->id }}
            </th>
            <td class="px-6 py-4">
              {{ $atv->spec }}
            </td>
            <td class="px-6 py-4">
              {{-- {{ $atv->price }} --}}
              {{ 'Rp. ' . number_format($atv->price, 0, ',', '.') }}
            </td>
            <td class="px-6 py-4">
              <div class="flex items-center gap-2">
                <a href="{{ route('admin.atv.edit', $atv->id) }}">
                  <x-button variant="warning" size="sm">Edit</x-button>
                </a>
                <form id="delete-form-{{ $atv->id }}"
                  onsubmit="return confirm('Are you sure you want to delete this data?');" method="POST"
                  class="inline" action="{{ route('admin.atv.destroy', $atv->id) }}">
                  @csrf
                  @method('DELETE')
                  <x-button type="submit" variant="danger" size="sm">Delete</x-button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      @else
        <tr>
          <td colspan="6"><p class="text-center text-gray-500 py-5">No data found.</p></td>
        </tr>
      @endif
    </x-table>
  </x-card>
@endsection
