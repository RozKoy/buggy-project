@extends('layouts.admin.app')
@section('content')
  <x-breadcrumb :breadcrumbs="[
      ['title' => 'Home', 'url' => '#'],
      ['title' => 'ATV', 'url' => '/atv'],
      ['title' => 'create', 'url' => null],
  ]" />
  <x-form id="submit_form" header="Add UTV" action="{{ route('admin.atv.store') }}">
    <div class="mb-6">
      <x-label for="image">Package Image</x-label>
      <x-input-field type="file" id="image" name="image" />
      <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>
    <div class="mb-6">
      <x-label for="name">Package Name</x-label>
      <x-input-field type="text" id="name" name="name" placeholder="SINGLE UTV..."
        value="{{ old('name') }}" required />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="mb-6">
      <x-label for="spec">Specification</x-label>
      <x-input-field type="text" id="spec" name="spec" placeholder="Two rides, one UTV..."
        value="{{ old('spec') }}" />
      <x-input-error :messages="$errors->get('spec')" class="mt-2" />
    </div>
    <div class="mb-6">
      <x-label for="description_editor">Description</x-label>
      <div id="description_editor">
        <b>SINGLE UTV</b> <span>: 1 UTV for one person...</span>
      </div>
      <x-input-field type="hidden" id="description" name="description" />
      <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>
    <div class="mb-6">
      <x-label for="price">Price</x-label>
      <x-input-field type="text" id="price" name="price" placeholder="1.000.000" value="{{ number_format(old('price'), null, ',', '.') }}" />
      <x-input-error :messages="$errors->get('price')" class="mt-2" />
    </div>
    {{-- Footer --}}
    <x-card-footer>        
      <a href="{{route('admin.atv.index')}}"><x-button variant="light" class="mr-3">Cancel</x-button></a>
      <x-button variant="primary" type="submit">Submit</x-button>
    </x-card-footer>
  </x-form>
@endsection
@push('js')
  <script>
    const quill = new Quill('#description_editor', {
      theme: 'snow'
    });
    // Set initial content from old input
    const oldContent = `{!! old('description') !!}`;
    if (oldContent) {
      quill.root.innerHTML = oldContent;
    }

    // Copy Quill HTML to hidden input before submitting
    document.getElementById('submit_form').addEventListener('submit', function() {
      document.getElementById('description').value = quill.root.innerHTML;
    });

    const priceInput = document.getElementById('price');

    // Function to format the price as IDR currency
    priceInput.addEventListener('input', function(e) {
      let value = e.target.value;
      value = value.replace(/[^\d]/g, '');
      value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
      e.target.value = value;
    });

    // Before the form is submitted, clean the value
    document.querySelector('#submit_form').addEventListener('submit', function (e) {
        let formattedValue = priceInput.value;
        let rawValue = formattedValue.replace(/[^\d]/g, '');
        priceInput.value = rawValue;
    });
  </script>
@endpush
