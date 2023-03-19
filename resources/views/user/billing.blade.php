@extends('layouts.main')

@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Billing Summary') }}</label>
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
            </div>
            <div class="admissionTable text-lg">

                <table class="tracking-[2px] w-full">
                    <tr class="grid grid-cols-12">
                        <th class="grid justify-center">Date</th>
                        <th class="grid justify-center">OR No.</th>
                        <th class="grid justify-center col-span-3">Name</th>
                        <th class="col-span-6 grid grid-cols-8">
                            <div class="grid place-items-center">
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
                        <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white">
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
        <div class="inset-y-0 right-0 left-[275px] flex justify-center">
            {{ $data_billings->links('pagination::custom_tailwind') }}
        </div>
    </div>
@endsection

@push('custom_scripts')
    @vite('resources/js/patientPage/liveSearch.js')
@endpush
