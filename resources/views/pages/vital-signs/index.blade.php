@extends('layouts.main')

@section('content')
	<div class="fixed h-full w-[86%] left-[275px] top-[59px] p-12 text-2xl font-[sans-serif]">
		<div class="h-16 w-full z-0">
			<div class="h-20 bg-blue-300 flex items-center justify-center">
				<label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
					{{ __('Vital Signs') }}</label>
			</div>
			<div class="admissionDisplay w-full relative pt-4 -z-10">
				<div class="admissionSearchbar h-[7%] flex">
					<div class="searchBar relative h-full w-[40vw] flex justify-start items-center gap-[15px]">
						<form action="" method="GET" class="flex gap-[20px] m-0 h-full items-center">
							@csrf
							<input type="text" placeholder="Search Patient Name" name="query"
								class="h-12 w-[18vw] text-[1.5rem] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 focus:outline-offset-2 rounded-[10px] px-[10px]"
								required>
							<button
								class="h-[4.7vh] w-[6vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"
								type="submit" value="search">
								<p class="hover:text-zinc-900">Search</p>
							</button>
						</form>

					</div>
					<div class="addpatientBar h-full w-full flex items-center justify-end">
						<button
							class="btnAddpatient h-[4.7vh] w-[10vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
								href="{{ route('patients.vital-signs.create', $patient->id) }}" class='hover:text-white'>
								<p class="hover:text-zinc-900">Add New Vitals</p>
							</a></button>
					</div>
				</div>
				<div class="admissionTable pt-[5px]">
					<table class="text-[1.5rem] tracking-[2px] w-full">
						<tr class="grid grid-cols-12">
							<th class="flex justify-center">Id</th>
							<th class="col-span-5 flex justify-center">Name</th>
							<th class="flex justify-center">Age</th>
							<th class="flex justify-center">Gender</th>
							<th class="col-span-2 flex justify-center">Phone</th>
							<th class="col-span-2 flex justify-center">Actions</th>
						</tr>
						@foreach ([] as $vitalsignsData)
							<tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
								<td class="flex justify-center">{{ $vitalsignsData->id }}</td>
								<td class="col-span-5 flex justify-center">{{ $vitalsignsData->patient_fullname }}
								</td>
								<td class="flex justify-center">{{ $vitalsignsData->birthdate }}</td>
								<td class="flex justify-center">{{ $vitalsignsData->gender }}</td>
								<td class="col-span-2 flex justify-center">{{ $vitalsignsData->physician }}</td>
								<td class="col-span-2 flex justify-center">
									<div class="grid grid-cols-3 justify-center gap-4">
										<a href="{{ route('viewVitals', ['id' => $vitalsignsData->id]) }}" class="editIcon hover:text-blue-300">
											<i class="fa-solid fa-eye"></i>
										</a>
										<a href="{{ route('updateVitals', ['id' => $vitalsignsData->id]) }}" class="editIcon hover:text-blue-300">
											<i class="fa-solid fa-edit"></i>
										</a>
										<a href="{{ route('viewpdfVitals', ['id' => $vitalsignsData->id]) }}" class="editIcon hover:text-blue-300"
											target="_blank">
											<i class="fa-solid fa-file-pdf"></i>
										</a>
										{{-- <a href="{{ url('/patientPage/savepdfAdmission' . $vitalsignsData->id) }}"
                                        class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </a> --}}
									</div>
								</td>
							</tr>
						@endforeach
						{{-- <tr class="grid grid-cols-12">
                        <th class="flex justify-center">Id</th>
                        <th class="col-span-5 flex justify-center">Name</th>
                        <th class="flex justify-center">Age</th>
                        <th class="flex justify-center">Gender</th>
                        <th class="col-span-2 flex justify-center">Phone</th>
                        <th class="col-span-2 flex justify-center">Actions</th>
                    </tr>

                    <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                        <td class="flex justify-center"></td>
                        <td class="col-span-5 flex justify-center">
                        </td>
                        <td class="flex justify-center"></td>
                        <td class="flex justify-center"></td>
                        <td class="col-span-2 flex justify-center"></td>
                        <td class="col-span-2 flex justify-center">
                            <div class="grid grid-cols-2 justify-center gap-4">
                                <a href="{{ url('/patientPage/viewAdmission') }}" class="editIcon hover:text-blue-300">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ url('/patientPage/updateAdmission') }}" class="editIcon hover:text-blue-300">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr> --}}

					</table>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('custom_scripts')
	@vite('resources/js/billingPage/dropdown.js')
@endpush
