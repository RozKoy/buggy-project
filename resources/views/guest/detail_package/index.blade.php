@extends('layouts.guest.app')

@section('content')
    <x-hero-image image="/storage/{{ $package->image }}" alt="Buggy Ride">
        <div class="w-full max-w-screen-2xl relative flex flex-col items-center justify-center p-6 my-auto gap-4 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="font-extrabold text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl">
                {{ $package->name }}
            </h1>
            <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold text-center">
                {{ $package->spec }}
            </p>
        </div>
    </x-hero-image>

    <div class="w-full bg-white">
        <div class="w-full max-w-screen-2xl mx-auto flex flex-wrap-reverse xl:flex-nowrap items-start gap-8 py-14 lg:py-20 px-6">
            <div class="w-full text-black">
                <img src="/storage/{{ $package->image }}" alt="" class="rounded-2xl w-full">
                <div class="py-10">
                    {!! $package->description !!}
                </div>
            </div>
            <div class="w-full border-4 border-black rounded-2xl text-black overflow-hidden">
                <div class="bg-black p-5 text-white text-center">
                    <p class="uppercase">Start From</p>
                    <p class="uppercase font-semibold text-xl md:text-2xl">IDR {{ number_format($package->price, 0, '.', '.') }}</p>
                </div>
                <form class="p-8 space-y-6 md:space-y-8 min-w-96 text-sm" x-data="{
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
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" x-model="name" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" x-model="nationality" name="nationality" id="nationality" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="nationality" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nationality</label>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" x-model="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" x-model="whatsapp" name="whatsapp" id="whatsapp" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="whatsapp" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Whatsapp</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="number" x-model="guests" name="number_of_guest" id="number_of_guest" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="number_of_guest" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Number of Guest</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" x-model="activity" name="activity" id="activity" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" disabled />
                            <label for="activity" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Activity</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="number" x-model="packages" name="number_of_package" id="number_of_package" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="number_of_package" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Number of Package</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="date" x-model="date" name="date" id="date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                            <label for="date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="time" x-model="time" name="time" id="time" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="time" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Time</label>
                        </div>
                    </div>
                    <button type="submit" x-on:click="toWa()" class="w-full rounded-xl p-4 bg-black font-semibold text-white text-center uppercase">Book Your Adventure</button>
                </form>
            </div>
        </div>

        <div class="w-full h-1 md:h-1.5 bg-[#C8A565]"></div>

        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-6 text-black py-14 lg:py-20 px-6">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center mb-10">
                INCLUDES
            </h3>
            <div class="grid md:grid-cols-2 mx-auto gap-6 text-base md:text-xl">
                <div class="flex gap-1.5 items-center">
                    <img src="/media/icon/bottle.svg" alt="">
                    <p>Welcome Drink</p>
                </div>
                <div class="flex gap-1.5 items-center">
                    <img src="/media/icon/protect.svg" alt="">
                    <p>Insurance</p>
                </div>
                <div class="flex gap-1.5 items-center">
                    <img src="/media/icon/shower.svg" alt="">
                    <p>Shower; Soap & Towel</p>
                </div>
                <div class="flex gap-1.5 items-center">
                    <img src="/media/icon/safety.svg" alt="">
                    <p>Safety Gear (Helmet & Boots)</p>
                </div>
                <div class="flex gap-1.5 items-center">
                    <img src="/media/icon/locker.svg" alt="">
                    <p>Locker</p>
                </div>
                <div class="flex gap-1.5 items-center">
                    <img src="/media/icon/utv.svg" alt="">
                    <p>Professional Instructor</p>
                </div>
                <div class="flex gap-1.5 items-center">
                    <img src="/media/icon/food.svg" alt="">
                    <p>Lunch</p>
                </div>
                <div class="flex gap-1.5 items-center">
                    <img src="/media/icon/float.svg" alt="">
                    <p>Floating Boat for River Bathing</p>
                </div>
            </div>
        </div>

        <div class="w-full h-1 md:h-1.5 bg-[#C8A565]"></div>

        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-6 text-black py-14 lg:py-20 px-6">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center mb-10">
                TERM & CONDITIONS
            </h3>
            <ul class="pl-10 list-disc max-w-screen-md mx-auto space-y-6 text-base md:text-xl">
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

        <div class="w-full h-1 md:h-1.5 bg-[#C8A565]"></div>

        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-6 text-black py-14 lg:py-20 px-6">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center mb-10">
                GALLERY
            </h3>

            @if ($galleries->count())
                <div class="relative w-full max-w-screen-2xl mx-auto overflow-hidden" x-data="{
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
                            <div class="w-full flex-shrink-0 grid gap-4 px-4" :class="{
                                'grid-cols-1': perPage === 1,
                                'grid-cols-2': perPage === 2,
                                'grid-cols-3': perPage === 3,
                                'grid-cols-4': perPage === 4
                            }">

                                <template x-for="item in chunk" :key="item.id">
                                    <div class="bg-white/25 shadow rounded overflow-hidden">
                                        <img x-bind:src="`/storage/${item.image}`" loading="lazy" class="w-full h-48 object-cover">
                                    </div>
                                </template>
                            </div>
                        </template>
                    </div>
                    <button @click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 group">
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button @click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 group">
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            @endif

        </div>

    </div>
@endsection
