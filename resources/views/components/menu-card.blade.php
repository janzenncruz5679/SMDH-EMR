@props(['url', 'text', 'fontAwesomeIcon'])

<a href="{{ $url }}" class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
	<div class="grid gap-3">
		<div class="grid place-items-center">
			<i class="{{ $fontAwesomeIcon }} text-[7rem]"></i>
		</div>
		<div class="grid justify-center text-2xl font-[sans-serif]">
			<p class="grid justify-center">{{ $text }}</p>
		</div>
	</div>
</a>
