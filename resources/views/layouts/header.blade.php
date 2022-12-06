@vite('resources/css/app.css')
<header>
    <div
        class="green z-50 fixed w-screen w-59 h-[59px] bg-green-600 left-0 top-0 flex space-between items-center p-[10px]">
        <div class="green_logo flex h-[5vh] text-[1.5rem] gap-[10px]">
            <img src="../../assets/img/san_miguel_hospital_logo.png" alt="logo">
            <div class="hospital_name_div pt-[5px] h-full">
                <a class="hospital_name px-0 pb-0 w-full" href="{{ url('home') }}">
                    <p class="text-white text-[1.5rem] tracking-[3px]">SAN MIGUEL DISTRICT HOSPITAL</p>
                </a>
            </div>
        </div>
        <div class="date_time flex text-[1.5rem] gap-[20px] h-[5vh] absolute right-[10px] text-white">
            <p id="date_today"class="m-0 pt-[5px]"></p>
            <p id="clock" class="m-0 pt-[5px]"></p>
        </div>
    </div>
</header>
