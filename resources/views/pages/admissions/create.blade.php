@extends('layouts.main')

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
            font-size: 1rem;
        }
    </style>
    <div class="addPatient fixed top-[59px] left-[275px] h-fit w-[85%] p-12">
        <h2 class="text-center text-4xl font-semibold">Admit New Patient</h2>
        @include('layouts.stepper')
        <div class="grid h-full w-full">
            <form action="{{ route('admissions.store') }}" method="POST" enctype="multipart/form-data" class="admission-form ">
                @csrf
                <div
                    class="w-full text-lg tracking-widest font-[sans-serif] bg-[#ECECEC] rounded-3xl shadow-xl shadow-gray-400">
                    {{-- admissionform_sec --}}
                    {{-- name --}}
                    <div class="form-section ">
                        <div
                            class="grid justify-center text-3xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                            <label>Clinical Cover Sheet</label>
                        </div>

                        <div class=" grid px-3 pt-4 text-xl text-[#003D33] font-semibold tracking-wider">
                            <label>Patient Full Name</label>
                        </div>
                        {{-- patients name --}}
                        <div class="grid gap-2">
                            <div class="grid grid-cols-5 h-full">
                                <div class="px-3">
                                    <label>Last Name* :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="last name" name="last_name" autocomplete="off"
                                        value="{{ old('last_name') }}">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-span-2 px-3">
                                    <label>Given Name* :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="given name" name="first_name" autocomplete="off"
                                        value="{{ old('first_name') }}">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('first_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>Middle Name :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" name="middle_name" autocomplete="off"
                                        value="{{ old('middle_name') }}">

                                </div>
                                <div class="px-3">
                                    <label>Suffix :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" name="suffix" autocomplete="off"
                                        value="{{ old('suffix') }}">
                                </div>
                            </div>
                        </div>

                        <div class=" grid px-3 pt-4 text-xl text-[#003D33] font-semibold tracking-wider">
                            <label>Personal Information</label>
                        </div>
                        <div class="grid gap-2 pb-4">
                            {{-- personal info --}}
                            <div class="grid grid-cols-4 h-full w-full">
                                <div class="px-3">
                                    <label>SR CITIZEN NO :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" name="sr_no" autocomplete="off"
                                        value="{{ old('sr_no') }}">

                                </div>
                                <div class="px-3">
                                    <label>WARD/ROOM/BED/SERVICE* :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="enter ward/room/bed/service type" name="ward_room_bed_service"
                                        autocomplete="off" value="{{ old('ward_room_bed_service') }}">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('ward_room_bed_service')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>CONTACT NUMBER* :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="enter cellular phone #" name="phone" maxlength="11"
                                        autocomplete="off" value="{{ old('phone') }}">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>Type:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="enter old record #" name="type" value="Admission" readonly>
                                </div>
                            </div>

                            {{-- personal info 2 --}}
                            <div class="grid grid-cols-3 h-full w-full">
                                <div class="px-3">
                                    <label>BIRTHDATE* :</label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                        placeholder="birthday" name="birthday" id="birthday" autocomplete="off"
                                        value="{{ old('birthday') }}">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('birthday')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>AGE* :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="age" name="age" id="age" autocomplete="off"
                                        value="{{ old('age') }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>BIRTHPLACE* :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="birthplace" name="birthplace" autocomplete="off"
                                        value="{{ old('birthplace') }}">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('birthplace')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            {{-- personal info 3 --}}
                            <div class="grid grid-cols-6 h-full w-full">
                                <div class="col-span-2 px-3">
                                    <label class="pb-2">CIVIL STATUS* :</label>
                                    <div class="w-full flex justify-around">
                                        <div class="inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Single" name="civil_status"
                                                {{ old('civil_status') == 'Single' ? 'checked' : '' }}>
                                            <label>S</label>
                                        </div>
                                        <div class="inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Divorced" name="civil_status"
                                                {{ old('civil_status') == 'Divorced' ? 'checked' : '' }}>
                                            <label>D</label>
                                        </div>
                                        <div class="col-span-2 inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Separated" name="civil_status"
                                                {{ old('civil_status') == 'Separated' ? 'checked' : '' }}>
                                            <label>SEP</label>
                                        </div>
                                        <div class="col-span-2 inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Common Law" name="civil_status"
                                                {{ old('civil_status') == 'Common Law' ? 'checked' : '' }}>
                                            <label>C</label>
                                        </div>
                                        <div class="col-span-2 inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Widowed" name="civil_status"
                                                {{ old('civil_status') == 'Widowed' ? 'checked' : '' }}>
                                            <label>W</label>
                                        </div>
                                        <div class="col-span-2 inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Married" name="civil_status"
                                                {{ old('civil_status') == 'Married' ? 'checked' : '' }}>
                                            <label>M</label>
                                        </div>
                                        <div class="col-span-2 inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Neutral" name="civil_status"
                                                {{ old('civil_status') == 'Neutral' ? 'checked' : '' }}>
                                            <label>N</label>
                                        </div>
                                    </div>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                        @error('civil_status')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3 ">
                                    <label>RELIGION* :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="religion" name="religion" autocomplete="off"
                                        value="{{ old('religion') }}" req>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('religion')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>OCCUPATION :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" name="occupation" autocomplete="off"
                                        value="{{ old('occupation') }}">
                                </div>
                                <div class="px-3">
                                    <label>NATIONALITY :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="nationality" name="nationality" id="nationality" autocomplete="off"
                                        value="{{ old('nationality') }}">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                        @error('nationality')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label class="pb-2">SEX* :</label>
                                    <div class="w-full flex justify-start gap-4">
                                        <div class="inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Male" name="gender"
                                                {{ old('gender') == 'Male' ? 'checked' : '' }}>
                                            <label>M</label>
                                        </div>
                                        <div class="inline">
                                            <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                                value="Female" name="gender"
                                                {{ old('gender') == 'Female' ? 'checked' : '' }}>
                                            <label>F</label>
                                        </div>
                                    </div>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        <div
                            class="grid justify-center text-3xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                            <label>Clinical Cover Sheet</label>
                        </div>
                        <div class=" grid p-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>Full Address</label>
                        </div>
                        {{-- full_address --}}
                        <div class="grid grid-cols-4 h-full w-full ">
                            <div class="col-span-2  px-3 py-2">
                                <label>STREET* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="street" name="street" id="street" autocomplete="off"
                                    value="{{ old('street') }}">
                            </div>
                            <div class=" px-3 py-2">
                                <label>BARANGAY* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="barangay" name="barangay" autocomplete="off"
                                    value="{{ old('barangay') }}">
                            </div>
                            <div class="  p-3">
                                <label>MUNICIPALITY* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="municipality" name="municipality" id="municipality" autocomplete="off"
                                    value="{{ old('municipality') }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-4  h-full">

                            <div class="p-3">
                                <label>PROVINCE :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="province" name="province" autocomplete="off"
                                    value="{{ old('province') }}">
                            </div>
                            <div class=" p-3">
                                <label>REGION* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="region" name="region" autocomplete="off" value="{{ old('region') }}">
                            </div>
                            <div class="p-3">
                                <label>ZIP CODE :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="zip code" name="zip_code" autocomplete="off"
                                    value="{{ old('zip_code') }}">
                            </div>
                            <div class=" p-3">
                                <label>COUNTRY :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="country" name="country" autocomplete="off"
                                    value="{{ old('country') }}">
                            </div>
                        </div>
                        {{-- empty border --}}
                        <div class=" h-8">
                            <label>CONTACT PERSON</label>
                        </div>
                        <div class="grid grid-cols-7  h-full">
                            <div class="  p-3">
                                <label>LAST NAME :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="contact last name" name="contact_last" id="contact_last"
                                    autocomplete="off" value="{{ old('contact_last') }}">
                            </div>
                            <div class="  p-3">
                                <label>FIRST NAME :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="contact first name" name="contact_first" id="contact_first"
                                    autocomplete="off" value="{{ old('contact_first') }}">
                            </div>
                            <div class="p-3">
                                <label>MIDDLE NAME :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="contact middle name" name="contact_middle" id="contact_middle"
                                    autocomplete="off" value="{{ old('contact_middle') }}">
                            </div>
                            <div class="p-3">
                                <label>SUFFIX :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="contact suffix" name="contact_suffix" id="contact_suffix"
                                    autocomplete="off" value="{{ old('contact_suffix') }}">
                            </div>
                            <div class="p-3">
                                <label>ADDRESS :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="contact address" name="contact_address" id="contact_address"
                                    autocomplete="off" value="{{ old('contact_address') }}">
                            </div>
                            <div class="p-3">
                                <label>PHONE :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="contact address" name="contact_phone" id="contact_phone"
                                    autocomplete="off" value="{{ old('contact_phone') }}">
                            </div>
                            <div class="p-3">
                                <label>RELATION TO PATIENT :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="relation to patient" name="contact_rtp" id="contact_rtp"
                                    autocomplete="off" value="{{ old('contact_rtp') }}">
                            </div>
                        </div>

                        <div class="grid h-full">
                            <div class="p-3">
                                <p>PERMANENT ADDRESS* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter permanent address" name="perma_address" autocomplete="off"
                                    value="{{ old('perma_address') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('perma_address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- birthdate border --}}
                        <div class="grid grid-cols-11 h-full">

                        </div>
                    </div>

                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        <div
                            class="grid justify-center text-3xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                            <label>Clinical Cover Sheet</label>
                        </div>
                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>
                        {{-- employee --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-full">
                            <div class="col-span-3 border-r-2 border-black p-3">
                                <p>EMPLOYER(Type of Business)</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_name" autocomplete="off"
                                    value="{{ old('employer_name') }}">
                            </div>
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_address" autocomplete="off"
                                    value="{{ old('employer_address') }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center p-3">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_phone" autocomplete="off"
                                    value="{{ old('employer_phone') }}">
                            </div>
                        </div>

                        {{-- father --}}
                        <div class="grid grid-cols-9 border-b-2 border-black full">
                            <div class="col-span-3 border-r-2 border-black p-3">
                                <p>FATHER'S NAME</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_name" autocomplete="off"
                                    value="{{ old('father_name') }}">
                            </div>
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_address" autocomplete="off"
                                    value="{{ old('father_address') }}">
                            </div>
                            <div
                                class="col-span-3
                                    border-black flex flex-col items-center p-3">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_phone" autocomplete="off"
                                    value="{{ old('father_phone') }}">
                            </div>
                        </div>

                        {{-- mother --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-full">
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-start p-3">
                                <p>MOTHER'S(MAIDEN) NAME</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_maiden_name" autocomplete="off"
                                    value="{{ old('mother_maiden_name') }}">
                            </div>
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_address" autocomplete="off"
                                    value="{{ old('mother_address') }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center p-3">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_phone" autocomplete="off"
                                    value="{{ old('mother_phone') }}">
                            </div>
                        </div>

                        {{-- spouse --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-full">
                            <div class="col-span-3 border-r-2 border-black p-3">
                                <p>SPOUSE NAME</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_name" autocomplete="off"
                                    value="{{ old('spouse_name') }}">
                            </div>
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_address" autocomplete="off"
                                    value="{{ old('spouse_address') }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center p-3">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_phone" autocomplete="off"
                                    value="{{ old('spouse_phone') }}">
                            </div>
                        </div>
                        {{-- empty border --}}
                        <div class=" border-black h-8"></div>
                    </div>

                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        <div
                            class="grid justify-center text-3xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                            <label>Clinical Cover Sheet</label>
                        </div>
                        {{-- Admission --}}
                        <div class="grid grid-cols-12 border-b-2 border-black h-full">
                            <div class="col-span-3 border-r-2 border-black grid gap-2 p-3">
                                <p>ADMISSION*</p>
                                <div class=" grid grid-rows-2 gap-2">
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-5 items-center gap-2">
                                            <p class="col-start-2">Date*: </p>
                                            <div class="col-span-3">
                                                <input type="date"
                                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                                    name="start_date" id="start_date" value="{{ old('start_date') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-5">
                                            <span
                                                class="col-start-3 col-span-3 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('start_date')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-5 items-center gap-2">
                                            <p class="col-start-2">Time*: </p>
                                            <div class="col-span-3">
                                                <input type="time"
                                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                                    name="start_time" id="start_time" value="{{ old('start_time') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-5">
                                            <span
                                                class="col-start-3 col-span-3 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('start_time')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 border-r-2 border-black grid gap-2 p-3">
                                <p>DISCHARGE*</p>
                                <div class=" grid grid-rows-2 gap-2">
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-5 items-center gap-2">
                                            <p class="col-start-2">Date*: </p>
                                            <div class="col-span-3">
                                                <input type="date"
                                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                                    name="end_date" id="end_date" value="{{ old('end_date') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-5">
                                            <span
                                                class="col-start-3 col-span-3 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('end_date')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-5 items-center gap-2">
                                            <p class="col-start-2">Time*: </p>
                                            <div class="col-span-3">
                                                <input type="time"
                                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                                    name="end_time" id="end_time" value="{{ old('end_time') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-5">
                                            <span
                                                class="col-start-3 col-span-3 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('end_time')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-span-3 border-r-2 border-black p-3">
                                <p>TOTAL NO. OF DAYS:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="# of days" name="total_days" id="total_days"
                                    value="{{ old('total_days') }}" readonly>
                            </div>
                            <div class="col-span-3 border-black p-3">
                                <p>ADMITTING PHYSICIAN:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of physician" name="admitting_physician" id="admitting_physician"
                                    value="{{ old('admitting_physician') }}" autocomplete="off">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('admitting_physician')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- Admitting clerk --}}
                        <div class="grid grid-cols-2 border-b-2 border-black h-full">
                            <div class="border-r-2 border-black p-3">
                                <p>ADMITTING CLERK :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="admitting_clerk" id="admitting_clerk"
                                    value="{{ old('admitting_clerk') }}" autocomplete="off">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('admitting_clerk')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="border-black p-3">
                                <p>ATTENDING PHYSICIAN SIGNATURE:</p>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- type of admission --}}
                        <div class="grid grid-cols-4 border-b-2 border-black h-full">
                            <div class="border-r-2 border-black p-3">
                                <p>TYPE OF ADMISSION :</p>
                                <div class="w-full flex justify-start gap-10">
                                    <div class="inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="New" name="admission_type"
                                            {{ old('admission_type') == 'New' ? 'checked' : '' }}>
                                        <label>New</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Old" name="admission_type"
                                            {{ old('admission_type') == 'Old' ? 'checked' : '' }}>
                                        <label>Old</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Former OPD" name="admission_type"
                                            {{ old('admission_type') == 'Former OPD' ? 'checked' : '' }}>
                                        <label>Former OPD</label>
                                    </div>
                                </div>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('admission_type')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 border-black p-3">
                                <p>REFERRED BY:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="referred by" name="referred_by" id="referred_by"
                                    value="{{ old('referred_by') }}" autocomplete="off">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('referred_by')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        {{-- ssc --}}
                        <div class="grid border-b-2 border-black h-full">
                            <div class="border-black grid grid-cols-11 p-3 gap-2 content-center justify-center">
                                <p class="col-span-3">SOCIAL SERVICE CLASSIFICATION :</p>
                                <div class=" col-span-5 grid grid-cols-6">
                                    <div class="flex justify-center gap-2">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="a" name="ssc" {{ old('ssc') == 'a' ? 'checked' : '' }}>
                                        <label>A</label>
                                    </div>
                                    <div class="flex justify-center gap-2">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="b" name="ssc" {{ old('ssc') == 'b' ? 'checked' : '' }}>
                                        <label>B</label>
                                    </div>
                                    <div class="flex justify-center gap-2">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_one" name="ssc" {{ old('ssc') == 'c_one' ? 'checked' : '' }}>
                                        <label>C1</label>
                                    </div>
                                    <div class="flex justify-center gap-2">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_two" name="ssc" {{ old('ssc') == 'c_two' ? 'checked' : '' }}>
                                        <label>C2</label>
                                    </div>
                                    <div class="flex justify-center gap-2">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_three" name="ssc"
                                            {{ old('ssc') == 'c_three' ? 'checked' : '' }}>
                                        <label>C3</label>
                                    </div>
                                    <div class="flex justify-center gap-2">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="d" name="ssc" {{ old('ssc') == 'd' ? 'checked' : '' }}>
                                        <label>D</label>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('ssc')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- alert allergic to --}}
                        <div class="grid grid-cols-12 border-b-2 border-black h-full">
                            <div class="col-span-2 border-r-2 border-black p-3 gap-2">
                                <p>ALERT</p>
                                <p>ALLERGIC TO:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="allergic to" name="alert_allergic" id="alert_allergic"
                                    autocomplete="off" value="{{ old('alert_allergic') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('alert_allergic')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-4 border-r-2 border-black p-3 gap-2">
                                <p>HOSPITALIZATION PLAN</p>
                                <p>COMPANY/INDUSTRIAL NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="hospitalization_plan"
                                    id="hospitalization_plan" autocomplete="off"
                                    value="{{ old('hospitalization_plan') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('hospitalization_plan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 border-r-2 border-black p-3 gap-2">
                                <p>HEALTH</p>
                                <p>INSURANCE NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="health_insurance" id="health_insurance" placeholder="N/A if not available"
                                    autocomplete="off" value="{{ old('health_insurance') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('health_insurance')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 border-black p-3 gap-2">
                                <p>TYPE OF INSURANCE</p>
                                <p>COVERAGE</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="coverage_insurance" id="coverage_insurance" placeholder="N/A if not available"
                                    autocomplete="off" value="{{ old('coverage_insurance') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('coverage_insurance')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- data furnished by --}}
                        {{-- <div class="grid grid-cols-12 border-b-2 border-black h-full">
                            <div class="col-span-6 border-r-2 border-black p-3 gap-2">
                                <p>DATA FURNISHED BY(signature over printed name)</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of attendant" name="furnished_by" id="furnished_by"
                                    autocomplete="off" value="{{ old('furnished_by') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('furnished_by')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 border-r-2 border-black p-3 gap-2">
                                <p>ADDRESS OF INFORMANT</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="informant_address" id="informant_address"
                                    autocomplete="off" value="{{ old('informant_address') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('informant_address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 border-black p-3 gap-2">
                                <p>RELATION TO PATIENT</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="relation_to_patient"
                                    id="relation_to_patient" autocomplete="off"
                                    value="{{ old('relation_to_patient') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('relation_to_patient')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div> --}}

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- admission diagnosis --}}
                        <div class="grid grid-cols-10 border-b-2 border-black h-full">
                            <div class="grid col-span-full p-3 gap-2">
                                <div class="grid grid-cols-10 items-center">
                                    <p class="col-span-2">ADMISSION DIAGNOSIS :</p>
                                    <div class="col-span-8 ">
                                        <input type="text"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available" name="admission_diagnosis"
                                            id="admission_diagnosis" autocomplete="off"
                                            value="{{ old('admission_diagnosis') }}">
                                    </div>
                                </div>
                                <div class="grid grid-cols-10">
                                    <span
                                        class="col-start-3 col-span-2 text-base font-[sans-serif] font-medium text-red-600">
                                        @error('admission_diagnosis')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>
                    </div>

                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        {{-- principal diagnosis --}}
                        <div class="grid grid-cols-12 border-t-0 border-b-2 border-black h-full">
                            <div class="col-span-9 border-r-2 border-black p-3 gap-2">
                                <div class="grid gap-2">
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-4 items-center">
                                            <p>PRINCIPAL DIAGNOSIS :</p>
                                            <div class="col-span-3">
                                                <input type="text"
                                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    placeholder="N/A if not available" name="principal_diagnosis"
                                                    id="principal_diagnosis" autocomplete="off"
                                                    value="{{ old('principal_diagnosis') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4">
                                            <span class="col-start-2 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('principal_diagnosis')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-4 items-center">
                                            <p>OTHER DIAGNOSIS :</p>
                                            <div class="col-span-3">
                                                <input type="text"
                                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    placeholder="N/A if not available" name="other_diagnosis"
                                                    id="other_diagnosis" autocomplete="off"
                                                    value="{{ old('other_diagnosis') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4">
                                            <span class="col-start-2 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('other_diagnosis')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 border-black p-3">
                                <p>IDC CODE NO.</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="idc_code" id="idc_code" autocomplete="off"
                                    value="{{ old('idc_code') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('idc_code')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- principal operation --}}
                        <div class="grid grid-cols-12 border-b-0 border-black h-full">
                            <div class="col-span-9 border-black p-3 gap-2">
                                <div class="grid gap-2">
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-5 items-center">
                                            <p class="col-span-2">PRINCIPAL OPERATION PROCEDURE :</p>
                                            <div class="col-span-3">
                                                <input type="text"
                                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    placeholder="N/A if not available" name="principal_operation"
                                                    id="principal_operation" autocomplete="off"
                                                    value="{{ old('principal_operation') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-5">
                                            <span class="col-start-3 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('principal_operation')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-5 items-center">
                                            <p class="col-span-2">OTHER OPERATION PROCEDURE :</p>
                                            <div class="col-span-3">
                                                <input type="text"
                                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    placeholder="N/A if not available" name="other_operation"
                                                    id="other_operation" autocomplete="off"
                                                    value="{{ old('other_operation') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-5">
                                            <span class="col-start-3 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('other_operation')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 border-black p-3">
                                <p>ICPM CODE</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="icpm_code" id="icpm_code"
                                    autocomplete="off" value="{{ old('icpm_code') }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('icpm_code')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="h-full flex justify-end">
                            <div
                                class="flex flex-row p-2 gap-4 items-center border-l-2 border-t-2 border-black w-50 px-[10px]">
                                <p>000000000000000000000001</p>
                                <p>12/8/2022</p>
                                <p>8:30AM</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-navigation py-8 grid grid-cols-8 gap-4">
                    <button
                        class="previous h-full col-start-5 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="button">
                        Previous
                    </button>
                    <button
                        class="next h-full col-start-6 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="button">
                        Next
                    </button>
                    <button
                        class="h-full col-start-7 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="submit">
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/birthdate.js')
    @vite('resources/js/patientPage/admission_days.js')
    @vite('resources/js/patientPage/multi-step-form.js')
@endpush