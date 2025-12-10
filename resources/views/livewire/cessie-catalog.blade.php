<section>
    <div class="w-full mx-auto bg-yellow-400 ">
        <form class="container py-6 mx-auto w-1/2" wire:submit.prevent="applyFilters">
            <label for="hs-trailing-button-add-on-with-icon-and-button"
                class="sr-only flex justify-center">Pencarian</label>
            <div class="relative flex rounded-lg" wire:submit.prevent="applyFilters">
                <input wire:model.live="search" type="text" id="hs-trailing-button-add-on-with-icon-and-button"
                    name="hs-trailing-button-add-on-with-icon-and-button"
                    class="@error('search') border-red-500 @enderror py-2.5 sm:py-3 px-4 ps-11 block w-full border-gray-200 rounded-s-xl sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">

                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                    <svg class="shrink-0 size-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                </div>
                <button type="button" wire:click="applyFilters"
                    class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-xl border border-transparent bg-emerald-600 text-white hover:bg-emerald-700 focus:outline-hidden focus:bg-emerald-700 disabled:opacity-50 disabled:pointer-events-none">Search</button>
            </div>
            @error('search')
                <div class="text-xs text-red-600">{{ $message }}</div>
            @enderror
        </form>
    </div>
    <div class="bg-yellow-400">
        <div class="container mx-auto grid grid-cols-1 py-6 px-4 gap-5 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 ">
            @forelse ($cessies as $product)
                <x-single-lelang-card :product="$product" />
            @empty
                <div class="col-span-full text-center text-gray-500">
                    Lelang tidak ditemukan.
                </div>
            @endforelse
        </div>
        @if ($cessies)
            <div class="container p-4">
                {{ $cessies->links() }}
            </div>
        @endif
    </div>
</section>
