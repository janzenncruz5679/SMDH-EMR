@extends('layouts.splash')

@section('content')
    <div class="relative h-full w-full flex justify-center items-center">
        <div class="h-[80%] sm:h-[85%] w-[30vw] sm:w-[50vw]">
            <div
                class="h-full flex flex-col justify-center px-[25px] lg:px-[30px] rounded-[15px] bg-white sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500">

                <form method="POST" action="{{ route('register') }}"
                    class="flex flex-col pb-[15px] gap-[15px] sm:gap-[10px] lg:gap-[10px] sm:text-[1.2rem] text-[1.5rem] lg:text-[1rem]">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name" class="">{{ __('Name') }}</label>
                        <input id="name" type="text"
                            class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="">{{ __('Email Address') }}</label>


                        <input id="email" type="email"
                            class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="phone" class="">{{ __('Phone') }}</label>
                        <input id="phone" type="text"
                            class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex flex-col">
                        <label for="address" class="">{{ __('Address') }}</label>

                        <input id="address" type="text"
                            class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="address" value="{{ old('address') }}" required autocomplete="address">

                        @error('address')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex flex-col">
                        <label for="password" class="">{{ __('Password') }}</label>


                        <input id="password" type="password"
                            class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex flex-col sm:pb-[25px] pb-[10px]">
                        <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password"
                            class="peer sm:h-[40px] lg:h-[40px] w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="password_confirmation" required autocomplete="new-password">

                    </div>
                    <div class="flex flex-col h-[50px] sm:h-[40px] lg:h-[40px]">

                        <button type="submit"
                            class="h-full w-full text-[1.5rem] sm:text-[1.4rem] bg-blue-200 tracking-[2px] text-white border-none rounded-[10px] bg-blue-300 text-white hover:text-black hover:bg-blue-100">
                            {{ __('Register') }}
                        </button>
                    </div>

                </form>
                <div class="h-[50px] sm:h-[40px] lg:h-[40px]">
                    <button type="submit"
                        class="h-full w-full sm:text-[1.4rem] text-[1.5rem] bg-blue-200 tracking-[2px] text-white border-none rounded-[10px] bg-blue-300 text-white hover:text-black hover:bg-blue-100">
                        <a href="{{ route('login') }}"
                            class="relative w-full h-full flex items-center justify-center">{{ __('Back') }}</a>
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection
