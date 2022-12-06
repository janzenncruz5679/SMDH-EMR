@extends('layouts.splash')

@section('content')
    {{-- <div class="h-100 d-flex align-items-center justify-content-center"> --}}
    <div class=" flex h-full w-full justify-center items-center">
        <div class="w-[25vw]">
            <div class="h-[70vh] px-[30px] pb-[30px] pt-[15px] rounded-[15px]" style="background: rgba(245, 245, 245, 0.6);">

                <div class="flex justify-center pb-[15px]">
                    <img src="../../assets/img/san_miguel_hospital_logo.png" alt="logo" class="h-[30vh]">
                </div>
                <form method="POST" action="{{ route('login') }}" class="">
                    @csrf
                    <div class="text-[1.2rem] text-black flex flex-col gap-[5px]">
                        <label for="email" class="">{{ __('Username') }}</label>
                        <input id="email" type="email"
                            class="peer rounded-[5px] px-[10px] py-[2px] border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="text-[1.2rem] text-black flex flex-col gap-[5px]">
                        <label for="password" class="">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="peer rounded-[5px] px-[10px] py-[2px] border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700"
                            name="password" required autocomplete="current-password">

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


                    <div class="flex flex-row pt-[15px] pb-[30px] text-[0.8rem] gap-[175px] ">
                        <div class="inline ">
                            <input class="scale-110 cursor-pointer" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-[1rem]" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="inline text-[1rem]">
                            @if (Route::has('password.request'))
                                <a class="hover:text-green-600" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>



                    <div class="flex justify-center gap-[20px] h-[7vh]">
                        <button type="submit"
                            class="w-[5vw] text-[1.5rem] bg-green-700 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-green-600 focus:outline-green-700 focus:outline-offset-0">
                            {{ __('Login') }}
                        </button>

                        <button type="submit"
                            class="w-[6.8vw] text-[1.5rem] bg-green-700 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-green-600 focus:outline-green-700 focus:outline-offset-0">
                            <a href="{{ route('register') }}" class="">Register</a>
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
    </div>
@endsection
