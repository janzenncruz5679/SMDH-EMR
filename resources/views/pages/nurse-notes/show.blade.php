@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
	{{-- <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
        }
    </style> --}}
	<div class="grid absolute h-[94%] w-[86%] left-[275px] top-[59px] p-12">
		<div class="grid grid-rows-6 w-full">
			<div class=" h-full w-full">
				{{-- <form action="{{ route('submitVitals') }}" method="POST" enctype="multipart/form-data" class="admission-form">
                    @csrf --}}
				<div class="h-full
                     w-full text-xl tracking-wider border-2 border-black font-[sans-serif]">
					{{-- admissionform_sec --}}
					<div class="form-section">
						<div class="grid grid-cols-8 border-b-2 border-black h-full">
							<div class="col-span-4 border-r-2 border-black p-3">
								<label>NAME :</label>
								<input type="text"
									class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
									placeholder="Patient Full Name" name="patient_fullname" autocomplete="off"
									value="{{ $nurseNote->patient->full_name }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
							</div>
							<div class="col-span-2 border-r-2 border-black p-3">
								<label>AGE* :</label>
								<input type="text"
									class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
									placeholder="Patient Age" name="age" autocomplete="off" value="{{ $nurseNote->patient->bdate->age }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
							</div>
							<div class="col-span-2 border-r-2 border-black p-3">
								<label>WARD* :</label>
								<input type="text"
									class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
									placeholder="Ward #" name="ward" autocomplete="off" value="{{ $nurseNote->ward_room }}">
								{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('patient_fullname')
                                        {{ $message }}
                                    @enderror
                                </span> --}}
							</div>
						</div>
						<div class="p-3 grid gap-3">
							<label class=" text-xl text-[#003D33] font-semibold tracking-wider">Observation</label>
							<div class="grid grid-cols-8 h-full gap-4">
								<div class="grid gap-3">
									<div class="grid">
										<label>DATE* :</label>
										<input type="date"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											name="obsDate[]" autocomplete="off" value="{{ $nurseNote->date_time->toDateString() ?? '' }}">
									</div>
									{{-- <span class="text-base font-[sans-serif] font-medium text-red-600">
                                        @error('patient_fullname')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
									<div class="grid">
										<label>TIME* :</label>
										<input type="time"
											class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
											name="obsTime[]" autocomplete="off" value="{{ $nurseNote->date_time->toTImeString() ?? '' }}">
									</div>
								</div>
								<div class="col-span-2">
									<label>FOCUS* :</label>
									<textarea type="text"
									 class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
									 placeholder="focus" name="obsFocus[]" autocomplete="off" readonly>{{ $nurseNote->focus ?? '' }}</textarea>
								</div>
								<div class="col-span-5">
									<label>DATA ACTION AND RESPONSE* :</label>
									<textarea type="text"
									 class="w-full h-[82%] resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
									 placeholder="action response" name="obsDar[]" autocomplete="off" readonly>{{ $nurseNote->action ?? '' }}</textarea>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="py-8 grid grid-cols-8 gap-4">
					<a class=" col-end-7 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]" href="#"
						onclick="javascript:window.history.back(-1);return false;">
						<div
							class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
							Back
						</div>
					</a>
				</div>

				{{-- </form> --}}
			</div>
		</div>
	</div>
@endsection
