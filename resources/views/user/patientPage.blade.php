@extends('layouts.main')

@section('content')
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid">
        <div class="h-full w-full row-span-2 grid grid-cols-2 gap-8">
            <div class="h-full w-full">
                <div class="h-full">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="">
                            <x-menu-card :url="url('/patientPage/admission')" text="Admission" fontAwesomeIcon="fa-solid fa-bed"></x-menu-card>
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
            </div>
        </div>
    </div>
@endsection
