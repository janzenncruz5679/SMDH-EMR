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
            font-size: 1.1rem;
        }
    </style>
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 flex flex-col">
        <div>
            @include('layouts.emergencyStepper')
        </div>
        <div class=" h-full w-full">
            <form action="{{ route('outpatient.update', $outpatient->id) }}" method="POST" enctype="multipart/form-data"
                class="admission-form text-xl tracking-wider">
                @csrf
                @method('PATCH')
                <div
                    class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                    <label>Outpatient Cover Sheet {{ $outpatient->patient_id }}</label>
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
                                        value="{{ $outpatient->last_name }}" required>
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
                                        value="{{ $outpatient->first_name }}" required>
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
                                        placeholder="" name="middle_name" autocomplete="off"
                                        value="{{ $outpatient->middle_name }}">

                                </div>
                                <div class="px-3">
                                    <label>SUFFIX :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="" name="suffix" autocomplete="off" value="{{ $outpatient->suffix }}">
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
                                        value="{{ $outpatient->sr_no }}">

                                </div>
                                <div class="px-3">
                                    <label>WARD/ROOM: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="number" maxlength="5"
                                        oninput="this.value=this.value.slice(0,this.maxLength)"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="ward/room #" name="ward_room_bed_service" autocomplete="off"
                                        value="{{ $outpatient->ward_room_bed_service }}" required>
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
                                        value="{{ $outpatient->personal_info['phone'] }}" required>
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
                                                {{ $outpatient->personal_info['gender'] == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="Female"
                                                {{ $outpatient->personal_info['gender'] == 'Female' ? 'selected' : '' }}>
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
                                                    {{ $outpatient->personal_info['civil_status'] == $v ? 'selected' : '' }}>
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
                                    <label>NATIONALITY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="nationality" name="nationality" id="nationality" autocomplete="off"
                                        value="{{ $outpatient->personal_info['nationality'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('nationality')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            {{-- personal info 2 --}}
                            <div class="grid grid-cols-6 h-full w-full">
                                <div class="px-3">
                                    <label>BIRTHDATE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="date"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                        placeholder="birthday" name="birthday" id="birthday" autocomplete="off"
                                        value="{{ $outpatient->personal_info['birthday'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('birthday')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>AGE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="age" name="age" id="age" autocomplete="off"
                                        value="{{ $outpatient->personal_info['age'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>BIRTHPLACE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="birthplace" name="birthplace" autocomplete="off"
                                        value="{{ $outpatient->personal_info['birthplace'] }}" required>
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
                                        value="{{ $outpatient->personal_info['religion'] }}" required>
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
                                        placeholder="occupation" name="occupation" autocomplete="off"
                                        value="{{ $outpatient->personal_info['occupation'] ?? '' }}">
                                </div>
                                <div class="px-3">
                                    <label>COMPANY:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="company" name="company"
                                        value="{{ $outpatient->personal_info['company'] ?? '' }}">
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
                                        value="{{ $outpatient->full_address['street'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('street')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>BARANGAY: <span class="text-red-600 font-bold">*</span></label>
                                    {{-- <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="barangay" name="barangay" autocomplete="off"
                                        value="{{ $outpatient->full_address['barangay'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('barangay')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                    <select name="barangay" id="barangay"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        required>
                                        <option value="{{ $outpatient->full_address['barangay'] }}" selected>
                                            {{ $outpatient->full_address['barangay'] }}
                                        </option>
                                    </select>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('barangay')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="px-3">
                                    <label>MUNICIPALITY: <span class="text-red-600 font-bold">*</span></label>
                                    <select name="municipality" id="municipality"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        required>
                                        <option value="{{ $outpatient->full_address['municipality'] }}" selected>
                                            {{ $outpatient->full_address['municipality'] }}
                                        </option>
                                    </select>
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
                                    {{-- <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="province" name="province" autocomplete="off"
                                        value="{{ $outpatient->full_address['province'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('province')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                    <select name="province" id="province"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        required>
                                        <option value="{{ $outpatient->full_address['province'] }}" disabled>
                                            {{ $outpatient->full_address['province'] }}
                                        </option>
                                    </select>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('province')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class=" px-3">
                                    <label>REGION: <span class="text-red-600 font-bold">*</span></label>
                                    {{-- <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="region" name="region" autocomplete="off"
                                        value="{{ $outpatient->full_address['region'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('region')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                    <select name="region" id="region"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        required>
                                        <option value="{{ $outpatient->full_address['region'] }}" disabled>
                                            {{ $outpatient->full_address['region'] }}
                                        </option>
                                    </select>
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
                                        value="{{ $outpatient->full_address['zip_code'] }}" required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('zip_code')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class=" px-3">
                                    <label>COUNTRY: <span class="text-red-600 font-bold">*</span></label>
                                    <select name="country" id="country"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        required>
                                        <option value="{{ $outpatient->full_address['country'] }}" disabled>
                                            {{ $outpatient->full_address['country'] }}
                                        </option>
                                    </select>
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
                                        autocomplete="off" value="{{ $outpatient->contact_person['contact_last'] }}"
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
                                        autocomplete="off" value="{{ $outpatient->contact_person['contact_first'] }}"
                                        required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('contact_first')
                                            {{ $message }}
                                        @enderror
                                </div>
                                <div class="px-3">
                                    <label>MIDDLE NAME:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact middle name" name="contact_middle" id="contact_middle"
                                        autocomplete="off" value="{{ $outpatient->contact_person['contact_middle'] }}">
                                </div>
                                <div class="px-3">
                                    <label>SUFFIX:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact suffix" name="contact_suffix" id="contact_suffix"
                                        autocomplete="off" value="{{ $outpatient->contact_person['contact_suffix'] }}">
                                </div>
                            </div>
                            <div class="grid grid-cols-5 h-full">
                                <div class="col-span-2 px-3 pb-3">
                                    <label>ADDRESS: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact address" name="contact_address" id="contact_address"
                                        autocomplete="off" value="{{ $outpatient->contact_person['contact_address'] }}"
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
                                        autocomplete="off" value="{{ $outpatient->contact_person['contact_phone'] }}"
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
                                        autocomplete="off" value="{{ $outpatient->contact_person['contact_rtp'] }}"
                                        required>
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('contact_rtp')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Visitation and Recommendation</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid grid-cols-5 h-full">
                                <div class="px-3">
                                    <div>
                                        <label>VISIT DATE: <span class="text-red-600 font-bold">*</span></label>
                                        <input type="date"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                            name="start_date" id="start_date"
                                            value="{{ $outpatient->hospital_visit['visit_start']['start_date'] }}"
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
                                        <label>VISIT TIME: <span class="text-red-600 font-bold">*</span></label>
                                        <input type="time"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                            name="start_time" id="start_time"
                                            value="{{ $outpatient->hospital_visit['visit_start']['start_time'] }}"
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
                                        <label>DISCHARGE DATE: <span class="text-red-600 font-bold">*</span></label>
                                        <input type="date"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                            name="end_date" id="end_date"
                                            value="{{ $outpatient->hospital_visit['visit_end']['end_date'] }}" required>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('end_date')
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
                                            value="{{ $outpatient->hospital_visit['visit_end']['end_time'] }}" required>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('end_time')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <label>DISPOSITION: <span class="text-red-600 font-bold">*</span></label>
                                    <div class="w-full">
                                        <select name="disposition"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            required>
                                            <option value="" disabled selected>disposition</option>
                                            @php
                                                $_disposition = [
                                                    'Treated and Sent Home' => 'Treated and Sent Home',
                                                    'For Admission' => 'For Admission',
                                                    'Refused Admission' => 'Refused Admission',
                                                    'Referred' => 'Referred',
                                                    'Out When Called' => 'Out When Called',
                                                ];
                                            @endphp
                                            @foreach ($_disposition as $k => $v)
                                                <option value="{{ $v }}"
                                                    {{ $outpatient->case_summary['disposition'] == $v ? 'selected' : '' }}>
                                                    {{ $k }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-base font-[sans-serif] font-medium text-red-600">
                                            @error('disposition')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Outpatient Vitals</label>
                        </div>
                        <div class="grid gap-2 pb-3">
                            <div class="grid h-full">
                                <div class=" grid grid-cols-6 h-full w-full px-3 gap-4">
                                    <div>
                                        <label>HEIGHT (m): <span class="text-red-600 font-bold">*</span></label>
                                        <input type="number" step="0.01"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="height" name="height" autocomplete="off"
                                            value="{{ $outpatient->case_summary['latest_vitals']['height'] }}">
                                    </div>
                                    <div>
                                        <label>WEIGHT (kgs): <span class="text-red-600 font-bold">*</span></label>
                                        <input type="number" step="0.01"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="weight" name="weight" autocomplete="off"
                                            value="{{ $outpatient->case_summary['latest_vitals']['weight'] }}">
                                    </div>
                                    <div>
                                        <label>TEMPERATURE (°C): <span class="text-red-600 font-bold">*</span></label>
                                        <input type="number" step="0.01"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="temperature" name="temperature" autocomplete="off"
                                            value="{{ $outpatient->case_summary['latest_vitals']['temperature'] }}">
                                    </div>
                                    <div>
                                        <label>PULSE:</label>
                                        <input type="text"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="pulse rate" name="pulse_rate" autocomplete="off"
                                            value="{{ $outpatient->case_summary['latest_vitals']['pulse_rate'] }}">
                                    </div>
                                    <div>
                                        <label>BP (mm/Hg): <span class="text-red-600 font-bold">*</span></label>
                                        <input type="text" maxlength="7"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="blood pressure" name="blood_pressure" autocomplete="off"
                                            value="{{ $outpatient->case_summary['latest_vitals']['blood_pressure'] }}">
                                    </div>
                                    <div>
                                        <label>RESPIRATION (bpm): <span class="text-red-600 font-bold">*</span></label>
                                        <input type="number" step="0.01"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="respiration rate" name="respiratory_rate" autocomplete="off"
                                            value="{{ $outpatient->case_summary['latest_vitals']['respiratory_rate'] }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Case Summary</label>
                        </div>
                        <div class="grid grid-cols-3 gap-4 px-3">
                            <div>
                                <label>PRESENT ILLNESS: <span class="text-red-600 font-bold">*</span></label>
                                <textarea type="text"
                                    class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="present illness" name="present_illness" autocomplete="off" required>{{ $outpatient->case_summary['present_illness'] }}</textarea>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('present_illness')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div>
                                <label>CHIEF COMPLAINT: <span class="text-red-600 font-bold">*</span></label>
                                <textarea type="text"
                                    class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="chief complaint" name="chief_complaint" autocomplete="off" required>{{ $outpatient->case_summary['chief_complaint'] }}</textarea>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('chief_complaint')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div>
                                <label>DIAGNOSIS: <span class="text-red-600 font-bold">*</span></label>
                                <textarea type="text"
                                    class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="diagnosis" name="diagnosis" autocomplete="off" required>{{ $outpatient->main_diagnosis }}</textarea>
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('diagnosis')
                                        {{ $message }}
                                    @enderror
                                </span>
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
                        href="{{ route('outpatient.index') }}">
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
    @vite('resources/js/patientPage/dependentDropdown.js')
@endpush
