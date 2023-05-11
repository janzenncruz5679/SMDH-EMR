<header>
    <div
        class="fixed min-w-full h-[7%] text-[2rem] bg-custom_hospital-400 left-0 top-0 flex space-between items-center font-[sans-serif] overflow-hidden">
        <div class="flex flex-row h-full gap-4 p-2">
            <img src="{{ Vite::image('san_miguel_hospital_logo.png') }}" alt="logo">
            {{-- <img src="../../assets/img/san_miguel_hospital_logo.png" alt="logo"> --}}
            <a class=" w-full text-white" href="{{ url('home') }}">
                {{ __('SAN MIGUEL DISTRICT HOSPITAL') }}
            </a>
            <div class="flex absolute gap-6 right-2 text-white">
                <label id="date_today"class="m-0"></label>
                <label id="clock" class="m-0"></label>
            </div>
        </div>
    </div>
</header>
