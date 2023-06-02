@props(['url', 'text', 'fontAwesomeIcon'])


<a href="{{ $url }}"
    class="overflow-hidden xs:p-2 p-6 flex flex-col gap-2 items-center justify-center text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">

    <i class="{{ $fontAwesomeIcon }} max-h-full"></i>
    <label class="text-2xl">{{ $text }}</label>
</a>
