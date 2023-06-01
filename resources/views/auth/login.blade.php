@extends('layouts.splash')

@section('content')
    <div class="flex items-center justify-center h-full w-full">
        <div
            class="bg-red-100 xs:bg-emerald-300 sm:bg-green-400 md:bg-yellow-100 lg:bg-violet-500 xl:bg-gray-500 2xl:bg-orange-100 grid gap-2 p-10 rounded-[30px] xs:w-[75%] xs:p-6">

            <div class="flex justify-center items-center">
                <img src="../../assets/img/san_miguel_hospital_logo.png" alt="logo" class="h-full">
            </div>
            <form method="POST" action="{{ route('login') }}" class="grid gap-4 text-black xs:gap-4 ">
                @csrf
                <div class="grid gap-2 ">
                    <div class="flex flex-col text-xl xs:text-xl">
                        <label for="email" class="font-[sans-serif]">Username</label>
                        <input id="email" type="email"
                            class="w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="peer-invalid:visible text-[15px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex flex-col text-xl xs:text-xl">
                        <label for="password" class="font-[sans-serif]">Password</label>
                        <input id="password" type="password"
                            class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="password" value="{{ old('password') }}" required autocomplete="password">

                        @error('password')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="grid gap-3">
                    <div class="flex flex-col xs:text-xl h-full ">
                        <button type="submit"
                            class="h-full w-full text-2xl p-2 bg-blue-300 font-[sans-serif] tracking-[2px] text-white border-none rounded-[10px] hover:text-black hover:bg-blue-200">
                            {{ __('Login') }}
                        </button>
                    </div>

                    <div class="flex flex-col xs:text-xl h-full">
                        <a href="{{ route('register') }}"
                            class="text-2xl p-2 bg-blue-300 font-[sans-serif] tracking-[2px] text-white border-none rounded-[10px] hover:text-black hover:bg-blue-200 w-full h-full flex items-center justify-center">
                            {{ __('Register') }}
                        </a>

                    </div>
                </div>


                {{-- <div class="grid pb-2">
                    <div class="grid grid-cols-2">
                        <div class="text-base">
                            <input class="scale-110 xl:scale-125 accent-blue-300 cursor-pointer" type="checkbox"
                                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="grid justify-end text-base">
                            @if (Route::has('password.request'))
                                <a class="hover:text-blue-300" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div> --}}

            </form>

        </div>
    </div>
@endsection
