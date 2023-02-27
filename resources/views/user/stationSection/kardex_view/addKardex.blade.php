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
                <form action="{{ route('submit_addKardex') }}" method="POST" enctype="multipart/form-data"
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
                            <div class="grid grid-cols-12 h-full ">
                                <div class="col-span-2 border-r-2 border-black p-3">
                                    <label>ADMISSION DATE :</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        name="date_of_admission" autocomplete="off" value="{{ old('date_of_admission') }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                </div>
                                <div class="col-span-2 border-r-2 border-black p-3">
                                    <label>AGE :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Age" name="age" autocomplete="off" value="{{ old('age') }}">
                                    {{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('patient_fullname')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                </div>
                                <div class="col-span-2 border-r-2 border-black p-3">
                                    <label>WARD :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Ward" name="ward" autocomplete="off" value="{{ old('ward') }}">
                                </div>
                                <div class="col-span-6 p-3">
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
                            <div class="grid grid-cols-5 h-full border-t-2 border-black">
                                <div class="col-span-2 border-r-2 border-black p-3">
                                    <label>ADDRESS :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Address" name="address" autocomplete="off"
                                        value="{{ old('age') }}">
                                </div>
                                <div class="border-r-2 border-black p-3">
                                    <label>SPECIAL NEEDS :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Special Needs" name="spc_needs" autocomplete="off"
                                        value="{{ old('spc_needs') }}">
                                </div>
                                <div class="border-r-2 border-black p-3">
                                    <label>DIET :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Diet" name="diet" autocomplete="off" value="{{ old('diet') }}">
                                </div>
                                <div class="p-3">
                                    <label>PHYSICIAN :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="Physician" name="attend_physician" autocomplete="off"
                                        value="{{ old('attend_physician') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="grid grid-cols-3 ">
                                <div class=" grid h-full w-full p-3 border-r-2 border-black">
                                    <table class="tracking-[2px] w-full">
                                        <thead>
                                            <tr class="grid pb-3">
                                                <th class="flex justify-start">IV Fluid Record</th>
                                            </tr>
                                        </thead>
                                        <tbody class="grid grid-cols-2 gap-3">
                                            <tr class="grid gap-3 ">
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>1. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[1]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[1]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>2. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[2]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[2]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>3. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[3]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[3]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>4. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[4]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[4]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>5. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[5]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[5]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>6. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[6]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[6]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>7. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[7]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[7]') }}">
                                                </td>
                                            </tr>
                                            <tr class="grid gap-3 ">
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>8. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[8]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[8]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>9. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[9]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[9]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>10. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[10]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[10]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>11. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[11]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[11]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>12. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[12]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[12]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>13. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[13]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[13]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>14. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="iv_fluidArray[14]" autocomplete="off"
                                                        value="{{ old('iv_fluidArray[14]') }}">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-span-2 grid h-full w-full p-3 border-r-2 border-black">
                                    <table class="tracking-[2px] w-full">
                                        <thead>
                                            <tr class="grid pb-3">
                                                <th class="flex justify-start">Medicine </th>
                                        </thead>
                                        <tbody class="grid grid-cols-3 gap-3">
                                            <tr class="grid gap-3 ">
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>1. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[1]" autocomplete="off"
                                                        value="{{ old('medicineArray[1]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>2. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[2]" autocomplete="off"
                                                        value="{{ old('medicineArray[2]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>3. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[3]" autocomplete="off"
                                                        value="{{ old('medicineArray[3]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>4. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[4]" autocomplete="off"
                                                        value="{{ old('medicineArray[4]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>5. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[5]" autocomplete="off"
                                                        value="{{ old('medicineArray[5]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>6. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[6]" autocomplete="off"
                                                        value="{{ old('medicineArray[6]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>7. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[7]" autocomplete="off"
                                                        value="{{ old('medicineArray[7]') }}">
                                                </td>
                                            </tr>
                                            <tr class="grid gap-3 ">
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>8. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[8]" autocomplete="off"
                                                        value="{{ old('medicineArray[8]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>9. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[9]" autocomplete="off"
                                                        value="{{ old('medicineArray[9]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>10. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[10]" autocomplete="off"
                                                        value="{{ old('medicineArray[10]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>11. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[11]" autocomplete="off"
                                                        value="{{ old('medicineArray[11]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>12. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[12]" autocomplete="off"
                                                        value="{{ old('medicineArray[12]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>13. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[13]" autocomplete="off"
                                                        value="{{ old('medicineArray[13]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>14. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[14]" autocomplete="off"
                                                        value="{{ old('medicineArray[14]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>15. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[15]" autocomplete="off"
                                                        value="{{ old('medicineArray[15]') }}">
                                                </td>
                                            </tr>
                                            <tr class="grid h-25 gap-3">
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>16. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[16]" autocomplete="off"
                                                        value="{{ old('medicineArray[16]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>17. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[17]" autocomplete="off"
                                                        value="{{ old('medicineArray[17]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>18. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[18]" autocomplete="off"
                                                        value="{{ old('medicineArray[18]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>19. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="medicineArray[19]" autocomplete="off"
                                                        value="{{ old('medicineArray[19]') }}">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="grid grid-cols-3 ">
                                <div class="col-span-2 grid h-full w-full p-3">
                                    <table class="tracking-[2px] w-full">
                                        <thead>
                                            <tr class="grid pb-3">
                                                <th class="flex justify-start">Laboratory Results</th>
                                        </thead>
                                        <tbody class="grid grid-cols-3 gap-3">
                                            <tr class="grid gap-3 ">
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>1. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[1]" autocomplete="off"
                                                        value="{{ old('labArray[1]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>2. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[2]" autocomplete="off"
                                                        value="{{ old('labArray[2]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>3. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[3]" autocomplete="off"
                                                        value="{{ old('labArray[3]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>4. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[4]" autocomplete="off"
                                                        value="{{ old('labArray[4]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>5. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[5]" autocomplete="off"
                                                        value="{{ old('labArray[5]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>6. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[6]" autocomplete="off"
                                                        value="{{ old('labArray[6]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>7. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[7]" autocomplete="off"
                                                        value="{{ old('labArray[7]') }}">
                                                </td>
                                            </tr>
                                            <tr class="grid gap-3 ">
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>8. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[8]" autocomplete="off"
                                                        value="{{ old('labArray[8]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>9. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[9]" autocomplete="off"
                                                        value="{{ old('labArray[9]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>10. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[10]" autocomplete="off"
                                                        value="{{ old('labArray[10]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>11. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[11]" autocomplete="off"
                                                        value="{{ old('labArray[11]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>12. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[12]" autocomplete="off"
                                                        value="{{ old('labArray[12]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>13. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[13]" autocomplete="off"
                                                        value="{{ old('labArray[13]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>14. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[14]" autocomplete="off"
                                                        value="{{ old('labArray[14]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>15. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[15]" autocomplete="off"
                                                        value="{{ old('labArray[15]') }}">
                                                </td>
                                            </tr>
                                            <tr class="grid h-25 gap-3">
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>16. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[16]" autocomplete="off"
                                                        value="{{ old('labArray[16]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>17. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[17]" autocomplete="off"
                                                        value="{{ old('labArray[17]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>18. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[18]" autocomplete="off"
                                                        value="{{ old('labArray[18]') }}">
                                                </td>
                                                <td class="flex justify-center items-center gap-2">
                                                    <label>19. </label>
                                                    <input type="text"
                                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                        name="labArray[19]" autocomplete="off"
                                                        value="{{ old('labArray[19]') }}">
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
