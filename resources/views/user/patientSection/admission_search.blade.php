@extends('layouts.main')

@section('content')
    <div class="admissionInfo fixed right-0 top-[59px] h-screen w-[86vw] p-[25px] gap-[50px] flex flex-column">
        <div class="admissionDisplay h-[85%] w-full relative top-[80px]">
            <div class="admissionSearchbar h-[7%] flex">
                <div class="searchBar relative h-full w-[40vw] flex justify-start items-center gap-[15px]">
                    <form action="{{ url('/patientPage/admission/search') }}" method="GET"
                        class="flex gap-[20px] m-0 h-full items-center">
                        @csrf
                        <input type="text" placeholder="Search Patient Name" name="query" value="{{ $search_admission }}"
                            class="h-[4.7vh] w-[18vw] text-[1.5rem] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 focus:outline-offset-2 rounded-[10px] px-[10px]"
                            required>
                        <button
                            class="h-[4.7vh] w-[6vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"
                            type="submit" value="search">
                            <p class="hover:text-zinc-900">Search</p>
                        </button>

                    </form>
                    {{-- <button
                        class="btnFilter h-[4.7vh] w-[6vw] text-[1.5rem] bg-green-700 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-green-600 focus:outline-green-700 focus:outline-offset-0">Filter</button> --}}
                    <button
                        class="h-[4.7vh] w-[6vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                            class="relative w-full h-full flex items-center justify-center hover:text-black"
                            href="{{ url('/patientPage/admission') }}">
                            {{ __('Clear') }}
                        </a></button>
                </div>
                <div class="addpatientBar h-full w-full flex items-center justify-end">
                    <button
                        class="btnAddpatient h-[4.7vh] w-[10vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                            href="{{ url('/patientPage/addPatient') }}" class='hover:text-white'>
                            <p class="hover:text-zinc-900">Add Patient</p>
                        </a></button>
                </div>
            </div>
            <div class="admissionTable pt-[5px]">
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
                                <td class="col-span-5 flex justify-center">{{ $patientData->first_name }}
                                    {{ $patientData->middle_name }}
                                    {{ $patientData->last_name }}
                                </td>
                                <td class="flex justify-center">{{ $patientData->age }}</td>
                                <td class="flex justify-center">{{ $patientData->gender }}</td>
                                <td class="col-span-2 flex justify-center">{{ $patientData->phone }}</td>
                                <td class="col-span-2 flex justify-center">
                                    <div class="grid grid-cols-2 justify-center gap-4">
                                        <a href="{{ url('/patientPage/updateAdmission' . $patientData->id) }}"
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
            <div class="paginator absolute inset-x-0 bottom-0 h-16 flex justify-center py-1">
                {{ $patientDatas->onEachSide(1)->links('pagination::custom_tailwind') }}
            </div>
        </div>
    </div>
@endsection
