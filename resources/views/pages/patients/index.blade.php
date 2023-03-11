@extends('layouts.main')

@section('content')
    <div class="fixed h-[93.65%] w-[85.7%] left-[275px] top-[59px] p-12 grid">
        <div class="h-full w-full row-span-2 grid grid-cols-2 gap-8">
            <div class="h-full w-full">
                <div class="h-full ">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="">
                            <x-menu-card :url="route('admissions.index')" text="Admission" fontAwesomeIcon="fa-solid fa-bed"></x-menu-card>
                        </div>
                        <div class="">
                            <x-menu-card :url="url('/patientPage/emergency')" text="Emergency" fontAwesomeIcon="fa-solid fa-truck-medical">
                            </x-menu-card>
                        </div>
                        <div class="">
                            <x-menu-card :url="url('/patientPage')" text="Outpatients" fontAwesomeIcon="fa-solid fa-kit-medical">
                            </x-menu-card>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-full w-full bg-blue-100 p-4 shadow-lg shadow-blue-200 rounded-3xl">
                <div class="h-full ">
                </div>
            </div>
        </div>
    </div>
@endsection
