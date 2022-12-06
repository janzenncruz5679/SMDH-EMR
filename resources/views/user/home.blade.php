@extends('layouts.main')
@section('content')
    <div class="shortcuts flex gap-x-[50px] fixed top-[59px] right-0 h-screen w-[85.5vw] p-[50px]">
        <div class="flex flex-row justify-start gap-[55px] h-[25vh]">
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-green-300 bg-green-200 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-green-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center"
                        href="{{ url('patientPage') }}"><i class="menuIcon fa-solid fa-print text-[7rem] text-black"></i> </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    <p>Patient Profile</p>
                </div>
            </div>
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-green-300 bg-green-200 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-green-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center"
                        href="{{ url('billing') }}"><i class="menuIcon fa-solid fa-print text-[7rem] text-black"></i> </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    <p>Add Bill</p>
                </div>
            </div>
            <div class="homeShortcuts h-[25vh] flex flex-col justify-center items-center">
                <div
                    class="menu h-[20vh] w-[10vw] relative shadow-md shadow-green-300 bg-green-200 flex flex-col justify-center items-center rounded-[20px] hover:-translate-y-0.5 transform transition hover:bg-green-300">
                    <a class="menuLink absolute w-full h-full flex justify-center items-center"
                        href="{{ url('stations') }}"><i class="menuIcon fa-solid fa-print text-[7rem] text-black"></i> </a>
                </div>
                <div class="menuDescription text-[1.5rem] pt-[5px] text-center">
                    <p>View Stations</p>
                </div>
            </div>

        </div>
    </div>
@endsection
