<header
    class="sticky z-50 top-0 flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-yellow-500 text-sm lg:text-lg py-1 lg:py-3 shadow-md shadow-zinc-600/80">
    <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between">
        <a class="flex gap-2" href="/">
            <x-logo class="flex w-16" />
            <h1
                class="sm:order-1 items-center flex text-xl font-semibold text-white focus:outline-hidden focus:opacity-80 justify-end">
                Raja Cessie Jaya</h1>
        </a>
        <div class="sm:order-3 flex items-center gap-x-2">
            <button type="button"
                class="sm:hidden hs-collapse-toggle relative size-9 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none "
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
                    class="py-2 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-emerald-600 text-white hover:bg-emerald-700 focus:outline-hidden focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none  cursor-pointer">
                    Kontak Kami
                </a>
            </div>
        </div>
        <div id="hs-navbar-alignment"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2"
            aria-labelledby="hs-navbar-alignment-collapse">
            <div class="flex flex-col py-4 md:py-0 gap-2 md:gap-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
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
                <x-nav-link href="/kontak" :current="request()->is('kontak')" wire:navigate class="block sm:hidden">
                    Kontak Kami
                </x-nav-link>
            </div>
        </div>
    </nav>
</header>
