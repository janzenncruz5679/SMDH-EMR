@extends('layouts.main')

@section('content')
    <div class="h-1/4 w-full p-12 xs:p-4 overflow-hidden">
        <div class="grid grid-cols-3 gap-6">
            <div class="">
                <x-menu-card :url="route('admission.index')" text="Admission" fontAwesomeIcon="fa-solid fa-bed"></x-menu-card>
            </div>
            <div class="">
                <x-menu-card :url="route('emergency.index')" text="Emergency" fontAwesomeIcon="fa-solid fa-truck-medical">
                </x-menu-card>
            </div>
            <div class="">
                <x-menu-card :url="route('outpatient.index')" text="Outpatients" fontAwesomeIcon="fa-solid fa-kit-medical">
                </x-menu-card>
            </div>
        </div>
    </div>
@endsection
