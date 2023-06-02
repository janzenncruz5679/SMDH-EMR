{{-- xs:bg-emerald-300 sm:bg-green-400 md:bg-yellow-100 lg:bg-violet-500 xl:bg-gray-500 2xl:bg-orange-100 --}}
<div
    class="h-full w-full md:text-lg xl:text-2xl 2xl:text-3xl bg-blue-200 space-between items-center font-[sans-serif] p-2 overflow-hidden">
    <div class="h-full w-full flex flex-row justify-between gap-4 md:gap-2">
        <div class="flex gap-4 xs:gap-2">
            <button id="toggleButton" class="hidden xs:grid justify-center items-center h-full text-white xs:text-xl">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="flex justify-center items-center h-full">
                <img src="{{ Vite::image('san_miguel_hospital_logo.png') }}" alt="logo" class="xs:hidden h-full">
            </div>
            <div class="grid items-center">
                <a class=" w-full text-white " href="{{ url('home') }}">
                    <span>SAN MIGUEL DISTRICT HOSPITAL</span>
                </a>
            </div>
        </div>
        <div class="hidden sm:flex items-center gap-4 text-white">
            <label id="date_today" class="m-0"></label>
            <label id="clock" class="m-0"></label>
        </div>
    </div>
</div>
<div id="sidebar" class="sm:hidden">
    @php
        if (Auth::user()->usertype == '0') {
            $sidebar = 'layouts.sidebar';
        } else {
            $sidebar = 'layouts.adminSidebar';
        }
    @endphp
    @include($sidebar)
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        if ($(window).width() < 640) {
            $('#sidebar').hide();
        }

        $('#toggleButton').click(function() {
            $('#sidebar').toggle(); // Toggle the sidebar with animation
        });
    });
</script>
