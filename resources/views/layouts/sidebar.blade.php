@vite('resources/css/app.css')
<div class="sidebar z-50 fixed w-[275px] h-screen left-0 top-[59px] bg-green-900">
    <div class="user pt-[30px] pb-[10px] px-0 h-[25vh] flex flex-col justify-center">
        <div class="user-pic flex justify-center">
            <img src="/assets/img/paimon.jpg" alt="" class="rounded-full h-[13vh] w-[6.5vw]">
        </div>
        <div class="user-name p-0 text-center">
            <a href="{{ url('home') }}"
                class="p-0 text-[2.5rem] text-white hover:text-white tracking-[3px]">{{ Auth::user()->name }}</a>
        </div>
    </div>
    <div class="selection list-none">
        <nav>
            <ul>
                <li class="flex items-center justify-start cursor-pointer hover:bg-green-600 "><a
                        class="{{ Str::contains(URL::current(), url('home')) ? __('bg-green-600') : null }} selection_menu text-white hover:text-white w-[275px] p-[20px] text-[1.5rem] no-underline tracking-[3px]"
                        href="{{ url('home') }}"><i
                            class="fa-solid fa-house px-[15px] py-0 text-[1.5rem]"></i>{{ __('Home') }}</a>
                </li>
                <li class="flex items-center justify-start cursor-pointer hover:bg-green-600"><a
                        class="{{ Str::contains(URL::current(), url('patientPage')) ? __('bg-green-600') : null }} selection_menu text-white hover:text-white w-[275px] p-[20px] text-[1.5rem] no-underline tracking-[3px]"
                        href="{{ url('patientPage') }}"><i
                            class="fa-solid fa-hospital-user  px-[15px] py-0 text-[1.5rem]"></i>{{ __('Patients') }}</a>
                </li>
                <li class="flex items-center justify-start cursor-pointer hover:bg-green-600"><a
                        class="{{ Str::contains(URL::current(), url('stations')) ? __('bg-green-600') : null }} selection_menu text-white hover:text-white w-[275px] p-[20px] text-[1.5rem] no-underline tracking-[3px]"
                        href="{{ url('stations') }}"><i
                            class="fa-solid fa-hospital px-[15px] py-0 text-[1.5rem]"></i>{{ __('Stations') }}</a></li>
                <li class="flex items-center justify-start cursor-pointer hover:bg-green-600 "><a
                        class="{{ Str::contains(URL::current(), url('billing')) ? __('bg-green-600') : null }} selection_menu text-white hover:text-white w-[275px] p-[20px] text-[1.5rem] no-underline tracking-[3px]"
                        href="{{ url('billing') }}"><i
                            class="fa-solid fa-hand-holding-dollar px-[15px] py-0 text-[1.5rem]"></i>{{ __('Billing') }}</a>
                </li>
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
                class="logout relative left-[55px] h-[60px] w-[130px] text-[1.5rem] border-none rounded-[10px] bg-green-700 text-white hover:-translate-y-0.5 transform transition hover:bg-green-600"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</button>


            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>


        @endguest
    </div>
</div>
