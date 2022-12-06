@extends('layouts.main')

@section('content')
    <div class="admissionInfo fixed right-0 top-[59px] h-screen w-[86vw] p-[25px] gap-[50px] flex flex-column">
        <div class="admissionDisplay h-[85%] w-full relative top-[80px]">
            <div class="admissionSearchbar h-[7%] flex">
                <div class="searchBar relative h-full w-[40vw] flex justify-start items-center gap-[15px]">
                    <form action="{{ url('/patientPage/admission/search') }}" method="GET" class="flex gap-[20px] m-0">
                        @csrf
                        <input type="text" placeholder="Search Patient Name" name="query"
                            class="h-[4.7vh] w-[18vw] text-[1.5rem]  border-[3px] focus:outline-offset-1 border-green-700 focus:outline-green-700 rounded-[10px] py-0 px-[15px] "
                            required>
                        <button
                            class="btnSearch h-[4.7vh] w-[6vw] text-[1.5rem] bg-green-700 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-green-600 focus:outline-green-700"
                            type="submit" value="search">Search</button>
                    </form>
                    <button
                        class="btnFilter h-[4.7vh] w-[6vw] text-[1.5rem] bg-green-700 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-green-600 focus:outline-green-700 focus:outline-offset-0">Filter</button>
                </div>
                <div class="addpatientBar">
                    <button class="btnAddpatient"><a href="{{ url('/patientPage/addPatient') }}"
                            class='hover:text-white'>Add Patient</a></button>
                </div>
            </div>
            <div class="admissionTable pt-[5px]">
                @if (isset($patientDatas))
                    <table class="tblAdmission text-[1.5rem] tracking-[2px] w-full">
                        <tr class="tblRow grid grid-cols-9">
                            <th class="tblHeader tblId flex justify-center">Id</th>
                            <th class="tblHeader tblName col-span-2 flex justify-center">Name</th>
                            <th class="tblHeader tblAge flex justify-center">Age</th>
                            <th class="tblHeader tblGender flex justify-center">Gender</th>
                            <th class="tblHeader tblAddres col-span-3 flex justify-center">Address</th>
                            <th class="tblHeader tblInformation flex justify-center">Info</th>
                        </tr>
                        @foreach ($patientDatas as $patientData)
                            <tr class="tblRow grid grid-cols-9 even:bg-gray-200 odd:bg-white ">
                                <td class="flex justify-center">{{ $patientData->id }}</td>
                                <td class="col-span-2 flex justify-center">{{ $patientData->first_name }}
                                    {{ $patientData->middle_name }}
                                    {{ $patientData->last_name }}
                                </td>
                                <td class="flex justify-center">{{ $patientData->age }}</td>
                                <td class="flex justify-center">{{ $patientData->gender }}</td>
                                <td class="col-span-3 flex justify-center">{{ $patientData->address }}</td>
                                <td class="flex justify-center"><a
                                        href="{{ url('/patientPage/updateAdmission' . $patientData->id) }}"
                                        class="editIcon hover:text-green-600">
                                        <i class="fas fa-edit"></i>
                                    </a>
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
