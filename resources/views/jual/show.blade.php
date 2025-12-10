<x-layouts.app>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div>
            <a href="/jual"
                class="bg-yellow-400 text-black hover:text-white hover:bg-yellow-600 py-2 px-3 rounded-lg">&laquo;
                Kembali</a>
        </div>
        <div class="grid grid-cols-1 gap-10 my-5 md:grid-cols-10">
            <div class="grid grid-cols-1 gap-2 md:col-span-7">
                <div class="w-full">
                    <img src="{{ $sale->thumb_url }}" alt="{{ $sale->name }}"
                        class="object-cover w-full rounded-md aspect-3/2 md:col-span-3">
                    <div
                        class="block object-cover sm:grid grid-cols-1 gap-2 my-2 md:grid-cols-3 md:col-span-7 md:w-[500] md:h-[600] space-y-2">
                        @foreach ($sale->gallery as $key => $image)
                            <img src="{{ $image }}" alt="{{ $key }}"
                                class="object-cover rounded-md w-[500px] h-[500px] object-center" />
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="md:col-span-3">
                <div class="flex flex-col gap-2">
                    <div>
                        <h1 class="text-3xl font-semibold">{{ $sale->name }}</h1>
                        <h2 class="text-sm text-gray-800">{{ $sale->short_desc }}</h2>
                        <h3 class="text-xs text-gray-800">{{ $sale->region }}</h3>
                    </div>
                    <span class="mt-2 text-2xl font-bold">{{ $sale->luas }} M<sup>2</sup></span>
                    <a class="text-sm text-zinc-900 bg-yellow-400 hover:bg-yellow-300 duration-300 py-2 px-3 rounded-2xl flex items-center"
                        href="/kontak">
                        <img src="{{ asset('images/logo/whatsapp.svg') }}" alt="logo" class="w-6 me-2">
                        Hubungi Kami
                    </a>
                </div>

                <div class="mt-10">
                    <h3 class="font-semibold">Description</h3>
                    <div class="my-2 prose text-zinc-900">
                        {!! Str::markdown($sale->description) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
