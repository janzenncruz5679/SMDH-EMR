@extends('layouts.main')
{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid">
        <div class="h-full w-full row-span-2 grid">
            <div class="h-full w-full">
                <div class="h-full">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="">
                            <canvas id="admission_canvas"></canvas>
                        </div>
                        <div class="bg-blue-100">
                            <canvas id="admission_canvas_two"></canvas>
                        </div>

                        <script>
                            var _labels = {!! json_encode($labels) !!};
                            var _data = {!! json_encode($data) !!};
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_scripts')
    @vite('resources/js/charts/sampleChart.js')
@endpush
