@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    {{-- <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
        }
    </style> --}}
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid">
        <div class="grid grid-rows-6 w-full">
            <div class=" h-full w-full">
                <div class="h-full
                     w-full text-xl tracking-wider font-[sans-serif]">
                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        <div class=" h-full w-full">
                            <div
                                class="h-full
                                 w-full text-xl font-[sans-serif] bg-slate-200 rounded-3xl">
                                {{-- admissionform_sec --}}
                                <div class="form-section">
                                    <div
                                        class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                                        <label>Observation for {{ $nurseNote->date_time->format('F d, Y - h:i A') }}</label>
                                    </div>
                                    <div class="grid grid-cols-8 gap-2 p-4">
                                        <div class="col-span-4 px-3">
                                            <label>NAME :</label>
                                            <input type="text" readonly
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                placeholder="Patient Full Name" name="patient_fullname[]" autocomplete="off"
                                                value="{{ $nurseNote->patient->full_name }}">
                                        </div>
                                        <div class="col-span-2 px-3">
                                            <label>AGE* :</label>
                                            <input type="text" readonly
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                placeholder="Patient Age" name="age[]" autocomplete="off"
                                                value="{{ $nurseNote->patient->bdate->age }}" readonly>
                                        </div>
                                        <div class="col-span-2 px-3">
                                            <label>WARD* :</label>
                                            <input type="text"
                                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                placeholder="Ward #" name="ward" autocomplete="off"
                                                value="{{ $nurseNote->ward_room }}">
                                        </div>
                                    </div>
                                    <div class="grid px-4 pb-4">
                                        <div class="grid grid-cols-2 gap-4 px-3">
                                            <div>
                                                <label>FOCUS* :</label>
                                                <textarea type="text"
                                                    class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    placeholder="focus" name="obsFocus[]" autocomplete="off" readonly>{{ $nurseNote->focus ?? '' }}</textarea>
                                            </div>
                                            <div>
                                                <label>DATA ACTION AND RESPONSE* :</label>
                                                <textarea type="text"
                                                    class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    placeholder="action response" name="obsDar[]" autocomplete="off" readonly>{{ $nurseNote->action ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="py-8 grid grid-cols-8 gap-4">
                                <a class=" col-end-7 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                                    href="#" onclick="javascript:window.history.back(-1);return false;">
                                    <div
                                        class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                                        Back
                                    </div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="py-8 grid grid-cols-8 gap-4">
                        <a class=" col-end-9 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                            href="#" onclick="javascript:window.history.back(-1);return false;">
                            <div
                                class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                                Back
                            </div>
                        </a>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
@endsection
