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
            <form action="{{ route('fluidIntake.update', $fluidIntake->id) }}" method="POST" enctype="multipart/form-data"
                class="admission-form text-xl tracking-wider">
                @csrf
                @method('PATCH')
                <div
                    class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                    <label>Fluid Intake Information</label>
                </div>
                {{-- admissionform_sec --}}
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Information</label>
                        </div>
                        <div class="grid grid-cols-7 gap-2 pb-3">
                            <div class="col-span-2 px-3">
                                <label>GIVEN NAME :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="first name" name="first_name" autocomplete="off"
                                    value="{{ $fluidIntake->first_name }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('first_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>MIDDLE NAME :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="middle name" name="middle_name" autocomplete="off"
                                    value="{{ $fluidIntake->middle_name }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>LAST NAME :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="last name" name="last_name" autocomplete="off"
                                    value="{{ $fluidIntake->last_name }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('last_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>SUFFIX:</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="suffix" name="suffix" autocomplete="off"
                                    value="{{ $fluidIntake->last_name }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('suffix')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>AGE :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="age" name="age" autocomplete="off"
                                    value="{{ $fluidIntake->patient_info['age'] }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>SEX: <span class="text-red-600 font-bold">*</span></label>
                                <div class="w-full">
                                    <select name="gender"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        required>
                                        <option value="" disabled selected>gender</option>
                                        <option value="Male"
                                            {{ $fluidIntake->patient_info['gender'] == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female"
                                            {{ $fluidIntake->patient_info['gender'] == 'Female' ? 'selected' : '' }}>
                                            Female
                                        </option>
                                    </select>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>Bed and Diagnosis Information</label>
                        </div>
                        <div class="grid grid-cols-7 gap-2 pb-3">
                            <div class="col-span-5 px-3">
                                <label>DIAGNOSIS :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="diagnosis" name="diagnosis" autocomplete="off"
                                    value="{{ $fluidIntake->patient_info['diagnosis'] }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('diagnosis')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>BED:</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="bed" name="bed" autocomplete="off"
                                    value="{{ $fluidIntake->patient_info['bed'] }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('bed')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>WARD :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="ward" name="ward" autocomplete="off"
                                    value="{{ $fluidIntake->patient_info['ward'] }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('ward')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>1st Intake</label>
                        </div>
                        <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                            <div>
                                <label>Date:</label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="intake_dateArray[1]" autocomplete="off"
                                    value="{{ $fluidIntake->date_of_intake['intake_dateArray'][1] }}">
                            </div>
                            <div class="col-span-7">
                                <label>Intake:</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="intake" name="intakeArray[1]" autocomplete="off"
                                    value="{{ $fluidIntake->intake['intakeArray'][1] }}">
                            </div>
                        </div>
                        <div class=" grid h-full w-full px-3 gap-2">
                            <table class="tracking-[2px] w-full">
                                <thead>
                                    <tr class="grid grid-cols-8 gap-3">
                                        <th class="flex justify-center">Time</th>
                                        <th class="flex justify-center">Oral</th>
                                        <th class="flex justify-center">Parental</th>
                                        <th class="flex justify-center">Total</th>
                                        <th class="flex justify-center">Urine</th>
                                        <th class="flex justify-center">Drainage</th>
                                        <th class="flex justify-center">Others</th>
                                        <th class="flex justify-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="grid gap-3">
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            7 AM to 3 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[1][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][1][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[1][1]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][1][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[1][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][1][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[1][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][1][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[1][1]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][1][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[1][1]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][1][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[1][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][1][1] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            3 PM to 11 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[1][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][1][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[1][2]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][1][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[1][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][1][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[1][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][1][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[1][2]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][1][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[1][2]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][1][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[1][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][1][2] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            11 PM to 7 AM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[1][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][1][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[1][3]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][1][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[1][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][1][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[1][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][1][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[1][3]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][1][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[1][3]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][1][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[1][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][1][3] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            Total
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[1][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][1][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[1][4]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][1][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[1][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][1][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[1][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][1][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[1][4]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][1][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[1][4]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][1][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[1][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][1][4] }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>2nd Intake</label>
                        </div>
                        <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                            <div>
                                <label>Date:</label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="intake_dateArray[2]" autocomplete="off"
                                    value="{{ $fluidIntake->date_of_intake['intake_dateArray'][2] ?? '' }}">
                            </div>
                            <div class="col-span-7">
                                <label>Intake:</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="intake" name="intakeArray[2]" autocomplete="off"
                                    value="{{ $fluidIntake->intake['intakeArray'][2] ?? '' }}">
                            </div>
                        </div>
                        <div class=" grid h-full w-full px-3 gap-2">
                            <table class="tracking-[2px] w-full">
                                <thead>
                                    <tr class="grid grid-cols-8 gap-3">
                                        <th class="flex justify-center">Time</th>
                                        <th class="flex justify-center">Oral</th>
                                        <th class="flex justify-center">Parental</th>
                                        <th class="flex justify-center">Total</th>
                                        <th class="flex justify-center">Urine</th>
                                        <th class="flex justify-center">Drainage</th>
                                        <th class="flex justify-center">Others</th>
                                        <th class="flex justify-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="grid gap-3">
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            7 AM to 3 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[2][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][2][1] ?? '' }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[2][1]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][2][1] ?? '' }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[2][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][2][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[2][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][2][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[2][1]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][2][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[2][1]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][2][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[2][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][2][1] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            3 PM to 11 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[2][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][2][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[2][2]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][2][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[2][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][2][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[2][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][2][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[2][2]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][2][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[2][2]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][2][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[2][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][2][2] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            11 PM to 7 AM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[2][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][2][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[2][3]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][2][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[2][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][2][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[2][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][2][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[2][3]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][2][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[2][3]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][2][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[2][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][2][3] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            Total
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[2][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][2][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[2][4]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][2][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[2][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][2][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[2][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][2][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[2][4]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][2][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[2][4]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][2][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[2][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][2][4] }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>3rd Intake</label>
                        </div>
                        <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                            <div>
                                <label>Date:</label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="intake_dateArray[3]" autocomplete="off"
                                    value="{{ $fluidIntake->date_of_intake['intake_dateArray'][3] ?? '' }}">
                            </div>
                            <div class="col-span-7">
                                <label>Intake:</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="intake" name="intakeArray[3]" autocomplete="off"
                                    value="{{ $fluidIntake->intake['intakeArray'][3] ?? '' }}">
                            </div>
                        </div>
                        <div class=" grid h-full w-full px-3 gap-2">
                            <table class="tracking-[2px] w-full">
                                <thead>
                                    <tr class="grid grid-cols-8 gap-3">
                                        <th class="flex justify-center">Time</th>
                                        <th class="flex justify-center">Oral</th>
                                        <th class="flex justify-center">Parental</th>
                                        <th class="flex justify-center">Total</th>
                                        <th class="flex justify-center">Urine</th>
                                        <th class="flex justify-center">Drainage</th>
                                        <th class="flex justify-center">Others</th>
                                        <th class="flex justify-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="grid gap-3">
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            7 AM to 3 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[3][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][3][1] ?? '' }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[3][1]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][3][1] ?? '' }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[3][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][3][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[3][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][3][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[3][1]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][3][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[3][1]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][3][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[3][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][3][1] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            3 PM to 11 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[3][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][3][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[3][2]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][3][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[3][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][3][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[3][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][3][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[3][2]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][3][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[3][2]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][3][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[3][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][3][2] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            11 PM to 7 AM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[3][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][3][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[3][3]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][3][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[3][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][3][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[3][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][3][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[3][3]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][3][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[3][3]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][3][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[3][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][3][3] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            Total
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[3][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][3][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[3][4]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][3][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[3][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][3][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[3][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][3][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[3][4]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][3][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[3][4]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][3][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[3][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][3][4] }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>4th Intake</label>
                        </div>
                        <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                            <div>
                                <label>Date:</label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="intake_dateArray[4]" autocomplete="off"
                                    value="{{ $fluidIntake->date_of_intake['intake_dateArray'][4] ?? '' }}">
                            </div>
                            <div class="col-span-7">
                                <label>Intake:</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="intake" name="intakeArray[4]" autocomplete="off"
                                    value="{{ $fluidIntake->intake['intakeArray'][4] ?? '' }}">
                            </div>
                        </div>
                        <div class=" grid h-full w-full px-3 gap-2">
                            <table class="tracking-[2px] w-full">
                                <thead>
                                    <tr class="grid grid-cols-8 gap-3">
                                        <th class="flex justify-center">Time</th>
                                        <th class="flex justify-center">Oral</th>
                                        <th class="flex justify-center">Parental</th>
                                        <th class="flex justify-center">Total</th>
                                        <th class="flex justify-center">Urine</th>
                                        <th class="flex justify-center">Drainage</th>
                                        <th class="flex justify-center">Others</th>
                                        <th class="flex justify-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="grid gap-3">
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            7 AM to 3 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[4][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][4][1] ?? '' }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[4][1]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][4][1] ?? '' }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[4][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][4][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[4][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][4][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[4][1]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][4][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[4][1]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][4][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[4][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][4][1] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            3 PM to 11 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[4][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][4][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[4][2]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][4][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[4][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][4][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[4][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][4][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[4][2]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][4][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[4][2]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][4][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[4][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][4][2] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            11 PM to 7 AM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[4][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][4][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[4][3]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][4][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[4][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][4][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[4][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][4][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[4][3]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][4][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[4][3]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][4][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[4][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][4][3] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            Total
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[4][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][4][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[4][4]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][4][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[4][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][4][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[4][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][4][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[4][4]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][4][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[4][4]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][4][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[4][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][4][4] }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>5th Intake</label>
                        </div>
                        <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                            <div>
                                <label>Date:</label>
                                <input type="date"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="intake_dateArray[5]" autocomplete="off"
                                    value="{{ $fluidIntake->date_of_intake['intake_dateArray'][5] ?? '' }}">
                            </div>
                            <div class="col-span-7">
                                <label>Intake:</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="intake" name="intakeArray[5]" autocomplete="off"
                                    value="{{ $fluidIntake->intake['intakeArray'][5] ?? '' }}">
                            </div>
                        </div>
                        <div class=" grid h-full w-full px-3 gap-2">
                            <table class="tracking-[2px] w-full">
                                <thead>
                                    <tr class="grid grid-cols-8 gap-3">
                                        <th class="flex justify-center">Time</th>
                                        <th class="flex justify-center">Oral</th>
                                        <th class="flex justify-center">Parental</th>
                                        <th class="flex justify-center">Total</th>
                                        <th class="flex justify-center">Urine</th>
                                        <th class="flex justify-center">Drainage</th>
                                        <th class="flex justify-center">Others</th>
                                        <th class="flex justify-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="grid gap-3">
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            7 AM to 3 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[5][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][5][1] ?? '' }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[5][1]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][5][1] ?? '' }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[5][1]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][5][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[5][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][5][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[5][1]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][5][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[5][1]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][5][1] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[5][1]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][5][1] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            3 PM to 11 PM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[5][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][5][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[5][2]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][5][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[5][2]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][5][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[5][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][5][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[5][2]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][5][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[5][2]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][5][2] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[5][2]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][5][2] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            11 PM to 7 AM
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[5][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][5][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[5][3]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][5][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[5][3]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][5][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[5][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][5][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[5][3]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][5][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[5][3]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][5][3] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[5][3]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][5][3] }}">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-8 gap-3 ">
                                        <td class="flex justify-center items-center">
                                            Total
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralArray[5][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral['oralArray'][5][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="parentalArray[5][4]" autocomplete="off"
                                                value="{{ $fluidIntake->parental['parentalArray'][5][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="oralparentaltotalArray[5][4]" autocomplete="off"
                                                value="{{ $fluidIntake->oral_parental_total['oralparentaltotalArray'][5][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urineArray[5][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine['urineArray'][5][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="drainageArray[5][4]" autocomplete="off"
                                                value="{{ $fluidIntake->drainage['drainageArray'][5][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="othersArray[5][4]" autocomplete="off"
                                                value="{{ $fluidIntake->others['othersArray'][5][4] }}">
                                        </td>
                                        <td class="flex justify-center">
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                name="urinedrainageotherstotalArray[5][4]" autocomplete="off"
                                                value="{{ $fluidIntake->urine_drainage_others_total['urinedrainageotherstotalArray'][5][4] }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                        href="{{ route('fluidIntake.index') }}">
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
