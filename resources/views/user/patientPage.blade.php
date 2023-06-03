@extends('layouts.main')

@section('content')
    <div class="lg:h-[35%] w-full p-12 xs:p-4 overflow-hidden">
        <div class="h-full grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-5 gap-6">
            <x-menu-card :url="route('admission.index')" text="Admission" fontAwesomeIcon="fa-solid fa-bed"></x-menu-card>
            <x-menu-card :url="route('emergency.index')" text="Emergency" fontAwesomeIcon="fa-solid fa-truck-medical">
            </x-menu-card>
            <x-menu-card :url="route('outpatient.index')" text="Outpatients" fontAwesomeIcon="fa-solid fa-kit-medical">
            </x-menu-card>
        </div>
    </div>
@endsection
