@props(['url', 'text', 'fontAwesomeIcon'])

<a href="{{ $url }}"
    class="grid xs:p-4 p-6 place-content-center gap-4 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl xs:shadow-md shadow-lg shadow-blue-200 sm:hover:-translate-y-0.5 sm:transform sm:transition">

    <div class="grid justify-center">
        <i class="{{ $fontAwesomeIcon }} h-14 sm:h-20 lg:h-28"></i>
    </div>
    <div class="grid justify-center">
        <label class="sm:text-xl md:text-3xl">{{ $text }}</label>
    </div>
</a>
