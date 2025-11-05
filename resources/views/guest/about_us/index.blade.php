@extends('layouts.guest.app')

@section('content')
    <x-hero-image image="{{ asset('media/element/about-us.png') }}" alt="Buggy Ride">
        <div class="w-full max-w-screen-2xl relative flex flex-col items-center justify-center p-6 my-auto gap-4 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14">
            <h1 class="font-extrabold text-center text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                ABOUT US
            </h1>
        </div>
    </x-hero-image>

    <div class="w-full bg-white">
        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-6 text-black py-14 lg:py-20 px-6">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center mb-10">
                BUGGY BALI ADVENTURE
            </h3>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                Welcome to Buggy Bali Adventure, where thrill meets nature in the heart of Ubud.
            </p>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                We are proud to offer Bali’s first and only private off-road buggy track, designed exclusively for adventure seekers who want a safe yet unforgettable ride.
                Our 7 km track takes you through Bali’s stunning landscapes, lush rice fields, jungle paths, hidden caves, rivers, and splashy waterholes. Each path is crafted to combine adrenaline-pumping excitement with breathtaking scenery.
            </p>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                At Buggy Bali Adventure, safety and service are our priorities. Every ride is guided by experienced instructors, supported with international-standard safety equipment, and covered by insurance for your peace of mind. Whether you’re a beginner or an experienced rider, riding solo or in tandem, we make sure your adventure is filled with fun, challenges, and lasting memories.
            </p>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                Discover Bali in a whole new way. Experience the excitement.
                Feel the adventure. Only at Buggy Bali Adventure.
            </p>
        </div>
        <div class="w-full h-1 md:h-1.5 bg-[#C8A565]"></div>
        <div class="w-full max-w-screen-2xl mx-auto flex flex-col gap-6 text-black py-14 lg:py-20 px-6">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-center mb-10">
                GENERAL TERM AND CONDITION
            </h3>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                1. Age and Eligibility
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Age Requirements:</span>
                    <ul class="list-disc pl-10 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        <li>
                            UTV (Single): Participants must be at least <span class="font-semibold">17 years old</span> and <span class="font-semibold">able to drive</span>.
                        </li>
                        <li>
                            UTV (Tandem): Passengers must be between <span class="font-semibold">6 to 60 years old</span>.
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="font-semibold">Participants Over 60:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Individuals over the age of 60 must obtain prior confirmation from Buggy Bali Adventure staff before participating.
                    </p>
                </li>
                <li>
                    <span class="font-semibold">Driving Ability (UTV Only):</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        All UTV drivers must be capable of operating and controlling the vehicle independently and responsibly.
                    </p>
                </li>
                <li>
                    <span class="font-semibold">Prohibited Participants:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Participation is strictly prohibited for:
                    </p>
                    <ul class="list-disc pl-10 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        <li>
                            <span class="font-semibold">Pregnant women</span>
                        </li>
                        <li>
                            <span class="font-semibold">Individuals with pre-existing medical conditions</span> (e.g., heart disease, back problems, or other serious health issues)
                        </li>
                    </ul>
                </li>
            </ul>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                2. Health and Safety
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Safety Briefing:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        All participants are required to attend a safety briefing before starting the activity.
                    </p>
                </li>
                <li>
                    <span class="font-semibold">Protective Gear:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Helmets and other protective equipment provided by Buggy Bali Adventure must be worn at all times during the activity.
                    </p>
                </li>
                <li>
                    <span class="font-semibold">Guidelines:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Participants must follow all instructions and safety guidelines from guides or staff. Reckless or non-compliant behavior may result in immediate removal from the activity without refund.
                    </p>
                </li>
            </ul>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                3. Insurance
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Coverage:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Participants are covered by insurance up to a maximum of Rp10.000.000 in the event of an accident.
                    </p>
                </li>
                <li>
                    <span class="font-semibold">Conditions:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Coverage is subject to the terms and conditions of the insurance provider. The designated hospital for treatment will be determined by Buggy Bali Adventure.
                    </p>
                </li>
            </ul>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                4. Liability
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Assumption of Risk:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Participants acknowledge that UTV activities carry inherent risks. Buggy Bali Adventure is not liable for any injuries, damages, or losses incurred during the activity unless caused by gross negligence of the company or its staff.
                    </p>
                </li>
                <li>
                    <span class="font-semibold">Waiver:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        All participants must sign a waiver form before beginning the activity.
                    </p>
                </li>
            </ul>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                5. Booking and Payment
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Cancellation Policy:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        All purchases are final. However, customers may request a reschedule of their booking, subject to availability.
                    </p>
                </li>
            </ul>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                6. Weather and Rescheduling
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Weather Conditions:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Buggy Bali Adventure reserves the right to cancel or reschedule activities due to adverse weather conditions or other unforeseen circumstances. In such cases, participants will be offered an alternative date or a full refund.
                    </p>
                </li>
            </ul>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                7. Equipment Use
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Responsibility:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Participants are responsible for the UTV and all equipment provided during the activity. Damages caused by negligent or improper use may result in additional charges.
                    </p>
                </li>
            </ul>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                8. Photography and Media
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Promotional Use:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Buggy Bali Adventure reserves the right to take photos or videos during the activity for promotional purposes. Participants who do not wish to be photographed must inform the staff before the activity begins.
                    </p>
                </li>
            </ul>
            <p class="font-semibold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                9. Governing Law
            </p>
            <ul class="list-disc pl-10 space-y-3 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                <li>
                    <span class="font-semibold">Jurisdiction:</span>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        These Terms and Conditions are governed by the laws of Indonesia. Any disputes will fall under the exclusive jurisdiction of the courts in Indonesia.
                    </p>
                </li>
            </ul>
        </div>
    </div>
@endsection
