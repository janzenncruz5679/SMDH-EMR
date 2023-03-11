@extends('layouts.main')

@section('content')
    <div class="fixed h-auto w-[86%] left-[275px] top-[59px] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Admission Patients') }}</label>
            </div>
            <div class="searchBar h-12 w-full flex justify-start items-center">
                <form action="{{ url('/patientPage/admission/search') }}" method="GET"
                    class="flex gap-4 m-0 h-full items-center">
                    @csrf
                    <input type="text" placeholder="Search Patient Name" name="search"
                        value="{{ Request::get('search') }}"
                        class="h-full w-96 text-[1.5rem] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 focus:outline-offset-2 rounded-[10px] px-[10px]"
                        required autocomplete="off">
                    <button
                        class="h-full w-32 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"
                        type="submit" value="search">
                        <p class="hover:text-zinc-900">Search</p>
                    </button>
                </form>
                <div class="addpatientBar h-full w-full flex items-center justify-end">
                    <button onclick="location.href='{{ route('admissions.create') }}'"
                        class="hover:text-zinc-900 btnAddpatient h-full w-48 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100">
                        Add Patient
                    </button>
                </div>
            </div>

            <div class="admissionTable">
                <table class="text-[1.5rem] tracking-[2px] w-full">
                    <tr class="grid grid-cols-12">
                        <th class="flex justify-center"></th>
                        {{-- <th class="flex justify-center">Admission ID</th> --}}
                        <th class="col-span-5 flex justify-center">Patient Name</th>
                        <th class="flex justify-center">Age</th>
                        <th class="flex justify-center">Gender</th>
                        <th class="col-span-2 flex justify-center">Phone</th>
                        <th class="col-span-2 flex justify-center">Actions</th>
                    </tr>
                    @forelse ($admissions->unique('patient_id') as $admission)
                        @php
                            $patient = $admission->patient;
                        @endphp
                        <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                            <th class="flex justify-center">{{ $loop->iteration }}</th>
                            {{-- <th class="flex justify-center">{{ str_pad($admission->id, 6, '0', STR_PAD_LEFT) }}</th> --}}
                            <td class="col-span-5 flex justify-center">
                                {{ $patient->fullName }}
                            </td>
                            <td class="flex justify-center">
                                {{ $patient->bdate->age }}
                            </td>
                            <td class="flex justify-center">
                                {{ $patient->sex }}
                            </td>
                            <td class="col-span-2 flex justify-center">
                                {{ $patient->contact_num }}
                            </td>
                            <td class="col-span-2 flex justify-center">
                                <div class="grid grid-cols-3 justify-center gap-4">
                                    <a href="{{ route('patients.show', $patient->id) }}"
                                        class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admissions.edit', $admission->id) }}"
                                        class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <a href="#" class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="text-center">No patients yet</div>
                            </td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
        @isset($admissions)
            <div class="inset-y-0 right-0 left-[275px] flex justify-center">
                {{ $admissions->links('pagination::custom_tailwind') }}
            </div>
        @endisset
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/liveSearch.js')
@endpush
