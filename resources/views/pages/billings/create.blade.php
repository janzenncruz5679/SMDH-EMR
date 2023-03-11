@extends('layouts.main')

@section('content')
	<div class="fixed h-full w-[86%] left-[275px] top-[59px] p-12 text-2xl font-[sans-serif]">
		<form action="{{ route('records.billings.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class=" h-full w-full text-xl tracking-wider border-2 border-black font-[sans-serif]">
				{{-- admissionformfirst_sec --}}
				{{-- sr citizen number --}}
				<div class="grid grid-cols-8 border-b-2 border-black h-full">
					<div class="col-span-2 p-3">
						<p>Total:</p>
						<input type="text"
							class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
							placeholder="enter old record #" name="total" id="total" value="{{ old('total') }}">
					</div>
					<div class="col-span-2 p-3">
						<p>medicine:</p>
						<input type="text"
							class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
							placeholder="enter old record #" name="medicine" id="medicine" value="{{ old('medicine') }}">
					</div>
					<div class="col-span-2 p-3">
						<p>lab:</p>
						<input type="text"
							class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
							placeholder="enter old record #" name="lab" id="lab" value="{{ old('lab') }}">
					</div>
				</div>
				<div class="grid grid-cols-8 border-b-2 border-black h-full">
					<div class="col-span-3 p-3">
						<p>Type:</p>
						<input type="text"
							class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
							placeholder="enter old record #" name="xray" id="xray" value="{{ old('xray') }}">
					</div>
				</div>
				<div class="grid grid-cols-8 border-b-2 border-black h-full">
					<div class="col-span-3 p-3">
						<p>Type:</p>
						<input type="text"
							class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
							placeholder="enter old record #" name="ecg" id="ecg" value="{{ old('ecg') }}">
					</div>
				</div>
				<div class="grid grid-cols-8 border-b-2 border-black h-full">
					<div class="col-span-3 p-3">
						<p>Type:</p>
						<input type="text"
							class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
							placeholder="enter old record #" name="oxygen" id="oxygen" value="{{ old('oxygen') }}">
					</div>
				</div>
				<div class="grid grid-cols-8 border-b-2 border-black h-full">
					<div class="col-span-3 p-3">
						<p>Type:</p>
						<input type="text"
							class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
							placeholder="enter old record #" name="nbs" id="nbs" value="{{ old('nbs') }}">
					</div>
				</div>
				<div class="grid grid-cols-8 border-b-2 border-black h-full">
					<div class="col-span-3 p-3">
						<p>Type:</p>
						<input type="text"
							class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
							placeholder="enter old record #" name="income" id="income" value="{{ old('income') }}">
					</div>
				</div>
				<div class="py-8 grid grid-cols-8 gap-4">
					<button
						class="h-full col-start-8 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
						type="submit">
						Submit
					</button>
				</div>
		</form>
	</div>
@endsection

@push('custom_scripts')
	@vite('resources/js/billingPage/totalBilling.js')
@endpush
