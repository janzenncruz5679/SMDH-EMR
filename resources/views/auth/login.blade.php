@extends('layouts.splash')

@section('content')
    {{-- <div class="h-100 d-flex align-items-center justify-content-center"> --}}
    <div class="relative h-full w-full flex justify-center items-center">
        <div class="h-[75%] sm:h-[85%] md:h-[85%] lg:h-[75%] xl:h-[75%]">
            <div
                class="h-full px-[25px] rounded-[15px] bg-white flex flex-col justify-center bg-white sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500">
                <div class="flex justify-center items-center">
                    <img src="../../assets/img/san_miguel_hospital_logo.png" alt="logo" class="h-[30vh] lg:h-[25vh]">
                </div>
                <form method="POST" action="{{ route('login') }}"
                    class="text-[1.5rem] lg:text-[1.2rem] flex flex-col gap-[15px] lg:gap-[10px] py-[15px]">
                    @csrf
                    <div class="text-black flex flex-col">
                        <label for="email" class="">{{ __('Username') }}</label>
                        <input id="email" type="email"
                            class="peer lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
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
                            class="peer lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="password" value="{{ old('password') }}" required autocomplete="password">

                        @error('password')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror
                        {{-- @error('password')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}

                    </div>


                    <div class="flex text-[0.8rem] gap-[175px] lg:pb-[20px] ">
                        <div class="inline">
                            <input class="scale-110 xl:scale-125 accent-blue-300 cursor-pointer" type="checkbox"
                                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-[1rem]" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="inline text-[1rem]">
                            @if (Route::has('password.request'))
                                <a class="hover:text-blue-300" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>



                    <div class="h-[50px] xl:h-[60px] lg:h-[40px]">
                        <button type="submit"
                            class="h-full w-full text-[1.5rem] bg-blue-200 tracking-[2px] text-white border-none rounded-[10px] bg-blue-300 text-white hover:text-black hover:bg-blue-100">
                            {{ __('Login') }}
                        </button>
                    </div>

                </form>
                <div class="h-[50px] xl:h-[60px] lg:h-[40px]">
                    <button type="submit"
                        class="h-full w-full text-[1.5rem] bg-blue-200 tracking-[2px] text-white border-none rounded-[10px] bg-blue-300 text-white hover:text-black hover:bg-blue-100">
                        <a href="{{ route('register') }}"
                            class="relative w-full h-full flex items-center justify-center">{{ __('Register') }}</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
