@push('custom_scripts')
    @vite('resources/js/billingPage/dropdown.js')
@endpush

@extends('layouts.main')

@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Fluid Intake') }}</label>
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
                        <p class="hover:text-zinc-900">{{ __('Search') }}</p>
                    </button>
                </form>
                <div class="addpatientBar h-full w-full flex items-center justify-end">
                    <button
                        class="btnAddpatient h-full w-48 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                            href="{{ route('addFluidIntake') }}">
                            <label class="hover:text-zinc-900">{{ __('Add Intake') }}</label>
                        </a></button>
                </div>
            </div>
            <div class="admissionTable">
                <table class="tracking-[2px] w-full">
                    <tr class="grid grid-cols-12">
                        <th class="flex justify-center">Id</th>
                        <th class="col-span-5 flex justify-center">Name</th>
                        <th class="col-span-2 flex justify-center">Age</th>
                        <th class="col-span-2 flex justify-center">Gender</th>
                        <th class="col-span-2 flex justify-center">Actions</th>
                    </tr>
                    @foreach ($fluidintakeDatas as $fluidintakeData)
                        <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                            <td class="flex justify-center">{{ $fluidintakeData->id }}</td>
                            <td class="col-span-5 flex justify-center">{{ $fluidintakeData->full_name }}</td>
                            <td class="col-span-2 flex justify-center">{{ $fluidintakeData->patient_info['age'] }}</td>
                            <td class="col-span-2 flex justify-center">{{ $fluidintakeData->patient_info['gender'] }}
                            </td>
                            <td class="col-span-2 flex justify-center">
                                <div class="grid grid-cols-3 justify-center gap-4">
                                    <a href="{{ route('viewFluidIntake', ['id' => $fluidintakeData->id]) }}"
                                        class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('updateFluidIntake', ['id' => $fluidintakeData->id]) }}"
                                        class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <a href="{{ route('viewpdfFluidIntake', ['id' => $fluidintakeData->id]) }}"
                                        target="_blank" class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="inset-y-0 right-0 left-[275px] flex justify-center">
            {{ $fluidintakeDatas->links('pagination::custom_tailwind') }}
        </div>
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/liveSearch.js')
@endpush
