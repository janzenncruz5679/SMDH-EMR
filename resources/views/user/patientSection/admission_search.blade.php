@extends('layouts.main')

@section('content')
    <div class="fixed w-[86%] left-[275px] top-[59px] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <p class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Admission Patients') }}</p>
            </div>

            <div class="searchBar h-12 w-full flex justify-start items-center gap-4">
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
                        <p class="hover:text-black h-full w-full flex justify-center items-center">{{ __('Search') }}
                        </p>
                    </button>

                </form>
                {{-- <button
                        class="btnFilter h-[4.7vh] w-[6vw] text-[1.5rem] bg-green-700 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-green-600 focus:outline-green-700 focus:outline-offset-0">Filter</button> --}}
                <button
                    class="h-full w-40 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                        class="relative w-full h-full flex items-center justify-center hover:text-black"
                        href="{{ url('/patientPage/admission') }}">
                        {{ __('Clear') }}
                    </a></button>
                <div class="addpatientBar h-full w-full flex items-center justify-end">
                    <button
                        class="btnAddpatient h-full w-48 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                            href="{{ url('/patientPage/addPatient') }}" class='hover:text-white'>
                            <p class="hover:text-black h-full w-full flex justify-center items-center">Add Patient</p>
                        </a></button>
                </div>
            </div>
            <div class="admissionTable relative">
                @if (isset($patientDatas))
                    <table class="tblAdmission text-[1.5rem] tracking-[2px] w-full">
                        <tr class="grid grid-cols-12">
                            <th class="flex justify-center">Id</th>
                            <th class="col-span-5 flex justify-center">Name</th>
                            <th class="flex justify-center">Age</th>
                            <th class="flex justify-center">Gender</th>
                            <th class="col-span-2 flex justify-center">Phone</th>
                            <th class="col-span-2 flex justify-center">Actions</th>
                        </tr>
                        @foreach ($patientDatas as $patientData)
                            <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                <td class="flex justify-center">{{ $patientData->id }}</td>
                                <td class="col-span-5 flex justify-center">{{ $patientData->full_name }}
                                </td>
                                <td class="flex justify-center">{{ $patientData->age }}</td>
                                <td class="flex justify-center">{{ $patientData->gender }}</td>
                                <td class="col-span-2 flex justify-center">{{ $patientData->phone }}</td>
                                <td class="col-span-2 flex justify-center">
                                    <div class="grid grid-cols-2 justify-center gap-4">
                                        <a href="{{ url('/patientPage/viewAdmission' . $patientData->id) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ url('/patientPage/updateAdmission' . $patientData->id) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
        <div class="inset-y-0 right-0 left-[275px] flex justify-center">
            {{ $patientDatas->links('pagination::custom_tailwind') }}
        </div>
    </div>
@endsection
