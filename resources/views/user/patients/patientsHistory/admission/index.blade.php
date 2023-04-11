@extends('layouts.main')

@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Admission History') }}</label>
            </div>
            <div class="admissionTable">
                @if (isset($admissionHistory))
                    <table class="tracking-[2px] w-full table table-striped table-inverse table-responsive d-table">
                        <thead>
                            <tr class="grid grid-cols-12 text-xl">
                                <th class="col-span-2 flex justify-center">File Updated</th>
                                <th class="col-span-5 flex justify-center">Name</th>
                                <th class="flex justify-center">Age</th>
                                <th class="flex justify-center">Gender</th>
                                <th class="col-span-2 flex justify-center">Phone</th>
                                <th class="flex justify-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admissionHistory as $admissionHistoryData)
                                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-lg">
                                    <td class="col-span-2 flex justify-center">
                                        {{ Carbon\Carbon::parse($admissionHistoryData->created_at)->diffForHumans() }}</td>
                                    <td class="col-span-5 flex justify-center">{{ $admissionHistoryData->full_name }}
                                    </td>
                                    <td class="flex justify-center">{{ $admissionHistoryData->personal_info['age'] }}</td>
                                    <td class="flex justify-center">{{ $admissionHistoryData->personal_info['gender'] }}
                                    </td>
                                    <td class="col-span-2 flex justify-center">
                                        {{ $admissionHistoryData->personal_info['phone'] }}</td>
                                    <td class="flex justify-center">
                                        <div class="grid justify-center gap-4">
                                            <a href="{{ route('admissionHistory.show', $admissionHistoryData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            {{-- <a href="{{ route('admission.edit', $admissionHistoryData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admission.pdf', $admissionHistoryData->id) }}"
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
                {{ $admissionHistory->links('pagination::custom_tailwind') }}
            </div>
        </div>
    </div>
@endsection
