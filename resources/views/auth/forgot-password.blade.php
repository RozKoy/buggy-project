{{-- <x-auth-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-auth-layout> --}}

@extends('layouts.auth.app')
@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
                <a href="#" class="mb-6 flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src="{{ asset('media/general/logo.svg') }}" alt="Logo" class="mx-2 h-8 w-8 object-cover" />
                    Buggy Bali Adventure
                </a>
                <div class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
                    @if (session('status'))
                        <x-alert variant="success">{{ session('status') }} </x-alert>
                    @endif
                    <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password
                            reset link that will allow you to choose a new one.</p>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="name@company.com" required="">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="mb-2 me-2 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
