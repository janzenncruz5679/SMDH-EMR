<div class=" h-full w-full">
    <form wire:submit.prevent="submitAdmission" method="POST" enctype="multipart/form-data">
        @csrf
        <div class=" h-full w-full text-xl tracking-wider border-2 border-black font-[sans-serif]">
            {{-- admissionformfirst_sec --}}
            @if ($currentStep == 1)
                <div class="step-one">
                    {{-- name --}}
                    <div class="grid grid-cols-8  border-b-2 border-black h-full">
                        <div class="border-r-2 border-black col-span-5 grid grid-cols-8 content-center p-3">
                            <p class="col-span-2">NAME OF HOSPITAL :</p>
                            <p class="col-span-6">San Miguel District Hospital</p>
                        </div>
                        <div class="col-span-3 grid grid-cols-7 p-3">
                            <p class="col-span-2">HOSP CODE :</p>
                            <p class="col-span-3">0000122</p>
                        </div>
                    </div>

                    {{-- address --}}
                    <div class="grid grid-cols-8 border-b-2 border-black h-full">
                        <div class="col-span-5 border-r-2 border-black p-3">
                            <p>ADDRESS* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="enter address" name="address" wire:model.defer="address" autocomplete="off"
                                value="{{ $address }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-span-3 p-3">
                            <p>HEALTH RECORD NO :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="enter latest record #" autocomplete="off" name="patient_id"
                                wire:model.defer="patient_id" value="{{ $patient_id }}" readonly>
                        </div>
                    </div>


                    {{-- sr citizen number --}}
                    <div class="grid grid-cols-8 border-b-2 border-black h-full">
                        <div class="col-span-3 border-r-2 border-black p-3">
                            <p>SR CITIZEN NO :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="sr_no" autocomplete="off"
                                wire:model.defer="sr_no" value="{{ $sr_no }}">

                        </div>
                        <div class="col-span-2 flex justify-center items-center border-r-2 border-black">
                            <p class="font-bold">CLINICAL COVER SHEET</p>
                        </div>
                        <div class="col-span-3 p-3">
                            <p>TYPE :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="enter latest record #" autocomplete="off" name="type"
                                wire:model.defer="type" value="{{ $type }}" readonly>
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-8"></div>

                    {{-- patients border --}}
                    <div class="grid grid-cols-12 border-b-2 border-black h-full">
                        <div class="border-r-2 border-black flex flex-col items-center justify-center p-3">
                            <p>PATIENT'S</p>
                            <p>NAME</p>
                        </div>
                        <div class="col-span-2 border-r-2 border-black p-3">
                            <p>Last Name* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="last name" name="last_name" autocomplete="off" wire:model.defer="last_name"
                                value="{{ $last_name }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600">
                                @error('last_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-span-3 border-r-2 border-black p-3">
                            <p>Given Name* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="given name" name="first_name" autocomplete="off"
                                wire:model.defer="first_name" value="{{ $first_name }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600">
                                @error('first_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-span-3 border-r-2 border-black p-3">
                            <p>Middle Name :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="middle_name" autocomplete="off"
                                wire:model.defer="middle_name" value="{{ $middle_name }}">
                        </div>
                        <div class="col-span-3 border-black p-3">
                            <p>WARD/ROOM/BED/SERVICE* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="enter ward/room/bed/service type" name="ward_room_bed_service"
                                wire:model.defer="ward_room_bed_service" autocomplete="off"
                                value="{{ $ward_room_bed_service }}">
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
                    <div class="grid grid-cols-11 border-b-2 border-black h-full">
                        <div class="col-span-2 border-r-2 border-black p-3">
                            <p>BIRTHDATE* :</p>
                            <input type="date"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer"
                                placeholder="birthday" name="birthday" id="birthday" wire:model.defer="birthday"
                                autocomplete="off" value="{{ $birthday }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600">
                                @error('birthday')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="border-r-2 border-black p-3">
                            <p>AGE* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto"
                                placeholder="age" name="age" id="age" wire:model.defer="age"
                                autocomplete="off" value="{{ $age }}" readonly>
                        </div>
                        <div class="col-span-2 border-r-2 border-black p-3">
                            <p>BIRTHPLACE* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="birthplace" name="birthplace" wire:model.defer="birthplace"
                                autocomplete="off" value="{{ $birthplace }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600">
                                @error('birthplace')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-span-2 border-r-2 border-black p-3">
                            <p>TEL. NO.* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="enter cellular phone #" name="phone" maxlength="11"
                                wire:model.defer="phone" autocomplete="off" value="{{ $phone }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class=" border-r-2 border-black p-3">
                            <p class="pb-2">SEX* :</p>
                            <div class="w-full flex justify-start gap-4">
                                <div class="inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Male" name="gender" wire:model.defer="gender"
                                        {{ $gender == 'Male' ? 'checked' : '' }}>
                                    <label>M</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Female" name="gender" wire:model.defer="gender"
                                        {{ $gender == 'Female' ? 'checked' : '' }}>
                                    <label>F</label>
                                </div>

                            </div>
                            <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-span-3 border-black p-3">
                            <p class="pb-2">CIVIL STATUS* :</p>
                            <div class="w-full flex justify-around">
                                <div class="inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Single" name="civil_status" wire:model.defer="civil_status"
                                        {{ $civil_status == 'Single' ? 'checked' : '' }}>
                                    <label>S</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Divorced" name="civil_status" wire:model.defer="civil_status"
                                        {{ $civil_status == 'Divorced' ? 'checked' : '' }}>
                                    <label>D</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Separated" name="civil_status" wire:model.defer="civil_status"
                                        {{ $civil_status == 'Separated' ? 'checked' : '' }}>
                                    <label>SEP</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Common Law" name="civil_status" wire:model.defer="civil_status"
                                        {{ $civil_status == 'Common Law' ? 'checked' : '' }}>
                                    <label>C</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Widowed" name="civil_status" wire:model.defer="civil_status"
                                        {{ $civil_status == 'Widowed' ? 'checked' : '' }}>
                                    <label>W</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Married" name="civil_status" wire:model.defer="civil_status"
                                        {{ $civil_status == 'Married' ? 'checked' : '' }}>
                                    <label>M</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-150 cursor-pointer accent-blue-300" type="radio"
                                        value="Neutral" name="civil_status" wire:model.defer="civil_status"
                                        {{ $civil_status == 'Neutral' ? 'checked' : '' }}>
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
                    <div class="grid grid-cols-11 border-b-2 border-black h-full">
                        <div class="col-span-5 border-r-2 border-black p-3">
                            <p>PERMANENT ADDRESS* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="enter permanent address" name="perma_address" autocomplete="off"
                                wire:model.defer="perma_address" value="{{ $perma_address }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600" autocomplete="off">
                                @error('perma_address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-span-2 border-r-2 border-black p-3">
                            <p>NATIONALITY* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="nationality" name="nationality" autocomplete="off"
                                wire:model.defer="nationality" value="{{ $nationality }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600">
                                @error('nationality')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-span-2 border-r-2 border-black p-3">
                            <p>RELIGION* :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="religion" name="religion" autocomplete="off"
                                wire:model.defer="religion" value="{{ $religion }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600">
                                @error('religion')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-span-2 border-black p-3">
                            <p>OCCUPATION :</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="occupation" autocomplete="off"
                                wire:model.defer="occupation" value="{{ $occupation }}">
                        </div>
                    </div>
                </div>
            @endif

            {{-- admissionformsecond_sec --}}
            @if ($currentStep == 2)
                <div class="">
                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-8"></div>
                    {{-- employee --}}
                    <div class="grid grid-cols-9 border-b-2 border-black h-full">
                        <div class="col-span-3 border-r-2 border-black p-3">
                            <p>EMPLOYER(Type of Business)</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="employer_name" autocomplete="off"
                                wire:model.defer="employer_name" value="{{ $employer_name }}">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
                            <p>ADDRESS</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="employer_address" autocomplete="off"
                                wire:model.defer="employer_address" value="{{ $employer_address }}">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-center p-3">
                            <p>TEL. NO.</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="employer_phone" autocomplete="off"
                                wire:model.defer="employer_phone" value="{{ $employer_phone }}" maxlength="11">
                        </div>
                    </div>

                    {{-- father --}}
                    <div class="grid grid-cols-9 border-b-2 border-black full">
                        <div class="col-span-3 border-r-2 border-black p-3">
                            <p>FATHER'S NAME</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="father_name" autocomplete="off"
                                wire:model.defer="father_name" value="{{ $father_name }}">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
                            <p>ADDRESS</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="father_address" autocomplete="off"
                                wire:model.defer="father_address" value="{{ $father_address }}">
                        </div>
                        <div class="col-span-3
                    border-black flex flex-col items-center p-3">
                            <p>TEL. NO.</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="father_phone" autocomplete="off"
                                wire:model.defer="father_phone" value="{{ $father_phone }}" maxlength="11">
                        </div>
                    </div>

                    {{-- mother --}}
                    <div class="grid grid-cols-9 border-b-2 border-black h-full">
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start p-3">
                            <p>MOTHER'S(MAIDEN) NAME</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="mother_maiden_name" autocomplete="off"
                                wire:model.defer="mother_maiden_name" value="{{ $mother_maiden_name }}">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
                            <p>ADDRESS</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="mother_address" autocomplete="off"
                                wire:model.defer="mother_address" value="{{ $mother_address }}">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-center p-3">
                            <p>TEL. NO.</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="mother_phone" autocomplete="off"
                                wire:model.defer="mother_phone" value="{{ $mother_phone }}" maxlength="11">
                        </div>
                    </div>

                    {{-- spouse --}}
                    <div class="grid grid-cols-9 border-b-2 border-black h-full">
                        <div class="col-span-3 border-r-2 border-black p-3">
                            <p>SPOUSE NAME</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="spouse_name" autocomplete="off"
                                wire:model.defer="spouse_name" value="{{ $spouse_name }}">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
                            <p>ADDRESS</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="spouse_address" autocomplete="off"
                                wire:model.defer="spouse_address" value="{{ $spouse_address }}">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-center p-3">
                            <p>TEL. NO.</p>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="spouse_phone" autocomplete="off"
                                wire:model.defer="spouse_phone" value="{{ $spouse_phone }}" maxlength="11">
                        </div>
                    </div>
                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-8"></div>
                </div>
            @endif

            {{-- admissionform_sec --}}
            @if ($currentStep == 3)
                <div class="">
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
                                                name="start_date" id="start_date" autocomplete="off"
                                                wire:model.defer="start_date" value="{{ $start_date }}">
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
                                                name="start_time" id="start_time" autocomplete="off"
                                                wire:model.defer="start_time" value="{{ $start_time }}">
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
                                                name="end_date" id="end_date" autocomplete="off"
                                                wire:model.defer="end_date" value="{{ $end_date }}">
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
                                                name="end_time" id="end_time" autocomplete="off"
                                                wire:model.defer="end_time" value="{{ $end_time }}">
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
                                placeholder="# of days" name="total_days" id="total_days" autocomplete="off"
                                wire:model.defer="total_days" value="{{ $total_days }}" readonly>
                        </div>
                        <div class="col-span-3 border-black p-3">
                            <p>ADMITTING PHYSICIAN:</p>
                            <input type="text"
                                class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="name of physician" name="admitting_physician" autocomplete="off"
                                wire:model.defer="admitting_physician" value="{{ $admitting_physician }}">
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
                                placeholder="N/A if not available" name="admitting_clerk" autocomplete="off"
                                wire:model.defer="admitting_clerk" value="{{ $admitting_clerk }}">
                            <span class="col-start-3 col-span-3 text-base font-[sans-serif] font-medium text-red-600">
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
                    <div class="grid grid-cols-2 border-b-2 border-black h-full">
                        <div class="border-r-2 border-black p-3">
                            <p>TYPE OF ADMISSION :</p>
                            <input type="text"
                                class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="type of admission" name="admission_type" autocomplete="off"
                                wire:model.defer="admission_type" value="{{ $admission_type }}">
                            <span class="col-start-3 col-span-3 text-base font-[sans-serif] font-medium text-red-600">
                                @error('admission_type')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="border-black p-3">
                            <p>REFERRED BY:</p>
                            <input type="text"
                                class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="referred by" name="referred_by" autocomplete="off"
                                wire:model.defer="referred_by" value="{{ $referred_by }}">
                            <span class="col-start-3 col-span-3 text-base font-[sans-serif] font-medium text-red-600">
                                @error('referred_by')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
            @endif

            @if ($currentStep == 4)
                <div class="">
                    {{-- ssc --}}
                    <div class="grid border-b-2 border-black h-full">
                        <div class="border-black grid grid-cols-11 p-3 gap-2 content-center justify-center">
                            <p class="col-span-3">SOCIAL SERVICE CLASSIFICATION :</p>
                            <div class=" col-span-5 grid grid-cols-6">
                                <div class="flex justify-center gap-2">
                                    <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                        name="ssc" value="a" name="ssc" wire:model.defer="ssc"
                                        {{ $ssc == 'a' ? 'checked' : '' }}>
                                    <label>A</label>
                                </div>
                                <div class="flex justify-center gap-2">
                                    <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                        name="ssc" value="b" name="ssc" wire:model.defer="ssc"
                                        {{ $ssc == 'b' ? 'checked' : '' }}>
                                    <label>B</label>
                                </div>
                                <div class="flex justify-center gap-2">
                                    <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                        name="ssc" value="c_one" name="ssc" wire:model.defer="ssc"
                                        {{ $ssc == 'c_one' ? 'checked' : '' }}>
                                    <label>C1</label>
                                </div>
                                <div class="flex justify-center gap-2">
                                    <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                        name="ssc" value="c_two" name="ssc" wire:model.defer="ssc"
                                        {{ $ssc == 'c_two' ? 'checked' : '' }}>
                                    <label>C2</label>
                                </div>
                                <div class="flex justify-center gap-2">
                                    <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                        name="ssc" value="c_three" name="ssc" wire:model.defer="ssc"
                                        {{ $ssc == 'c_three' ? 'checked' : '' }}>
                                    <label>C3</label>
                                </div>
                                <div class="flex justify-center gap-2">
                                    <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                        name="ssc" value="d" name="ssc" wire:model.defer="ssc"
                                        {{ $ssc == 'd' ? 'checked' : '' }}>
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
                                placeholder="allergic to" name="alert_allergic" autocomplete="off"
                                wire:model.defer="alert_allergic" value="{{ $alert_allergic }}">
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
                                placeholder="N/A if not available" name="hospitalization_plan" autocomplete="off"
                                wire:model.defer="hospitalization_plan" value="{{ $hospitalization_plan }}">
                        </div>
                        <div class="col-span-3 border-r-2 border-black p-3 gap-2">
                            <p>HEALTH</p>
                            <p>INSURANCE NAME</p>
                            <input type="text"
                                class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available" name="health_insurance" autocomplete="off"
                                wire:model.defer="health_insurance" value="{{ $health_insurance }}">
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
                                placeholder="N/A if not available" name="coverage_insurance" autocomplete="off"
                                wire:model.defer="coverage_insurance" value="{{ $coverage_insurance }}">
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
                    <div class="grid grid-cols-12 border-b-2 border-black h-full">
                        <div class="col-span-6 border-r-2 border-black p-3 gap-2">
                            <p>DATA FURNISHED BY(signature over printed name)</p>
                            <input type="text"
                                class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                placeholder="name of attendant" name="furnished_by" autocomplete="off"
                                wire:model.defer="furnished_by" value="{{ $furnished_by }}">
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
                                placeholder="N/A if not available" name="informant_address" autocomplete="off"
                                wire:model.defer="informant_address" value="{{ $informant_address }}">
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
                                placeholder="N/A if not available" name="relation_to_patient" autocomplete="off"
                                wire:model.defer="relation_to_patient" value="{{ $relation_to_patient }}">
                            <span class="text-base font-[sans-serif] font-medium text-red-600">
                                @error('relation_to_patient')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

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
                                        autocomplete="off" wire:model.defer="admission_diagnosis"
                                        value="{{ $admission_diagnosis }}">
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
            @endif

            {{-- admissionform_sec --}}
            @if ($currentStep == 5)
                <div class="">
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
                                                autocomplete="off" wire:model.defer="principal_diagnosis"
                                                value="{{ $principal_diagnosis }}">
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
                                                autocomplete="off" wire:model.defer="other_diagnosis"
                                                value="{{ $other_diagnosis }}">
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
                                placeholder="N/A if not available" name="idc_code" autocomplete="off"
                                wire:model.defer="idc_code" value="{{ $idc_code }}">
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
                                                autocomplete="off" wire:model.defer="principal_operation"
                                                value="{{ $principal_operation }}">
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
                                                autocomplete="off" wire:model.defer="other_operation"
                                                value="{{ $other_operation }}">
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
                                placeholder="N/A if not available" name="icpm_code" autocomplete="off"
                                wire:model.defer="icpm_code" value="{{ $icpm_code }}">
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
            @endif

        </div>

        <div class="py-8 grid grid-cols-8 gap-4">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                <button type="button" wire:click="decreaseStep()"
                    class="h-full col-start-5 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200">
                    {{ __('Back') }}</button>
            @endif

            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" wire:click="increaseStep()"
                    class="h-full col-start-6 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200">
                    {{ __('Next') }}</button>
            @endif


            @if ($currentStep == 5)
                <button
                    class="h-full col-start-7 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                    type="submit">{{ __('Submit') }}</button>
            @endif

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
