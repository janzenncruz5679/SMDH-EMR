@extends('layouts.main')


@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Discharge History') }}</label>
            </div>
            <div class="admissionTable text-2xl">
                @if (isset($dischargeSummaryHistory))
                    <table class="tracking-[2px] w-full">
                        <thead>
                            <tr class="grid grid-cols-12">
                                <th class="col-span-2 flex justify-center">File Updated</th>
                                <th class="col-span-4 flex justify-center">Name</th>
                                <th class="col-span-2 flex justify-center">Discharge Date</th>
                                <th class="col-span-3 flex justify-center">Doctor</th>
                                <th class="flex justify-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dischargeSummaryHistory as $dischargeSummaryHistoryData)
                                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                    <td class="col-span-2 flex justify-center">
                                        {{ Carbon\Carbon::parse($dischargeSummaryHistoryData->created_at)->diffForHumans() }}
                                    </td>
                                    <td class="col-span-4 flex justify-center">
                                        {{ $dischargeSummaryHistoryData->patients_identity }}
                                    </td>
                                    <td class="col-span-2 flex justify-center">
                                        {{ Carbon\Carbon::parse($dischargeSummaryHistoryData->discharge_date)->format('m/d/y') }}
                                    </td>
                                    <td class="col-span-3 flex justify-center">
                                        {{ $dischargeSummaryHistoryData->doctor_name }}</td>
                                    <td class="flex justify-center">
                                        <div class="grid place-items-center">
                                            <a href="{{ route('dischargeSummaryHistory.show', $dischargeSummaryHistoryData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            {{-- <a href="" class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-edit"></i>
                                            </a> --}}
                                            {{-- <a href="{{ route('dischargeSummary.pdf', $dischargeSummaryHistoryData->id) }}"
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
        </div>
        <div class="inset-y-0 right-0 left-[275px] flex justify-center">
            {{ $dischargeSummaryHistory->links('pagination::custom_tailwind') }}
        </div>
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/billingPage/dropdown.js')
@endpush
