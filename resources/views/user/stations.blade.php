@extends('layouts.main')

@section('content')
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid">
        <div class="h-full w-full row-span-2 grid  gap-8">
            <div class="h-full w-full">
                <div class="h-full ">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="">
                            <x-menu-card :url="route('vitalSign.index')" text="Vital Signs" fontAwesomeIcon="fa-solid fa-heart-pulse" />
                        </div>
                        <div class="">
                            <x-menu-card :url="route('nurseNote.index')" text="Nurse Notes" fontAwesomeIcon="fa-solid fa-notes-medical" />
                        </div>
                        <div class="">
                            <x-menu-card :url="route('dischargeSummary.index')" text="Discharge"
                                fontAwesomeIcon="fa-solid fa-house-medical-circle-xmark" />
                        </div>
                        {{-- <div class="">
                            <x-menu-card :url="route('physicianOrder')" text="Physician Order"
                                fontAwesomeIcon="fa-solid fa-heart-pulse" />
                        </div> --}}
                        <div class="">
                            <x-menu-card :url="route('fluidIntake')" text="Fluid Intake" fontAwesomeIcon="fa-solid fa-syringe" />
                        </div>
                        {{-- <div class="">
                            <x-menu-card :url="route('kardex')" text="Kardex" fontAwesomeIcon="fa-solid fa-notes-medical" />
                        </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="h-full w-full bg-blue-100 p-4 shadow-lg shadow-blue-200 rounded-3xl">
                <div class="h-full ">
                </div>
            </div> --}}
        </div>
    </div>
@endsection
