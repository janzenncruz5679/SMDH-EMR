@extends('layouts.main')
{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="fixed h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid">
        <div class="h-full w-full row-span-2 grid">
            <div class="h-full w-full">
                <div class="grid grid-cols-2 gap-6">
                    <div class="">
                        <div class="p-4 bg-blue-300 flex items-center justify-center">
                            <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                                {{ __('All Patients') }}</label>
                        </div>
                        <canvas id="admission_canvas"></canvas>
                    </div>
                    <div class="">
                        <div class="p-4 bg-blue-300 flex items-center justify-center">
                            <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                                {{ __('Notes Submitted') }}</label>
                        </div>
                        <canvas id="canvas_two"></canvas>
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
