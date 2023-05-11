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
        <div class="grid place-items-center">
            @include('layouts.dischargeStepper')
        </div>
        <div class=" h-full w-full">
            <form action="{{ route('dischargeSummary.store') }}" method="POST" enctype="multipart/form-data"
                class="admission-form text-xl tracking-wider">
                @csrf
                <div
                    class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                    <label>Discharge Summary Info</label>
                </div>
                {{-- admissionform_sec --}}
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Information</label>
                        </div>
                        <div class="grid grid-cols-6 gap-2 pb-3">
                            <div class="col-span-2 px-3">
                                <label>PATIENT'S IDENTITY: <span class="text-red-600 font-bold">*</span></label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="patient identity" name="patients_identity" autocomplete="off" required
                                    value="{{ old('patients_identity') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patients_identity')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class=" px-3">
                                <label>DISCHARGE DATE: <span class="text-red-600 font-bold">*</span></label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="discharge_date" autocomplete="off" required value="{{ old('discharge_date') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('discharge_date')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-2 px-3">
                                <label>DOCTOR'S NAME: <span class="text-red-600 font-bold">*</span></label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="doctor name" name="doctor_name" autocomplete="off" required
                                    value="{{ old('doctor_name') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('doctor_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>LICENSE NUMBER: <span class="text-red-600 font-bold">*</span></label>
                                <input type="number" maxlength="7" oninput="this.value=this.value.slice(0,this.maxLength)"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="license number" name="license_number" autocomplete="off" required
                                    value="{{ old('license_number') }}">
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
                                    <label>FINDINGS: <span class="text-red-600 font-bold">*</span></label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="doctor findings" name="positive_finding" autocomplete="off" required>{{ old('positive_finding') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('positive_finding')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TREATMENT: <span class="text-red-600 font-bold">*</span></label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="doctor treatment" name="treatment" autocomplete="off" required>{{ old('treatment') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('treatment')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>HOSPITAL STAY: <span class="text-red-600 font-bold">*</span></label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="hospital stay" name="course_in_hospital" autocomplete="off" required>{{ old('course_in_hospital') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('hospital stay')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">

                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>Doctor Diagnosis and Plans</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-2 gap-4 px-3">
                                <div>
                                    <label>FINAL DIAGNOSIS: <span class="text-red-600 font-bold">*</span></label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="final diagnosis" name="final_diagnosis" autocomplete="off" required>{{ old('final_diagnosis') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('positive_finding')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DOCTOR PLANS: <span class="text-red-600 font-bold">*</span></label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="plan" name="plan" autocomplete="off" required>{{ old('plan') }}</textarea>
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
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/birthdate.js')
    @vite('resources/js/patientPage/admission_days.js')
    @vite('resources/js/patientPage/multi-step-form.js')
@endpush
