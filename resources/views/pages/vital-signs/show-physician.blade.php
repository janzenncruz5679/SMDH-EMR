@extends('layouts.main')

@section('content')
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid grid-rows-3 gap-8">
        <div class="h-16 w-full z-0">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Vital Signs') }}
                </label>
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
                            class="btnAddpatient h-[4.7vh] w-[10vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100">
                            <a href="{{ route('patients.vital-signs.create', $patient->id) }}" class='hover:text-white'>
                                <p class="hover:text-zinc-900">Add New Vitals</p>
                            </a>
                        </button>
                    </div>
                </div>
                <div class="admissionTable pt-[5px]">
                    <table class="text-[1.5rem] tracking-[2px] w-full table-auto">
                        <thead>
                            <tr class="">
                                <th class=" "></th>
                                <th class=" ">Physicians</th>
                                <th class=" "></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($physicians as $physician)
                                <tr class="text-center ">
                                    <th class=" ">{{ $loop->iteration }}</th>
                                    <td class="capitalize">
                                        {{ $physician->physician }}
                                    </td>
                                    <td class=" ">
                                        <a href="{{ route('patients.vital-signs.show', [$patient->id, $physician->physician]) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/billingPage/dropdown.js')
@endpush
