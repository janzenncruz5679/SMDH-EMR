@extends('layouts.main')
@section('content')
    <div
        class="shortcuts flex gap-x-[50px] fixed top-[59px] right-0 h-full w-[85.6vw] xl:w-[79vw] lg:w-[73.1vw] p-[50px] xl:p-[40px] ssm:bg-zinc-800 sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 2xl:bg-green-200">
        <div class="flex flex-row justify-start gap-[55px] h-[25vh] xl:h-[30vh] w-full">
            <div class="homeShortcuts h-[25vh] xl:h-[26vh] xl:w-[14vw] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] xl:h-full w-[10vw] xl:w-full relative shadow-md shadow-blue-200 bg-blue-100 text-zinc-900 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-blue-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center hover:text-white"
                        href="{{ url('patientPage') }}"><i class="menuIcon fa-solid fa-hospital-user text-[7rem]"></i> </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    {{ __('Patient Profile') }}
                </div>
            </div>
            <div class="homeShortcuts h-[25vh] xl:h-[26vh] xl:w-[14vw] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] xl:h-full w-[10vw] xl:w-full relative shadow-md shadow-blue-200 bg-blue-100 text-zinc-900 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-blue-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center hover:text-white"
                        href="{{ url('stations') }}"><i class="menuIcon fa fa-hospital text-[7rem]"></i>
                    </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    {{ __('View Stations') }}
                </div>
            </div>
            <div class="homeShortcuts h-[25vh] xl:h-[26vh] xl:w-[14vw] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] xl:h-full w-[10vw] xl:w-full relative shadow-md shadow-blue-200 bg-blue-100 text-zinc-900 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-blue-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center hover:text-white"
                        href="{{ url('billing') }}"><i class="menuIcon fa-solid fa-hand-holding-dollar text-[7rem]"></i>
                    </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    {{ __('Add Bill') }}
                </div>
            </div>

        </div>
    </div>
@endsection
