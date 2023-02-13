@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    {{-- <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
        }
    </style> --}}
    <div class="grid fixed h-[94%] w-[86%] left-[275px] top-[59px] p-12">
        @include('layouts.stepper')
        <div class="grid grid-rows-6 w-full">
            <div class=" h-full w-full">
                {{-- <form action="{{ route('submitVitals') }}" method="POST" enctype="multipart/form-data" class="admission-form">
                    @csrf --}}
                <div
                    class="h-full
                     w-full text-xl tracking-wider border-2 border-black font-[sans-serif]">
                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        {{-- name --}}
                        <div class="grid grid-cols-8  border-b-2 border-black h-full">
                            <div class="border-r-2 border-black col-span-5 grid grid-cols-8 content-center p-3">
                                <p class="col-span-2">NAME OF HOSPITAL :</p>
                                <p class="col-span-6">San Miguel District Hospital</p>
                            </div>
                            <div class="col-span-3 grid grid-cols-7 p-3">
                                <p class="col-span-2">HOSP CODE :</p>
                                <p class="col-span-3">0000122</p>
                            </div>
                        </div>

                        {{-- address --}}
                        <div class="grid grid-cols-8 border-b-2 border-black h-full">
                            <div class="col-span-5 border-r-2 border-black p-3">
                                <p>PATIENT'S FULL NAME* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter patient's full name" name="patient_fullname" autocomplete="off"
                                    value="{{ $vitals->patient_fullname ?? 'N/A' }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                            </div>
                            <div class="col-span-3 border-r-2 border-black p-3">
                                <p>BIRTHDATE* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter address" name="birthdate" autocomplete="off"
                                    value="{{ $vitals->birthdate ?? 'N/A' }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                            </div>
                        </div>
                        <div class="grid grid-cols-8 border-b-2 border-black h-full">
                            <div class="col-span-3 border-r-2 border-black p-3">
                                <div class="grid">
                                    <label class="pb-2">SEX* :</label>
                                    <div class="grid grid-cols-6">
                                        <div class="inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Male" name="gender"
                                                {{ $vitals->gender == 'Male' ? 'checked' : 'disabled' }}>
                                            <label>Male</label>
                                        </div>
                                        <div class="inline col-span-2">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Female" name="gender"
                                                {{ $vitals->gender == 'Female' ? 'checked' : 'disabled' }}>
                                            <label>Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-5 border-black p-3">
                                <p>PHYSICIAN :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter address" name="physician" autocomplete="off"
                                    value="{{ $vitals->physician ?? 'N/A' }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                            </div>
                        </div>
                        <div class="grid border-b-2 border-black h-full">
                            <div class="grid p-3">
                                <label class="pb-2">DOCTOR'S NOTE :</label>
                                <textarea type="text"
                                    class="w-full h-20 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter doctor's note to the patient" name="notes" autocomplete="off" readonly>{{ $vitals->notes ?? 'N/A' }}</textarea>

                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="grid grid-cols-8 border-b-2 border-black h-full">
                            <div class="col-span-2 border-r-2 border-black p-3">
                                <label>DATE* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter date" name="date_1" autocomplete="off"
                                    value="{{ $vitals->date['date_1'] ?? 'N/A' }}">
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter date" name="date_2" autocomplete="off"
                                    value="{{ $vitals->date['date_2'] ?? 'N/A' }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="py-8 grid grid-cols-8 gap-4">
                    <a class=" col-end-7 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                        href="{{ url('/records/updateVitals' . $vitals->id) }}">
                        <div
                            class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                            {{ __('Edit') }}
                        </div>
                    </a>
                    {{-- <a class=" col-end-8 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                            href="{{ url('/patientPage/updateAdmission' . $view_first->id) }}" target="_blank">
                            <div
                                class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                                {{ __('Edit') }}
                            </div>
                        </a> --}}
                    {{-- <a class=" col-end-8 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                            href="{{ url('/patientPage/viewpdfAdmission' . $view_first->id) }}" target="_blank">
                            <div
                                class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                                {{ __('View PDF') }}
                            </div>
                        </a> --}}

                    {{-- <a class=" col-end-9 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                            href="{{ url('/patientPage/savepdfAdmission' . $view_first->id) }}">
                            <div
                                class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                                {{ __('Print') }}
                            </div>
                        </a> --}}
                </div>

                {{-- </form> --}}
            </div>
        </div>
    </div>
@endsection
