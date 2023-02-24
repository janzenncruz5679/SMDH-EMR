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
    <div class="grid absolute h-[94%] w-[86%] left-[275px] top-[59px] p-12">
        <div class="grid grid-rows-6 w-full">
            <div class=" h-full w-full">
                {{-- <form action="{{ route('submitVitals') }}" method="POST" enctype="multipart/form-data" class="admission-form">
                    @csrf --}}
                <div
                    class="h-full
                     w-full text-xl tracking-wider border-2 border-black font-[sans-serif]">
                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        <div class="grid grid-cols-2 border-b-2 border-black h-full">
                            <div class="border-r-2 border-black p-3">
                                <label>PATIENT'S IDENTITY :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Full Name" name="patients_identity" autocomplete="off"
                                    value="{{ $dischargeSummary->patients_identity }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
                            </div>
                            <div class="border-r-2 border-black p-3">
                                <label>DISCHARGE DATE* :</label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="discharge_date" autocomplete="off"
                                    value="{{ $dischargeSummary->discharge_date }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 border-b-2 border-black h-full">
                            <div class="border-r-2 border-black p-3">
                                <label>FINDINGS :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Doctor Findings" name="positive_finding" autocomplete="off"
                                    value="{{ $dischargeSummary->positive_finding }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
                            </div>
                            <div class="border-r-2 border-black p-3">
                                <label>TREATMENT* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Treatment" name="treatment" autocomplete="off"
                                    value="{{ $dischargeSummary->treatment }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 border-b-2 border-black h-full">
                            <div class="border-r-2 border-black p-3">
                                <label>HOSPITAL STAY :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Hospital Stay Information" name="course_in_hospital" autocomplete="off"
                                    value="{{ $dischargeSummary->course_in_hospital }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
                            </div>
                            <div class="border-r-2 border-black p-3">
                                <label>FINAL DIAGNOSIS* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Age" name="final_diagnosis" autocomplete="off"
                                    value="{{ $dischargeSummary->final_diagnosis }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 border-b-2 border-black h-full">
                            <div class="border-r-2 border-black p-3">
                                <label>PLANS :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Plan" name="plan" autocomplete="off"
                                    value="{{ $dischargeSummary->plans }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
                            </div>
                            <div class="border-r-2 border-black p-3">
                                <label>DOCTOR'S NAME* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Doctor's Name" name="doctor_name" autocomplete="off"
                                    value="{{ $dischargeSummary->doctor_name }}">
                                {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 border-b-2 border-black h-full">
                            <div class="border-r-2 border-black p-3">
                                <label>LICENSE NUMBER :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="License Number" name="license_number" autocomplete="off"
                                    value="{{ $dischargeSummary->license_number }}">
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
                        href="{{ route('updateDischargeSummary', ['id' => $dischargeSummary->id]) }}">
                        <div
                            class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                            {{ __('Edit') }}
                        </div>
                    </a>
                </div>

                {{-- </form> --}}
            </div>
        </div>
    </div>
@endsection
