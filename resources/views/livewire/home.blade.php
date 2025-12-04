<section>
    <div class="object-cover max-w-auto sm:w-full h-screen bg-cover bg-center bg-fixed"
        style="background-image: url('{{ asset('images/image/bg_1.jpg') }}')">
        {{--    <div class="absolute inset-0 bg-black opacity-20"></div> --}}

        <div class="absolute left-4 sm:left-40 bottom-4 sm:bottom-56 z-20 grid grid-cols-2 gap-2">
            <a class="px-6 py-3 text-lg font-semibold rounded-lg ring-2 ring-emerald-400 hover:bg-emerald-400 hover:text-white hover:ring-white transition duration-300 shadow-xl text-center"
                href="{{ route('sale-catalog') }}">
                DIJUAL
            </a>

            <a class="px-6 py-3 text-lg font-semibold rounded-lg ring-2 ring-emerald-400 hover:bg-emerald-400 hover:text-white hover:ring-white transition duration-300 shadow-xl text-center"
                href="{{ route('auction-catalog') }}">
                LELANG
            </a>

            <a class="col-span-full px-6 py-3 text-lg font-semibold rounded-lg ring-2 ring-emerald-400 hover:bg-emerald-400 hover:text-white hover:ring-white transition duration-300 shadow-xl text-center"
                href="{{ route('contact') }}">
                HUBUNGI KAMI
            </a>
        </div>
    </div>
    <div class="h-screen">

    </div>
</section>
