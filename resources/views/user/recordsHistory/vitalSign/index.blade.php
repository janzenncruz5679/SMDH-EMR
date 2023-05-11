@extends('layouts.main')


@section('content')
    <div class="absolute h-[93.6%] w-[84%] left-[16%] top-[7%] p-12 flex flex-col gap-4">
        <div class="h-[10%] bg-blue-300 flex items-center justify-center">
            <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                {{ __('Vital Sign History') }}</label>
        </div>
        <div class="h-[20%] w-full bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl text-2xl flex flex-col gap-4">
            <div class=" text-3xl text-[#003D33] font-semibold tracking-widest">
                <label>Latest Vital Information</label>
            </div>
            <div class="flex-grow">
                <table class="tracking-[2px] w-full">
                    <thead>
                        <tr class="grid grid-cols-12">
                            <th class="col-span-2 flex justify-center">Id</th>
                            <th class="col-span-5 flex justify-center">Name</th>
                            <th class="flex justify-center">Gender</th>
                            <th class="col-span-3 flex justify-center">Physician</th>
                            <th class="flex justify-center">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="grid grid-cols-12 text-xl">
                            <td class="col-span-2 flex justify-center">{{ $vitalSign->id }}</td>
                            <td class="col-span-5 flex justify-center">{{ $vitalSign->patient_fullname }}</td>
                            <td class="flex justify-center">{{ $vitalSign->gender }}</td>
                            <td class="col-span-3 flex justify-center">{{ $vitalSign->physician }}</td>
                            <td class="flex justify-center">
                                <div class="grid justify-center gap-4">
                                    <a href="{{ route('vitalSign.show_all', $vitalSign->id) }}"
                                        class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="h-[70%] w-full p-6 grid gap-4 text-2xlbg-blue-100 shadow-lg shadow-blue-200 rounded-3xl ">
            <div class="admissionTable text-2xl">
                @if (isset($vitalSignHistory))
                    <table class="tracking-[2px] w-full">
                        <thead>
                            <tr class="grid grid-cols-12">
                                <th class="col-span-2 flex justify-center">File Updated</th>
                                <th class="col-span-5 flex justify-center">Name</th>
                                <th class="flex justify-center">Gender</th>
                                <th class="col-span-3 flex justify-center">Physician</th>
                                <th class="flex justify-center">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vitalSignHistory as $vitalSignHistoryData)
                                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                    <td class="col-span-2 flex justify-center">
                                        {{ Carbon\Carbon::parse($vitalSignHistoryData->created_at)->diffForHumans() }}
                                    </td>
                                    <td class="col-span-5 flex justify-center">
                                        {{ $vitalSignHistoryData->patient_fullname }}
                                    </td>
                                    <td class="flex justify-center">
                                        {{ $vitalSignHistoryData->gender }}
                                    </td>
                                    <td class="col-span-3 flex justify-center">
                                        {{ $vitalSignHistoryData->physician }}</td>
                                    <td class="flex justify-center">
                                        <div class="grid place-items-center">
                                            <a href="{{ route('vitalSignHistory.show', $vitalSignHistoryData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            {{-- <a href="" class="editIcon hover:text-blue-300">
                                                    <i class="fa-solid fa-edit"></i>
                                                </a> --}}
                                            {{-- <a href="{{ route('vitalSign.pdf', $vitalSignHistoryData->id) }}"
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
                {{ $vitalSignHistory->links('pagination::custom_tailwind') }}
            </div>
        </div>

    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/billingPage/dropdown.js')
@endpush
