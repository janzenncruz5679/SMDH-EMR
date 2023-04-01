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
                    <label>Vital Signs Record # {{ $vitalSign->id }}</label>
                </div>
                {{-- admissionform_sec --}}
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Information</label>
                        </div>
                        <div class="grid grid-cols-7 gap-2 pb-3">
                            <div class="col-span-3 px-3">
                                <label>NAME: <span class="text-red-600 font-bold">*</span></label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Full Name" name="patient_fullname" readonly
                                    value="{{ $vitalSign->patient_fullname ?? '' }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>BIRTHDATE: <span class="text-red-600 font-bold">*</span></label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter address" name="birthdate" readonly
                                    value="{{ $vitalSign->birthdate ?? '' }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('birthdate')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>SEX: <span class="text-red-600 font-bold">*</span></label>
                                <div class="w-full">
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="enter address" name="birthdate" readonly
                                        value="{{ $vitalSign->gender }}">
                                </div>
                            </div>
                            <div class="col-span-2 px-3">
                                <label>PHYSICIAN: <span class="text-red-600 font-bold">*</span></label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter address" name="physician" readonly
                                    value="{{ $vitalSign->physician ?? '' }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('physician')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="h-full px-3">
                                <div>
                                    <label>DOCTOR'S NOTE: <span class="text-red-600 font-bold">*</span></label>
                                    <textarea type="text"
                                        class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="doctor's note" name="notes" readonly required>{{ $vitalSign->notes ?? '' }}</textarea>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('notes')
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
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 1 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[1]" autocomplete="off"
                                        value="{{ $vitalSign->date['dateRecord'][1] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[1]" autocomplete="off"
                                        value="{{ $vitalSign->weight['weightRecord'][1] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[1]" autocomplete="off"
                                        value="{{ $vitalSign->temp['tempRecord'][1] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[1]" autocomplete="off"
                                        value="{{ $vitalSign->bp['bpRecord'][1] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[1]" autocomplete="off"
                                        value="{{ $vitalSign->pulse['pulseRecord'][1] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[1]" autocomplete="off"
                                        value="{{ $vitalSign->respiration['respirationRecord'][1] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[1]" autocomplete="off"
                                        value="{{ $vitalSign->pains['painRecord'][1] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[1]" autocomplete="off"
                                        value="{{ $vitalSign->initials['initialsRecord'][1] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 2 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[2]" autocomplete="off"
                                        value="{{ $vitalSign->date['dateRecord'][2] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[2]" autocomplete="off"
                                        value="{{ $vitalSign->weight['weightRecord'][2] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[2]" autocomplete="off"
                                        value="{{ $vitalSign->temp['tempRecord'][2] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[2]" autocomplete="off"
                                        value="{{ $vitalSign->bp['bpRecord'][2] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[2]" autocomplete="off"
                                        value="{{ $vitalSign->pulse['pulseRecord'][2] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[2]" autocomplete="off"
                                        value="{{ $vitalSign->respiration['respirationRecord'][2] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[2]" autocomplete="off"
                                        value="{{ $vitalSign->pains['painRecord'][2] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[2]" autocomplete="off"
                                        value="{{ $vitalSign->initials['initialsRecord'][2] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 3 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[3]" autocomplete="off"
                                        value="{{ $vitalSign->date['dateRecord'][3] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[3]" autocomplete="off"
                                        value="{{ $vitalSign->weight['weightRecord'][3] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[3]" autocomplete="off"
                                        value="{{ $vitalSign->temp['tempRecord'][3] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[3]" autocomplete="off"
                                        value="{{ $vitalSign->bp['bpRecord'][3] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[3]" autocomplete="off"
                                        value="{{ $vitalSign->pulse['pulseRecord'][3] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[3]" autocomplete="off"
                                        value="{{ $vitalSign->respiration['respirationRecord'][3] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[3]" autocomplete="off"
                                        value="{{ $vitalSign->pains['painRecord'][3] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[3]" autocomplete="off"
                                        value="{{ $vitalSign->initials['initialsRecord'][3] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 4 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[4]" autocomplete="off"
                                        value="{{ $vitalSign->date['dateRecord'][4] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[4]" autocomplete="off"
                                        value="{{ $vitalSign->weight['weightRecord'][4] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[4]" autocomplete="off"
                                        value="{{ $vitalSign->temp['tempRecord'][4] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[4]" autocomplete="off"
                                        value="{{ $vitalSign->bp['bpRecord'][4] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[4]" autocomplete="off"
                                        value="{{ $vitalSign->pulse['pulseRecord'][4] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[4]" autocomplete="off"
                                        value="{{ $vitalSign->respiration['respirationRecord'][4] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[4]" autocomplete="off"
                                        value="{{ $vitalSign->pains['painRecord'][4] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[4]" autocomplete="off"
                                        value="{{ $vitalSign->initials['initialsRecord'][4] ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 5 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[5]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][5] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[5]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][5] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[5]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][5] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[5]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][5] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[5]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][5] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[5]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][5] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[5]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][5] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[5]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][5] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 6 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[6]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][6] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[6]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][6] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[6]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][6] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[6]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][6] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[6]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][6] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[6]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][6] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[6]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][6] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[6]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][6] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 7 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[7]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][7] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[7]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][7] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[7]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][7] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[7]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][7] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[7]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][7] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[7]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][7] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[7]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][7] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[7]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][7] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 8 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[8]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][8] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[8]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][8] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[8]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][8] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[8]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][8] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[8]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][8] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[8]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][8] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[8]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][8] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[8]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][8] ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 9 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[9]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][9] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[9]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][9] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[9]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][9] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[9]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][9] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[9]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][9] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[9]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][9] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[9]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][9] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[9]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][9] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 10 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[10]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][10] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[10]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][10] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[10]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][10] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[10]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][10] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[10]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][10] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[10]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][10] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[10]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][10] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[10]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][10] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 11 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[11]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][11] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[11]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][11] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[11]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][11] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[11]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][11] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[11]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][11] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[11]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][11] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[11]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][11] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[11]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][11] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 12 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[12]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][12] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[12]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][12] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[12]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][12] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[12]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][12] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[12]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][12] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[12]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][12] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[12]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][12] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[12]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][12] ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 13 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[13]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][13] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[13]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][13] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[13]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][13] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[13]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][13] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[13]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][13] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[13]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][13] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[13]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][13] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[13]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][13] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 14 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[14]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][14] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[14]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][14] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[14]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][14] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[14]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][14] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[14]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][14] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[14]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][14] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[14]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][14] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[14]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][14] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 15 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[15]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][15] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[15]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][15] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[15]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][15] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[15]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][15] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[15]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][15] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[15]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][15] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[15]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][15] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[15]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][15] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 16 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[16]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][16] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[16]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][16] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[16]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][16] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[16]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][16] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[16]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][16] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[16]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][16] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[16]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][16] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[16]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][16] ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 17 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[17]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][17] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[17]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][17] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[17]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][17] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[17]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][17] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[17]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][17] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[17]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][17] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[17]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][17] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[17]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][17] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 18 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[18]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][18] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[18]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][18] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[18]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][18] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[18]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][18] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[18]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][18] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[18]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][18] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[18]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][18] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[18]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][18] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 19 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[19]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][19] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[19]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][19] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[19]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][19] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[19]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][19] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[19]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][19] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[19]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][19] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[19]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][19] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[19]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][19] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                                <label>Day 20 Observation</label>
                            </div>
                            <div class=" grid grid-cols-8 h-full w-full px-3 gap-4">
                                <div>
                                    <label>Date:</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="dateRecord[20]" readonly
                                        value="{{ $vitalSign->date['dateRecord'][20] ?? '' }}">
                                </div>
                                <div>
                                    <label>Weight:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="weight" name="weightRecord[20]" readonly
                                        value="{{ $vitalSign->weight['weightRecord'][20] ?? '' }}">
                                </div>
                                <div>
                                    <label>Temperature:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="temperature" name="tempRecord[20]" readonly
                                        value="{{ $vitalSign->temp['tempRecord'][20] ?? '' }}">
                                </div>
                                <div>
                                    <label>Blood Pressure:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="blood pressure" name="bpRecord[20]" readonly
                                        value="{{ $vitalSign->bp['bpRecord'][20] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pulse:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pulse rate" name="pulseRecord[20]" readonly
                                        value="{{ $vitalSign->pulse['pulseRecord'][20] ?? '' }}">
                                </div>
                                <div>
                                    <label>Respiration</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="respiration" name="respirationRecord[20]" readonly
                                        value="{{ $vitalSign->respiration['respirationRecord'][20] ?? '' }}">
                                </div>
                                <div>
                                    <label>Pain</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="pain" name="painRecord[20]" readonly
                                        value="{{ $vitalSign->pains['painRecord'][20] ?? '' }}">
                                </div>
                                <div>
                                    <label>Initials</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="initials" name="initialsRecord[20]" readonly
                                        value="{{ $vitalSign->initials['initialsRecord'][20] ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-navigation py-8 grid grid-cols-8 gap-4">
                    <button
                        class="previous h-full col-start-6 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="button">Previous</button>
                    <button
                        class="next h-full col-start-7 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="button">Next</button>

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
