@extends('layouts.main')

@section('content')
    <div class="fixed h-[93%] w-[84%] left-[16%] top-[7%] flex flex-col gap-8 p-12">
        <div class="h-20 bg-blue-300 flex items-center justify-center">
            <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                {{ __('Billing Summary') }}</label>
        </div>
        <div class="flex-grow w-full row-span-2 grid grid-cols-2 gap-8">
            <div class="">
                @if (isset($billings))
                    <table class="tracking-widest w-full">
                        <thead>
                            <tr class="grid grid-cols-12 text-2xl">
                                <th class="col-span-2 flex justify-center">OR #</th>
                                <th class="col-span-8 flex justify-center">Name</th>
                                <th class="col-span-2 flex justify-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($billings as $billing)
                                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                    <td class="col-span-2 flex justify-center">{{ $billing->id }}</td>
                                    <td class="col-span-8 flex justify-center">{{ $billing->full_name }}</td>
                                    <td class="col-span-2 flex justify-center">
                                        <div class="grid grid-cols-3 justify-center gap-4">
                                            <a href="{{ route('billing.show', $billing->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('billing.edit', $billing->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                            <a href="" class="editIcon hover:text-blue-300" target="_blank">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="h-full w-full bg-blue-100 p-8 shadow-lg shadow-blue-200 rounded-3xl">
                <div class="grid grid-cols-3 gap-6">
                </div>
            </div>
        </div>
    </div>
@endsection



@push('custom_scripts')
    @vite('resources/js/patientPage/liveSearch.js')
@endpush
