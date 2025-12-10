<section>
    <!-- Slider -->
    <div>
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
                            class="h-120 md:h-[calc(100vh-106px)] py-4 flex flex-col bg-[url('https://images.unsplash.com/photo-1765169769074-7dc87f954de5?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] md:bg-[url('https://images.unsplash.com/photo-1765383956101-d9294b3f5c63?q=80&w=2664&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]
                        bg-cover bg-center bg-no-repeat">
                            <div class="mt-auto w-2/3 md:max-w-lg ps-34 pb-5 md:pb-2 lg:ps-40 lg:pb-40">
                                <div class="mt-5 mx-auto">
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-xl bg-emerald-600 border border-transparent text-white hover:bg-emerald-500 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
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
                            class="h-120 md:h-[calc(100vh-106px)] py-4 flex flex-col bg-[url('https://images.unsplash.com/photo-1765169769074-7dc87f954de5?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] md:bg-[url('https://images.unsplash.com/photo-1765384145082-67af52b6c36d?q=80&w=2664&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]
                        bg-cover bg-center bg-no-repeat">
                            <div class="mt-auto w-2/3 md:max-w-lg ps-34 pb-5 md:pb-2 lg:ps-40 lg:pb-40">
                                <div class="mt-5 mx-auto">
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-xl bg-emerald-600 border border-transparent text-white hover:bg-emerald-500 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
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

    <div class="mt-10">
        <x-product-sections :auctions="$auctions" title="Lelang Terbaru" url="lelang" />
    </div>

</section>
