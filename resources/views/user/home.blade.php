@extends('layouts.main')
{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="h-full w-full p-12 xs:p-4">
        <div class="h-1/2 w-full flex flex-col gap-8 ">
            <div class="grid grid-cols-2 md:grid-cols-4 xs:gap-4 sm:gap-6 md:gap-10">
                <div class="bg-blue-100 p-6 xs:p-2 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
                    <label
                        class="font-[sans-serif] font-semibold text-blue-200 tracking-wide md:text-lg xl:text-2xl 2xl:text-3xl">
                        Admissions today:</label>
                    <label
                        class="font-[sans-serif] font-semibold text-blue-200 tracking-wide md:text-lg xl:text-2xl 2xl:text-3xl">
                        @if ($total_admission == 0)
                            No patients
                        @elseif ($total_admission == 1)
                            {{ $total_admission }} patient
                        @else
                            {{ $total_admission }} patients
                        @endif
                    </label>
                </div>
                <div class="bg-blue-100 p-6 xs:p-2 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        Emergencies today: </label>
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        @if ($total_emergency == 0)
                            No patients
                        @elseif ($total_emergency == 1)
                            {{ $total_emergency }} patient
                        @else
                            {{ $total_emergency }} patients
                        @endif
                    </label>
                </div>
                <div class="bg-blue-100 p-6 xs:p-2 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        Outpatients today: </label>
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        @if ($total_outpatient == 0)
                            No patients
                        @elseif ($total_outpatient == 1)
                            {{ $total_outpatient }} patient
                        @else
                            {{ $total_outpatient }} patients
                        @endif
                    </label>
                </div>
                <div class="bg-blue-100 p-6 xs:p-2 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        Billings Submitted: </label>
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        @if ($billings == 0)
                            No billings
                        @elseif ($billings == 1)
                            {{ $billings }} billing
                        @else
                            {{ $billings }} billings
                        @endif
                    </label>
                </div>
            </div>
            <div class="flex flex-col gap-4 h-full w-full bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl">
                <div class="grid items-center justify-center p-4 bg-blue-300">
                    <label class="font-[sans-serif] font-semibold text-white tracking-wide xs:inline sm:hidden">
                        Patient Diagnosis Info</label>
                    <label
                        class="font-[sans-serif] font-semibold text-white tracking-wide xs:hidden md:text-lg xl:text-2xl 2xl:text-4xl">
                        All Patients Diagnosis Information</label>
                </div>
                <div class="grid grid-cols-1 md:text-lg xl:text-2xl">
                    <form id="date-form" class="flex gap-4">
                        <label for="date-range" class="h-full grid items-center">Patients Admitted:</label>
                        <select id="date-range"
                            class="border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2">
                            <option value="yesterday">Last 24 Hours</option>
                            <option value="last-week">Last 7 Days</option>
                            <option value="last-month">Last 30 Days</option>
                            <option value="last-year">Last 360 Days</option>
                        </select>
                        {{-- <button
                            class="h-full w-32 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-200"
                            id="reset-btn">
                            Reset
                        </button> --}}
                    </form>
                </div>
                <div class="grid grid-cols-1 gap-4 text-2xl xs:text-xl">
                    <canvas id="admission_canvas"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    var _labels_daily = {!! json_encode($labels_daily) !!};
    var _data_daily = {!! json_encode($data_daily) !!};
    var _labels = {!! json_encode($labels) !!};
    var _data = {!! json_encode($data) !!};
    var _labels_monthly = {!! json_encode($labels_monthly) !!};
    var _data_monthly = {!! json_encode($data_monthly) !!};
    var _labels_yearly = {!! json_encode($labels_yearly) !!};
    var _data_yearly = {!! json_encode($data_yearly) !!};
</script>
@push('custom_scripts')
    @vite('resources/js/charts/sampleChart.js')
    @vite('resources/js/charts/notesChart.js')
@endpush
