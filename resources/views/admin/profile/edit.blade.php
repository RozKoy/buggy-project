{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.admin.app')
@section('content')
  <!-- Breadcrumb -->
  <x-breadcrumb :breadcrumbs="[['title' => 'Home', 'url' => '#'], ['title' => 'Profile', 'url' => '#']]" />
  <!-- Display Success Message -->
  @if (session('success'))
    <x-alert variant="success">{{ session('success') }} </x-alert>
  @endif
  <!-- Content -->
  @include('admin.profile.partials.update-profile-information-form')
  <div class="my-8"></div>
  @include('admin.profile.partials.update-password-form')
  @endsection
