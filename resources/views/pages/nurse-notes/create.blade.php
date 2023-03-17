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
        <div>
            @include('layouts.nurseStepper')
        </div>
        <div class=" h-full w-full">
            <form action="{{ route('patients.nurse-notes.store', $patient->id) }}" method="POST" enctype="multipart/form-data"
                class="admission-form text-xl tracking-wider">
                @csrf
                <div
                    class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                    <label>Nurse Note Info</label>
                </div>
                {{-- admissionform_sec --}}
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Information</label>
                        </div>
                        <div class="grid grid-cols-8 gap-2 pb-3">
                            <div class="col-span-4 px-3">
                                <label>NAME :</label>
                                <input type="text" readonly
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Full Name" name="patient_fullname[]" autocomplete="off"
                                    value="{{ $patient->full_name }}">
                            </div>
                            <div class="col-span-2 px-3">
                                <label>AGE* :</label>
                                <input type="text" readonly
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Age" name="age[]" autocomplete="off"
                                    value="{{ $patient->bdate->age }}">
                            </div>
                            <div class="col-span-2 px-3">
                                <label>WARD* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Ward #" name="ward" autocomplete="off" value="{{ old('ward') }}"
                                    required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('ward')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>1st Observation</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-6 h-full gap-4 px-3">
                                <div>
                                    <label>DATE* :</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsDate[]" autocomplete="off" value="{{ old('obsDate.0') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate.0')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[]" autocomplete="off" value="{{ old('obsTime.0') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime.0')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 px-3">
                                <div>
                                    <label>FOCUS* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="focus" name="obsFocus[]" autocomplete="off" required>{{ old('obsFocus.0') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus.0')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[]" autocomplete="off" required>{{ old('obsDar.0') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar.0')
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
                            <label>2nd Observation</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-6 h-full gap-4 px-3">
                                <div>
                                    <label>DATE* :</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsDate[]" autocomplete="off" value="{{ old('obsDate.1') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate.1')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[]" autocomplete="off" value="{{ old('obsTime.1') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime.1')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 px-3">
                                <div>
                                    <label>FOCUS* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="focus" name="obsFocus[]" autocomplete="off" required>{{ old('obsFocus.1') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus.1')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[]" autocomplete="off" required>{{ old('obsDar.1') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar.1')
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
                            <label>3rd Observation</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-6 h-full gap-4 px-3">
                                <div>
                                    <label>DATE* :</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsDate[]" autocomplete="off" value="{{ old('obsDate.2') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate.2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[]" autocomplete="off" value="{{ old('obsTime.2') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime.2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 px-3">
                                <div>
                                    <label>FOCUS* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="focus" name="obsFocus[]" autocomplete="off" required>{{ old('obsFocus.2') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus.2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[]" autocomplete="off" required>{{ old('obsDar.2') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar.2')
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
                            <label>4th Observation</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-6 h-full gap-4 px-3">
                                <div>
                                    <label>DATE* :</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsDate[]" autocomplete="off" value="{{ old('obsDate.3') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate.3')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[]" autocomplete="off" value="{{ old('obsTime.3') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime.3')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 px-3">
                                <div>
                                    <label>FOCUS* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="focus" name="obsFocus[]" autocomplete="off" required>{{ old('obsFocus.3') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus.3')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[]" autocomplete="off" required>{{ old('obsDar.3') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar.3')
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
                            <label>5th Observation</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-6 h-full gap-4 px-3">
                                <div>
                                    <label>DATE* :</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsDate[]" autocomplete="off" value="{{ old('obsDate.4') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate.4')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[]" autocomplete="off" value="{{ old('obsTime.4') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime.4')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 px-3">
                                <div>
                                    <label>FOCUS* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="focus" name="obsFocus[]" autocomplete="off" required>{{ old('obsFocus.4') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus.4')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[]" autocomplete="off" required>{{ old('obsDar.4') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar.4')
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
                        href="">
                        <div
                            class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                            {{ __('Print') }}
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
