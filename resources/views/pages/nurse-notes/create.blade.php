@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="grid absolute h-[94%] w-[86%] left-[275px] top-[59px] p-12">
        @include('layouts.stepper')
        <div class="grid grid-rows-6 w-full">
            <div class=" h-full w-full">
                <form action="{{ route('patients.nurse-notes.store', $patient->id) }}" method="POST"
                    enctype="multipart/form-data" class="admission-form">
                    @csrf
                    <div
                        class="h-full
                     w-full text-lg tracking-wider border-2 border-black font-[sans-serif]">
                        {{-- admissionform_sec --}}
                        <div class="form-section">
                            <div class="grid grid-cols-8 border-b-2 border-black h-full">
                                <div class="col-span-4 border-r-2 border-black p-3">
                                    <label>NAME :</label>
                                    <input type="text" readonly
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Patient Full Name" name="patient_fullname[]" autocomplete="off"
                                        value="{{ $patient->full_name }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>
                                <div class="col-span-2 border-r-2 border-black p-3">
                                    <label>AGE* :</label>
                                    <input type="text" readonly
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Patient Age" name="age[]" autocomplete="off"
                                        value="{{ $patient->bdate->age }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>
                                <div class="col-span-2 border-r-2 border-black p-3">
                                    <label>WARD* :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Ward #" name="ward" autocomplete="off" value="{{ old('ward') }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="p-3 grid gap-3">
                                <label class=" text-xl text-[#003D33] font-semibold tracking-wider">1st Observation</label>
                                <div class="grid grid-cols-8 h-full gap-4">
                                    <div class="grid gap-3">
                                        <div class="grid">
                                            <label>DATE* :</label>
                                            <input type="date"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="obsDate[]" autocomplete="off" value="{{ old('record_date') }}">
                                        </div>
                                        {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                        <div class="grid">
                                            <label>TIME* :</label>
                                            <input type="time"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="obsTime[]" autocomplete="off" value="{{ old('record_time') }}">
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label>FOCUS* :</label>
                                        <textarea type="text"
                                            class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="focus" name="obsFocus[]" autocomplete="off" value="{{ old('focus') }}"></textarea>
                                    </div>
                                    <div class="col-span-5">
                                        <label>DATA ACTION AND RESPONSE* :</label>
                                        <textarea type="text"
                                            class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="action response" name="obsDar[]" autocomplete="off" value="{{ old('data_action_response') }}"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="p-3 grid gap-3">
                                <label class=" text-xl text-[#003D33] font-semibold tracking-wider">2nd Observation</label>
                                <div class="grid grid-cols-8 h-full gap-4">
                                    <div class="grid gap-3">
                                        <div class="grid">
                                            <label>DATE* :</label>
                                            <input type="date"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="obsDate[]" autocomplete="off" value="{{ old('record_date') }}">
                                        </div>
                                        {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                        <div class="grid">
                                            <label>TIME* :</label>
                                            <input type="time"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="obsTime[]" autocomplete="off" value="{{ old('record_time') }}">
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label>FOCUS* :</label>
                                        <textarea type="text"
                                            class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="focus" name="obsFocus[]" autocomplete="off" value="{{ old('focus') }}"></textarea>
                                    </div>
                                    <div class="col-span-5">
                                        <label>DATA ACTION AND RESPONSE* :</label>
                                        <textarea type="text"
                                            class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="action response" name="obsDar[]" autocomplete="off" value="{{ old('data_action_response') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-navigation py-8 grid grid-cols-8 gap-4">
                        <button
                            class="previous h-full col-start-5 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                            type="button">Previous</button>
                        <button
                            class="next h-full col-start-6 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                            type="button">Next</button>
                        <button
                            class="h-full col-start-7 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                            type="submit">Submit</button>

                        <a class=" col-start-8 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                            href="">
                            <div
                                class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                                {{ __('Print') }}
                            </div>
                        </a>
                    </div>
                </form>
            </div>

            </form>
        </div>
    </div>
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/stationPage/addInput.js')
@endpush
