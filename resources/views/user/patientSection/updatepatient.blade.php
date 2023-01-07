@extends('layouts.main')

@section('content')
    <div class="addPatient absolute top-[59px] left-[275px] h-[280vh] w-[85.3vw] p-[45px] ">
        <div class=" h-full w-full">
            <form action="{{ url('/patientPage/editAdmission' . $view_first->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class=" h-full w-full text-xl tracking-wider border-2 border-black font-[sans-serif]">
                    {{-- admissionformfirst_sec --}}
                    <div class="">
                        {{-- name --}}
                        <div class="grid grid-cols-8  border-b-2 border-black h-[70px]">
                            <div class="border-r-2 border-black col-span-5 flex items-center gap-[5px] px-3 py-2">
                                <p>NAME OF HOSPITAL :</p>
                                <p>San Miguel District Hospital</p>
                            </div>
                            <div class="flex items-center gap-[5px] col-span-3 px-3 py-2">
                                <p>HOSP CODE:</p>
                                <p>0000122</p>
                            </div>
                        </div>

                        {{-- address --}}
                        <div class="grid grid-cols-8 border-b-2 border-black h-[110px]">
                            <div class="col-span-5 border-r-2 border-black px-3 py-2">
                                <p>ADDRESS* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter address" name="address" autocomplete="off"
                                    value="{{ $view_first->address }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 px-3 py-2">
                                <p>HEALTH RECORD NO :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter latest record #" autocomplete="off" value="{{ $view_first->id }}"
                                    readonly>

                            </div>
                        </div>


                        {{-- sr citizen number --}}
                        <div class="grid grid-cols-8 border-b-2 border-black h-[110px]">
                            <div class="col-span-3 border-r-2 border-black px-3 py-2">
                                <p>SR CITIZEN NO :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="sr_no" autocomplete="off"
                                    value="{{ $view_first->sr_no ?? 'N/A' }}">

                            </div>
                            <div class="col-span-2 flex justify-center items-center border-r-2 border-black">
                                <p class="font-bold">CLINICAL COVER SHEET</p>
                            </div>
                            <div class="col-span-3  gap-[5px] px-3 py-2">
                                <p>OLD HEALTH RECORD NO :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter old record #" autocomplete="off">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- patients border --}}
                        <div class="grid grid-cols-12 border-b-2 border-black h-28">
                            <div class="border-r-2 border-black flex flex-col items-center justify-center px-3 py-2">
                                <p>PATIENT'S</p>
                                <p>NAME</p>
                            </div>
                            <div class="col-span-2 border-r-2 border-black px-3 py-2">
                                <p>Last Name* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="last name" name="last_name" autocomplete="off"
                                    value="{{ $view_first->last_name ?? 'N/A' }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('last_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 border-r-2 border-black px-3 py-2">
                                <p>Given Name* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="given name" name="first_name" autocomplete="off"
                                    value="{{ $view_first->first_name ?? 'N/A' }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('first_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 border-r-2 border-black px-3 py-2">
                                <p>Middle Name :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="middle_name" autocomplete="off"
                                    value="{{ $view_first->middle_name ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-black px-3 py-2">
                                <p>WARD/ROOM/BED/SERVICE* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter ward/room/bed/service type" name="ward_room_bed_service"
                                    autocomplete="off" value="{{ $view_first->ward_room_bed_service ?? 'N/A' }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('ward_room_bed_service')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- perma address --}}
                        <div class="grid grid-cols-11 border-b-2 border-black h-28">
                            <div class="col-span-5 border-r-2 border-black px-3 py-2">
                                <p>PERMANENT ADDRESS* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter permanent address" name="perma_address"
                                    value="{{ $view_second->perma_address }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                    @error('perma_address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-2 border-r-2 border-black px-3 py-2">
                                <p>TEL. NO.* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter cellular phone #" name="phone" maxlength="11" autocomplete="off"
                                    value="{{ $view_first->phone }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class=" border-r-2 border-black px-3 py-2">
                                <p class="pb-2">SEX* :</p>
                                <div class="w-full flex justify-start gap-4">
                                    <div class="inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Male" name="gender"
                                            {{ $view_first->gender == 'Male' ? 'checked' : '' }}>
                                        <label>M</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Female"
                                            name="gender"{{ $view_first->gender == 'Female' ? 'checked' : '' }}>
                                        <label>F</label>
                                    </div>

                                </div>
                                <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                    @error('gender')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-span-3 border-black px-3 py-2">
                                <p class="pb-2">CIVIL STATUS* :</p>
                                <div class="w-full flex justify-around">
                                    <div class="inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Single" name="civil_status"
                                            {{ $view_second->civil_status == 'Single' ? 'checked' : '' }}>
                                        <label>S</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Divorced" name="civil_status"
                                            {{ $view_second->civil_status == 'Divorced' ? 'checked' : '' }}>
                                        <label>D</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Separated" name="civil_status"
                                            {{ $view_second->civil_status == 'Separated' ? 'checked' : '' }}>
                                        <label>SEP</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Common Law" name="civil_status"
                                            {{ $view_second->civil_status == 'Common Law' ? 'checked' : '' }}>
                                        <label>C</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Widowed" name="civil_status"
                                            {{ $view_second->civil_status == 'Widowed' ? 'checked' : '' }}>
                                        <label>W</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Married" name="civil_status"
                                            {{ $view_second->civil_status == 'Married' ? 'checked' : '' }}>
                                        <label>M</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                            value="Neutral" name="civil_status"
                                            {{ $view_second->civil_status == 'Neutral' ? 'checked' : '' }}>
                                        <label>N</label>
                                    </div>
                                </div>
                                <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                    @error('perma_address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>

                        {{-- birthdate border --}}
                        <div class="grid grid-cols-11 border-b-2 border-black h-28">
                            <div class="col-span-2 border-r-2 border-black px-3 py-2">
                                <p>BIRTHDATE* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                    placeholder="birthday" name="birthday" id="birthday" autocomplete="off"
                                    value="{{ $view_first->birthday }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('perma_address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="border-r-2 border-black px-3 py-2">
                                <p>AGE* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                    placeholder="age" name="age" id="age" autocomplete="off"
                                    value="{{ $view_first->age }}" readonly>

                            </div>
                            <div class="col-span-2 border-r-2 border-black px-3 py-2">
                                <p>BIRTHPLACE* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="birthplace" name="birthplace" autocomplete="off"
                                    value="{{ $view_second->birthplace }}">
                            </div>
                            <div class="col-span-2 border-r-2 border-black px-3 py-2">
                                <p>NATIONALITY* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="nationality" name="nationality" autocomplete="off"
                                    value="{{ $view_second->nationality }}">
                            </div>
                            <div class="col-span-2 border-r-2 border-black px-3 py-2">
                                <p>RELIGION* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="religion" name="religion" autocomplete="off"
                                    value="{{ $view_second->religion }}">
                            </div>
                            <div class="col-span-2 border-black px-3 py-2">
                                <p>OCCUPATION :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="occupation" autocomplete="off"
                                    value="{{ $view_second->occupation ?? 'N/A' }}">
                            </div>
                        </div>
                    </div>

                    {{-- admissionformsecond_sec --}}
                    <div class="">
                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>
                        {{-- employee --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-28">
                            <div class="col-span-3 border-r-2 border-black px-3 py-2">
                                <p>EMPLOYER(Type of Business)</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_name" autocomplete="off"
                                    value="{{ $view_third->employer_name ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-center px-3 py-2">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_address" autocomplete="off"
                                    value="{{ $view_third->employer_address ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center px-3 py-2">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_phone" autocomplete="off"
                                    value="{{ $view_third->employer_phone ?? 'N/A' }}">
                            </div>
                        </div>

                        {{-- father --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-28">
                            <div class="col-span-3 border-r-2 border-black px-3 py-2">
                                <p>FATHER'S NAME</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_name" autocomplete="off"
                                    value="{{ $view_third->father_name ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-center px-3 py-2">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_address" autocomplete="off"
                                    value="{{ $view_third->father_address ?? 'N/A' }}">
                            </div>
                            <div
                                class="col-span-3
                                    border-black flex flex-col items-center px-3 py-2">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_phone" autocomplete="off"
                                    value="{{ $view_third->father_phone ?? 'N/A' }}">
                            </div>
                        </div>

                        {{-- mother --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-28">
                            <div class="col-span-3 border-r-2 border-black px-3 py-2">
                                <p>MOTHER'S(MAIDEN) NAME</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_maiden_name" autocomplete="off"
                                    value="{{ $view_third->mother_maiden_name ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-center px-3 py-2">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_address" autocomplete="off"
                                    value="{{ $view_third->mother_address ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center px-3 py-2">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_phone" autocomplete="off"
                                    value="{{ $view_third->mother_phone ?? 'N/A' }}">
                            </div>
                        </div>

                        {{-- spouse --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-28">
                            <div class="col-span-3 border-r-2 border-black px-3 py-2">
                                <p>SPOUSE NAME</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_name" autocomplete="off"
                                    value="{{ $view_third->spouse_name ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-r-2 border-black flex flex-col items-center px-3 py-2">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_address" autocomplete="off"
                                    value="{{ $view_third->spouse_address ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center px-3 py-2">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_phone" autocomplete="off"
                                    value="{{ $view_third->spouse_phone ?? 'N/A' }}">
                            </div>
                        </div>
                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>
                    </div>


                    {{-- admissionformthird_sec --}}
                    <div class="">
                        {{-- Admission --}}
                        <div class="grid grid-cols-10 border-b-2 border-black h-[170px]">
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ADMISSION</p>
                                <div class="text-[1.3rem] w-full flex flex-col items-end gap-[20px]">
                                    <div class="flex">
                                        <label class="pt-[3px]">Date: </label>
                                        <input type="date"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available" autocomplete="off">
                                    </div>
                                    <div class="flex">
                                        <label class="pt-[3px]">Time: </label>
                                        <input type="time"
                                            class="w-[203px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>DISCHARGE</p>
                                <div class="text-[1.3rem] w-full flex flex-col items-end gap-[20px]">
                                    <div class="flex">
                                        <label class="pt-[3px]">Date: </label>
                                        <input type="date"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available" autocomplete="off">
                                    </div>
                                    <div class="flex">
                                        <label class="pt-[3px]">Time: </label>
                                        <input type="time"
                                            class="w-[203px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class=" border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>TOTAL NO. OF DAYS:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="# of days">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ADMITTING PHYSICIAN:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of physician">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- Admitting clerk --}}
                        <div class="grid grid-cols-2 border-b-2 border-black h-[100px]">
                            <div class="border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ADMITTING CLERK :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" autocomplete="off">
                            </div>
                            <div class="border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ATTENDING PHYSICIAN SIGNATURE:</p>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- type of admission --}}
                        <div class="grid grid-cols-2 border-b-2 border-black h-[100px]">
                            <div class="border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>TYPE OF ADMISSION :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of clerk" autocomplete="off">
                            </div>
                            <div class="border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>REFERRED BY:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of clerk" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    {{-- admissionformfourth_sec --}}
                    <div class="">
                        {{-- ssc --}}
                        <div class="grid border-b-2 border-black h-[70px]">
                            <div class="border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[50%]">SOCIAL SERVICE CLASSIFICATION :</p>
                                <div class=" w-full flex justify-around text-[1.3rem]">
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="a" name="ssc">
                                        <label>A</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="b" name="ssc">
                                        <label>B</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_one" name="ssc">
                                        <label>C1</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_two" name="ssc">
                                        <label>C2</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_three" name="ssc">
                                        <label>C3</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="d" name="ssc">
                                        <label>D</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- alert allergic to --}}
                        <div class="grid grid-cols-12 border-b-2 border-black h-[145px]">
                            <div
                                class="col-span-2 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ALERT</p>
                                <p>ALLERGIC TO:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="allergic to" autocomplete="off">
                            </div>
                            <div
                                class="col-span-4 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>HOSPITALIZATION PLAN</p>
                                <p>COMPANY/INDUSTRIAL NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" autocomplete="off">
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>HEALTH</p>
                                <p>INSURANCE NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>TYPE OF INSURANCE</p>
                                <p>COVERAGE</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" autocomplete="off">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- data furnished by --}}
                        <div class="grid grid-cols-12 border-b-2 border-black h-[120px]">
                            <div
                                class="col-span-6 border-r-2 border-black flex flex-col items-start justify-center gap-y-[10px] px-[10px]">
                                <p>DATA FURNISHED BY(signature over printed name)</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of attendant" autocomplete="off">
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start justify-center gap-y-[10px] px-[10px]">
                                <p>ADDRESS OF INFORMANT</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" autocomplete="off">
                            </div>
                            <div
                                class="col-span-3 border-black flex flex-col items-start justify-center gap-y-[10px] px-[10px]">
                                <p>RELATION TO PATIENT</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" autocomplete="off">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>


                        {{-- admission diagnosis --}}
                        <div class="grid border-b-2 border-black h-[70px]">
                            <div class="border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[27.5%]">ADMISSION DIAGNOSIS :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" autocomplete="off">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-8"></div>
                    </div>

                    {{-- admissionformfifth_sec --}}
                    <div class="">
                        {{-- principal diagnosis --}}
                        <div class="grid grid-cols-12 border-t-0 border-b-2 border-black h-[120px]">
                            <div class="col-span-9 border-r-2 border-black flex flex-col justify-center gap-[10px]">
                                <div class="border-black flex flex-row gap-[5px] px-[10px]">
                                    <p class="w-[39%]">PRINCIPAL DIAGNOSIS :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" autocomplete="off">
                                </div>
                                <div class="border-black flex flex-row  gap-[5px] px-[10px]">
                                    <p class="w-[31%]">OTHER DIAGNOSIS :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>IDC CODE NO.</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" autocomplete="off">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- principal operation --}}
                        <div class="grid grid-cols-12 border-black h-[120px] py-[10px]">
                            <div class="col-span-9 border-black flex flex-col justify-start gap-[10px] ">
                                <div class="border-black flex flex-row items-center gap-[5px] px-[10px]">
                                    <p class="w-[78%]">PRINCIPAL OPERATION PROCEDURE :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" autocomplete="off">
                                </div>
                                <div class="border-black flex items-center gap-[5px] px-[10px]">
                                    <p class="w-[65%]">OTHER OPERATION PROCEDURE :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-span-3 border-black flex flex-col justify-start gap-[10px]">
                                <div class="border-black flex items-center gap-[5px] px-[10px]">
                                    <p class="w-[90%]">ICPM CODE :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="ICPM code" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="h-[50px] flex justify-end">
                            <div
                                class="flex flex-row gap-[10px] items-center border-l-2 border-t-2 border-black w-50 px-[10px]">
                                <p>00000000000000000000000{{ $view_first->id }}</p>
                                <p>{{ $view_first->created_at }}</p>
                            </div>
                        </div>


                    </div>

                </div>

                <button
                    class="btnSearch h-[4.7vh] w-[6vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-200"
                    type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('custom_scripts')
    @vite('resources/js/patientPage/birthdate.js')
@endpush
