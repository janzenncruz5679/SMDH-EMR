@extends('layouts.main')
@section('content')
    <div
        class="grid fixed h-[94%] w-[86%] left-[275px] top-[59px] p-12 sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500">
        <div class=" grid grid-cols-5 gap-14 h-[30%] w-[75%] ">
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('patientPage') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-10 rounded-3xl grid justify-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-hospital-user text-[7rem]"></i>
                    </div>
                </a>
                <div class="grid justify-center text-[1.5rem]">
                    {{ __('Patient Profile') }}
                </div>
            </div>
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('patientPage') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-10 rounded-3xl grid justify-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-hospital text-[7rem]"></i>
                    </div>
                </a>
                <div class="grid justify-center text-2xl">
                    {{ __('View Stations') }}
                </div>
            </div>
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('billing') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-10 rounded-3xl grid justify-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-hand-holding-dollar text-[7rem]"></i>
                    </div>
                </a>
                <div class="grid justify-center text-2xl">
                    {{ __('Add Bill') }}
                </div>
            </div>
        </div>
    </div>
@endsection
