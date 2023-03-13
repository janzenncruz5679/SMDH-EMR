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
				</div>
				<div class="admissionTable pt-[5px]">
					<table class="text-[1.5rem] tracking-[2px] w-full table-auto text-center">
						<tr class=" ">
							<th class=""></th>
							<th class=" ">Name</th>
							<th class="">Age</th>
							<th class="">Gender</th>
							<th class=" "></th>
						</tr>
						@foreach ($patients as $patient)
							<tr class="  even:bg-gray-200 odd:bg-white text-xl">
								<th class="">{{ $loop->iteration }}</td>
								<td class="capitalize">
									{{ $patient->full_name }}
								</td>
								<td class="">{{ $patient->bdate->age }}</td>
								<td class="">{{ $patient->sex }}</td>
								<td class=" ">
									<div class=" ">
										<a href="{{ route('patients.vital-signs.show-physicians', $patient->id) }}"
											class="editIcon hover:text-blue-300">
											<i class="fa-solid fa-eye"></i>
										</a>
									</div>
								</td>
							</tr>
						@endforeach

					</table>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('custom_scripts')
	@vite('resources/js/billingPage/dropdown.js')
@endpush
