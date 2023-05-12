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
            color: rgb(220, 38, 38);
            font-size: 1rem;
        }
    </style>
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 flex flex-col">
        <div>
            @include('layouts.stepper')
        </div>
        <div class=" h-full w-full">
            <form action="{{ route('admission.update', $admission->id) }}" method="POST" enctype="multipart/form-data"
                class="admission-form text-xl tracking-wider">
                @csrf
                @method('PATCH')
                <div
                    class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                    <label>Admission Cover Sheet</label>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Full Name</label>
                        </div>
                        <div class="grid gap-2">
                            <div class="grid grid-cols-5 h-full">
                                <div class="px-3 pb-3">
                                    <label>LAST NAME: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="last name" name="last_name" autocomplete="off"
                                        value="{{ $admission->last_name }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-span-2 px-3">
                                    <label>GIVEN NAME: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="given name" name="first_name" autocomplete="off"
                                        value="{{ $admission->first_name }}" required>
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
                                        placeholder="leave empty if N/A" name="middle_name" autocomplete="off"
                                        value="{{ $admission->middle_name }}">

                                </div>
                                <div class="px-3">
                                    <label>SUFFIX :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="suffix" autocomplete="off"
                                        value="{{ $admission->suffix }}">
                                </div>
                            </div>
                        </div>
                        <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                            <label>Personal Information</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            {{-- personal info --}}
                            <div class="grid grid-cols-6 h-full w-full">
                                <div class="px-3">
                                    <label>SR CITIZEN NO :</label>
                                    <input type="number" maxlength="5"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="senior citizen #" name="sr_no" autocomplete="off"
                                        value="{{ $admission->personal_info['sr_no'] }}">

                                </div>
                                <div class="px-3">
                                    <label>WARD/ROOM: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="number" maxlength="5"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="ward/room #" name="ward_room_bed_service" autocomplete="off"
                                        value="{{ $admission->ward_room_bed_service }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('ward_room_bed_service')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>CONTACT NUMBER: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="number" maxlength="11"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="contact #" name="phone" maxlength="11" autocomplete="off"
                                        value="{{ $admission->personal_info['phone'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('phone')
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
                                                {{ $admission->personal_info['gender'] == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="Female"
                                                {{ $admission->personal_info['gender'] == 'Female' ? 'selected' : '' }}>
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

                                <div class="px-3">
                                    <label>CIVIL STATUS: <span class="text-red-600 font-bold">*</span></label>
                                    <div class="w-full">
                                        <select name="civil_status"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            required>
                                            <option value="" disabled selected>civil status</option>
                                            @php
                                                $_civil_status = [
                                                    'Single' => 'Single',
                                                    'Divorced' => 'Divorced',
                                                    'Separated' => 'Separated',
                                                    'Common Law' => 'Common Law',
                                                    'Widowed' => 'Widowed',
                                                    'Married' => 'Married',
                                                    'Neutral' => 'Neutral',
                                                ];
                                            @endphp
                                            @foreach ($_civil_status as $k => $v)
                                                <option value="{{ $v }}"
                                                    {{ $admission->personal_info['civil_status'] == $v ? 'selected' : '' }}>
                                                    {{ $k }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('civil_status')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <label>Type:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="enter old record #" name="type" value="Admission" readonly>
                                </div>
                            </div>

                            {{-- personal info 2 --}}
                            <div class="grid grid-cols-6 h-full w-full">
                                <div class="px-3">
                                    <label>BIRTHDATE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                        placeholder="birthday" name="birthday" id="birthday" autocomplete="off"
                                        value="{{ $admission->personal_info['birthday'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('birthday')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>AGE:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="age" name="age" id="age" autocomplete="off"
                                        value="{{ $admission->personal_info['age'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>BIRTHPLACE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="birthplace" name="birthplace" autocomplete="off"
                                        value="{{ $admission->personal_info['birthplace'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('birthplace')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3 ">
                                    <label>RELIGION: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="religion" name="religion" autocomplete="off"
                                        value="{{ $admission->personal_info['religion'] }}" required>
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
                                        placeholder="leave empty if N/A" name="occupation" autocomplete="off"
                                        value="{{ $admission->personal_info['occupation'] }}">
                                </div>
                                <div class="px-3">
                                    <label>NATIONALITY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="nationality" name="nationality" id="nationality" autocomplete="off"
                                        value="{{ $admission->personal_info['nationality'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('nationality')
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
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Full Address</label>
                        </div>
                        <div class="grid gap-2">
                            <div class="grid grid-cols-4 h-full">
                                <div class="col-span-2 px-3">
                                    <label>STREET: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="street" name="street" id="street" autocomplete="off"
                                        value="{{ $admission->full_address['street'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('street')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>BARANGAY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="barangay" name="barangay" autocomplete="off"
                                        value="{{ $admission->full_address['barangay'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('barangay')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>MUNICIPALITY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="municipality" name="municipality" autocomplete="off"
                                        value="{{ $admission->full_address['municipality'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('municipality')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 h-full">

                                <div class="px-3">
                                    <label>PROVINCE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="province" name="province" autocomplete="off"
                                        value="{{ $admission->full_address['province'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('province')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class=" px-3">
                                    <label>REGION: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="region" name="region" autocomplete="off"
                                        value="{{ $admission->full_address['region'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('region')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>ZIP CODE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="zip code" name="zip_code" autocomplete="off"
                                        value="{{ $admission->full_address['zip_code'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('zip_code')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class=" px-3">
                                    <label>COUNTRY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="country" name="country" autocomplete="off"
                                        value="{{ $admission->full_address['country'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('country')
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
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Contact Information</label>
                        </div>
                        <div class="grid gap-2">
                            <div class="grid grid-cols-4 h-full">
                                <div class="px-3">
                                    <label>LAST NAME: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact last name" name="contact_last" id="contact_last"
                                        autocomplete="off" value="{{ $admission->contact_person['contact_last'] }}"
                                        required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('contact_last')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>FIRST NAME: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact first name" name="contact_first" id="contact_first"
                                        autocomplete="off" value="{{ $admission->contact_person['contact_first'] }}"
                                        required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('contact_first')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>MIDDLE NAME:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact middle name" name="contact_middle" id="contact_middle"
                                        autocomplete="off" value="{{ $admission->contact_person['contact_middle'] }}">
                                </div>
                                <div class="px-3">
                                    <label>SUFFIX:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact suffix" name="contact_suffix" id="contact_suffix"
                                        autocomplete="off" value="{{ $admission->contact_person['contact_suffix'] }}">
                                </div>
                            </div>
                            <div class="grid grid-cols-5 h-full">
                                <div class="col-span-2 px-3 pb-3">
                                    <label>ADDRESS: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact address" name="contact_address" id="contact_address"
                                        autocomplete="off" value="{{ $admission->contact_person['contact_address'] }}"
                                        required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('contact_address')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>PHONE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="number" maxlength="11"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact address" name="contact_phone" id="contact_phone"
                                        autocomplete="off" value="{{ $admission->contact_person['contact_phone'] }}"
                                        required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('contact_phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-span-2 px-3">
                                    <label>RELATION TO PATIENT: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="relation to patient" name="contact_rtp" id="contact_rtp"
                                        autocomplete="off" value="{{ $admission->contact_person['contact_rtp'] }}"
                                        required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('contact_rtp')
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
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Affiliate</label>
                        </div>
                        <div class="grid gap-2">
                            {{-- employee --}}
                            <div class="grid grid-cols-3">
                                <div class=" px-3">
                                    <label>EMPLOYER NAME:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="employer_name" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['employer']['name'] }}">
                                </div>
                                <div class="flex flex-col items-center px-3">
                                    <label>ADDRESS:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="employer_address" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['employer']['address'] }}">
                                </div>
                                <div class="flex flex-col items-center px-3">
                                    <label>PHONE:</label>
                                    <input type="number" maxlength="11"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="employer_phone" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['employer']['contact'] }}">
                                </div>
                            </div>
                            {{-- father --}}
                            <div class="grid grid-cols-3">
                                <div class="px-3">
                                    <label>FATHER'S NAME:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="father_name" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['father']['name'] }}">
                                </div>
                                <div class="flex flex-col items-center px-3">
                                    <label>ADDRESS:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="father_address" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['father']['address'] }}">
                                </div>
                                <div class="flex flex-col items-center px-3">
                                    <label>PHONE:</label>
                                    <input type="number" maxlength="11"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="father_phone" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['father']['contact'] }}">
                                </div>
                            </div>

                            {{-- mother --}}
                            <div class="grid grid-cols-3">
                                <div class="flex flex-col items-start px-3">
                                    <label>MOTHER'S MAIDEN NAME:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="mother_maiden_name" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['mother']['name'] }}">
                                </div>
                                <div class="flex flex-col items-center px-3">
                                    <label>ADDRESS:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="mother_address" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['mother']['address'] }}">
                                </div>
                                <div class="flex flex-col items-center px-3">
                                    <label>PHONE:</label>
                                    <input type="number" maxlength="11"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="mother_phone" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['mother']['contact'] }}">
                                </div>
                            </div>

                            {{-- spouse --}}
                            <div class="grid grid-cols-3 pb-3">
                                <div class="px-3">
                                    <label>SPOUSE NAME:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="spouse_name" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['spouse']['name'] }}">
                                </div>
                                <div class="flex flex-col items-center px-3">
                                    <label>ADDRESS:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="spouse_address" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['spouse']['address'] }}">
                                </div>
                                <div class="flex flex-col items-center px-3">
                                    <label>PHONE:</label>
                                    <input type="number" maxlength="11"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="spouse_phone" autocomplete="off"
                                        value="{{ $admission->patient_affiliate['spouse']['contact'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Admission and Referral</label>
                        </div>
                        <div class="grid gap-2">
                            <div class="grid grid-cols-5 h-full">
                                <div class="px-3">
                                    <div>
                                        <label>ADMISSION DATE: <span class="text-red-600 font-bold">*</span></label>
                                        <input type="date"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                            name="start_date" id="start_date"
                                            value="{{ $admission->hospital_visit['admission_start']['start_date'] }}"
                                            required>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('start_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div>
                                        <label>DISCHARGE DATE: <span class="text-red-600 font-bold">*</span></label>
                                        <input type="date"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                            name="end_date" id="end_date"
                                            value="{{ $admission->hospital_visit['admission_end']['end_date'] }}"
                                            required>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('end_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-span-2 px-3">
                                    <label>TOTAL DAYS:</label>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="# of days" name="total_days" id="total_days"
                                        value="{{ $admission->hospital_visit['admission_diff'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>TYPE OF ADMISSION: <span class="text-red-600 font-bold">*</span></label>
                                    <div class="w-full">
                                        <select name="admission_type"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            required>
                                            <option value="" disabled selected>admission type</option>
                                            <option value="New"
                                                {{ $admission->type_of_admission == 'New' ? 'selected' : '' }}>
                                                New
                                            </option>
                                            <option value="Old"
                                                {{ $admission->type_of_admission == 'Old' ? 'selected' : '' }}>
                                                Old
                                            </option>
                                            <option value="Former OPD"
                                                {{ $admission->type_of_admission == 'Former OPD' ? 'selected' : '' }}>
                                                Former OPD
                                            </option>
                                        </select>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('admission_type')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-5 pb-3 h-full">
                                <div class="px-3">
                                    <div>
                                        <label>ADMISSION TIME: <span class="text-red-600 font-bold">*</span></label>
                                        <input type="time"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                            name="start_time" id="start_time"
                                            value="{{ $admission->hospital_visit['admission_start']['start_time'] }}"
                                            required>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('start_time')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div>
                                        <label>DISCHARGE TIME: <span class="text-red-600 font-bold">*</span></label>
                                        <input type="time"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                            name="end_time" id="end_time"
                                            value="{{ $admission->hospital_visit['admission_end']['end_time'] }}"
                                            required>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('end_time')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <label>ADMITTING PHYSICIAN: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="name of physician" name="admitting_physician"
                                        id="admitting_physician"
                                        value="{{ $admission->admitting_personel['admitting_physician'] }}"
                                        autocomplete="off" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('admitting_physician')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>ADMITTING CLERK: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="admitting_clerk" id="admitting_clerk"
                                        value="{{ $admission->admitting_personel['admitting_clerk'] }}"
                                        autocomplete="off" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('admitting_clerk')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>REFERRED BY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="referred by" name="referred_by" id="referred_by"
                                        value="{{ $admission->admitting_personel['referred_by'] }}" autocomplete="off"
                                        required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('referred_by')
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
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Insurance Information</label>
                        </div>
                        <div class="grid grid-cols-5 pb-3">
                            <div class="px-3">
                                <label>SOCIAL SERVICE CLASS: <span class="text-red-600 font-bold">*</span></label>
                                <div class="w-full">
                                    <select name="ssc"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        required>
                                        @php
                                            $_ssc = [
                                                'a' => 'a',
                                                'b' => 'b',
                                                'c1' => 'c1',
                                                'c2' => 'c2',
                                                'c3' => 'c3',
                                                'd' => 'd',
                                            ];
                                        @endphp
                                        @foreach ($_ssc as $k => $v)
                                            <option value="{{ $v }}"
                                                {{ $admission->ssc == $v ? 'selected' : '' }}>
                                                {{ $k }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('ssc')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="px-3">
                                <label class="pb-2">ALLERGIC TO: <span class="text-red-600 font-bold">*</span></label>
                                <input type="text"
                                    class="h-10 w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="allergic to" name="alert_allergic" id="alert_allergic"
                                    autocomplete="off" value="{{ $admission->allergic }}" required>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('alert_allergic')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="px-3">
                                <label>HOSPITALIZATION PLAN: </label>
                                <input type="text"
                                    class="h-10 w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="leave empty if N/A" name="hospitalization_plan"
                                    id="hospitalization_plan" autocomplete="off"
                                    value="{{ $admission->insurance['hospitalization_plan'] }}">
                            </div>
                            <div class="px-3">
                                <label>INSURANCE NAME:</label>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="health_insurance" id="health_insurance" placeholder="leave empty if N/A"
                                    autocomplete="off" value="{{ $admission->insurance['health_insurance'] }}">
                            </div>
                            <div class="px-3">
                                <label>INSURANCE COVERAGE:</label>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="coverage_insurance" id="coverage_insurance" placeholder="leave empty if N/A"
                                    autocomplete="off" value="{{ $admission->insurance['coverage_insurance'] }}">
                            </div>
                        </div>
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Diagnosis</label>
                        </div>
                        <div class="grid gap-2">
                            <div class="grid grid-cols-3">
                                <div class="px-3">
                                    <label>ADMISSION DIAGNOSIS :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="main_diagnosis" id="main_diagnosis"
                                        autocomplete="off" value="{{ $admission->main_diagnosis }}">
                                </div>
                                <div class="px-3">
                                    <label>PRINCIPAL DIAGNOSIS :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="principal_diagnosis"
                                        id="principal_diagnosis" autocomplete="off"
                                        value="{{ $admission->diagnosis['principal_diagnosis'] }}">
                                </div>
                                <div class="px-3">
                                    <label>OTHER DIAGNOSIS :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="other_diagnosis" id="other_diagnosis"
                                        autocomplete="off" value="{{ $admission->diagnosis['other_diagnosis'] }}">
                                </div>

                            </div>
                            <div class="grid grid-cols-6 pb-3">
                                <div class="col-span-2 px-3">
                                    <label>PRINCIPAL OPERATION:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="principal_operation"
                                        id="principal_operation" autocomplete="off"
                                        value="{{ $admission->other_opt['principal_operation'] }}">
                                </div>
                                <div class="col-span-2 px-3">
                                    <label>OTHER OPERATION:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="other_operation" id="other_operation"
                                        autocomplete="off" value="{{ $admission->other_opt['other_operation'] }}">
                                </div>
                                <div class="px-3">
                                    <label>IDC CODE:</label>
                                    <input type="number" maxlength="5"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="idc_code" id="idc_code"
                                        autocomplete="off" value="{{ $admission->idc_code }}">
                                </div>
                                <div class="px-3">
                                    <label>ICPM CODE:</label>
                                    <input type="number" maxlength="5"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="leave empty if N/A" name="icpm_code" id="icpm_code"
                                        autocomplete="off" value="{{ $admission->icpm_code }}">
                                </div>

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
                    <a class=" col-start-8 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                        href="{{ route('admission.index') }}">
                        <div
                            class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                            Back
                        </div>
                    </a>
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
