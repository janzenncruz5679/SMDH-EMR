@extends('layouts.main')
@section('content')
    <div class="shortcuts flex gap-x-[50px] fixed top-[59px] right-0 h-screen w-[85.5vw] p-[50px]">
        <div class="flex flex-row justify-start gap-[55px] h-[25vh]">
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-blue-200 bg-blue-100 text-zinc-900 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-blue-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center hover:text-white"
                        href="{{ url('patientPage') }}"><i class="menuIcon fa-solid fa-hospital-user text-[7rem]"></i> </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    {{ __('Patient Profile') }}
                </div>
            </div>
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-blue-200 bg-blue-100 text-zinc-900 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-blue-200">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center hover:text-white"
                        href="{{ url('stations') }}"><i class="menuIcon fa fa-hospital text-[7rem]"></i> </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    {{ __('View Stations') }}
                </div>
            </div>
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-blue-200 bg-blue-100 text-zinc-900 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-blue-200">
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
