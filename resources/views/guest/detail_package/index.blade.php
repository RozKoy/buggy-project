@extends('layouts.guest.app')

@php
    $faqs = [
        [
            'q' => 'What is the minimum age to join the Buggy Adventure?',
            'a' => 'The minimum age to drive is 17 years old (must have driving skills), while passengers can join from 6 years old.',
        ],
        [
            'q' => 'What should I bring for the Buggy ride?',
            'a' => 'Comfortable clothes (that you don’t mind getting muddy), sunglasses, and sunscreen.',
        ],
        [
            'q' => 'Do I need a driving license?',
            'a' => 'The minimum age to drive is 17 years old (must have driving skills), while passengers can join from 6 years old.',
        ],
        [
            'q' => 'How long is the track and what can I expect?',
            'a' => 'Our private track is about 7 km with exciting routes: Crocodile Cave, Water Pits, Rice Fields, Mud, Circuit, and Fun Speed.',
        ],
        [
            'q' => 'Is insurance included?',
            'a' => 'Yes, insurance coverage is included for all participants aged 6-60 years old.',
        ],
        [
            'q' => 'Can beginners join the Buggy Adventure?',
            'a' => 'Yes! Our buggy is fully automatic, and professional guides will give you a safety briefing before the ride.',
        ],
        [
            'q' => 'What happens if it rains?',
            'a' => 'The ride is still safe and fun in light rain (even more exciting with mud!). For heavy rain or unsafe conditions, the trip may be rescheduled.',
        ],
        [
            'q' => 'How far is the distance between the UTV and rafting locations, and how do we get there?',
            'a' => 'The distance between the UTV and rafting locations is about 30 minutes. You can use your private vehicle or online transportation such as Gojek or Grab to reach each location.',
        ],
        [
            'q' => 'If I book the package at 8-10 AM or at 11-12 PM, which activity will I do first?',
            'a' => 'If you choose 11 AM or 12 PM, you will do rafting first. If you choose 8-10 AM, you will do UTV first.',
        ],
    ];
@endphp

@section('content')
    <x-hero-image image="/storage/{{ $package->image }}" alt="Buggy Ride">
        <div class="relative my-auto flex w-full max-w-screen-2xl flex-col items-center justify-center gap-4 p-6 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="text-center text-2xl font-extrabold sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl">
                {{ $package->name }}
            </h1>
            <p class="text-center text-xs font-bold sm:text-sm md:text-base lg:text-lg xl:text-xl">
                {{ $package->spec }}
            </p>
        </div>
    </x-hero-image>

    <div class="w-full bg-white">
        <div class="mx-auto flex w-full max-w-screen-2xl flex-wrap-reverse items-start gap-8 px-6 py-14 lg:py-20 xl:flex-nowrap">
            <div class="w-full text-black">
                <img src="/storage/{{ $package->image }}" alt="" class="w-full rounded-2xl">
                <div class="py-10">
                    {!! $package->description !!}
                </div>
            </div>
            <div class="w-full overflow-hidden rounded-2xl border-4 border-black text-black">
                <div class="bg-black p-5 text-center text-white">
                    <p class="uppercase">Start From</p>
                    <p class="text-xl font-semibold uppercase md:text-2xl">IDR {{ number_format($package->price, 0, '.', '.') }}</p>
                </div>
                <div class="overflow-auto">
                    <form class="min-w-64 space-y-6 p-8 text-sm md:space-y-8" x-data="{
                        name: '',
                        nationality: '',
                        email: '',
                        whatsapp: '',
                        guests: '',
                        activity: '{{ $package->name }}',
                        packages: '',
                        date: '',
                        time: '',

                        toWa() {
                            if (this.name && this.nationality && this.email && this.whatsapp && this.guests && this.activity && this.packages && this.date && this.time) {
                                const message = `Hello *Buggy Bali Adventure*!
                    I would like to make an activity booking. Here are the details:

                    *Booking Details*:

                    *Name*: ${this.name}
                    *Nationality*: ${this.nationality}
                    *Email*: ${this.email}
                    *WhatsApp*: ${this.whatsapp}
                    *Number of Guests*: ${this.guests}
                    *Activity*: ${this.activity}
                    *Number of Packages*: ${this.packages}
                    *Date*: ${this.date}
                    *Time*: ${this.time}

                    Please confirm the availability.
                    Thank you :)`;

                                const a = document.createElement('a');
                                a.href = `https://wa.me/{{ $phone_number }}?text=${encodeURIComponent(message)}`;
                                a.target = '_blank';
                                a.rel = 'noopener noreferrer';
                                a.click();
                            }
                        }
                    }">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="group relative z-0 mb-5 w-full">
                                <input type="text" x-model="name" name="name" id="name" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder=" " required />
                                <label for="name"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:translate-x-1/4">Name</label>
                            </div>
                            <div class="group relative z-0 mb-5 w-full">
                                <input type="text" x-model="nationality" name="nationality" id="nationality" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder=" " required />
                                <label for="nationality"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:translate-x-1/4">Nationality</label>
                            </div>
                        </div>
                        <div class="group relative z-0 mb-5 w-full">
                            <input type="email" x-model="email" name="email" id="email" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder=" " required />
                            <label for="email"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">Email</label>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="group relative z-0 mb-5 w-full">
                                <input type="tel" x-model="whatsapp" name="whatsapp" id="whatsapp" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder=" " required />
                                <label for="whatsapp"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:translate-x-1/4">Whatsapp</label>
                            </div>
                            <div class="group relative z-0 mb-5 w-full">
                                <input type="number" x-model="guests" name="number_of_guest" id="number_of_guest" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder=" " required />
                                <label for="number_of_guest"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:translate-x-1/4">Number
                                    of Guest</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="group relative z-0 mb-5 w-full">
                                <input type="text" x-model="activity" name="activity" id="activity" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder="" disabled />
                                <label for="activity"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:translate-x-1/4">Activity</label>
                            </div>
                            <div class="group relative z-0 mb-5 w-full">
                                <input type="number" x-model="packages" name="number_of_package" id="number_of_package" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder=" " required />
                                <label for="number_of_package"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:translate-x-1/4">Number
                                    of Package</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="group relative z-0 mb-5 w-full">
                                <input type="date" x-model="date" name="date" id="date" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder="" required />
                                <label for="date"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:translate-x-1/4">Date</label>
                            </div>
                            <div class="group relative z-0 mb-5 w-full">
                                <input type="time" x-model="time" name="time" id="time" class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" placeholder=" " required />
                                <label for="time"
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500 rtl:peer-focus:translate-x-1/4">Time</label>
                            </div>
                        </div>
                        <button type="submit" x-on:click="toWa()" class="w-full rounded-xl bg-black p-4 text-center font-semibold uppercase text-white">Book Your Adventure</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="h-1 w-full bg-[#C8A565] md:h-1.5"></div>

        <div class="mx-auto flex w-full max-w-screen-2xl flex-col gap-6 px-6 py-14 text-black lg:py-20">
            <h3 class="mb-10 text-center text-xl font-bold md:text-2xl lg:text-3xl">
                INCLUDES
            </h3>
            <div class="mx-auto grid gap-6 text-base md:grid-cols-2 md:text-xl">
                <div class="flex items-center gap-1.5">
                    <img src="/media/icon/bottle.svg" alt="">
                    <p>Welcome Drink</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <img src="/media/icon/protect.svg" alt="">
                    <p>Insurance</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <img src="/media/icon/shower.svg" alt="">
                    <p>Shower; Soap & Towel</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <img src="/media/icon/safety.svg" alt="">
                    <p>Safety Gear (Helmet & Boots)</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <img src="/media/icon/locker.svg" alt="">
                    <p>Locker</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <img src="/media/icon/utv.svg" alt="">
                    <p>Professional Instructor</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <img src="/media/icon/food.svg" alt="">
                    <p>Lunch</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <img src="/media/icon/float.svg" alt="">
                    <p>Floating Boat for River Bathing</p>
                </div>
            </div>
        </div>

        <div class="h-1 w-full bg-[#C8A565] md:h-1.5"></div>

        <div class="mx-auto flex w-full max-w-screen-2xl flex-col gap-6 px-6 py-14 text-black lg:py-20">
            <h3 class="mb-10 text-center text-xl font-bold md:text-2xl lg:text-3xl">
                TERM & CONDITIONS
            </h3>
            <ul class="mx-auto max-w-screen-md list-disc space-y-6 pl-10 text-base md:text-xl">
                <li>
                    Participants driving the buggy must have driving skills.
                </li>
                <li>
                    Minimum age: 17 years old (driver) | 6 years old (passenger).
                </li>
                <li>
                    Automatic buggy (easy to drive).
                </li>
                <li>
                    Duration: ± 1 hour (7 km track).
                </li>
                <li>
                    Track: Crocodile Cave, Water Pits, Rice Fields, Mud, Circuit, Fun Speed, Jungle.
                </li>
                <li>
                    Bathing in a river with a floating boat, with views of a natural mini waterfall, canyons, and centuries-old springs and caves.
                </li>
            </ul>
        </div>

        <div class="h-1 w-full bg-[#C8A565] md:h-1.5"></div>

        <div class="mx-auto flex w-full max-w-screen-2xl flex-col gap-6 px-6 py-14 text-black lg:py-20">
            <h3 class="mb-10 text-center text-xl font-bold md:text-2xl lg:text-3xl">
                GALLERY
            </h3>

            @if ($galleries->count())
                <div class="relative mx-auto w-full max-w-screen-2xl overflow-hidden" x-data="{
                    items: {{ json_encode($galleries) }},
                    currentSlide: 0,
                    perPage: 4,
                    visibleChunks: [],

                    init() {
                        this.updatePerPage();
                        window.addEventListener('resize', this.updatePerPage.bind(this));
                    },

                    updatePerPage() {
                        const w = window.innerWidth;
                        if (w >= 1280) this.perPage = 4;
                        else if (w >= 1024) this.perPage = 3;
                        else if (w >= 768) this.perPage = 2;
                        else this.perPage = 1;

                        this.chunkItems();
                    },

                    chunkItems() {
                        this.visibleChunks = [];
                        for (let i = 0; i < this.items.length; i += this.perPage) {
                            this.visibleChunks.push(this.items.slice(i, i + this.perPage));
                        }

                        if (this.currentSlide >= this.visibleChunks.length) {
                            this.currentSlide = 0;
                        }
                    },

                    next() {
                        if (this.currentSlide < this.visibleChunks.length - 1) {
                            this.currentSlide++;
                        } else {
                            this.currentSlide = 0;
                        }
                    },

                    prev() {
                        if (this.currentSlide > 0) {
                            this.currentSlide--;
                        } else {
                            this.currentSlide = this.visibleChunks.length - 1;
                        }
                    },
                }" x-init="init()">
                    <div class="flex transition-transform duration-500 ease-in-out" :style="`transform: translateX(-${currentSlide * 100}%);`">
                        <template x-for="(chunk, index) in visibleChunks" :key="index">
                            <div class="grid w-full flex-shrink-0 gap-4 px-4" :class="{
                                'grid-cols-1': perPage === 1,
                                'grid-cols-2': perPage === 2,
                                'grid-cols-3': perPage === 3,
                                'grid-cols-4': perPage === 4
                            }">

                                <template x-for="item in chunk" :key="item.id">
                                    <div class="overflow-hidden rounded bg-white/25 shadow">
                                        <img x-bind:src="`/storage/${item.image}`" loading="lazy" class="h-48 w-full object-cover">
                                    </div>
                                </template>
                            </div>
                        </template>
                    </div>
                    <button @click="prev()" class="group absolute left-0 top-1/2 -translate-y-1/2">
                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                            <svg class="h-4 w-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button @click="next()" class="group absolute right-0 top-1/2 -translate-y-1/2">
                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                            <svg class="h-4 w-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            @endif

        </div>

        <div class="h-1 w-full bg-[#C8A565] md:h-1.5"></div>

        <div class="mx-auto flex w-full max-w-screen-2xl flex-col gap-6 px-6 py-14 text-black lg:py-20">
            <h3 class="mb-10 text-center text-xl font-bold md:text-2xl lg:text-3xl">
                FREQUENTLY ASK
            </h3>
            <div class="space-y-3">
                @foreach ($faqs as $faq)
                    <details class="group transition-all">
                        <summary class="flex cursor-pointer items-center justify-between bg-gray-50 p-4 transition-all hover:bg-gray-100">
                            <span class="text-sm font-medium md:text-base">
                                {{ $faq['q'] }}
                            </span>

                            <svg class="h-5 w-5 transform transition-transform group-open:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>

                        <div class="bg-gray-50 p-4 text-sm text-gray-700 transition-all md:text-base">
                            {{ $faq['a'] }}
                        </div>
                    </details>
                @endforeach
            </div>
        </div>

    </div>
@endsection
