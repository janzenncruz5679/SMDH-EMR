@extends('layouts.main')


@section('content')
    <div class="shortcuts flex gap-x-[50px] fixed top-[59px] right-0 h-screen w-[85.5vw] p-[50px]">
        <div class="flex flex-row justify-start gap-[55px] h-[25vh]">
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-green-300 bg-green-200 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-green-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center" href=""><i
                            class="menuIcon fa-solid fa-x-ray text-[7rem] text-black"></i> </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    {{ __('X-ray') }}
                </div>
            </div>
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-green-300 bg-green-200 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-green-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center" href=""><i
                            class="menuIcon fa-solid fa-flask text-[7rem] text-black"></i>
                    </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    {{ __('Laboratory') }}
                </div>
            </div>
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-green-300 bg-green-200 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-green-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center" href=""><i
                            class="menuIcon fa-solid fa-prescription-bottle-medical text-[7rem] text-black"></i>
                    </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    {{ __('Pharmacy') }}
                </div>
            </div>
        </div>
    </div>
@endsection
