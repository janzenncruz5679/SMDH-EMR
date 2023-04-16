@extends('layouts.main')
{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid">
        <div class="h-full w-full flex flex-col gap-8 ">
            <div class="h-[25%] w-full grid grid-cols-5 gap-10">
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full grid place-items-center">
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        Admissions Hellos</label>
                    <label class="font-[sans-serif] font-semibold text-blue-200 tracking-wide text-3xl">
                        {{ $total_admission == 0 ? 'No patients' : ($total_admission == 1 ? $total_admission . ' patient' : $total_admission . ' patients') }}
                    </label>
                </div>
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full">

                </div>
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full">

                </div>
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full">

                </div>
                <div class="bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl h-full">

                </div>
            </div>
            <div class="grid h-[75%] w-full gap-4  bg-blue-100 p-6 shadow-lg shadow-blue-200 rounded-3xl">
                <div class="flex flex-col gap-4 justify-center ">
                    <div class="p-4 bg-blue-300 flex items-center justify-center">
                        <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                            {{ __('All Patients Diagnosis Information') }}</label>
                    </div>
                    <div class="p-6">
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
    var _labels_donut = {!! json_encode($labels_donut) !!};
    var _data_donut = {!! json_encode($data_donut) !!};
</script>
@push('custom_scripts')
    @vite('resources/js/charts/sampleChart.js')
    @vite('resources/js/charts/notesChart.js')
@endpush
