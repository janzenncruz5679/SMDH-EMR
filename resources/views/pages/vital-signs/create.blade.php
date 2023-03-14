@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
	<div class="grid absolute h-[94%] w-[86%] left-[275px] top-[59px] p-12">
		{{-- @include('layouts.stepper') --}}
		<div class="grid grid-rows-6 w-full">
			<div class=" h-full w-full">
				<form action="{{ route('patients.vital-signs.store', $patient->id) }}" method="POST" enctype="multipart/form-data"
					class="admission-form">
					@csrf
					<div class="h-full
                     w-full text-lg tracking-wider border-2 border-black font-[sans-serif]">
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

							{{-- address --}}
							<div class="grid grid-cols-8 border-b-2 border-black h-full">
								<div class="col-span-5 border-r-2 border-black p-3">
									<p>PATIENT'S FULL NAME* :</p>
									<input type="text" readonly
										class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
										placeholder="enter address" name="patient_fullname" autocomplete="off" value="{{ $patient->full_name }}">
									{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
								</div>
								<div class="col-span-3 border-r-2 border-black p-3">
									<p>BIRTHDATE* :</p>
									<input type="date" readonly
										class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
										placeholder="enter address" name="birthdate" autocomplete="off" value="{{ $patient->bdate->toDateString() }}">
									{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
								</div>
							</div>
							<div class="grid grid-cols-8 border-b-2 border-black h-full">
								<div class="col-span-3 border-r-2 border-black p-3">
									<div class="grid">
										<label class="pb-2">SEX* :</label>
										<div class="grid grid-cols-6">
											<div class="inline">
												<input readonly class="scale-150 cursor-pointer accent-blue-300" type="radio" value="Male" name="gender"
													{{ $patient->sex == 'Male' ? 'checked' : '' }}>
												<label>Male</label>
											</div>
											<div class="inline col-span-2">
												<input readonly class="scale-150 cursor-pointer accent-blue-300" type="radio" value="Female" name="gender"
													{{ $patient->sex == 'Female' ? 'checked' : '' }}>
												<label>Female</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-span-5 border-black p-3">
									<p>PHYSICIAN :</p>
									<input type="text"
										class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
										placeholder="enter address" name="physician" autocomplete="off" value="{{ old('physician') }}">
									{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
								</div>
							</div>
							<div class="grid border-b-2 border-black h-full">
								<div class="grid p-3">
									<label class="pb-2">DOCTOR'S NOTE :</label>
									<textarea type="text"
									 class="w-full h-20 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
									 placeholder="enter doctor's note to the patient" name="notes" autocomplete="off" value="{{ old('notes') }}"></textarea>

								</div>
							</div>
						</div>

						<div class="form-section">
							<div class="pb-3">
								<div class=" grid px-3 py-2 text-xl text-[#003D33] font-semibold tracking-wider">
									<label></label>
								</div>
								<div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
									<div>
										<label>Date:</label>
										<input type="date"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											name="date[]" autocomplete="off" value="{{now()->toDateString()}}">
									</div>
									<div>
										<label>Weight:</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="weight" name="weight[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Temperature:</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="temperature" name="temperature[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Blood Pressure:</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="blood pressure" name="blood_pressure[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Blood Pressure:</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="pulse rate" name="pulse[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Respiration</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="respiration" name="respiration[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Pain</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="pain" name="pain[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Initials</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="initials" name="initials[]" autocomplete="off" value="">
									</div>
								</div>
							</div>
							<div class="pb-3">
								<div class=" grid px-3 py-2 text-xl text-[#003D33] font-semibold tracking-wider">
									<label></label>
								</div>
								<div class=" grid grid-cols-8 h-full w-full px-3 gap-2">
									<div>
										<label>Date:</label>
										<input type="date"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											name="date[]" autocomplete="off" value="{{now()->toDateString()}}">
									</div>
									<div>
										<label>Weight:</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="weight" name="weight[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Temperature:</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="temperature" name="temperature[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Blood Pressure:</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="blood pressure" name="blood_pressure[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Blood Pressure:</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="pulse rate" name="pulse[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Respiration</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="respiration" name="respiration[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Pain</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="pain" name="pain[]" autocomplete="off" value="">
									</div>
									<div>
										<label>Initials</label>
										<input type="text"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											placeholder="initials" name="initials[]" autocomplete="off" value="">
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="form-navigation py-8 grid grid-cols-8 gap-4">
						{{-- <button
							class="previous h-full col-start-5 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
							type="button">Previous</button>
						<button
							class="next h-full col-start-6 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
							type="button">Next</button> --}}
						<button
							class="h-full col-start-7 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
							type="submit">Submit</button>

						{{-- <a class=" col-start-8 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
							href="">
							<div
								class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
								{{ __('Print') }}
							</div>
						</a> --}}
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
@endsection

@push('custom_scripts')
	@vite('resources/js/stationPage/addInput.js')
@endpush
