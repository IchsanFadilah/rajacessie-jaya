<div class="relative bg-white p-1 shadow-md shadow-gray-600 group rounded-xl">
    <a href="{{ route('proyek-baru', $product->slug) }}">
        <img class="object-cover rounded-md aspect-square" src="{{ $product->thumb_url }}" alt="{{ $product->name }}">

        <div class="py-5">
            <h3 class="text-lg font-bold text-gray-800 ">
                {{ $product->name }}
            </h3>
            <h3>
                <span class="text-sm text-gray-500">
                    {{ $product->short_desc }}
                </span>
            </h3>
            <h3>
                <span class="text-sm text-gray-500">
                    {{ $product->region }}
                </span>
            </h3>
            <p class="mt-1 font-semibold text-black">
                {{ $product->luas }} M<sup class="z-10">2</sup>
            </p>
        </div>
    </a>
    <div class="flex justify-end me-3 p-2">
        <a class="text-sm text-zinc-900 bg-yellow-400 hover:bg-yellow-300 duration-300 py-2 px-3 rounded-2xl flex items-center"
            href="/kontak">
            <img src="{{ asset('images/logo/whatsapp.svg') }}" alt="logo" class="w-6 me-2">
            Hubungi Kami
        </a>
    </div>
</div>
