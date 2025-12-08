{{-- <!-- Slider -->
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
<!-- End Slider --> --}}

<!-- Slider -->
<div class="">
    <div data-hs-carousel='{
      "loadingClasses": "opacity-0"
    }' class="relative">
        <div
            class="hs-carousel relative overflow-hidden w-full h-120 md:h-[calc(100vh-106px)]  bg-gray-100 rounded-2xl dark:bg-neutral-800">
            <div
                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                <!-- Item -->
                <div class="hs-carousel-slide">
                    <div
                        class="h-120 md:h-[calc(100vh-106px)] py-4 flex flex-col bg-[url('https://images.unsplash.com/photo-1765169769074-7dc87f954de5?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] md:bg-[url('https://images.unsplash.com/photo-1765168940071-e9604e662669?q=80&w=2662&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]
                        bg-cover bg-center bg-no-repeat">
                        <div class="mt-auto w-2/3 md:max-w-lg ps-50 pb-5 md:ps-40 md:pb-40">
                            <div class="mt-5 mx-auto">
                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-emerald-600 border border-transparent text-white hover:bg-emerald-500 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                                    href="#">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="hs-carousel-slide">
                    <div
                        class="h-120 md:h-[calc(100vh-106px)] py-4 flex flex-col bg-[url('https://images.unsplash.com/photo-1765169769000-a994ff2cf739?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] md:bg-[url('https://images.unsplash.com/photo-1765169013005-3c922083862d?q=80&w=2662&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]
                        bg-cover bg-center bg-no-repeat">
                        <div class="mt-auto w-2/3 md:max-w-lg ps-50 pb-5 md:ps-40 md:pb-40 justify-end">
                            <div class="mt-5 mx-auto">
                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-emerald-600 border border-transparent text-white hover:bg-emerald-500 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                                    href="#">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item -->


            </div>
        </div>

        <!-- Arrows -->
        <button type="button"
            class="hs-carousel-prev hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-s-2xl focus:outline-hidden focus:bg-white/20">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-3.5 md:size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                    </path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>

        <button type="button"
            class="hs-carousel-next hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-e-2xl focus:outline-hidden focus:bg-white/20">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-3.5 md:size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>
            </span>
        </button>
        <!-- End Arrows -->
    </div>
</div>
<!-- End Slider -->
