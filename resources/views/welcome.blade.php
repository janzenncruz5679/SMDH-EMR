@extends('layouts.splash')

@section('content')
    <div class="bg-[#009D83]/50 h-full">
        <div class="flex items-center justify-between px-6 py-3 font-[sans-serif]">
            <div class="flex items-center gap-2">
                <div class="h-14">
                    <img src="../../assets/img/san_miguel_hospital_logo.png" class="max-w-full max-h-full" alt="logo">
                </div>
                <p class="col-span-4 text-3xl font-bold text-white">{{ __('SAN MIGUEL DISTRICT HOSPITAL') }}</p>
            </div>
            <div class="">
                @if (Route::has('login'))
                    <div class="flex gap-6 font-bold">
                        @auth
                            <a href="{{ url('/home') }}" class="text-3xl text-white">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-3xl text-white">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-3xl text-white">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>

        <div class="h-72 w-[55%] absolute left-0 top-56 font-[sans-serif] text-white px-28">
            <p class="text-9xl font-bold">{{ __('Welcome!') }}</p>
            <p class="text-6xl pb-2">{{ __('Health is utmost priority') }}</p>
            <a class="h-14 w-48 bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                href="">
                <p>{{ __('About Us') }}</p>
            </a>

        </div>
        <div class="h-75 absolute right-0 bottom-0">
            <img src="../../assets/img/doctor_model.png" class="max-w-full max-h-full" alt="logo">
        </div>
    </div>
@endsection
