@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
        }
    </style>
    <div class="grid absolute h-[94%] w-[86%] left-[275px] top-[59px] p-12">
        @include('layouts.stepper')
        <div class="grid grid-rows-6 w-full">
            <div class=" h-full w-full">
                <form action="{{ route('editPhysicianOrder', ['id' => $physicianorder->id]) }} }}" method="POST"
                    enctype="multipart/form-data" class="admission-form">
                    @csrf
                    <div
                        class="h-full
                     w-full text-lg tracking-wider border-2 border-black font-[sans-serif]">
                        {{-- admissionform_sec --}}
                        <div class="form-section">
                            <div class="grid grid-cols-5 border-b-2 border-black h-full">
                                <div class="border-r-2 border-black p-3">
                                    <label>GIVEN NAME :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Given Name" name="first_name" autocomplete="off"
                                        value="{{ $physicianorder->first_name }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>
                                <div class="border-r-2 border-black p-3">
                                    <label>MIDDLE NAME :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Middle Name" name="middle_name" autocomplete="off"
                                        value="{{ $physicianorder->middle_name }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>
                                <div class="border-r-2 border-black p-3">
                                    <label>LAST NAME :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Last Name" name="last_name" autocomplete="off"
                                        value="{{ $physicianorder->last_name }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>
                                <div class="border-r-2 border-black p-3">
                                    <label>SUFFIX (leave empty if N/A) :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Suffix" name="suffix" autocomplete="off"
                                        value="{{ $physicianorder->suffix }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>
                                <div class="border-r-2 border-black p-3">
                                    <label>PHYSICIAN IN CHARGE :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Physician In Charge" name="resident_physician" autocomplete="off"
                                        value="{{ $physicianorder->resident_physician }}">
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
                                <div class="grid grid-cols-9 h-full gap-4">
                                    <div class="grid gap-3">
                                        <div class="grid">
                                            <label>DATE* :</label>
                                            <input type="date"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="entrydateArray[1]" autocomplete="off"
                                                value="{{ $physicianorder->entry_date['entrydateArray'][1] }}">
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
                                                name="entrytimeArray[1]" autocomplete="off"
                                                value="{{ $physicianorder->entry_time['entrytimeArray'][1] }}">
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <label>PROGRESS NOTES* :</label>
                                        <textarea type="text"
                                            class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="focus" name="progressnotesArray[1]" autocomplete="off">{{ $physicianorder->progress_notes['progressnotesArray'][1] }}</textarea>
                                    </div>
                                    <div class="col-span-4">
                                        <label>DOCTOR'S ORDER* :</label>
                                        <textarea type="text"
                                            class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="action response" name="doctororderArray[1]" autocomplete="off">{{ $physicianorder->doctor_order['doctororderArray'][1] }}</textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="p-3 grid gap-3">
                                <label class=" text-xl text-[#003D33] font-semibold tracking-wider">2nd Observation</label>
                                <div class="grid grid-cols-9 h-full gap-4">
                                    <div class="grid gap-3">
                                        <div class="grid">
                                            <label>DATE* :</label>
                                            <input type="date"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="entrydateArray[2]" autocomplete="off"
                                                value="{{ $physicianorder->entry_date['entrydateArray'][2] }}">
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
                                                name="entrytimeArray[1]" autocomplete="off"
                                                value="{{ $physicianorder->entry_time['entrytimeArray'][2] }}">
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <label>PROGRESS NOTES* :</label>
                                        <textarea type="text"
                                            class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="focus" name="progressnotesArray[2]" autocomplete="off">{{ $physicianorder->progress_notes['progressnotesArray'][2] }}</textarea>
                                    </div>
                                    <div class="col-span-4">
                                        <label>DOCTOR'S ORDER* :</label>
                                        <textarea type="text"
                                            class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="action response" name="doctororderArray[2]" autocomplete="off">{{ $physicianorder->doctor_order['doctororderArray'][2] }}</textarea>

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
