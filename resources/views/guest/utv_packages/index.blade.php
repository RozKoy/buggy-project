@extends('layouts.guest.app')
@section('content')
  @php
      $collections = collect([
          [
              'title' => 'Single ATV + Rafting',
              'description' => 'Rafting — Ride solo on 1 ATV + 1 rafting pack (for 1 person)',
              'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
          ],
          [
              'title' => 'Tandem ATV + Rafting',
              'description' => '2 people on 1 ATV + 2 rafting packs',
              'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
          ],
          [
              'title' => 'Single ATV 300 CC + Rafting',
              'description' => 'Powerful solo ride (300cc) + 1 rafting pack',
              'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
          ],
          [
              'title' => 'Tandem ATV 300 CC + Rafting',
              'description' => '300cc ride for 2 + 2 rafting packs',
              'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
          ],
          [
              'title' => 'Single ATV + Tubing',
              'description' => '1 ATV for 1 person + 1 tubing pack',
              'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
          ],
          [
              'title' => 'Tandem ATV + Tubing',
              'description' => '1 ATV for 2 people + 2 tubing packs',
              'img' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg',
          ],
      ]);

  @endphp
  <!-- Hero Image -->
  <x-hero-image image="{{ asset('media/element/bg-utv-packages.png') }}">
    <!-- Hero Content -->
    <section class="relative flex flex-col items-center justify-center text-center px-4 mt-40">
      <h1 class="text-3xl md:text-5xl font-extrabold mb-12">
        UTV Packages
      </h1>
      <p class="text-base md:text-lg font-bold">Select your adventure ride solo with a Single UTV, or double the excitement <br> with a Tandem UTV, perfect for sharing the journey in style.</p>
    </section>
  </x-hero-image>  
  <div class="bg-white flex py-16 flex-wrap justify-around">
    @foreach ($collections as $key => $item)
    <x-card-product type_card="{{ $key % 2 == 0 ? 'left' : 'right' }}" img="{{$item['img']}}" alt_img="Buggy Adventure" title="{{$item['title']}}"
    description="{{$item['description']}}" url="#" />
    @endforeach
  </div>
@endsection
