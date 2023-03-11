@extends('layouts.main')

@section('content')
	<div class="fixed h-full w-[86%] left-[275px] top-[59px] p-12 text-2xl font-[sans-serif]">
		<div class="h-16 w-full z-0">
			<div class="w-full flex flex-col gap-2 ">
				<div
					class="dropdown-header grid grid-cols-12 border-4 border-blue-300 bg-blue-100 px-3 py-1 text-2xl font-[sans-serif]">
					<label class="col-span-11 focus:bg-blue-300">
						Menu
					</label>
					<i class="self-center justify-self-end fa-solid fa-caret-down cursor-pointer"></i>
				</div>
				<div class="dropdown hidden w-full bg-blue-100 border-4 border-blue-300 list-none">
					<a class="h-full w-full hover:text-black" href="{{ url('patientPage') }}">
						<li class="w-full hover:bg-blue-300 hover:text-white px-3 py-1">Menudo</li>
					</a>
					<a class="h-full w-full hover:text-black" href="{{ url('patientPage') }}">
						<li class="w-full hover:bg-blue-300 hover:text-white px-3 py-1">Menudo</li>
					</a>
					<a class="h-full w-full hover:text-black" href="{{ url('patientPage') }}">
						<li class="w-full hover:bg-blue-300 hover:text-white px-3 py-1">Menudo</li>
					</a>
				</div>
			</div>
		</div>
		<div class="admissionDisplay w-full relative pt-4 -z-10">
			<div class="admissionSearchbar h-[7%] flex">
				<div class="searchBar relative h-full w-[40vw] flex justify-start items-center gap-[15px]">
					<form action="{{ url('/patientPage/admission/search') }}" method="GET"
						class="flex gap-[20px] m-0 h-full items-center">
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

				<table class="text-lg table-auto tracking-[2px] w-full">
					<thead>
						<tr class="">
							<th class="">Date</th>
							<th class="">Bill Status</th>
							<th class=" ">Name</th>
							<th class=" "> Total </th>
							<th class=" "> Medicine </th>
							<th class=" "> Lab </th>
							<th class=" "> X-ray </th>
							<th class=" "> ECG </th>
							<th class=" "> Oxygen </th>
							<th class=" "> NBS </th>
							<th class=" "> Income </th>
							<th class=""></th>
						</tr>
					</thead>
					<tbody class="text-center">
						@forelse ($billings as $billing)
							<tr class="  even:bg-gray-200 odd:bg-white text-lg">
								<td class="">{{ $billing->updated_at->format('M d, Y') }}</td>
								<td class="">{{ $billing->is_billed ? 'Paid' : 'Unpaid' }}</td>
								<td class=" ">{{ $billing->patient->full_name }}</td>
								<td class=" "> Total </td>
								<td class=" "> Medicine </td>
								<td class=" "> Lab </td>
								<td class=" "> X-ray </td>
								<td class=" "> ECG </td>
								<td class=" "> Oxygen </td>
								<td class=" "> NBS </td>
								<td class=" "> Income </td>
								<td class="">
									<div class="grid grid-cols-2 justify-center gap-2">
										<a href="{{ route('records.billings.create') }}" class="editIcon hover:text-blue-300">
											<i class="fa-solid fa-file-invoice"></i>
										</a>
										<a href="" class="editIcon hover:text-blue-300">
											<i class="fa-solid fa-file-pdf"></i>
										</a>
									</div>
								</td>
							</tr>
						@empty
							<tr>
								<td>No Billings Yet</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@push('custom_scripts')
	@vite('resources/js/billingPage/dropdown.js')
@endpush
