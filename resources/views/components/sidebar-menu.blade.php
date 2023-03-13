@props(['url', 'activeUrl', 'text', 'fontAwesomeIcon'])

@php
    $_classes = $activeUrl ?? false ? 'bg-blue-300' : null;
@endphp
<a href="{{ $url }}"
    class="p-6 cursor-pointer text-white  hover:text-black hover:bg-blue-100 text-2xl no-underline tracking-[3px] {{ $_classes }}">
    <i class="{{ $fontAwesomeIcon }} px-[15px] py-0 text-[1.5rem]"></i>
    <label>
        {{ $text }}
    </label>
</a>
