@props(['url', 'activeUrl', 'text', 'fontAwesomeIcon'])

<li class="flex items-center justify-start cursor-pointer text-white">
	@php
		$_classes = $activeUrl ?? false ? 'bg-blue-300' : null;
	@endphp
	<a href="{{ $url }}"
		class="  hover:text-black hover:bg-blue-100 w-[275px] p-[20px] text-[1.5rem] no-underline tracking-[3px] {{ $_classes }}">
		<i class="{{ $fontAwesomeIcon }} px-[15px] py-0 text-[1.5rem]"></i>
		<label for="">
			{{ $text }}
		</label>
	</a>
</li>
