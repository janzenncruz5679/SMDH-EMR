@push('custom_scripts')
    @vite('resources/js/billingPage/dropdown.js')
@endpush

@extends('layouts.main')

@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="vitalSignDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Vital Signs History') }}</label>
            </div>
            <div class="vitalSignTable">
                @if (@isset($vitalSignHistory))
                    <table class="tracking-[2px] w-full">
                        <thead>
                            <tr class="grid grid-cols-12">
                                <th class="col-span-2 flex justify-center">File Updated</th>
                                <th class="col-span-5 flex justify-center">Name</th>
                                <th class="flex justify-center">Gender</th>
                                <th class="col-span-3 flex justify-center">Physician</th>
                                <th class="flex justify-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vitalSignHistory as $vitalSignHistoryData)
                                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                    <td class="col-span-2 flex justify-center">
                                        {{ Carbon\Carbon::parse($vitalSignHistoryData->created_at)->diffForHumans() }}</td>
                                    <td class="col-span-5 flex justify-center">{{ $vitalSignHistoryData->patient_fullname }}
                                    </td>
                                    <td class="flex justify-center">{{ $vitalSignHistoryData->gender }}</td>
                                    <td class="col-span-3 flex justify-center">{{ $vitalSignHistoryData->physician }}</td>
                                    <td class="flex justify-center">
                                        <div class="grid justify-center gap-4">
                                            <a href="{{ route('vitalSign.show', $vitalSignHistoryData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
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
            {{ $vitalSignHistory->links('pagination::custom_tailwind') }}
        </div>
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/liveSearch.js')
@endpush
