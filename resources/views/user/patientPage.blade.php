@extends('layouts.main')

@section('content')
    <div class="h-full w-full xs:p-4 sm:p-8 xl:p-12 overflow-hidden">
        <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-5 xs:gap-4 sm:gap-8">
            <x-menu-card :url="route('admission.index')" text="Admission" fontAwesomeIcon="fa-solid fa-bed"></x-menu-card>
            <x-menu-card :url="route('emergency.index')" text="Emergency" fontAwesomeIcon="fa-solid fa-truck-medical">
            </x-menu-card>
            <x-menu-card :url="route('outpatient.index')" text="Outpatients" fontAwesomeIcon="fa-solid fa-kit-medical">
            </x-menu-card>
        </div>
    </div>
@endsection
