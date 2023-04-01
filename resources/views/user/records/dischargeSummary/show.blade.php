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
            color: rgb(220, 38, 38);
            font-size: 1rem;
        }
    </style>
    <div class="fixed h-[93%] w-[84%] left-[16%] top-[7%] p-12 flex flex-col">
        <div class="hidden">
            @include('layouts.stepper')
        </div>
        <div class=" h-full w-full">
            <form action="" method="POST" enctype="multipart/form-data" class="admission-form text-xl tracking-wider">
                @csrf
                <div
                    class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                    <label>Discharge Summary Information # {{ $dischargeSummary->id }}</label>
                </div>
                {{-- admissionform_sec --}}
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Information</label>
                        </div>
                        <div class="grid grid-cols-6 gap-2 pb-3">
                            <div class="col-span-2 px-3">
                                <label>PATIENT'S IDENTITY :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="patient identity" name="patients_identity" readonly
                                    value="{{ $dischargeSummary->patients_identity }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patients_identity')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class=" px-3">
                                <label>DISCHARGE DATE* :</label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="discharge_date" readonly value="{{ $dischargeSummary->discharge_date }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('discharge_date')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-2 px-3">
                                <label>DOCTOR'S NAME* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="doctor name" name="doctor_name" readonly
                                    value="{{ $dischargeSummary->doctor_name }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('doctor_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>LICENSE NUMBER :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="license number" name="license_number" readonly
                                    value="{{ $dischargeSummary->license_number }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('license_number')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>Medication Summary</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-3 gap-4 px-3">
                                <div>
                                    <label>FINDINGS :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="doctor findings" name="positive_finding" readonly>{{ $dischargeSummary->positive_finding }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('positive_finding')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TREATMENT :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="doctor treatment" name="treatment" readonly>{{ $dischargeSummary->treatment }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('treatment')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>HOSPITAL STAY :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="hospital stay" name="course_in_hospital" readonly>{{ $dischargeSummary->course_in_hospital }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('hospital stay')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>Doctor Diagnosis and Plans</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-2 gap-4 px-3">
                                <div>
                                    <label>FINAL DIAGNOSIS:</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="final diagnosis" name="final_diagnosis" readonly>{{ $dischargeSummary->final_diagnosis }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('positive_finding')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DOCTOR PLANS:</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="plan" name="plan" readonly>{{ $dischargeSummary->plan }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('plan')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-navigation py-8 grid grid-cols-8 gap-4">
                    <a class=" col-start-7 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                        href="{{ route('dischargeSummary.edit', $dischargeSummary->id) }}">
                        <div
                            class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                            {{ __('Edit') }}
                        </div>
                    </a>
                    <a class=" col-start-8 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                        href="{{ route('dischargeSummary.index') }}">
                        <div
                            class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                            Back
                        </div>
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/birthdate.js')
    @vite('resources/js/patientPage/admission_days.js')
    @vite('resources/js/patientPage/multi-step-form.js')
@endpush