@extends('layouts.main')

@section('content')
    <div class="absolute h-[93.6%] w-[84%] left-[16%] top-[7%] p-12 flex flex-col gap-4">
        <div class="h-[10%] bg-blue-300 flex items-center justify-center">
            <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                {{ __('Outpatient History') }}</label>
        </div>
        <div class="h-[45%] w-full bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl text-xl flex flex-col gap-4">
            <div class=" text-2xl text-[#003D33] font-semibold tracking-widest">
                <label>Patient Latest Information</label>
            </div>
            <div class="flex-grow grid gap-4">
                <div class="grid grid-cols-12 items-center gap-2 w-full">
                    <label class="">FULL NAME:</label>
                    <div class="flex-grow col-span-11">
                        <input type="text"
                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            value="{{ $outpatient->full_name }}" readonly>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center gap-2 w-full">
                    <label class="">FULL ADDRESS:</label>
                    <div class="flex-grow col-span-11">
                        <input type="text"
                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            value="{{ $outpatient->full_address['street'] . ',' . $outpatient->full_address['barangay'] . ' ' . $outpatient->full_address['municipality'] . ' ' . $outpatient->full_address['zip_code'] . ' ' . $outpatient->full_address['province'] . ' ' . $outpatient->full_address['region'] . ' ' . $outpatient->full_address['country'] }}"
                            readonly>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center gap-2 w-full">
                    <label class="">DIAGNOSIS:</label>
                    <div class="flex-grow col-span-11">
                        <input type="text"
                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                            value="{{ $outpatient->main_diagnosis }}" readonly>
                    </div>
                </div>
            </div>
            <a class="text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif] flex justify-end"
                href="{{ route('outpatient.show_all', $outpatient->id) }}">
                <div
                    class="h-full bg-blue-300 hover:bg-blue-200 p-2 text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                    View More
                </div>
            </a>
        </div>
        <div class="h-[45%] w-full p-6 grid gap-4 text-2xl shadow-lg shadow-blue-200 rounded-3xl ">
            <div class="outpatientTable">
                @if (isset($outpatientHistory))
                    <table class="tracking-[2px] w-full table table-striped table-inverse table-responsive d-table">
                        <thead>
                            <tr class="grid grid-cols-12 text-xl">
                                <th class="col-span-2 flex justify-center">File Updated</th>
                                <th class="col-span-5 flex justify-center">Name</th>
                                <th class="flex justify-center">Age</th>
                                <th class="flex justify-center">Gender</th>
                                <th class="col-span-2 flex justify-center">Phone</th>
                                <th class="flex justify-center">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($outpatientHistory as $outpatientHistoryData)
                                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-lg">
                                    <td class="col-span-2 flex justify-center">
                                        {{ Carbon\Carbon::parse($outpatientHistoryData->created_at)->diffForHumans() }}</td>
                                    <td class="col-span-5 flex justify-center">{{ $outpatientHistoryData->full_name }}
                                    </td>
                                    <td class="flex justify-center">{{ $outpatientHistoryData->personal_info['age'] }}</td>
                                    <td class="flex justify-center">{{ $outpatientHistoryData->personal_info['gender'] }}
                                    </td>
                                    <td class="col-span-2 flex justify-center">
                                        {{ $outpatientHistoryData->personal_info['phone'] }}</td>
                                    <td class="flex justify-center">
                                        <div class="grid justify-center gap-4">
                                            <a href="{{ route('outpatientHistory.show', $outpatientHistoryData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            {{-- <a href="{{ route('outpatient.edit', $outpatientHistoryData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                            <a href="{{ route('outpatient.pdf', $outpatientHistoryData->id) }}"
                                                class="editIcon hover:text-blue-300" target="_blank">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </a> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="inset-y-0 right-0 left-[275px] flex justify-center">
                {{ $outpatientHistory->links('pagination::custom_tailwind') }}
            </div>
        </div>
    </div>
@endsection
