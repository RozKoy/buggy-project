@extends('layouts.guest.app')
@section('content')
  <!-- Hero Image -->
  <x-hero-image image="{{ asset('media/element/bg-activity-packages.png') }}" alt="Buggy Ride">
    <!-- Hero Content -->
    <section class="relative flex flex-col items-center justify-center text-center px-4 mt-40">
      <h1 class="text-3xl md:text-5xl font-extrabold mb-12">
        Activity Packages
      </h1>
      <p class="text-base md:text-lg font-bold">From thrilling ATV rides to white-water rafting and relaxing tubing, <br> our activity packages let you experience Bali’s nature and adventure your way.</p>
    </section>
  </x-hero-image>    
  <div class="bg-white flex py-16 flex-wrap justify-around">
    @for ($i = 0; $i < 7; $i++)
    <x-card-product class="{{$i % 2 !== 0 ? 'justify-self-center' : ''}}" type_card="{{ $i % 2 == 0 ? 'left' : 'right' }}" img="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/3e/2c/14.jpg" alt_img="Buggy Adventure" title="Buggy Adventure"
    description="Tackle trails, feel the freedom your powered off-road adventure awaits." url="#" />
    @endfor
  </div>
  
@endsection
