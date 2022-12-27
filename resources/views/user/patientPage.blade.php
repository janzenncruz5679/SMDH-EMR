@extends('layouts.main')

@section('content')
    <div
        class="grid fixed h-[94%] w-[86%] left-[275px] top-[59px] p-12 sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500">
        <div class=" grid grid-cols-5 gap-14 h-[30%] w-[75%] ">
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('/patientPage/admission') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-10 rounded-3xl grid justify-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-bed text-[7rem]"></i>
                    </div>
                </a>
                <div class="grid justify-center text-[1.5rem]">
                    {{ __('Admission') }}
                </div>
            </div>
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('patientPage') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-10 rounded-3xl grid justify-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-truck-medical text-[7rem]"></i>
                    </div>
                </a>
                <div class="grid justify-center text-2xl">
                    {{ __('Emergency') }}
                </div>
            </div>
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('billing') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-10 rounded-3xl grid justify-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-heart-pulse text-[7rem]"></i>
                    </div>
                </a>
                <div class="grid justify-center text-2xl">
                    {{ __('Outpatients') }}
                </div>
            </div>
        </div>
    </div>
@endsection
