@extends('layouts.main')
{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid">
        <div class="h-full w-full flex flex-col gap-8 ">
            <div class="h-[25%] w-full grid grid-cols-4 gap-10">
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        Admissions today:</label>
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        @if ($total_admission == 0)
                            No patients
                        @elseif ($total_admission == 1)
                            {{ $total_admission }} patient
                        @else
                            {{ $total_admission }} patients
                        @endif
                    </label>
                </div>
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
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
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
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
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
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
            <div class="grid h-[80%] w-full gap-4 bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl">
                <div class="flex flex-col gap-4 justify-center text-2xl">
                    <div class="p-4 bg-blue-300 flex items-center justify-center">
                        <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                            {{ __('All Patients Diagnosis Information') }}</label>
                    </div>
                    <div class="h-10">
                        <form id="date-form" class="h-full flex gap-4">
                            <label for="date-range" class="h-full grid items-center">Patients Admitted:</label>
                            <select id="date-range"
                                class="h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2">
                                <option value="last-week">Last Week</option>
                                <option value="last-month">Last Month</option>
                                <option value="last-year">Last Year</option>
                            </select>
                            {{-- <button id="reset-btn">Reset</button> --}}
                            <button
                                class="h-full w-32 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-200"
                                id="reset-btn">
                                Reset
                            </button>
                        </form>
                    </div>
                    <canvas id="admission_canvas" class="max-h-full w-full"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
<script>
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
