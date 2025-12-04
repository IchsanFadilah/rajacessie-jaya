<a class="relative bg-white p-1 shadow-md shadow-gray-600 group rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
    href="{{ route('jual', $product->slug) }}">
    <img class="object-cover rounded-md aspect-square" src="{{ $product->thumb_url }}" alt="{{ $product->name }}">

    <div class="py-5">
        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
            {{ $product->name }}
        </h3>
        <span class="text-sm text-gray-500">
            {{ $product->short_desc }}
        </span>
        </h3>
        <h3>
            <span class="text-sm text-gray-500">
                {{ $product->region }}
            </span>
        </h3>
        <p class="mt-1 font-semibold text-black dark:text-black">
            {{ $product->luas }} M<sup class="z-10">2</sup>
        </p>
    </div>
</a>
