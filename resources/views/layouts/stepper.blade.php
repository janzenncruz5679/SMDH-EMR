@vite('resources/css/app.css')

<div class="w-full pb-12">
    <div class="flex items-center h-20">
        <div
            class="step1 shadow-md shadow-blue-200 h-full flex items-center justify-center p-6 rounded-full border-4 border-blue-100">
            <span class="check1 text-3xl font-bold">1</span>
        </div>
        <div class="line1 flex shadow-md shadow-blue-200 justify-center items-center border-4 border-blue-100 w-25">
        </div>
        <div
            class="step2 shadow-md shadow-blue-200 h-full flex items-center justify-center p-6 rounded-full border-4 border-blue-100">
            <span class="check2 text-3xl font-bold">2</span>
        </div>
        <div class="line2 flex shadow-md shadow-blue-200 justify-center items-center border-4 border-blue-100 w-25">
        </div>
        <div
            class="step3 shadow-md shadow-blue-200 h-full flex items-center justify-center p-6 rounded-full border-4 border-blue-100">
            <span class="check3 text-3xl font-bold ">3</span>
        </div>
        <div class="line3 flex shadow-md shadow-blue-200 justify-center items-center border-4 border-blue-100 w-25">
        </div>
        <div
            class="step4 shadow-md shadow-blue-200 h-full flex items-center justify-center p-6 rounded-full border-4 border-blue-100">
            <span class="check4 text-3xl font-bold ">4</span>
        </div>
        <div class="line4 flex shadow-md shadow-blue-200 justify-center items-center border-4 border-blue-100 w-25">
        </div>
        <div
            class="step5 shadow-md shadow-blue-200 h-full flex items-center justify-center p-6 rounded-full border-4 border-blue-100">
            <span class="check5 text-3xl font-bold ">5</span>
        </div>
        <div class="line5 flex shadow-md shadow-blue-200 justify-center items-center border-4 border-blue-100 w-25">
        </div>
        <div
            class="step6 shadow-md shadow-blue-200 h-full flex items-center justify-center p-6 rounded-full border-4 border-blue-100">
            <span class="check6 text-3xl font-bold ">6</span>
        </div>
    </div>
</div>
@push('custom_scripts')
    @vite('resources/js/patientPage/birthdate.js')
    @vite('resources/js/patientPage/admission_days.js')
    @vite('resources/js/patientPage/multi-step-form.js')
@endpush
