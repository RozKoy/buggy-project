@extends('layouts.guest.app')

@section('content')
    <x-hero-image image="{{ asset('media/element/home.png') }}" alt="Buggy Ride">
        <div class="w-full max-w-screen-2xl relative flex flex-col items-center justify-center p-6 my-auto md:mt-80 gap-4 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="font-extrabold text-center text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                Bali’s Most Exciting
                <br />
                <span class="text-[#C8A565]">Buggy</span> Ride
            </h1>
            <a href="#book" class="bg-[#162818] rounded-3xl font-semibold hover:bg-green-700 px-10 sm:px-20 md:px-28 lg:px-32 xl:px-36 py-2 md:py-3 lg:py-4 xl:py-5 text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl transition shadow-[inset_0_8px_5px_-4px_rgba(255,255,255,0.75)]">
                BOOK NOW
            </a>
        </div>
    </x-hero-image>

    <div class="w-full max-w-screen-2xl mx-auto relative flex flex-col items-center justify-center px-6 py-14 lg:py-20">
        <p class="px-6 sm:px-12 md:px-14 lg:px-20 xl:px-28 !leading-normal sm:!leading-relaxed lg:!leading-loose text-center text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
            Get behind the wheel of a fully automatic UTV Buggy and explore Bali like never before! Our exclusive 7 km private track takes you through muddy trails, rice fields, splashy waterholes, lush jungle paths, and even a mysterious crocodile cave.
        </p>
    </div>

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
                                <img x-bind:src="`/storage/${item.image}`" class="w-full h-48 object-cover">
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

    <div class="w-full max-w-screen-2xl mx-auto relative flex flex-col items-center justify-center px-6 py-14 lg:py-20 gap-10 md:gap-16">
        <p class="px-6 sm:px-12 md:px-14 lg:px-20 xl:px-28 !leading-normal sm:!leading-relaxed lg:!leading-loose text-center text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
            With professional instructors, full safety gear, and insurance coverage, you can enjoy the thrill with peace of mind. Whether you ride solo or share the adventure in a tandem buggy, every moment is packed with adrenaline, laughter, and unforgettable views.
        </p>
        <p class="px-6 sm:px-12 md:px-14 lg:px-20 xl:px-28 !leading-normal sm:!leading-relaxed lg:!leading-loose text-center text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
            End your ride with a refreshing river bath experience — floating on natural spring water surrounded by canyon walls, waterfalls, and hidden caves. The perfect blend of thrill and nature in one adventure!
        </p>
    </div>

    <div class="w-full bg-white">
        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-6 md:gap-8 text-black py-14 lg:py-20">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
                Our Services
            </h3>
            <div class="w-1/4 h-1 md:h-1.5 bg-[#C8A565] mx-auto"></div>
            <div class="flex flex-wrap justify-center p-10 sm:p-16 gap-12">
                <div class="min-w-72 flex-1 border-4 border-[#C8A565] flex flex-col p-5 items-center">
                    <p class="font-bold text-center text-lg md:text-xl">UTV Buggy Ride</p>
                    <div class="w-36 aspect-square my-10">
                        <svg viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="object-cover">
                            <rect width="150" height="150" fill="url(#pattern0_113_398)" />
                            <defs>
                                <pattern id="pattern0_113_398" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_113_398" transform="scale(0.0111111)" />
                                </pattern>
                                <image id="image0_113_398" width="90" height="90" preserveAspectRatio="none" xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                    <ul class="list-disc text-lg md:text-xl pl-10">
                        <li>
                            Estimated Duration ±1 hour
                        </li>
                        <li>
                            7 km Track, (Cave, Waterhole, Rice Fields, Mud, Jungle, Circuit and Fun Speed
                        </li>
                    </ul>
                </div>
                <div class="min-w-72 flex-1 border-4 border-[#C8A565] flex flex-col p-5 items-center">
                    <p class="font-bold text-center text-lg md:text-xl">River Bathing Experience</p>
                    <div class="w-36 aspect-square my-10">
                        <svg viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="object-cover">
                            <rect width="150" height="150" fill="url(#pattern0_113_404)" />
                            <defs>
                                <pattern id="pattern0_113_404" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_113_404" transform="scale(0.0111111)" />
                                </pattern>
                                <image id="image0_113_404" width="90" height="90" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAHJUlEQVR4nO2caYgcRRTHK5t4a2J25x2zrAbj7tab0RgxIN5R8ALx+iD6xQMVP8QL8Qh4n2gQ8UDBW6OoIQb8oEY/GBDx+KASNWoMRBNPkojGxFtjVl53RyW7PTPdXb1TM9YPCpbto977T3V11atXbUwgEAgEAoFAIBAIBAKBQKAsJvYNVwUsnwKWrkfhx1DoJRD+IO0CPYZCi/VcvUav7bP9Vu81vqb7zUSwcBBavhqEl4DQLyg8MlZJu0Ha+WDpZ7D8Clq+CgUP/D8K31Op8WFo6T6wvCZNqKJCjxae16Dleyu16qFqg+lWegd7J6NUzwNLH7UqjkuhtyorQWjuQH2g13QL/dLfh5bnoeUfc4pShtBxUZss39bRgg8MDOyAwteg8A+FxChT6H+L2niN2mw6CbJ0BAp94kiEkXEQOu7HhT+FYT7W+A7UYWe0NN+l8ziOQv/bpdB89cX4CNe5DpY/LMVxGWehY7FXQL1/X+MbNEx7oMUT9MWXd2SBHggNQh/HL288QX0yvgPD1UNQeCEKb+oMoel1snS8MWaC6UR0VobCK30VGix9XhGebbqBqdOnTklad8ZHmJ4AS5eDVI9Ou7cei8+hJ1FoeUahF6ptpsuYCJYXNHH8PbR4ZRIUyoUGpTS+AcLvN27JvKB74x+zzDYajRvluKXXGrXavICtHqN97xj98WK1xXhODwmdhkLPotBXKLwxCQ69AZZubPamrkilipbWJ/3j6jIEHktw7YuTH3U91IEbna8+qC+xT5FvGxNfF1KNTi09KAVDMLPpWNnynyh8d6PpLAjP0UnBePaP0XtC+3zhOWnnVGdVd0ThexIfGnU7y9DijFIM1ZYX/7ItD5fe0YCS6RCqw9UKWlqa4UW6AQWPcmpEn+3bBYTW5RmbdsQLZ7aZBJbfzDw0FF6r2jizI1lWyjdOFTrfeA5YujCvfyh8rRMjeJAhW5cxqlUvN56jcY0CQm/QbseBEXxrASOiQtMJjafg3khF/QOhm4va0YNCXxY1pCL9w8ZToglOQf906FfoXRQP+Av+2pZ+93maq7apjYXFruGRuY0Ay08XNsDyC8Zz0NKLDrqPJ/PW3+Niva9i6WzjOVSjc4o3KFqfa8aoM5/ifRePkNDexnN0xuvCV11lylw5Cp7ronLN5zCdEcYdacvTC5YfdlG5zrqM78w2k1z4CpYezFw3WnrVReVTZk7b1XRCko8DXzXcm7nyZoHzVgvVaC/jOa7eRyD8WfbKhb92VPmZ5v8w6ojLD5krB6Ff3fRb/IzxnKzrmeldB/+RvXLLfzgS+iefRx7RzLBBXnb5QjtKTowNwCuNp2gSvDs/o0lLNv5ZYyvUmulzsHRnoThAyahtIHwXWPqisL/Cq7IbYOm1Ar/sq8miaydl1vdoJmlRvzPXipYez9GCVydpVR0NDuOJOZ/oRzNXVrF0UUaRn5syY/eppkvoHeyd3ELCT/FluyRnrlWRbzTdyQRdPWlVBxqi/fPN/5NElyYiX2+6HIiTaZr1z9/njus0e3RA+Klmaa66cFmJuiF6GS1/o2NWTV3Q5X0QukmXkkzJ8BDXQPgWsPwWCH0bb1yiL8Hy8yB0QQsrQBOaLYIkuXz5QKme3ODGbw0ODm6Xdq0eA0s3tLIbC4SXOE9G2ZJpGt276WO/IUobaJCPN23atO3V59R71Kon5Ta0Xq9vG7WA0Z3+r40yPqPctWjrcObh0dIoBXcQ9sxrs14LNboiykzNXv+7U/fq3y3t3tH2aaHfxmgoawsnTeojl+Xlp4YmCYHZnJRRT8wyFH5Eux2ydHjkZB1YW1bUuurA+j89hhYv1qGViz00OnGp1CpD6XqMfjlqF2iKojkZW8UCNqQN46IhkaPwKrax6Da4tKQYja//d5Cge841yci4AIVu/8+N72hw3qJ2i4TOCi1K8zMKK2w5z/I84wr9Fbf01WlbwipCx7VfHHbbslM2d1akul/c8mmd85wVsHSWTkvTj2fPxkTvS5QNm6bHFyB8hlOR/7l5jU8f6/+aUtB+UbiUomPwLFqUSjKcGunGApYvM76gWxbaLQiWVx4zvpB802ikK4ulF40vxDu0PBBF3JdCMQzXxB+I6lKhheYaX9DkPhT+q92ioPuyaTyii6UvfaH/5RHjG7qBs7smLfQ27UM7GY/X2R5C4c3tF4rzls2aFepz0s/WAfdVHog2kjVJsYwFiFLRRYMoTtzCuiO2u1j+Udc+Nc5tOpV4jzXPc5pi5kxgWq8fGHSyIdOrT2ZavlSD6m0XOP700CVO93F7yAT9sBUIPQCWvhsvcbUuELofhqsHd+wHqgowURN1kk39bzhLn02WmJKvz1yHggd0xFcWxo3ZZpLGtjWgHi2CalRQ99LEm+K/1iSV5PNum5K/9X8rknOe0EVSvTbZcheEDQQCgUAgEAgEAoFAIBAw5fA3Xh/Nbz0T8ZMAAAAASUVORK5CYII=" />
                            </defs>
                        </svg>
                    </div>
                    <p class="text-lg md:text-xl text-center">
                        After your ride, relax in the river with a floating boat while enjoying Natural waterfall, Fresh spring water, Hidden canyon & Ancient cave
                    </p>
                </div>
                <div class="min-w-72 flex-1 border-4 border-[#C8A565] flex flex-col p-5 items-center">
                    <p class="font-bold text-center text-lg md:text-xl">Protected Adventure</p>
                    <div class="w-36 aspect-square my-10">
                        <svg viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="object-cover">
                            <rect width="150" height="150" fill="url(#pattern0_115_410)" />
                            <defs>
                                <pattern id="pattern0_115_410" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_115_410" transform="scale(0.0111111)" />
                                </pattern>
                                <image id="image0_115_410" width="90" height="90" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFJUlEQVR4nO2dTYgcRRSAa4P/PwczXe+9XkcXYXfem0mMSkS9aFT81xy8iAfx55Qo/lwUFdSDKCjoIQh6UONBiYhnQQQvEmOUVTIEQqJ4MP7gfySJmnVdR173blzD7MzsTFdXd2998GDYma2u982rmp7u6h5jAoFAIBAIBAKBQCBwDOvN8djAcyKhDVbodhB6HIS2WMHXgfEdy/QRCO61Ql8C468alukwCHU0kscLf9fX6GuZdiT/q20IbdE2tW3dhm5Lt2mqSL1VXx0140uBaRMwPWuZ3gTB7SD4DQjNLUjLMebSbeN2y7RN+6R90z5qX03RqdfrJ4PAJcC0GZhesELvW6bvPYjsjBLaZ+275qC5YBMv1ty8yp2YmDjJMt5nhT4GplnfksBVMM1awU+A4QHNOVfJq6fqZ1qhtncJknPFC7U191wkT05OnghCu3wnDf5ilzpwLlqHUAGS7fiMiPF+56KT+aoAyYLHsEw73Ytm/N13ouBf9GHnon0nCQWJIFqC6E6VIoiWILpTpQiiJYjuVCmCaAmiO1WKIFp6hxU8YgUfti1LSehjxpkgWrKVHDXo+mNzsoKPBNGSkWTGGWTc2DWntYBBtLiVrNS4Nh5Ey4iSBf/sNl0sxgo+GkSLW8n6vM7dQbS4mS4Uy/G1+mYM034QLe4lB9GSj+S8RP+90iUD0+yKPWdo85KcxsE8RP+ykvYuoPv2fnIuGpi+GG3Y4Qe6rs0K3guC02WTPJ/DPveik9Wgww5v2maMWXW0sQ3mOBDaWirJ88WSh+i3h+0gNWmiS5OrQOjV0khO4y3jGmB6ZsjOzfVYCL4s2QNJbtINjiTrYsenjWss413DdhAZr+jR9ECyfUueF32HcQ1O4UVDd5JxX9yIo2FlF0GyRo3pQuMaXbI6SiJWcI+e2eixiTEQfHGo/eQGXZfRfnLPEdVqtU7I3my3hJh2jjj02supbE1OJfqu5PQNpx0mLyzjkxlUxp5BKrsolZzrB+ECOkdl1Ol2v8q2U/a8IlTyQkRNuszkyNj8JWx5yC6MZD38kPu1ilbwpeyGI/abRrxOF/+JppfdGV0qUYmvyTQJGbyy867ko9GEq4wHdPrYm61s7FvZPio5CabP/3ecJk/06qTMh6csLdub5HTE3WN8UePa6SD0m4Ok2rqoZfG2UPAmL9NFUs14wLbsacYnlvF5RxX0Q3J3AsY7Qeg1EPrHi+R0lD1nfJNcrrzo9g6VC6ZDupLJFAEQeqLCoh8zRUFvtWAZv/IuRbIO/DpeH59iigQ06Db/YijTQMFbTQEZs0zvVaia39WcTBHRDw3L+LN/STTycoJIotgUGZD4Zt+iYMSIGniLKQPz+72dksZWUxbS+y3p7dS8S+ssL3C6cHsZ/UiueGLc718eDRrf5na/pKyJmuMXlOJbI9OhfmdyCo8ew7WCf3iXuURo37CBV5oqAAJX+zq82VMy40wkeKOpEujzMGf3Sj6ifTJVBBkvd3H8eog4qKfiTJXBJq7xujfC9J1tjZ9vVgJxKz4bGD/NXzROn7Fm/CyzkphIv9S8kuOc/EbpvoxkiW3Q3S53/5K2mTb7zrMQ0BQ1gfGzzCUz7YYGrPOdX6GYTJcDPwVMf40uGGd0IWZuy2vLCDCcm9yrf3jRH6LgWt95lAZk3Jj+SMLAVbxffzihsGdFCj+dMD6kZzx6fNj9aJkezOXm2VUH1+Gpyd5J+vMfB5KfBdHrHZk26XO++xcIBAKBQCAQCAQCpsz8C4v+htJTJqdlAAAAAElFTkSuQmCC" />
                            </defs>
                        </svg>
                    </div>
                    <ul class="list-disc text-lg md:text-xl pl-10">
                        <li>
                            Complete safety gear (helmet & boots) provided
                        </li>
                        <li>
                            Guided by professional instructor
                        </li>
                        <li>
                            Insurance
                        </li>
                        <li>
                            Beginner-friendly tracks with full supervision
                        </li>
                    </ul>
                </div>
                <div class="min-w-72 flex-1 border-4 border-[#C8A565] flex flex-col p-5 items-center">
                    <p class="font-bold text-center text-lg md:text-xl">Ride Inclusions</p>
                    <div class="w-36 aspect-square my-10">
                        <svg viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="object-cover">
                            <rect width="150" height="150" fill="url(#pattern0_115_417)" />
                            <defs>
                                <pattern id="pattern0_115_417" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_115_417" transform="scale(0.0111111)" />
                                </pattern>
                                <image id="image0_115_417" width="90" height="90" preserveAspectRatio="none" xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                    <ul class="list-disc text-lg md:text-xl pl-10">
                        <li>
                            Welcome Drink
                        </li>
                        <li>
                            Lunch ( Fried Rice / Fried Noodles)
                        </li>
                        <li>
                            Locker
                        </li>
                        <li>
                            Shower; Towel & Soap
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @if ($packages->count())
        <div id="book" class="w-full max-w-screen-2xl mx-auto grid md:grid-cols-2 py-14 lg:py-20 justify-items-center">
            @foreach ($packages as $key => $item)
                <x-card-product type_card="{{ $key % 2 == 0 ? 'left' : 'right' }}" img="{{ $item['image'] }}" alt_img="Buggy Adventure" title="{{ $item['name'] }}" description="{{ $item['spec'] }}" url="#" />
            @endforeach
        </div>
    @endif

    <div class="w-full bg-white">
        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-8 text-black py-14 lg:py-20">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
                Experience The Ride
            </h3>
            <div class="w-1/4 h-1 md:h-1.5 bg-[#C8A565] mx-auto"></div>
            <iframe src="https://www.youtube.com/embed/AWPScXkYj6o?si=rnrkj0xB1v4ZdszB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="mx-auto w-11/12 md:w-10/12 aspect-video rounded-3xl"></iframe>
        </div>
    </div>
@endsection
