@extends('layouts.splash')

@section('content')
    <div class="flex items-center justify-center h-full w-full">
        <div
            class="bg-red-100 xs:bg-emerald-300 sm:bg-green-400 md:bg-yellow-100 lg:bg-violet-500 xl:bg-gray-500 2xl:bg-orange-100 grid gap-2 p-10 rounded-[30px] xs:w-[75%] xs:p-6">
            <form method="POST" action="{{ route('register') }}" class="grid gap-4 text-black xs:gap-4 ">
                @csrf
                <div class="grid gap-2">
                    <div class="flex flex-col text-xl xs:text-xl">
                        <label for="name" class="font-medium">{{ __('Name') }}</label>
                        <input id="name" type="text"
                            class="peer w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-col text-xl xs:text-xl">
                        <label for="email" class="font-medium">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="peer w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-col text-xl xs:text-xl">
                        <label for="phone" class="font-medium">{{ __('Phone') }}</label>
                        <input id="phone" type="number" maxlength="11"
                            oninput="this.value=this.value.slice(0,this.maxLength)"
                            class="peer w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex flex-col text-xl xs:text-xl">
                        <label for="address" class="font-medium">{{ __('Address') }}</label>

                        <input id="address" type="text"
                            class="peer w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="address" value="{{ old('address') }}" required autocomplete="address">

                        @error('address')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex flex-col text-xl xs:text-xl">
                        <label for="password" class="font-medium">{{ __('Password') }}</label>


                        <input id="password" type="password"
                            class="peer w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="peer-invalid:visible text-[20px] text-red-700 ">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex flex-col text-xl xs:text-xl">
                        <label for="password-confirm" class="font-medium">{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password"
                            class="peer w-full rounded-[5px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            name="password_confirmation" required autocomplete="new-password">

                    </div>
                </div>

                <div class="grid gap-3">
                    <div class="flex flex-col text-xl xs:text-xl">
                        <button type="submit"
                            class="h-full w-full text-2xl p-2 bg-blue-300 font-medium tracking-[2px] text-white border-none rounded-[10px] hover:text-black hover:bg-blue-200">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <div class="flex flex-col">
                        <a href="{{ route('login') }}"
                            class="text-2xl p-2 bg-blue-300 font-medium tracking-[2px] text-white border-none rounded-[10px] hover:text-black hover:bg-blue-200 w-full h-full flex items-center justify-center">{{ __('Back') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
