@extends('layouts.main')

@section('content')
	<div {{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}} class="grid fixed h-[94%] w-[86%] left-[275px] top-[59px] p-12">
		<div class="grid grid-rows-6 w-full">
			<div class="grid grid-cols-12 gap-14 ">

				<x-menu-card :url="route('admissions.index')" text="Admission" fontAwesomeIcon="fa-solid fa-bed"></x-menu-card>
				<x-menu-card :url="url('/patientPage/emergency')" text="Emergency" fontAwesomeIcon="fa-solid fa-truck-medical"></x-menu-card>
				<x-menu-card :url="url('/patientPage')" text="Outpatients" fontAwesomeIcon="fa-solid fa-kit-medical"></x-menu-card>

			</div>
		</div>
	</div>
@endsection
