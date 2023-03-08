@extends('layouts.main')

@section('content')
	<div class="fixed h-full w-[86%] left-[275px] top-[59px] p-12 text-2xl font-[sans-serif]">
		<div class="h-16 w-full z-0">
			<div class="h-20 bg-blue-300 flex items-center justify-center">
				<label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
					{{ __('Nurse Notes') }}</label>
			</div>
			<div class="admissionDisplay w-full relative pt-4 -z-10">
				<div class="admissionSearchbar h-full flex">
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
								href="{{ route('patients.nurse-notes.create', $patient->id) }}" class='hover:text-white'>
								<p class="hover:text-zinc-900">Add New Notes</p>
							</a></button>
					</div>
				</div>
				<div class="admissionTable pt-[5px]">
					<table class="tracking-[2px] w-full">
						<thead>
							<tr class="flex justify-between">
								<th class="shrink">Id</th>
								<th>Name</th>
								<th>Age</th>
								<th>Ward</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody class="">
							@forelse ($nurseNotes as $nurseNote)
								<tr class="flex justify-between even:bg-gray-200 odd:bg-white text-xl text-center">
									<td class="shrink">{{ $nurseNote->id }}</td>
									<td class="">{{ $nurseNote->patient_fullname }}</td>
									<td class="">{{ $nurseNote->age }}</td>
									<td class="">{{ $nurseNote->ward }}</td>
									<td class="">
										<div class=" ">
											<a href="{{ route('viewNurseNotes', ['id' => $nurseNote->id]) }}" class="editIcon hover:text-blue-300">
												<i class="fa-solid fa-eye"></i>
											</a>
											<a href="{{ route('updateNurseNotes', ['id' => $nurseNote->id]) }}" class="editIcon hover:text-blue-300">
												<i class="fa-solid fa-edit"></i>
											</a>
											<a href="{{ route('viewpdfNurseNotes', ['id' => $nurseNote->id]) }}" class="editIcon hover:text-blue-300"
												target="_blank">
												<i class="fa-solid fa-file-pdf"></i>
											</a>
										</div>
									</td>
								</tr>
							@empty
								<tr class="flex justify-between even:bg-gray-200 odd:bg-white text-xl text-center">
									<td colspan="5" class="m-auto">No Notes Yet</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('custom_scripts')
	@vite('resources/js/billingPage/dropdown.js')
@endpush
