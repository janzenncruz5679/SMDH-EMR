@extends('layouts.splash')

@section('content')
    <div class="flex h-full w-full justify-center items-center">
        <div class="w-[25vw]">
            <div class="h-[92vh] px-[30px] pb-[30px] pt-[20px] rounded-[15px] bg-white">
                <div class="flex justify-center pb-[10px]">
                    <img src="'../../assets/img/san_miguel_hospital_logo.png" alt="logo" style="height: 25vh">
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="text-[1rem] text-black flex flex-col gap-[5px]">
                        <label for="name" class="">{{ __('Name') }}</label>


                        <input id="name" type="text"
                            class="peer rounded-[5px] px-[10px] py-[2px] border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="text-[1rem] text-black flex flex-col gap-[5px]">
                        <label for="email" class="pt-[10px]">{{ __('Email Address') }}</label>


                        <input id="email" type="email"
                            class="peer rounded-[5px] px-[10px] py-[2px] border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="text-[1rem] text-black flex flex-col gap-[5px]">
                        <label for="phone" class="pt-[15px]">{{ __('Phone') }}</label>
                        <input id="phone" type="text"
                            class="peer rounded-[5px] px-[10px] py-[2px] border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700"
                            name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="text-[1rem] text-black flex flex-col gap-[5px]">
                        <label for="address" class="pt-[10px]">{{ __('Address') }}</label>

                        <input id="address" type="text"
                            class="peer rounded-[5px] px-[10px] py-[2px] border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700"
                            name="address" value="{{ old('address') }}" required autocomplete="address">

                        @error('address')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="text-[1rem] text-black flex flex-col gap-[5px]">
                        <label for="password" class="pt-[10px]">{{ __('Password') }}</label>


                        <input id="password" type="password"
                            class="peer rounded-[5px] px-[10px] py-[2px] border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="text-[1rem] text-black flex flex-col gap-[5px]">
                        <label for="password-confirm" class="pt-[10px]">{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password"
                            class="peer rounded-[5px] px-[10px] py-[2px] border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700"
                            name="password_confirmation" required autocomplete="new-password">

                    </div>
                    <div class="flex justify-center h-[9vh] pt-[25px]">

                        <button type="submit"
                            class="w-[6.8vw] text-[1.5rem] bg-green-700 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-green-600 focus:outline-green-700 focus:outline-offset-0">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <div class="pt-[15px] text-center">
                        @if (Route::has('password.request'))
                            <a class="hover:text-green-600" href="{{ route('login') }}">
                                {{ __('Log in if account exist') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
