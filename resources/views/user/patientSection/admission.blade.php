@extends('layouts.main')

@section('content')
    <div class="absolute h-auto w-[86%] left-[275px] top-[59px] p-12 grid gap-8">
        @livewire('update-multi-step-form')
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/liveSearch.js')
@endpush
