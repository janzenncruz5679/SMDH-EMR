@extends('layouts.main')
@section('content')
    <div class="addPatient absolute top-[59px] left-[275px] h-full w-[85.3vw] p-[45px] ">
        @livewire('multi-step-form')
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/birthdate.js')
    @vite('resources/js/patientPage/admission_days.js')
@endpush
