@vite('resources/css/app.css')
<header>
    <div
        class="z-50 fixed w-screen w-59 h-[59px] text-[2rem] bg-custom_hospital-400 left-0 top-0 flex space-between items-center p-2 font-[sans-serif]">
        <div class="flex flex-row h-[5vh] gap-[10px]">
            <img src="{{ Vite::image('san_miguel_hospital_logo.png') }}" alt="logo">
            <a class=" w-full text-white" href="{{ url('home') }}">
                {{ __('SAN MIGUEL DISTRICT HOSPITAL') }}
            </a>

        </div>
        <div class="flex gap-[20px] h-[5vh] absolute right-[10px] text-white">
            <p id="date_today"class="m-0"></p>
            <p id="clock" class="m-0"></p>
        </div>
    </div>
</header>
