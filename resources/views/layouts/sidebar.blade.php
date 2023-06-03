<div class="xs:absolute xs:w-[50%] h-full w-full bg-zinc-900 overflow-hidden">
    <div class="h-full w-full grid grid-rows-6 font-[sans-serif]">
        <div class="row-span-2 grid">
            {{-- <img src="{{ Vite::image('paimon.jpg') }}" alt="" class="rounded-full h-36 w-36"> --}}
            <div class="flex flex-col items-center justify-center gap-4">
                <i class="fa-solid fa-user text-white h-20 sm:h-24 lg:h-32"></i>
                <a href="{{ url('home') }}"
                    class=" text-white hover:text-white xs:text-2xl sm:text-3xl xl:text-4xl tracking-widest">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <div class="xs:row-span-2 sm:row-span-3 grid grid-rows-5">
            <x-sidebar-menu :url="route('home')" :active-url="request()->routeIs('home')" text="Home" fontAwesomeIcon="fa-solid fa-house" />
            <x-sidebar-menu :url="route('patientPage')" :active-url="request()->routeIs('patientPage*') |
                request()->routeIs('admission*') |
                request()->routeIs('emergency*') |
                request()->routeIs('outpatient*')" text="Patients"
                fontAwesomeIcon="fa-solid fa-hospital-user" />
            <x-sidebar-menu :url="route('stations')" :active-url="request()->routeIs('stations*') |
                request()->routeIs('vitalSign*') |
                request()->routeIs('nurseNote*') |
                request()->routeIs('dischargeSummary*') |
                request()->routeIs('fluidIntake*')" text="Records"
                fontAwesomeIcon="fa-solid fa-notes-medical" />
            <x-sidebar-menu :url="route('billing.index')" :active-url="request()->routeIs('billing*') | request()->routeIs('billing*')" text="Billing"
                fontAwesomeIcon="fa-solid fa-hand-holding-dollar" />
        </div>
        <div class="grid items-center justify-center">

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    class="h-[60px] w-[130px] text-xl md:text-2xl border-none rounded-[10px] bg-blue-300 text-white hover:text-black hover:-translate-y-0.5 hover:bg-blue-100"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <label
                        class="cursor-pointer relative w-full h-full flex items-center justify-center hover:text-black">
                        {{ __('Logout') }}</label>
                </button>
            </form>
        </div>

    </div>
</div>
