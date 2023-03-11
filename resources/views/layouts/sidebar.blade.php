<div class="sidebar z-50 fixed w-[275px] h-screen left-0 top-[59px] bg-zinc-900">
    <div class="user pt-[30px] pb-[10px] px-0 h-[25vh] flex flex-col justify-center">
        <div class="user-pic flex justify-center">
            <img src="{{ Vite::image('paimon.jpg') }}" alt="" class="rounded-[100%] h-[13vh] w-[6.5vw]">
        </div>
        <div class="user-name p-0 text-center">
            <a href="{{ url('home') }}"
                class="p-0 text-[2.5rem] text-white hover:text-white tracking-[3px]">{{ Auth::user()->name }}</a>
        </div>
    </div>
    <div class="selection list-none">
        <nav>
            <ul>
                <x-sidebar-menu :url="route('home')" :active-url="request()->routeIs('home')" text="Home"
                    fontAwesomeIcon="fa-solid fa-house" />
                <x-sidebar-menu :url="route('patients.index')" :active-url="request()->routeIs('patients*') | request()->routeIs('admissions*')" text="Patients"
                    fontAwesomeIcon="fa-solid fa-hospital-user" />
                <x-sidebar-menu :url="url('stations')" :active-url="request()->routeIs('stations')" text="Records"
                    fontAwesomeIcon="fa-solid fa-notes-medical" />
                <x-sidebar-menu :url="url('billing')" :active-url="request()->routeIs('billing')" text="Billing"
                    fontAwesomeIcon="fa-solid fa-hand-holding-dollar" />
            </ul>
        </nav>
    </div>

    <div class="logout_button p-[10px] relative top-[120px]">

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
                class="logout relative left-[55px] h-[60px] w-[130px] text-[1.5rem] border-none rounded-[10px] bg-blue-300 text-white hover:text-black hover:-translate-y-0.5 transform transition delay-150 duration-300 ease-in-out hover:bg-blue-100"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <p
                    class="relative w-full h-full flex items-center justify-center hover:text-black transition delay-150 duration-300 ease-in-out">
                    {{ __('Logout') }}</p>
            </button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>

        @endguest
    </div>
</div>
