@extends('layouts.main')
@section('content')
    <div
        class="grid fixed h-[94%] w-[86%] left-[275px] top-[59px] p-12 sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500">
        <div class=" grid grid-cols-6 gap-16 h-[25%] w-full ">
            <div class="grid w-full gap-[10px]">
                <a class=" text-white " href="{{ url('patientPage') }}">
                    <div
                        class=" bg-custom_hospital-300 hover:bg-custom_hospital-500 py-8 gap-4 rounded-3xl grid place-items-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-hospital-user text-[7rem]"></i>
                        <div class="text-2xl font-[sans-serif]">
                            {{ __('View Patients') }}
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid w-full gap-[10px]">
                <a class=" text-white " href="{{ url('patientPage') }}">
                    <div
                        class=" bg-blue-300 hover:text-zinc-900 hover:bg-blue-100 py-8 gap-4 rounded-3xl grid place-items-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-hospital text-[7rem]"></i>
                        <div class="text-2xl font-[sans-serif]">
                            {{ __('View Stations') }}
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid w-full gap-[10px]">
                <a class=" text-zinc-900 hover:text-white" href="{{ url('billing') }}">
                    <div
                        class=" bg-blue-100 hover:bg-blue-300 py-8 gap-4 rounded-3xl grid place-items-center shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                        <i class="fa-solid fa-hand-holding-dollar text-[7rem]"></i>
                        <div class="text-2xl font-[sans-serif]">
                            {{ __('Add Bill') }}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
