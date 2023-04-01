@extends('layouts.main')


@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Discharge Summary') }}</label>
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
                    <button
                        class="btnAddpatient h-[4.7vh] w-[10vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                            href="{{ route('dischargeSummary.create') }}" class='hover:text-black'>Add Summary
                        </a>
                </div>
            </div>
            <div class="admissionTable text-2xl">
                <table class="tracking-[2px] w-full">
                    <thead>
                        <tr class="grid grid-cols-12">
                            <th class="flex justify-center">Id</th>
                            <th class="col-span-4 flex justify-center">Name</th>
                            <th class="flex justify-center">Date</th>
                            <th class="col-span-4 flex justify-center">Doctor</th>
                            <th class="col-span-2 flex justify-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dischargeSummary as $dischargeSummaryData)
                            <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                <td class="flex justify-center">{{ $dischargeSummaryData->id }}</td>
                                <td class="col-span-4 flex justify-center">{{ $dischargeSummaryData->patients_identity }}
                                </td>
                                <td class="flex justify-center">
                                    {{ Carbon\Carbon::parse($dischargeSummaryData->discharge_date)->format('m/d/y') }}</td>
                                <td class="col-span-4 flex justify-center">{{ $dischargeSummaryData->doctor_name }}</td>
                                <td class="col-span-2 flex justify-center">
                                    <div class="grid grid-cols-3 justify-center gap-4">
                                        <a href="{{ route('dischargeSummary.show', $dischargeSummaryData->id) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ route('dischargeSummary.edit', $dischargeSummaryData->id) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="" class="editIcon hover:text-blue-300" target="_blank">
                                            <i class="fa-solid fa-file-pdf"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/billingPage/dropdown.js')
@endpush
