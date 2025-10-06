@extends('layouts.guest.app')
@section('content')
  <!-- Hero Image -->
  <x-hero-image image="{{ asset('media/element/home.svg') }}" alt="Buggy Ride">
    <!-- Hero Content -->
    <section class="relative flex flex-col items-center justify-center text-center px-4 mt-40">
      <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
        Bali’s Most Exciting <br />
        <span class="text-yellow-400">Buggy</span> Ride
      </h1>
      <a href="#book"
        class="mt-8 px-8 py-4 bg-green-900 hover:bg-green-700 rounded-full font-semibold shadow-lg transition">
        BOOK NOW
      </a>
    </section>
  </x-hero-image>
  <section class="relative flex flex-col items-center justify-center text-center mt-40">
    <p class="px-8 md:px-40">Get behind the wheel of a fully automatic UTV Buggy and explore Bali like never before! Our
      exclusive 7 km private
      track takes you through muddy trails, rice fields, splashy waterholes, lush jungle paths, and even a mysterious
      crocodile cave.
    </p>
  </section>
  <div class="px-12 mx-auto grid grid-cols-2 gap-6">
    @for ($i = 0; $i < 6; $i++)
    <x-card-product type_card="{{ $i % 2 == 0 ? 'left' : 'right' }}" img="{{ asset('media/element/home.svg') }}" alt_img="Buggy Adventure" title="Buggy Adventure"
    description="Tackle trails, feel the freedom your powered off-road adventure awaits." url="#" />
    @endfor
  </div>
@endsection
