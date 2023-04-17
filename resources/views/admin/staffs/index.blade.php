@extends('layouts.main')

@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Users List') }}</label>
            </div>
            <div class="searchBar h-12 w-full flex justify-start items-center">
                <form action="{{ url('/patientPage/admission/search') }}" method="GET"
                    class="flex gap-4 m-0 h-full items-center">
                    @csrf
                    {{-- <input type="text" placeholder="Search Patient Name" name="search"
                        value="{{ Request::get('search') }}"
                        class="h-full w-96 text-[1.5rem] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 focus:outline-offset-2 rounded-[10px] px-[10px]"
                        required autocomplete="off">
                    <button
                        class="h-full w-32 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"
                        type="submit" value="search">
                        <p class="hover:text-zinc-900">{{ __('Search') }}</p>
                    </button> --}}
                </form>
                <div class="addpatientBar h-full w-full flex items-center justify-end">
                    <button
                        class="btnAddpatient h-full w-48 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                            href="{{ route('users.archive') }}">
                            <label class="hover:text-zinc-900">{{ __('Archive Users') }}</label>
                        </a></button>
                </div>
            </div>
            <div class="admissionTable">
                @if (isset($staffs))
                    <table class="tracking-[2px] w-full">
                        <tr class="grid grid-cols-12">
                            <th class="flex justify-center">Id</th>
                            <th class="col-span-3 flex justify-center">Username</th>
                            <th class="col-span-4 flex justify-center">Email</th>
                            <th class="flex justify-center">Usertype</th>
                            <th class="col-span-2 flex justify-center">Phone</th>
                            <th class="justify-center">Archive</th>
                        </tr>
                        @foreach ($staffs as $staff)
                            <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                <td class="flex justify-center">{{ $staff->id }}</td>
                                <td class="col-span-3 flex justify-center">{{ $staff->name }}
                                </td>
                                <td class="col-span-4 flex justify-center">{{ $staff->email }}</td>
                                <td class="flex justify-center">{{ $staff->usertype }}</td>
                                <td class="col-span-2 flex justify-center">{{ $staff->phone }}</td>
                                <td class="flex justify-center">
                                    <div class="grid justify-center gap-4">
                                        {{-- <a href="{{ route('users.destroy', ['id' => $staff->id]) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-eye"></i>
                                        </a> --}}
                                        <form action="/users/{{ $staff->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="hover:text-blue-300">
                                                <i class="fa-solid fa-box-archive"></i>
                                            </button>
                                        </form>
                                        {{-- <a href="{{ url('/patientPage/updateAdmission' . $patientData->id) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="{{ url('/patientPage/savepdfAdmission' . $patientData->id) }}"
                                            class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-file-pdf"></i> --}}
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
            {{ $staffs->links('pagination::custom_tailwind') }}
        </div>
    </div>
@endsection

@push('custom_scripts')
@endpush
