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
        <div class="hidden">
            @include('layouts.stepper')
        </div>
        <div class=" h-full w-full">
            <form action="" method="POST" enctype="multipart/form-data" class="admission-form text-xl tracking-wider">
                @csrf
                <div
                    class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                    <label>Admission Record # {{ $emergency->patient_id }}</label>
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
                                        placeholder="last name" name="last_name" value="{{ $emergency->last_name }}"
                                        readonly>
                                </div>
                                <div class="col-span-2 px-3">
                                    <label>GIVEN NAME: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="given name" name="first_name" value="{{ $emergency->first_name }}"
                                        readonly>
                                </div>
                                <div class="px-3">
                                    <label>MIDDLE NAME :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" name="middle_name"
                                        value="{{ $emergency->middle_name }}">

                                </div>
                                <div class="px-3">
                                    <label>SUFFIX :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" name="suffix" value="{{ $emergency->suffix }}">
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
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="senior citizen #" name="sr_no" value="{{ $emergency->sr_no }}">

                                </div>
                                <div class="px-3">
                                    <label>WARD/ROOM: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="ward/room #" name="ward_room_bed_service"
                                        value="{{ $emergency->ward_room_bed_service }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>CONTACT NUMBER: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="contact #" name="phone" maxlength="11"
                                        value="{{ $emergency->personal_info['phone'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>SEX: <span class="text-red-600 font-bold">*</span></label>
                                    <div class="w-full">
                                        <select name="gender"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            readonly>
                                            <option value="" disabled selected>gender</option>
                                            <option value="Male"
                                                {{ $emergency->personal_info['gender'] == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="Female"
                                                {{ $emergency->personal_info['gender'] == 'Female' ? 'selected' : '' }}>
                                                Female
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="px-3">
                                    <label>CIVIL STATUS: <span class="text-red-600 font-bold">*</span></label>
                                    <div class="w-full">
                                        <select name="civil_status"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            readonly>
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
                                                    {{ $emergency->personal_info['civil_status'] == $v ? 'selected' : '' }}>
                                                    {{ $k }}</option>
                                            @endforeach
                                        </select>
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
                                        placeholder="birthday" name="birthday" id="birthday"
                                        value="{{ $emergency->personal_info['birthday'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>AGE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="age" name="age" id="age"
                                        value="{{ $emergency->personal_info['age'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>BIRTHPLACE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="birthplace" name="birthplace"
                                        value="{{ $emergency->personal_info['birthplace'] }}" readonly>
                                </div>
                                <div class="px-3 ">
                                    <label>RELIGION: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="religion" name="religion"
                                        value="{{ $emergency->personal_info['religion'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>OCCUPATION :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" name="occupation"
                                        value="{{ $emergency->personal_info['occupation'] }}">
                                </div>
                                <div class="px-3">
                                    <label>NATIONALITY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="nationality" name="nationality" id="nationality"
                                        value="{{ $emergency->personal_info['nationality'] }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Patient Full Address</label>
                        </div>
                        {{-- full_address --}}
                        <div class="grid gap-2">
                            <div class="grid grid-cols-4 h-full">
                                <div class="col-span-2 px-3">
                                    <label>STREET: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="street" name="street" id="street"
                                        value="{{ $emergency->full_address['street'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>BARANGAY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="barangay" name="barangay"
                                        value="{{ $emergency->full_address['barangay'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>MUNICIPALITY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="municipality" name="municipality" id="municipality"
                                        value="{{ $emergency->full_address['municipality'] }}" readonly>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 h-full">

                                <div class="px-3">
                                    <label>PROVINCE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="province" name="province"
                                        value="{{ $emergency->full_address['province'] }}" readonly>
                                </div>
                                <div class=" px-3">
                                    <label>REGION: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="region" name="region"
                                        value="{{ $emergency->full_address['region'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>ZIP CODE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="zip code" name="zip_code"
                                        value="{{ $emergency->full_address['zip_code'] }}" readonly>
                                </div>
                                <div class=" px-3">
                                    <label>COUNTRY: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="country" name="country"
                                        value="{{ $emergency->full_address['country'] }}" readonly>
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
                                        value="{{ $emergency->contact_person['contact_last'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>FIRST NAME :</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact first name" name="contact_first" id="contact_first"
                                        value="{{ $emergency->contact_person['contact_first'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>MIDDLE NAME:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact middle name" name="contact_middle" id="contact_middle"
                                        value="{{ $emergency->contact_person['contact_middle'] }}">
                                </div>
                                <div class="px-3">
                                    <label>SUFFIX:</label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact suffix" name="contact_suffix" id="contact_suffix"
                                        value="{{ $emergency->contact_person['contact_suffix'] }}">
                                </div>
                            </div>
                            <div class="grid grid-cols-5 h-full">
                                <div class="col-span-2 px-3 pb-3">
                                    <label>ADDRESS: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact address" name="contact_address" id="contact_address"
                                        value="{{ $emergency->contact_person['contact_address'] }}" readonly>
                                </div>
                                <div class="px-3">
                                    <label>PHONE: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="contact address" name="contact_phone" id="contact_phone"
                                        value="{{ $emergency->contact_person['contact_phone'] }}" readonly>
                                </div>
                                <div class="col-span-2 px-3">
                                    <label>RELATION TO PATIENT: <span class="text-red-600 font-bold">*</span></label>
                                    <input type="text"
                                        class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                        placeholder="relation to patient" name="contact_rtp" id="contact_rtp"
                                        value="{{ $emergency->contact_person['contact_rtp'] }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-navigation py-8 grid grid-cols-8 gap-4">
                    <button
                        class="previous h-full col-start-6 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="button">
                        Previous
                    </button>
                    <button
                        class="next h-full col-start-7 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="button">
                        Next
                    </button>
                    <a class=" col-start-8 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                        href="{{ route('emergency.index') }}">
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
