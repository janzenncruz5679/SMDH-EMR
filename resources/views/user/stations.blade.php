@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="grid fixed h-[94%] w-[86%] left-[275px] top-[59px] p-12">
        <div class="grid grid-rows-6 w-full">
            <div class="grid grid-cols-12 gap-14 ">
                <a class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ route('vitalsTab') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-heart-pulse text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <p class="grid justify-center">{{ __('Vital Signs') }}</p>
                        </div>
                    </div>
                </a>
                <a class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ route('nurseNotes') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-heart-pulse text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <p class="grid justify-center">{{ __('Nurse Notes') }}</p>
                        </div>
                    </div>
                </a>
                <a class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ route('dischargeSummary') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-notes-medical text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <p class="grid justify-center">{{ __('Discharge') }}</p>
                            <p class="grid justify-center">{{ __('Summary') }}</p>
                        </div>
                    </div>
                </a>
                <a class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ route('physicianOrder') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-notes-medical text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <p class="grid justify-center">{{ __('Physician') }}</p>
                            <p class="grid justify-center">{{ __('Order') }}</p>
                        </div>
                    </div>
                </a>
                <a class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ route('fluidIntake') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-notes-medical text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <p class="grid justify-center">{{ __('Fluid Intake ') }}</p>
                        </div>
                    </div>
                </a>
                <a class="col-span-2 grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ route('kardex') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-notes-medical text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <p class="grid justify-center">{{ __('Kardex ') }}</p>
                        </div>
                    </div>
                </a>
                {{-- <a class="col-span-2 grid items-start p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ url('stations/labOptions') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-flask text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <p class="grid justify-center">{{ __('Laboratory') }}</p>
                        </div>
                    </div>
                </a>

                <a class="col-span-2 grid items-start p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                    href="{{ url('billing') }}">
                    <div class="grid gap-3">
                        <div class="grid place-items-center">
                            <i class="fa-solid fa-prescription-bottle-medical text-[7rem]"></i>
                        </div>
                        <div class="grid justify-center text-2xl font-[sans-serif]">
                            <p class="grid justify-center">{{ __('Pharmacy') }}</p>
                        </div>
                    </div>
                </a> --}}

            </div>
        </div>
    </div>
@endsection
