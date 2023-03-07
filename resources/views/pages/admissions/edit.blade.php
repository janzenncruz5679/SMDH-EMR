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
		}
	</style>
	<div class="addPatient absolute top-[59px] left-[275px] h-full w-[85.3vw] p-12 ">
		@include('layouts.stepper')
		<div class=" h-full w-full">
			<form action="{{ route('admissions.update', $admission->id) }}" method="POST" class="admission-form">
				@csrf
                @method('PATCH')
				<div class=" h-full w-full text-xl tracking-wider border-2 border-black font-[sans-serif]">
					{{-- admissionform_sec --}}
					<div class="form-section">
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

						{{-- sr citizen number --}}
						<div class="grid grid-cols-8 border-b-2 border-black h-full">
							<div class="col-span-2 border-r-2 border-black p-3">
								<label>HEALTH RECORD NO :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="enter latest record #" autocomplete="off"
									value="{{ $admission->patient->id }}" readonly>

							</div>
							<div class="col-span-2 border-r-2 border-black p-3">
								<p>SR CITIZEN NO :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="sr_no" autocomplete="off"
									value="{{ $admission->patient->senior_num }}">

							</div>
							<div class="col-span-2 border-r-2 border-black p-3">
								<p>WARD/ROOM/BED/SERVICE* :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="enter ward/room/bed/service type" name="ward_room_bed_service"
									autocomplete="off" value="{{ $admission->ward_room }}">
							</div>
							<div class="col-span-2 p-3">
								<p>Type:</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="enter old record #" name="type" value="Admission" readonly>
							</div>
						</div>

						{{-- patients name --}}
						<div class="grid grid-cols-12 border-b-2 border-black h-full">
							<div class="border-r-2 border-black flex flex-col items-center justify-center p-3">
								<p>PATIENT'S</p>
								<p>NAME</p>
							</div>
							<div class="col-span-2 border-r-2 border-black p-3">
								<p>Last Name* :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="last name" name="last_name" autocomplete="off"
									value="{{ $admission->patient->lname }}">
								<span class="text-base font-[sans-serif] font-medium text-red-600">
									@error('last_name')
										{{ $message }}
									@enderror
								</span>
							</div>
							<div class="col-span-3 border-r-2 border-black p-3">
								<p>Given Name* :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="given name" name="first_name" autocomplete="off"
									value="{{ $admission->patient->fname }}">
								<span class="text-base font-[sans-serif] font-medium text-red-600">
									@error('first_name')
										{{ $message }}
									@enderror
								</span>
							</div>
							<div class="col-span-3 border-r-2 border-black p-3">
								<p>Middle Name :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="middle_name" autocomplete="off"
									value="{{ $admission->patient->mname }}">
							</div>
							<div class="col-span-3 border-black p-3">
								<p>Suffix :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="suffix" autocomplete="off"
									value="{{ $admission->patient->suffix }}">
							</div>

						</div>

						{{-- personal info --}}
						<div class="grid grid-cols-12 border-b-2 border-black h-full">
							<div class="col-span-2 border-r-2 border-black p-3">
								<p>BIRTHDATE* :</p>
								<input type="date" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer" placeholder="birthday" name="birthday" id="birthday" autocomplete="off"
									value="{{ $admission->patient->bdate->toDateString() }}">
								<span class="text-base font-[sans-serif] font-medium text-red-600">
									@error('birthday')
										{{ $message }}
									@enderror
								</span>
							</div>
							<div class="border-r-2 col-span-2 border-black p-3">
								<p>AGE* :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="age" name="age" id="age" autocomplete="off"
									value="{{ $admission->patient->bdate->age }}" readonly>
							</div>
							<div class="col-span-2 border-r-2 border-black p-3">
								<p>BIRTHPLACE* :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="birthplace" name="birthplace" autocomplete="off"
									value="{{ $admission->patient->birth_place }}">
							</div>
							<div class="col-span-2 border-r-2 border-black p-3">
								<p>NATIONALITY* :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="nationality" name="nationality" autocomplete="off"
									value="{{ $admission->patient->nationality }}">
								<span class="text-base font-[sans-serif] font-medium text-red-600">
									@error('nationality')
										{{ $message }}
									@enderror
								</span>
							</div>
							<div class="col-span-2 border-r-2 border-black p-3">
								<p>RELIGION* :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="religion" name="religion" autocomplete="off"
									value="{{ $admission->patient->religion }}">
								<span class="text-base font-[sans-serif] font-medium text-red-600">
									@error('religion')
										{{ $message }}
									@enderror
								</span>
							</div>
							<div class="col-span-2 border-black p-3">
								<p>OCCUPATION :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="occupation" autocomplete="off"
									value="{{ $admission->patient->occupation }}">
							</div>
						</div>

						{{-- personal info second --}}
						<div class="grid grid-cols-12 border-b-2 border-black h-full">

							<div class="col-span-2 border-r-2 border-black p-3">
								<label>TEL. NO.* :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="enter cellular phone #" name="phone" maxlength="11"
									autocomplete="off" value="{{ $admission->patient->contact_num }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label class="pb-2">SEX* :</label>
								<div class="w-full flex justify-start gap-4">
									<div class="inline">
										<input class="scale-150 cursor-pointer accent-blue-300" type="radio" value="Male" name="gender" {{ $admission->patient->sex == 'Male' ? 'checked' : '' }}>
										<label>M</label>
									</div>
									<div class="inline">
										<input class="scale-150 cursor-pointer accent-blue-300" type="radio" value="Female" name="gender" {{ $admission->patient->sex == 'Female' ? 'checked' : '' }}>
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
								<label class="pb-2">CIVIL STATUS* :</label>
								<div class="w-full flex justify-around">
									@php
										$_civil_status = [
										    'S' => 'Single',
										    'D' => 'Divorced',
										    'SEP' => 'Separated',
										    'C' => 'Common Law',
										    'W' => 'Widowed',
										    'M' => 'Married',
										    'N' => 'Neutral',
										];
									@endphp
									@foreach ($_civil_status as $k => $v)
										<div class="inline">
											<input class="scale-150 cursor-pointer accent-blue-300" type="radio" value="{{ $v }}" name="civil_status" {{ $admission->patient->civil_status == $v ? 'checked' : '' }}>
											<label>{{ $k }}</label>
										</div>
									@endforeach
								</div>
							</div>
						</div>
						{{-- empty border --}}
						<div class="border-b-2 border-black h-8"></div>
					</div>

					{{-- admissionform_sec --}}
					<div class="form-section">
						{{-- patient->asd --}}
						<div class="grid grid-cols-7 border-b-2 border-black h-full">
							<div class=" border-r-2 border-black p-3">
								<label>STREET* :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer" placeholder="street" name="street" id="street"
									autocomplete="off" value="{{ $admission->patient->address['street'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>MUNICIPALITY* :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="municipality" name="municipality" id="municipality"
									autocomplete="off" value="{{ $admission->patient->address['municipality'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>PROVINCE :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="province" name="province" autocomplete="off"
									value="{{ $admission->patient->address['province'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>REGION* :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="region" name="region" autocomplete="off"
									value="{{ $admission->patient->address['region'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>BARANGAY* :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="barangay" name="barangay" autocomplete="off"
									value="{{ $admission->patient->address['barangay'] }}">
							</div>
							<div class="border-r-2 border-black p-3">
								<label>ZIP CODE :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="zip code" name="zip_code" autocomplete="off"
									value="{{ $admission->patient->address['zip_code'] }}">
							</div>
							<div class=" border-black p-3">
								<label>COUNTRY :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="country" name="country" autocomplete="off"
									value="{{ $admission->patient->address['country'] }}">
							</div>
						</div>
						{{-- empty border --}}
						<div class="border-b-2 border-black h-8">
							<label>CONTACT PERSON</label>
						</div>
						<div class="grid grid-cols-7 border-b-2 border-black h-full">
							<div class=" border-r-2 border-black p-3">
								<label>LAST NAME :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="contact last name" name="contact_last" id="contact_last"
									autocomplete="off" value="{{ $admission->patient->emergency_contact['lname'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>FIRST NAME :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="contact first name" name="contact_first"
									id="contact_first" autocomplete="off" value="{{ $admission->patient->emergency_contact['fname'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>MIDDLE NAME :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="contact middle name" name="contact_middle"
									id="contact_middle" autocomplete="off" value="{{ $admission->patient->emergency_contact['mname'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>SUFFIX :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="contact suffix" name="contact_suffix" id="contact_suffix"
									autocomplete="off" value="{{ $admission->patient->emergency_contact['suffix'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>ADDRESS :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="contact address" name="contact_address"
									id="contact_address" autocomplete="off" value="{{ $admission->patient->emergency_contact['address'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>PHONE :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="contact address" name="contact_phone" id="contact_phone"
									autocomplete="off" value="{{ $admission->patient->emergency_contact['contact'] }}">
							</div>
							<div class=" border-r-2 border-black p-3">
								<label>RELATION TO PATIENT :</label>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-auto" placeholder="relation to patient" name="contact_rtp" id="contact_rtp"
									autocomplete="off" value="{{ $admission->patient->emergency_contact['relationship'] }}">
							</div>
						</div>

						<div class="grid border-b-2 border-black h-full">
							<div class=" border-r-2 border-black p-3">
								<p>PERMANENT ADDRESS* :</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="enter permanent address" name="perma_address" autocomplete="off"
									value="{{ $admission->patient->perma_address }}">
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
						{{-- empty border --}}
						<div class="border-b-2 border-black h-8"></div>
						{{-- employee --}}
						<div class="grid grid-cols-9 border-b-2 border-black h-full">
							<div class="col-span-3 border-r-2 border-black p-3">
								<p>EMPLOYER(Type of Business)</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="employer_name" autocomplete="off"
									value="{{ $admission->patient->relatives['employer']['name'] ?? '' }}">
							</div>
							<div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
								<p>ADDRESS</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="employer_address" autocomplete="off"
									value="{{ $admission->patient->relatives['employer']['address'] ?? '' }}">
							</div>
							<div class="col-span-3 border-black flex flex-col items-center p-3">
								<p>TEL. NO.</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="employer_phone" autocomplete="off"
									value="{{ $admission->patient->relatives['employer']['contact'] ?? '' }}">
							</div>
						</div>

						{{-- father --}}
						<div class="grid grid-cols-9 border-b-2 border-black full">
							<div class="col-span-3 border-r-2 border-black p-3">
								<p>FATHER'S NAME</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="father_name" autocomplete="off"
									value="{{ $admission->patient->relatives['father']['name'] ?? '' }}">
							</div>
							<div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
								<p>ADDRESS</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="father_address" autocomplete="off"
									value="{{ $admission->patient->relatives['father']['address'] ?? '' }}">
							</div>
							<div class="col-span-3
                                    border-black flex flex-col items-center p-3">
								<p>TEL. NO.</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="father_phone" autocomplete="off"
									value="{{ $admission->patient->relatives['father']['contact'] ?? '' }}">
							</div>
						</div>

						{{-- mother --}}
						<div class="grid grid-cols-9 border-b-2 border-black h-full">
							<div class="col-span-3 border-r-2 border-black flex flex-col items-start p-3">
								<p>MOTHER'S(MAIDEN) NAME</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="mother_maiden_name" autocomplete="off"
									value="{{ $admission->patient->relatives['mother']['name'] ?? '' }}">
							</div>
							<div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
								<p>ADDRESS</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="mother_address" autocomplete="off"
									value="{{ $admission->patient->relatives['mother']['address'] ?? '' }}">
							</div>
							<div class="col-span-3 border-black flex flex-col items-center p-3">
								<p>TEL. NO.</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="mother_phone" autocomplete="off"
									value="{{ $admission->patient->relatives['mother']['contact'] ?? '' }}">
							</div>
						</div>

						{{-- spouse --}}
						<div class="grid grid-cols-9 border-b-2 border-black h-full">
							<div class="col-span-3 border-r-2 border-black p-3">
								<p>SPOUSE NAME</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="spouse_name" autocomplete="off"
									value="{{ $admission->patient->relatives['spouse']['name'] ?? '' }}">
							</div>
							<div class="col-span-3 border-r-2 border-black flex flex-col items-center p-3">
								<p>ADDRESS</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="spouse_address" autocomplete="off"
									value="{{ $admission->patient->relatives['spouse']['address'] ?? '' }}">
							</div>
							<div class="col-span-3 border-black flex flex-col items-center p-3">
								<p>TEL. NO.</p>
								<input type="text" class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="spouse_phone" autocomplete="off"
									value="{{ $admission->patient->relatives['spouse']['contact'] ?? '' }}">
							</div>
						</div>
						{{-- empty border --}}
						<div class=" border-black h-8"></div>
					</div>

					{{-- admissionform_sec --}}
					<div class="form-section">
						{{-- Admission --}}
						<div class="grid grid-cols-12 border-b-2 border-black h-full">
							<div class="col-span-3 border-r-2 border-black grid gap-2 p-3">
								<p>ADMISSION*</p>
								<div class=" grid grid-rows-2 gap-2">
									<div class="grid gap-2">
										<div class="grid grid-cols-5 items-center gap-2">
											<p class="col-start-2">Date*: </p>
											<div class="col-span-3">
												<input type="date" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer" name="start_date" id="start_date"
													value="{{ $admission->admission_start->toDateString() }}">
											</div>
										</div>
									</div>
									<div class="grid gap-2">
										<div class="grid grid-cols-5 items-center gap-2">
											<p class="col-start-2">Time*: </p>
											<div class="col-span-3">
												<input type="time" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer" name="start_time" id="start_time"
													value="{{ $admission->admission_start->toTimeString() }}">
											</div>
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
												<input type="date" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer" name="end_date" id="end_date"
													value="{{ $admission->admission_end->toDateString() }}">
											</div>
										</div>
									</div>
									<div class="grid gap-2">
										<div class="grid grid-cols-5 items-center gap-2">
											<p class="col-start-2">Time*: </p>
											<div class="col-span-3">
												<input type="time" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 cursor-pointer" name="end_time" id="end_time"
													value="{{ $admission->admission_end->toTimeString() }}">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class=" col-span-3 border-r-2 border-black p-3">
								<p>TOTAL NO. OF DAYS:</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="# of days" name="total_days" id="total_days"
									value="{{ $admission->admission_start_end_diff }}" readonly>
							</div>
							<div class="col-span-3 border-black p-3">
								<p>ADMITTING PHYSICIAN:</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="name of physician" name="admitting_physician" id="admitting_physician"
									value="{{ $admission->physician }}" autocomplete="off">
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
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="admitting_clerk" id="admitting_clerk"
									value="{{ $admission->admitting_clerk }}" autocomplete="off">
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
										<input class="scale-150 cursor-pointer accent-blue-300" type="radio" value="New" name="admission_type" {{ $admission->type == 'New' ? 'checked' : '' }}>
										<label>New</label>
									</div>
									<div class="inline">
										<input class="scale-150 cursor-pointer accent-blue-300" type="radio" value="Old" name="admission_type" {{ $admission->type == 'Old' ? 'checked' : '' }}>
										<label>Old</label>
									</div>
									<div class="inline">
										<input class="scale-150 cursor-pointer accent-blue-300" type="radio" value="Former OPD" name="admission_type" {{ $admission->type == 'Former OPD' ? 'checked' : '' }}>
										<label>Former OPD</label>
									</div>
								</div>
							</div>
							<div class="col-span-3 border-black p-3">
								<p>REFERRED BY:</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="referred by" name="referred_by" id="referred_by"
									value="{{ $admission->referred_by }}" autocomplete="off">
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
										<input class="scale-125 cursor-pointer accent-blue-300" type="radio" value="a" name="ssc" {{ $admission->ssc == 'a' ? 'checked' : '' }}>
										<label>A</label>
									</div>
									<div class="flex justify-center gap-2">
										<input class="scale-125 cursor-pointer accent-blue-300" type="radio" value="b" name="ssc" {{ $admission->ssc == 'b' ? 'checked' : '' }}>
										<label>B</label>
									</div>
									<div class="flex justify-center gap-2">
										<input class="scale-125 cursor-pointer accent-blue-300" type="radio" value="c_one" name="ssc" {{ $admission->ssc == 'c_one' ? 'checked' : '' }}>
										<label>C1</label>
									</div>
									<div class="flex justify-center gap-2">
										<input class="scale-125 cursor-pointer accent-blue-300" type="radio" value="c_two" name="ssc" {{ $admission->ssc == 'c_two' ? 'checked' : '' }}>
										<label>C2</label>
									</div>
									<div class="flex justify-center gap-2">
										<input class="scale-125 cursor-pointer accent-blue-300" type="radio" value="c_three" name="ssc" {{ $admission->ssc == 'c_three' ? 'checked' : '' }}>
										<label>C3</label>
									</div>
									<div class="flex justify-center gap-2">
										<input class="scale-125 cursor-pointer accent-blue-300" type="radio" value="d" name="ssc" {{ $admission->ssc == 'd' ? 'checked' : '' }}>
										<label>D</label>
									</div>
								</div>
								{{-- <div class="col-span-2">
                                    <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('ssc')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div> --}}
							</div>
						</div>

						{{-- empty border --}}
						<div class="border-b-2 border-black h-8"></div>

						{{-- alert allergic to --}}
						<div class="grid grid-cols-12 border-b-2 border-black h-full">
							<div class="col-span-2 border-r-2 border-black p-3 gap-2">
								<p>ALERT</p>
								<p>ALLERGIC TO:</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="allergic to" name="alert_allergic" id="alert_allergic" autocomplete="off"
									value="{{ $admission->alergy }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('alert_allergic')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
							</div>
							<div class="col-span-4 border-r-2 border-black p-3 gap-2">
								<p>HOSPITALIZATION PLAN</p>
								<p>COMPANY/INDUSTRIAL NAME</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="hospitalization_plan" id="hospitalization_plan"
									autocomplete="off" value="{{ $admission->insurance['hospitalization_plan'] }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('hospitalization_plan')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
							</div>
							<div class="col-span-3 border-r-2 border-black p-3 gap-2">
								<p>HEALTH</p>
								<p>INSURANCE NAME</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" name="health_insurance" id="health_insurance" placeholder="N/A if not available"
									autocomplete="off" value="{{ $admission->insurance['health_insurance'] }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('health_insurance')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
							</div>
							<div class="col-span-3 border-black p-3 gap-2">
								<p>TYPE OF INSURANCE</p>
								<p>COVERAGE</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" name="coverage_insurance" id="coverage_insurance" placeholder="N/A if not available"
									autocomplete="off" value="{{ $admission->insurance['coverage_insurance'] }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('coverage_insurance')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
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
										<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="admission_diagnosis" id="admission_diagnosis"
											autocomplete="off" value="{{ $admission->diagnosis['admission_diagnosis'] }}">
									</div>
								</div>
								{{-- <div class="grid grid-cols-10">
                                    <span
                                        class="col-start-3 col-span-2 text-base font-[sans-serif] font-medium text-red-600">
                                        @error('admission_diagnosis')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div> --}}
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
												<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="principal_diagnosis"
													id="principal_diagnosis" autocomplete="off" value="{{ $admission->diagnosis['principal_diagnosis'] }}">
											</div>
										</div>
										{{-- <div class="grid grid-cols-4">
                                            <span class="col-start-2 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('principal_diagnosis')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div> --}}
									</div>
									<div class="grid gap-2">
										<div class="grid grid-cols-4 items-center">
											<p>OTHER DIAGNOSIS :</p>
											<div class="col-span-3">
												<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="other_diagnosis" id="other_diagnosis"
													autocomplete="off" value="{{ $admission->diagnosis['other_diagnosis'] }}">
											</div>
										</div>
										{{-- <div class="grid grid-cols-4">
                                            <span class="col-start-2 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('other_diagnosis')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div> --}}
									</div>
								</div>
							</div>
							<div class="col-span-3 border-black p-3">
								<p>IDC CODE NO.</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="idc_code" id="idc_code" autocomplete="off"
									value="{{ $admission->idc_code }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('idc_code')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
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
												<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="principal_operation"
													id="principal_operation" autocomplete="off" value="{{ $admission->additional_operation_procedure['principal_operation'] }}">
											</div>
										</div>
										{{-- <div class="grid grid-cols-5">
                                            <span class="col-start-3 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('principal_operation')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div> --}}
									</div>
									<div class="grid gap-2">
										<div class="grid grid-cols-5 items-center">
											<p class="col-span-2">OTHER OPERATION PROCEDURE :</p>
											<div class="col-span-3">
												<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="other_operation" id="other_operation"
													autocomplete="off" value="{{ $admission->additional_operation_procedure['other_operation'] }}">
											</div>
										</div>
										{{-- <div class="grid grid-cols-5">
                                            <span class="col-start-3 text-base font-[sans-serif] font-medium text-red-600">
                                                @error('other_operation')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div> --}}
									</div>
								</div>
							</div>
							<div class="col-span-3 border-black p-3">
								<p>ICPM CODE</p>
								<input type="text" class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2" placeholder="N/A if not available" name="icpm_code" id="icpm_code" autocomplete="off"
									value="{{ $admission->icpm_code }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('icpm_code')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
							</div>
						</div>

						{{-- empty border --}}
						{{-- <div class="h-full flex justify-end">
                            <div
                                class="flex flex-row p-2 gap-4 items-center border-l-2 border-t-2 border-black w-50 px-[10px]">
                                <p>000000000000000000000001</p>
                                <p>12/8/2022</p>
                                <p>8:30AM</p>
                            </div>
                        </div> --}}
					</div>

				</div>
				<div class="form-navigation py-8 grid grid-cols-8 gap-4">
					<button class="previous h-full col-start-6 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200" type="button">Previous</button>
					<button class="next h-full col-start-7 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200" type="button">Next</button>
					<button class="h-full col-start-8 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200" type="submit">Submit</button>
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
