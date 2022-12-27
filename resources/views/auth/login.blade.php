@extends('layouts.splash')

@section('content')
    <div class="grid h-full w-full content-center justify-center">
        <div class=" p-10 rounded-[30px] bg-white sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500">

            <div class="flex justify-center items-center">
                <img src="../../assets/img/san_miguel_hospital_logo.png" alt="logo"
                    class="h-[25vh] xl:h-[30vh] lg:h-[25vh]">
            </div>
            <form method="POST" action="{{ route('login') }}"
                class="text-[1.5rem] sm:text-base md:text-lg grid gap-4 xl:gap-4 lg:gap-2 sm:gap-2 md:gap-2 py-[15px]">
                @csrf
                <div class="text-black flex flex-col">
                    <label for="email">{{ __('Username') }}</label>
                    <input id="email" type="email"
                        class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <p class="peer-invalid:visible text-[15px] text-red-700 ">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="text-black flex flex-col">
                    <label for="password" class="">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                        name="password" value="{{ old('password') }}" required autocomplete="password">

                    @error('password')
                        <p class="peer-invalid:visible text-[20px] text-red-700 ">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <div class="grid pb-2">
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
                </div>



                <div class="h-[50px] sm:h-[40px] lg:h-[40px] xl:h-[50px]">
                    <button type="submit"
                        class="h-full w-full sm:text-[1.4rem] text-[1.5rem] bg-blue-200 tracking-[2px] text-white border-none rounded-[10px] hover:text-black hover:bg-blue-100">
                        {{ __('Login') }}
                    </button>
                </div>

            </form>
            <div class="h-[50px] sm:h-[40px] lg:h-[40px] xl:h-[50px]">
                <button type="submit"
                    class="h-full w-full sm:text-[1.4rem] text-[1.5rem] bg-blue-200 tracking-[2px] text-white border-none rounded-[10px] hover:text-black hover:bg-blue-100">
                    <a href="{{ route('register') }}"
                        class="relative w-full h-full flex items-center justify-center">{{ __('Register') }}</a>
                </button>
            </div>

        </div>
    </div>
@endsection
