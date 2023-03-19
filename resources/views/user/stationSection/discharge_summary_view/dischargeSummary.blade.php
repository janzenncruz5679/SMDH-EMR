@extends('layouts.main')


@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="h-16 w-full z-0">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Discharge Summary') }}</label>
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
                    <div class="addpatientBar h-full w-full flex items-center justify-end">
                        <button
                            class="btnAddpatient h-[4.7vh] w-[10vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                                href="{{ route('addDischargeSummary') }}" class='hover:text-black'>Add Summary
                            </a>
                    </div>
                </div>
                <div class="admissionTable text-2xl">
                    <table class="tracking-[2px] w-full">
                        <tr class="grid grid-cols-12">
                            <th class="flex justify-center">Id</th>
                            <th class="col-span-4 flex justify-center">Name</th>
                            <th class="flex justify-center">Date</th>
                            <th class="col-span-4 flex justify-center">Doctor</th>
                            <th class="col-span-2 flex justify-center">Actions</th>
                        </tr>
                        @foreach ($dischargeSummaryDatas as $dischargeSummaryData)
                            <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                <td class="flex justify-center">{{ $dischargeSummaryData->id }}</td>
                                <td class="col-span-4 flex justify-center">{{ $dischargeSummaryData->patients_identity }}
                                </td>
                                <td class="flex justify-center">{{ $dischargeSummaryData->discharge_date }}</td>
                                <td class="col-span-4 flex justify-center">{{ $dischargeSummaryData->doctor_name }}</td>
                                <td class="col-span-2 flex justify-center">
                                    <div class="grid grid-cols-3 justify-center gap-4">
                                        <a href="{{ route('viewDischargeSummary', ['id' => $dischargeSummaryData->id]) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ route('updateDischargeSummary', ['id' => $dischargeSummaryData->id]) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="{{ route('viewpdfDischargeSummary', ['id' => $dischargeSummaryData->id]) }}"
                                            class="editIcon hover:text-blue-300" target="_blank">
                                            <i class="fa-solid fa-file-pdf"></i>
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
