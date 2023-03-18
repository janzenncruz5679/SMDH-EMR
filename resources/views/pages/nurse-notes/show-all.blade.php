@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="fixed h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid">
        {{-- <div>
            @include('layouts.stepper')
        </div> --}}
        <div class="grid grid-rows-6 w-full">
            <div class=" h-full w-full">
                <div class="h-full
                     w-full text-xl font-[sans-serif] bg-slate-200 rounded-3xl">
                    {{-- admissionform_sec --}}
                    <div class="form-section">
                        <div
                            class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                            <label>Nurse Note Observation List</label>
                        </div>
                        <div class="grid grid-cols-8 gap-2 p-4">
                            <div class="col-span-4 px-3">
                                <label>NAME :</label>
                                <input type="text" readonly
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Full Name" name="patient_fullname[]" autocomplete="off"
                                    value="{{ $nurseNotes->first()->patient->full_name }}">
                            </div>
                            <div class="col-span-2 px-3">
                                <label>AGE* :</label>
                                <input type="text" readonly
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Patient Age" name="age[]" autocomplete="off"
                                    value="{{ $nurseNotes->first()->patient->bdate->age }}" readonly>
                            </div>
                            <div class="col-span-2 px-3">
                                <label>WARD* :</label>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="Ward #" name="ward" autocomplete="off"
                                    value="{{ $nurseNotes->first()->ward_room }}">
                            </div>
                        </div>
                        @forelse ($nurseNotes as $note)
                            <div class="grid gap-2 px-4 pb-4">
                                <div class=" grid px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-wider">
                                    <label>Observation for {{ $note->date_time->format('F d, Y - h:i A') }}</label>
                                </div>
                                <div class="grid grid-cols-6 h-full gap-4 px-3">
                                    <div>
                                        <label>DATE* :</label>
                                        <input type="date"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            name="obsDate[]" autocomplete="off"
                                            value="{{ $note->date_time->toDateString() ?? '' }}" readonly>
                                    </div>
                                    <div>
                                        <label>TIME* :</label>
                                        <input type="time"
                                            class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            name="obsTime[]" autocomplete="off"
                                            value="{{ $note->date_time->toTImeString() ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4 px-3">
                                    <div>
                                        <label>FOCUS* :</label>
                                        <textarea type="text"
                                            class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="focus" name="obsFocus[]" autocomplete="off" readonly>{{ $note->focus ?? '' }}</textarea>
                                    </div>
                                    <div>
                                        <label>DATA ACTION AND RESPONSE* :</label>
                                        <textarea type="text"
                                            class="w-full resize-none border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="action response" name="obsDar[]" autocomplete="off" readonly>{{ $note->action ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="p-4 grid gap-4">
                                No Notes yet
                            </div>
                        @endforelse
                        @isset($nurseNotes)
                            <div class="p-4 grid place-items-center">
                                {{ $nurseNotes->links('pagination::custom_tailwind') }}
                            </div>
                        @endisset
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

                {{-- </form> --}}
            </div>
        </div>
    </div>
@endsection
