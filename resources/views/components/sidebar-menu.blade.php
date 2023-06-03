@props(['url', 'activeUrl', 'text', 'fontAwesomeIcon'])

@php
    $_classes = $activeUrl ?? false ? 'bg-blue-300' : null;
@endphp
{{-- <a href="{{ $url }}"
    class="p-6 cursor-pointer text-white  hover:text-black hover:bg-blue-100 text-2xl no-underline tracking-[3px] {{ $_classes }}">
    <i class="{{ $fontAwesomeIcon }} xs:text-xl sm:text-lg md:text-2xl"></i>
    <label>
        {{ $text }}
    </label>
</a> --}}

<a href="{{ $url }}"
    class="grid grid-cols-3 place-content-center gap-4 xs:p-2 sm:p-4 md:p-6 cursor-pointer text-white  hover:text-black hover:bg-blue-100 text-2xl no-underline tracking-[3px] {{ $_classes }}">

    <div class="grid place-content-center">
        <i class="{{ $fontAwesomeIcon }} xs:text-xl sm:text-lg md:text-2xl"></i>
    </div>
    <div class="grid place-content-start">
        <label class="xs:text-base sm:text-lg md:text-2xl">{{ $text }}</label>
    </div>
</a>
