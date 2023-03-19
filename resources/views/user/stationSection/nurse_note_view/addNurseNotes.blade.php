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
            @include('layouts.stepper')
        </div>
        <div class=" h-full w-full">
            <form action="{{ route('submitNurseNotes') }}" method="POST" enctype="multipart/form-data"
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
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Full Name" name="patient_fullname" autocomplete="off"
                                    value="{{ old('patient_fullname') }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-2 px-3">
                                <label>AGE* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Age" name="age" autocomplete="off" value="{{ old('age') }}"
                                    required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </span>
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
                                        name="obsDate[1]" autocomplete="off" value="{{ old('record_date') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate[1]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[1]" autocomplete="off" value="{{ old('record_time') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime[1]')
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
                                        placeholder="focus" name="obsFocus[1]" autocomplete="off" required>{{ old('focus') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus[1]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[1]" autocomplete="off" required>{{ old('data_action_response') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar[1]')
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
                                        name="obsDate[2]" autocomplete="off" value="{{ old('record_date') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate[2]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[2]" autocomplete="off" value="{{ old('record_time') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime[2]')
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
                                        placeholder="focus" name="obsFocus[2]" autocomplete="off" required>{{ old('focus') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus[2]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[2]" autocomplete="off" required>{{ old('data_action_response') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar[2]')
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
                                        name="obsDate[3]" autocomplete="off" value="{{ old('record_date') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate[3]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[3]" autocomplete="off" value="{{ old('record_time') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime[3]')
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
                                        placeholder="focus" name="obsFocus[3]" autocomplete="off" required>{{ old('focus') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus[3]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[3]" autocomplete="off" required>{{ old('data_action_response') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar[3]')
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
                                        name="obsDate[4]" autocomplete="off" value="{{ old('record_date') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate[4]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[4]" autocomplete="off" value="{{ old('record_time') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime[4]')
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
                                        placeholder="focus" name="obsFocus[4]" autocomplete="off" required>{{ old('focus') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus[4]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[4]" autocomplete="off" required>{{ old('data_action_response') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar[4]')
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
                                        name="obsDate[5]" autocomplete="off" value="{{ old('record_date') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDate[5]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>TIME* :</label>
                                    <input type="time"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="obsTime[5]" autocomplete="off" value="{{ old('record_time') }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsTime[5]')
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
                                        placeholder="focus" name="obsFocus[5]" autocomplete="off" required>{{ old('focus') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsFocus[5]')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                    <label>DATA ACTION AND RESPONSE* :</label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="action response" name="obsDar[5]" autocomplete="off" required>{{ old('data_action_response') }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('obsDar[5]')
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
                        href="#" onclick="javascript:window.history.back(-1);return false;">
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
