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
                <form action="{{ route('submit_addFluidIntake') }}" method="POST" enctype="multipart/form-data"
                    class="admission-form">
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
                                        value="{{ old('first_name') }}">
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
                                        value="{{ old('middle_name') }}">
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
                                        value="{{ old('last_name') }}">
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
                                        placeholder="Suffix" name="suffix" autocomplete="off" value="{{ old('suffix') }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                </div>
                                <div class="p-3">
                                    <label class="pb-2">GENDER :</label>
                                    <div class="w-full flex justify-start gap-4">
                                        <div class="inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Male" name="gender"
                                                {{ old('gender') == 'Male' ? 'checked' : '' }}>
                                            <label>Male</label>
                                        </div>
                                        <div class="inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Female" name="gender"
                                                {{ old('gender') == 'Female' ? 'checked' : '' }}>
                                            <label>Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-5 h-full">
                                <div class="border-r-2 border-black p-3">
                                    <label>AGE :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Given Name" name="age" autocomplete="off"
                                        value="{{ old('age') }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                </div>
                                <div class="border-r-2 border-black p-3">
                                    <label>WARD :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Middle Name" name="ward" autocomplete="off"
                                        value="{{ old('ward') }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                </div>
                                <div class="border-r-2 border-black p-3">
                                    <label>BED:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Last Name" name="bed" autocomplete="off"
                                        value="{{ old('bed') }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                </div>
                                <div class="col-span-2 p-3">
                                    <label>DIAGNOSIS :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="diagnosis" name="diagnosis" autocomplete="off"
                                        value="{{ old('suffix') }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="pb-3 grid gap-3">
                                <div class=" grid px-3 text-xl text-[#003D33] font-semibold tracking-wider">
                                    <label>1st Observation</label>
                                </div>
                                <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                                    <div>
                                        <label>Date:</label>
                                        <input type="date"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            name="intake_dateArray[1]" autocomplete="off"
                                            value="{{ old('intake_dateArray[1]') }}">
                                    </div>
                                    <div class="col-span-7">
                                        <label>Intake:</label>
                                        <input type="text"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="intake" name="intakeArray[1]" autocomplete="off"
                                            value="{{ old('intakeArray[1]') }}">
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
                                                        value="{{ old('oralArray[1][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[1][1]" autocomplete="off"
                                                        value="{{ old('parentalArray[1][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[1][1]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[1][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[1][1]" autocomplete="off"
                                                        value="{{ old('urineArray[1][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[1][1]" autocomplete="off"
                                                        value="{{ old('drainageArray[1][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[1][1]" autocomplete="off"
                                                        value="{{ old('othersArray[1][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[1][1]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[1][1]') }}">
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
                                                        value="{{ old('oralArray[1][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[1][2]" autocomplete="off"
                                                        value="{{ old('parentalArray[1][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[1][2]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[1][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[1][2]" autocomplete="off"
                                                        value="{{ old('urineArray[1][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[1][2]" autocomplete="off"
                                                        value="{{ old('drainageArray[1][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[1][2]" autocomplete="off"
                                                        value="{{ old('othersArray[1][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[1][2]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[1][2]') }}">
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
                                                        value="{{ old('oralArray[1][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[1][3]" autocomplete="off"
                                                        value="{{ old('parentalArray[1][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[1][3]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[1][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[1][3]" autocomplete="off"
                                                        value="{{ old('urineArray[1][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[1][3]" autocomplete="off"
                                                        value="{{ old('drainageArray[1][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[1][3]" autocomplete="off"
                                                        value="{{ old('othersArray[1][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[1][3]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[1][3]') }}">
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
                                                        value="{{ old('oralArray[1][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[1][4]" autocomplete="off"
                                                        value="{{ old('parentalArray[1][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[1][4]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[1][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[1][4]" autocomplete="off"
                                                        value="{{ old('urineArray[1][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[1][4]" autocomplete="off"
                                                        value="{{ old('drainageArray[1][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[1][4]" autocomplete="off"
                                                        value="{{ old('othersArray[1][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[1][4]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[1][4]') }}">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="form-section">
                            <div class="pb-3 grid gap-3">
                                <div class=" grid px-3 text-xl text-[#003D33] font-semibold tracking-wider">
                                    <label>2nd Observation</label>
                                </div>
                                <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                                    <div>
                                        <label>Date:</label>
                                        <input type="date"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            name="intake_dateArray[2]" autocomplete="off"
                                            value="{{ old('intake_dateArray[2]') }}">
                                    </div>
                                    <div class="col-span-7">
                                        <label>Intake:</label>
                                        <input type="text"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="intake" name="intakeArray[2]" autocomplete="off"
                                            value="{{ old('intakeArray[2]') }}">
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
                                                        value="{{ old('oralArray[2][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[2][1]" autocomplete="off"
                                                        value="{{ old('parentalArray[2][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[2][1]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[2][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[2][1]" autocomplete="off"
                                                        value="{{ old('urineArray[2][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[2][1]" autocomplete="off"
                                                        value="{{ old('drainageArray[2][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[2][1]" autocomplete="off"
                                                        value="{{ old('othersArray[2][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[2][1]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[2][1]') }}">
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
                                                        value="{{ old('oralArray[2][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[2][2]" autocomplete="off"
                                                        value="{{ old('parentalArray[2][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[2][2]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[2][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[2][2]" autocomplete="off"
                                                        value="{{ old('urineArray[2][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[2][2]" autocomplete="off"
                                                        value="{{ old('drainageArray[2][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[2][2]" autocomplete="off"
                                                        value="{{ old('othersArray[2][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[2][2]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[2][2]') }}">
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
                                                        value="{{ old('oralArray[2][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[2][3]" autocomplete="off"
                                                        value="{{ old('parentalArray[1][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[2][3]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[2][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[2][3]" autocomplete="off"
                                                        value="{{ old('urineArray[2][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[2][3]" autocomplete="off"
                                                        value="{{ old('drainageArray[2][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[2][3]" autocomplete="off"
                                                        value="{{ old('othersArray[2][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[2][3]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[2][3]') }}">
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
                                                        value="{{ old('oralArray[2][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[2][4]" autocomplete="off"
                                                        value="{{ old('parentalArray[2][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[2][4]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[2][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[2][4]" autocomplete="off"
                                                        value="{{ old('urineArray[2][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[2][4]" autocomplete="off"
                                                        value="{{ old('drainageArray[2][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[2][4]" autocomplete="off"
                                                        value="{{ old('othersArray[2][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[2][4]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[2][4]') }}">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="form-section">
                            <div class="pb-3 grid gap-3">
                                <div class=" grid px-3 text-xl text-[#003D33] font-semibold tracking-wider">
                                    <label>3rd Observation</label>
                                </div>
                                <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                                    <div>
                                        <label>Date:</label>
                                        <input type="date"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            name="intake_dateArray[3]" autocomplete="off"
                                            value="{{ old('intake_dateArray[3]') }}">
                                    </div>
                                    <div class="col-span-7">
                                        <label>Intake:</label>
                                        <input type="text"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="intake" name="intakeArray[3]" autocomplete="off"
                                            value="{{ old('intakeArray[3]') }}">
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
                                                        value="{{ old('oralArray[3][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[3][1]" autocomplete="off"
                                                        value="{{ old('parentalArray[3][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[3][1]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[3][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[3][1]" autocomplete="off"
                                                        value="{{ old('urineArray[3][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[3][1]" autocomplete="off"
                                                        value="{{ old('drainageArray[3][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[3][1]" autocomplete="off"
                                                        value="{{ old('othersArray[3][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[3][1]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[3][1]') }}">
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
                                                        value="{{ old('oralArray[3][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[3][2]" autocomplete="off"
                                                        value="{{ old('parentalArray[3][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[3][2]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[3][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[3][2]" autocomplete="off"
                                                        value="{{ old('urineArray[3][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[3][2]" autocomplete="off"
                                                        value="{{ old('drainageArray[3][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[3][2]" autocomplete="off"
                                                        value="{{ old('othersArray[3][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[3][2]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[3][2]') }}">
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
                                                        value="{{ old('oralArray[3][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[3][3]" autocomplete="off"
                                                        value="{{ old('parentalArray[3][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[3][3]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[3][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[3][3]" autocomplete="off"
                                                        value="{{ old('urineArray[3][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[3][3]" autocomplete="off"
                                                        value="{{ old('drainageArray[3][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[3][3]" autocomplete="off"
                                                        value="{{ old('othersArray[3][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[3][3]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[3][3]') }}">
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
                                                        value="{{ old('oralArray[3][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[3][4]" autocomplete="off"
                                                        value="{{ old('parentalArray[3][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[3][4]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[3][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[3][4]" autocomplete="off"
                                                        value="{{ old('urineArray[3][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[3][4]" autocomplete="off"
                                                        value="{{ old('drainageArray[3][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[3][4]" autocomplete="off"
                                                        value="{{ old('othersArray[3][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[3][4]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[3][4]') }}">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="form-section">
                            <div class="pb-3 grid gap-3">
                                <div class=" grid px-3 text-xl text-[#003D33] font-semibold tracking-wider">
                                    <label>4th Observation</label>
                                </div>
                                <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                                    <div>
                                        <label>Date:</label>
                                        <input type="date"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            name="intake_dateArray[4]" autocomplete="off"
                                            value="{{ old('intake_dateArray[4]') }}">
                                    </div>
                                    <div class="col-span-7">
                                        <label>Intake:</label>
                                        <input type="text"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="intake" name="intakeArray[4]" autocomplete="off"
                                            value="{{ old('intakeArray[4]') }}">
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
                                                        value="{{ old('oralArray[4][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[4][1]" autocomplete="off"
                                                        value="{{ old('parentalArray[4][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[4][1]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[4][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[4][1]" autocomplete="off"
                                                        value="{{ old('urineArray[4][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[4][1]" autocomplete="off"
                                                        value="{{ old('drainageArray[4][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[4][1]" autocomplete="off"
                                                        value="{{ old('othersArray[4][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[4][1]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[4][1]') }}">
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
                                                        value="{{ old('oralArray[4][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[4][2]" autocomplete="off"
                                                        value="{{ old('parentalArray[4][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[4][2]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[4][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[4][2]" autocomplete="off"
                                                        value="{{ old('urineArray[4][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[4][2]" autocomplete="off"
                                                        value="{{ old('drainageArray[4][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[4][2]" autocomplete="off"
                                                        value="{{ old('othersArray[4][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[4][2]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[4][2]') }}">
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
                                                        value="{{ old('oralArray[4][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[4][3]" autocomplete="off"
                                                        value="{{ old('parentalArray[4][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[4][3]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[4][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[4][3]" autocomplete="off"
                                                        value="{{ old('urineArray[4][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[4][3]" autocomplete="off"
                                                        value="{{ old('drainageArray[4][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[4][3]" autocomplete="off"
                                                        value="{{ old('othersArray[4][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[4][3]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[4][3]') }}">
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
                                                        value="{{ old('oralArray[4][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[4][4]" autocomplete="off"
                                                        value="{{ old('parentalArray[4][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[4][4]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[4][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[4][4]" autocomplete="off"
                                                        value="{{ old('urineArray[4][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[4][4]" autocomplete="off"
                                                        value="{{ old('drainageArray[4][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[4][4]" autocomplete="off"
                                                        value="{{ old('othersArray[4][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[4][4]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[4][4]') }}">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="pb-3 grid gap-3">
                                <div class=" grid px-3 text-xl text-[#003D33] font-semibold tracking-wider">
                                    <label>5th Observation</label>
                                </div>
                                <div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
                                    <div>
                                        <label>Date:</label>
                                        <input type="date"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            name="intake_dateArray[5]" autocomplete="off"
                                            value="{{ old('intake_dateArray[5]') }}">
                                    </div>
                                    <div class="col-span-7">
                                        <label>Intake:</label>
                                        <input type="text"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="intake" name="intakeArray[5]" autocomplete="off"
                                            value="{{ old('intakeArray[5]') }}">
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
                                                        value="{{ old('oralArray[5][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[5][1]" autocomplete="off"
                                                        value="{{ old('parentalArray[5][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[5][1]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[5][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[5][1]" autocomplete="off"
                                                        value="{{ old('urineArray[5][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[5][1]" autocomplete="off"
                                                        value="{{ old('drainageArray[5][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[5][1]" autocomplete="off"
                                                        value="{{ old('othersArray[5][1]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[5][1]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[5][1]') }}">
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
                                                        value="{{ old('oralArray[5][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[5][2]" autocomplete="off"
                                                        value="{{ old('parentalArray[5][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[5][2]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[5][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[5][2]" autocomplete="off"
                                                        value="{{ old('urineArray[5][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[5][2]" autocomplete="off"
                                                        value="{{ old('drainageArray[5][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[5][2]" autocomplete="off"
                                                        value="{{ old('othersArray[5][2]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[5][2]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[5][2]') }}">
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
                                                        value="{{ old('oralArray[5][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[5][3]" autocomplete="off"
                                                        value="{{ old('parentalArray[5][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[5][3]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[5][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[5][3]" autocomplete="off"
                                                        value="{{ old('urineArray[5][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[5][3]" autocomplete="off"
                                                        value="{{ old('drainageArray[5][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[5][3]" autocomplete="off"
                                                        value="{{ old('othersArray[5][3]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[5][3]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[5][3]') }}">
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
                                                        value="{{ old('oralArray[5][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="parentalArray[5][4]" autocomplete="off"
                                                        value="{{ old('parentalArray[5][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="oralparentaltotalArray[5][4]" autocomplete="off"
                                                        value="{{ old('oralparentaltotalArray[5][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urineArray[5][4]" autocomplete="off"
                                                        value="{{ old('urineArray[5][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="drainageArray[5][4]" autocomplete="off"
                                                        value="{{ old('drainageArray[5][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="othersArray[5][4]" autocomplete="off"
                                                        value="{{ old('othersArray[5][4]') }}">
                                                </td>
                                                <td class="flex justify-center">
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="urinedrainageotherstotalArray[5][4]" autocomplete="off"
                                                        value="{{ old('urinedrainageotherstotalArray[5][4]') }}">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
