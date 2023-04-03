<div class="fixed w-[16%] h-full left-0 top-[7%] bg-zinc-900 overflow-hidden">
    <div class="grid min-h-full">
        <div class="flex flex-col items-center justify-center gap-6">
            {{-- <img src="{{ Vite::image('paimon.jpg') }}" alt="" class="rounded-full h-36 w-36"> --}}
            <i class="fa-solid fa-user text-white h-32 w-32"></i>
            <a href="{{ url('home') }}"
                class=" text-white hover:text-white text-4xl tracking-widest">{{ Auth::user()->name }}</a>
        </div>
        <div class="row-span-2 grid items-start">
            <div class="grid">
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
                <x-sidebar-menu :url="route('billingTable')" :active-url="request()->routeIs('billing*') |
                    request()->routeIs('billingTable*') |
                    request()->routeIs('updateBilling*')" text="Billing"
                    fontAwesomeIcon="fa-solid fa-hand-holding-dollar" />
            </div>

            <div class="grid items-center justify-center">

                @guest
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <button
                        class="h-[60px] w-[130px] text-[1.5rem] border-none rounded-[10px] bg-blue-300 text-white hover:text-black hover:-translate-y-0.5 hover:bg-blue-100"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <label
                            class="cursor-pointer relative w-full h-full flex items-center justify-center hover:text-black">
                            {{ __('Logout') }}</label>
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>

                @endguest
            </div>
        </div>

    </div>
</div>
