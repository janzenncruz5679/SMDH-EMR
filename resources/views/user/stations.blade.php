@extends('layouts.main')

@section('content')
    <div class="h-full w-full xs:p-4 sm:p-8 xl:p-12 overflow-hidden">
        <div class="grid grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 xs:gap-4 sm:gap-8">
            <x-menu-card :url="route('vitalSign.index')" text="Vital Sign" fontAwesomeIcon="fa-solid fa-heart-pulse" />
            <x-menu-card :url="route('nurseNote.index')" text="Nurse Note" fontAwesomeIcon="fa-solid fa-notes-medical" />
            <x-menu-card :url="route('dischargeSummary.index')" text="Discharge" fontAwesomeIcon="fa-solid fa-house-medical-circle-xmark" />
            <x-menu-card :url="route('fluidIntake.index')" text="Fluid Intake" fontAwesomeIcon="fa-solid fa-syringe" />
            {{-- <x-menu-card :url="route('physicianOrder')" text="Physician Order" fontAwesomeIcon="fa-solid fa-heart-pulse" />
            <x-menu-card :url="route('kardex')" text="Kardex" fontAwesomeIcon="fa-solid fa-notes-medical" /> --}}
        </div>
    </div>
@endsection
