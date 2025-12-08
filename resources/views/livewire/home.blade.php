<!-- Slider -->
<div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"
  }'
    class="relative">
    <div class="hs-carousel relative overflow-hidden w-full h-screen bg-white rounded-lg">
        <div
            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-100 ">
                    <img src="{{ asset('images/image/bg_1.jpg') }}" alt="slide image"
                        class="hidden sm:block w-full object-cover" />
                    <img src="{{ asset('images/image/mobile_1.jpg') }}" alt="slide image"
                        class="block sm:hidden w-full object-cover" />
                    <div
                        class="hidden sm:grid absolute left-2 sm:left-30 bottom-2 md:bottom-10 lg:bottom-50 z-10 grid-cols-2 gap-2">
                        <a class="px-4 py-1.5 lg:px-6 lg:py-3 text-sm lg:text-lg lg:font-semibold rounded-lg bg-emerald-800 hover:bg-emerald-700 text-white transition duration-300 shadow-xl text-center"
                            href="{{ route('sale-catalog') }}">
                            DIJUAL
                        </a>

                        <a class="px-6 py-3 text-lg font-semibold rounded-lg bg-emerald-800 hover:bg-emerald-700 text-white transition duration-300 shadow-xl text-center"
                            href="{{ route('auction-catalog') }}">
                            LELANG
                        </a>

                        <a class="col-span-full px-6 py-3 text-lg font-semibold rounded-lg bg-emerald-800 hover:bg-emerald-700 text-white transition duration-300 shadow-xl text-center"
                            href="{{ route('contact') }}">
                            HUBUNGI KAMI
                        </a>
                    </div>
                </div>
            </div>
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-200 ">
                    <img src="{{ asset('images/image/bg_2.jpg') }}" alt="slide image" class="hidden sm:block w-full" />
                    <img src="{{ asset('images/image/mobile_2.jpg') }}" alt="slide image"
                        class="sm:hidden w-full object-cover" />
                </div>
            </div>
        </div>
    </div>

    <button type="button"
        class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default absolute top-1/2 start-2 inline-flex justify-center items-center size-10 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 -translate-y-1/2 focus:outline-hidden">
        <span class="text-2xl" aria-hidden="true">
            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m15 18-6-6 6-6"></path>
            </svg>
        </span>
        <span class="sr-only">Previous</span>
    </button>
    <button type="button"
        class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default absolute top-1/2 end-2 inline-flex justify-center items-center size-10 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 -translate-y-1/2 focus:outline-hidden">
        <span class="sr-only">Next</span>
        <span class="text-2xl" aria-hidden="true">
            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </span>
    </button>

    <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 flex gap-x-2"></div>
</div>
<!-- End Slider -->
