@extends('layouts.main')

@section('content')
    <div {{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}} class="grid fixed h-[94%] w-[86%] left-[275px] top-[59px] p-12">
        <div class="grid grid-rows-6 w-full">
            <div class="grid grid-cols-12 gap-14 ">
                <a class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-solid fa-bed text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <label class="grid justify-center">{{ __('Medical History') }}</label>
                            <label class="grid justify-center">{{ $view_first->full_name }}</label>
                        </div>
                    </div>
                </a>

                <a class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ url('/patientPage/emergency') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-truck-medical text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <label class="grid justify-center">{{ __('Patient #') }}</label>
                            <label class="grid justify-center">{{ $view_first->patient_id }}</label>
                        </div>
                    </div>
                </a>

                <a class="col-span-2 grid items-start p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ url('patientPage') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-kit-medical text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <label class="grid justify-center">{{ __('Outpatients') }}</label>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection
@push('custom_scripts')
    @vite('resources/js/patientPage/birthdate.js')
@endpush
