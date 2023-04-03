@extends('layouts.main')

@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Admission History') }}</label>
            </div>
            <div class="searchBar h-12 gap-4 w-full flex justify-start items-center">
                <form action="" method="POST" class="flex gap-4 m-0 h-full items-center">
                    <input type="text" placeholder="Search Patient Name" id="search"
                        class="h-full w-96 text-[1.5rem] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 focus:outline-offset-2 rounded-[10px] px-[10px]">
                </form>
                <button
                    class="h-full w-32 text-[1.5rem] bg-blue-300 tracking-[2px] text-white hover:text-zinc-900 rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"
                    id="reset-btn">
                    Reset
                </button>
                <div class="addpatientBar h-full w-full flex items-center justify-end">
                    <a class="btnAddpatient h-full w-48 text-[1.5rem] grid place-items-center bg-blue-300 tracking-[2px] text-white hover:text-zinc-900 rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"
                        href="{{ route('admission.create') }}">Add Patient
                    </a>
                </div>
            </div>
            <div class="admissionTable">
                @if (isset($admissionHistory))
                    <table class="tracking-[2px] w-full table table-striped table-inverse table-responsive d-table">
                        <thead>
                            <tr class="grid grid-cols-12">
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
                                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
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
        </div>
        <div class="inset-y-0 right-0 left-[275px] flex justify-center">
            {{ $admissionHistory->links('pagination::custom_tailwind') }}
        </div>
    </div>
@endsection
