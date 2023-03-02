@extends('layouts.main')


@section('content')
    <div class="fixed h-full w-[86%] left-[275px] top-[59px] p-12 text-2xl font-[sans-serif]">
        <div class="h-16 w-full z-0">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Nurse Notes') }}</label>
            </div>
            <div class="admissionDisplay w-full relative pt-4 -z-10">
                <div class="admissionSearchbar h-full flex">
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
                                href="{{ route('addNurseNotes') }}" class='hover:text-white'>
                                <p class="hover:text-zinc-900">Add Patient</p>
                            </a></button>
                    </div>
                </div>
                <div class="admissionTable pt-[5px]">
                    <table class="tracking-[2px] w-full">
                        <tr class="grid grid-cols-12">
                            <th class="flex justify-center">Id</th>
                            <th class="col-span-5 flex justify-center">Name</th>
                            <th class="col-span-2 flex justify-center">Age</th>
                            <th class="col-span-2 flex justify-center">Ward</th>
                            <th class="col-span-2 flex justify-center">Actions</th>
                        </tr>
                        @foreach ($nursenotesDatas as $nursenotesData)
                            <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                <td class="flex justify-center">{{ $nursenotesData->id }}</td>
                                <td class="col-span-5 flex justify-center">{{ $nursenotesData->patient_fullname }}</td>
                                <td class="col-span-2 flex justify-center">{{ $nursenotesData->age }}</td>
                                <td class="col-span-2 flex justify-center">{{ $nursenotesData->ward }}</td>
                                <td class="col-span-2 flex justify-center">
                                    <div class="grid grid-cols-3 justify-center gap-4">
                                        <a href="{{ route('viewNurseNotes', ['id' => $nursenotesData->id]) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ route('updateNurseNotes', ['id' => $nursenotesData->id]) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="{{ route('viewpdfNurseNotes', ['id' => $nursenotesData->id]) }}"
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
