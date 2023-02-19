@extends('layouts.main')


@section('content')
    <div class="fixed h-full w-[86%] left-[275px] top-[59px] p-12 text-2xl font-[sans-serif]">
        <div class="h-16 w-full z-0">
            <div class="w-full flex flex-col gap-2 ">
                <div
                    class="dropdown-header grid grid-cols-12 border-4 border-blue-300 bg-blue-100 px-3 py-1 text-2xl font-[sans-serif]">
                    <label class="col-span-11 focus:bg-blue-300">
                        Menu</label>
                    <i class="self-center justify-self-end fa-solid fa-caret-down cursor-pointer"></i>
                </div>
                <div class="dropdown hidden w-full bg-blue-100 border-4 border-blue-300 list-none">
                    <a class="h-full w-full hover:text-black" href="{{ url('patientPage') }}">
                        <li class="w-full hover:bg-blue-300 hover:text-white px-3 py-1">Menudo</li>
                    </a>
                    <a class="h-full w-full hover:text-black" href="{{ url('patientPage') }}">
                        <li class="w-full hover:bg-blue-300 hover:text-white px-3 py-1">Menudo</li>
                    </a>
                    <a class="h-full w-full hover:text-black" href="{{ url('patientPage') }}">
                        <li class="w-full hover:bg-blue-300 hover:text-white px-3 py-1">Menudo</li>
                    </a>
                </div>
            </div>
        </div>
        <div class="admissionDisplay w-full relative pt-4 -z-10">
            <div class="admissionSearchbar h-[7%] flex">
                <div class="searchBar relative h-full w-[40vw] flex justify-start items-center gap-[15px]">
                    <form action="{{ url('/patientPage/admission/search') }}" method="GET"
                        class="flex gap-[20px] m-0 h-full items-center">
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
                            href="{{ url('/patientPage/addPatient') }}" class='hover:text-white'>
                            <p class="hover:text-zinc-900">Add Patient</p>
                        </a></button>
                </div>
            </div>
            <div class="admissionTable pt-[5px]">

                <table class="text-lg tracking-[2px] w-full">
                    <tr class="grid grid-cols-12">
                        <th class="grid justify-center">Date</th>
                        <th class="grid justify-center">OR No.</th>
                        <th class="grid justify-center col-span-3">Name</th>
                        <th class="col-span-6 grid grid-cols-8">
                            <div class="grid justify-center">
                                <label>Total</label>
                            </div>
                            <div class="grid justify-center">
                                <label>Medicine</label>
                            </div>
                            <div class="grid justify-center">
                                <label>Lab</label>
                            </div>
                            <div class="grid justify-center">
                                <label>X-ray</label>
                            </div>
                            <div class="grid justify-center">
                                <label>ECG</label>
                            </div>
                            <div class="grid justify-center">
                                <label>Oxygen</label>
                            </div>
                            <div class="grid justify-center">
                                <label>NBS</label>
                            </div>
                            <div class="grid justify-center">
                                <label>Income</label>
                            </div>

                        </th>
                        <th class="grid justify-center">Actions</th>
                    </tr>
                    @foreach ($data_billings as $data_billing)
                        <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-lg">
                            <td class="grid justify-center">
                                {{ \Carbon\Carbon::parse($data_billing->created_at)->format('Y-m-d') }}</td>
                            <td class="grid justify-center">{{ $data_billing->or_no }}</td>
                            <td class="grid justify-center col-span-3">{{ $data_billing->full_name }}</td>
                            <td class="col-span-6 grid grid-cols-8">
                                <div class="grid justify-center">
                                    <label>{{ $data_billing->total }}</label>
                                </div>
                                <div class="grid justify-center">
                                    <label>{{ $data_billing->medicine }}</label>
                                </div>
                                <div class="grid justify-center">
                                    <label>{{ $data_billing->lab }}</label>
                                </div>
                                <div class="grid justify-center">
                                    <label>{{ $data_billing->xray }}</label>
                                </div>
                                <div class="grid justify-center">
                                    <label>{{ $data_billing->ecg }}</label>
                                </div>
                                <div class="grid justify-center">
                                    <label>{{ $data_billing->oxygen }}</label>
                                </div>
                                <div class="grid justify-center">
                                    <label>{{ $data_billing->nbs }}</label>
                                </div>
                                <div class="grid justify-center">
                                    <label>{{ $data_billing->income }}</label>
                                </div>
                            </td>
                            <td class="grid justify-center">
                                <div class="grid grid-cols-2 justify-center gap-2">
                                    <a href="{{ route('updateBilling', ['or_no' => $data_billing->or_no]) }}"
                                        class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <a href="" class="editIcon hover:text-blue-300">
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
@endsection

@push('custom_scripts')
    @vite('resources/js/billingPage/dropdown.js')
@endpush
