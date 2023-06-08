@extends('layouts.main')

@section('content')
    <div class="h-full w-full p-6 md:p-8 lg:p-12 flex flex-col gap-4 text-xl">
        <div class="h-[10%] bg-blue-300 flex items-center justify-center">
            <label class="hidden xs:block font-[sans-serif] font-semibold text-white tracking-wide text-3xl md:text-4xl">
                Billing</label>
            <label class="xs:hidden font-[sans-serif] font-semibold text-white tracking-wide text-3xl md:text-4xl">
                Billing Summary</label>
        </div>
        <div class="h-[90%] grid grid-cols-4 gap-4">
            <div class="col-span-4 xl:col-span-3 flex flex-col gap-6">
                @if (isset($billings))
                    <table class="tracking-widest w-full">
                        <thead>
                            <tr
                                class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 2xl:grid-cols-12 text-xl xl:text-2xl">
                                <th class="hidden 2xl:col-span-2 md:flex items-center justify-center text-center">OR #</th>
                                <th
                                    class="sm:col-span-2 md:col-span-2 lg:col-span-2 2xl:col-span-4 flex items-center justify-center text-center">
                                    Name
                                </th>
                                <th class="hidden 2xl:col-span-2 lg:flex items-center justify-center text-center">Bill
                                    Created</th>
                                <th class="2xl:col-span-3 flex items-center justify-center text-center">
                                    <label class="md:hidden">Bill</label>
                                    <label class="hidden md:block">Total Bill</label>
                                </th>
                                <th class="flex items-center justify-center text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($billings as $billing)
                                <tr
                                    class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 2xl:grid-cols-12 even:bg-gray-200 odd:bg-white xs:text-sm text-lg xl:text-xl">
                                    <td class="hidden 2xl:col-span-2 md:flex items-center justify-center text-center">
                                        {{ $billing->id }}</td>
                                    <td
                                        class="sm:col-span-2 md:col-span-2 lg:col-span-2 2xl:col-span-4 flex items-center justify-center text-center">
                                        {{ $billing->full_name }}
                                    </td>
                                    <td class="hidden 2xl:col-span-2 lg:flex items-center justify-center text-center">
                                        {{ Carbon\Carbon::parse($billing->created_at)->format('F d, Y') }}</td>
                                    <td class="2xl:col-span-3 flex items-center justify-center text-center">
                                        ₱{{ number_format($billing->grand_total, 2) }}</td>
                                    <td class="flex items-center justify-center text-center">
                                        <div class="grid grid-cols-2 justify-center gap-4">
                                            <a href="{{ route('billing.show', $billing->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('billing.edit', $billing->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                <div class="inset-y-0 right-0 left-[275px] flex justify-center">
                    {{ $billings->links('pagination::custom_tailwind') }}
                </div>
            </div>
            <div
                class="hidden xl:block h-full w-full bg-blue-300 p-8 shadow-lg shadow-blue-200 rounded-3xl text-xl xl:text-2xl">
                <div class="h-full flex flex-col gap-4">
                    <div class="">
                        <label class="font-[sans-serif] font-semibold text-white tracking-wide">
                            Total Billing records: {{ $total_records }}</label>
                    </div>
                    <div class="">
                        <label class="font-[sans-serif] font-semibold text-white tracking-wide">
                            Billing submitted today: {{ $records }}</label>
                    </div>
                    <div class="">
                        <label class="font-[sans-serif] font-semibold text-white tracking-wide">
                            Billing submitted this month: {{ $records_month }}</label>
                    </div>
                    <div class="">
                        <label class="font-[sans-serif] font-semibold text-white tracking-wide">
                            Billing submitted this year: {{ $records_year }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('custom_scripts')
@endpush
