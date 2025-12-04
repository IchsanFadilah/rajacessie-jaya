<!-- ========== HEADER ========== -->
{{-- <header
    class="z-50 flex flex-wrap w-full bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700 md:justify-start md:flex-nowrap">
    <nav
        class="relative max-w-[85rem] w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto px-4 sm:px-6 lg:px-8 py-2 dark:bg-neutral-900">
        <!-- Logo w/ Collapse Button -->
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold text-black focus:outline-hidden focus:opacity-80 dark:text-white"
                href="{{ url('/') }}" aria-label="Brand">{{ config('app.name') }}</a>

            <!-- Collapse Button -->
            <div class="md:hidden">
                <button type="button"
                    class="relative flex items-center justify-center text-sm font-semibold text-gray-800 border border-gray-200 rounded-lg hs-collapse-toggle size-9 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hidden hs-collapse-open:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <!-- End Collapse Button -->
        </div>
        <!-- End Logo w/ Collapse Button -->

        <!-- Collapse -->
        <div id="hs-header-classic"
            class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow md:block"
            aria-labelledby="hs-header-classic-collapse">
            <div
                class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                    <a :class="{'text-blue-600 dark:text-blue-500': request()->routeIs('homepage')}"
                        class="flex items-center p-2 text-sm text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-blue-500 dark:focus:text-blue-500"
                        href="#" aria-current="page">
                        <svg class="block shrink-0 size-4 me-3 md:me-2 md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                            <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        </svg>
                        Home
                    </a>

                    <a :class="{'text-blue-600 dark:text-blue-500': request()->routeIs('product-catalog')}"
                        class="flex items-center p-2 text-sm text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                        href="{{ route('product-catalog') }}">
                        <svg class="block shrink-0 size-4 me-3 md:me-2 md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shirt">
                            <path
                                d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z" />
                        </svg>
                        Collection
                    </a>
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header> --}}
<!-- ========== END HEADER ========== -->

<header
    class="sticky z-50 top-0 flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-yellow-500 text-sm py-3 dark:bg-neutral-800 shadow-md shadow-zinc-600/80">
    <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between">
        <a class="flex gap-2" href="/">
            <x-logo class="w-10" />
            <h1
                class="sm:order-1 items-center flex text-xl font-semibold text-white focus:outline-hidden focus:opacity-80 justify-end">
                Raja Cessie Jaya</h1>
        </a>
        <div class="sm:order-3 flex items-center gap-x-2">
            <button type="button"
                class="sm:hidden hs-collapse-toggle relative size-9 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                id="hs-navbar-alignment-collapse" aria-expanded="false" aria-controls="hs-navbar-alignment"
                aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-alignment">
                <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" x2="21" y1="6" y2="6" />
                    <line x1="3" x2="21" y1="12" y2="12" />
                    <line x1="3" x2="21" y1="18" y2="18" />
                </svg>
                <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
                <span class="sr-only">Toggle</span>
            </button>
            <div class="max-w-sm space-y-3 hidden sm:block">
                <a href="{{ route('contact') }}"
                    class="py-2 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-emerald-600 text-white hover:bg-emerald-700 focus:outline-hidden focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800 cursor-pointer">
                    Kontak Kami
                </a>
            </div>
        </div>
        <div id="hs-navbar-alignment"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2"
            aria-labelledby="hs-navbar-alignment-collapse">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
                <x-nav-link href="/tentang-kami" :current="request()->is('tentang-kami')">
                    Tentang Kami
                </x-nav-link>
                <x-nav-link href="/cessie" :current="request()->is('cessie')">
                    Cessie
                </x-nav-link>
                <x-nav-link href="/jual" :current="request()->is('jual')">
                    Jual
                </x-nav-link>
                <x-nav-link href="/lelang" :current="request()->is('lelang')">
                    Lelang
                </x-nav-link>
                <x-nav-link href="/proyek-baru" :current="request()->is('proyek-baru')">
                    Proyek Baru
                </x-nav-link>
                {{--                <x-nav-link href="/products" :current="request()->is('products')" > --}}
                {{--                    Testimoni --}}
                {{--                </x-nav-link> --}}
                {{--                <x-nav-link href="/kontak" :current="request()->is('kontak')" wire:navigate class="block sm:hidden"> --}}
                {{--                    Kontak Kami --}}
                {{--                </x-nav-link> --}}
            </div>
        </div>
    </nav>
</header>
