@extends('layouts.main')

@section('content')
    <div
        class="grid fixed h-[94%] w-[86%] left-[275px] top-[59px] p-12 sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500">
        <div class=" grid grid-cols-6 gap-16 h-[25%] w-full">
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('/patientPage/admission') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-8 gap-4 rounded-3xl grid place-items-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-bed text-[7rem]"></i>
                        <div class="text-2xl font-[sans-serif]">
                            {{ __('Admission') }}
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('patientPage') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-8 gap-4 rounded-3xl grid place-items-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-truck-medical text-[7rem]"></i>
                        <div class="text-2xl font-[sans-serif]">
                            {{ __('Emergency') }}
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('billing') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-8 gap-4 rounded-3xl grid place-items-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-heart-pulse text-[7rem]"></i>
                        <div class="text-2xl font-[sans-serif]">
                            {{ __('Outpatients') }}
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection
