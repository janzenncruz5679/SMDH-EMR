@extends('layouts.main')

@section('content')
    <div class="addPatient absolute top-[59px] left-[275px] h-[280vh] w-[85.3vw] p-[45px] ">
        <div class=" h-full w-full">
            <form action="{{ url('/patientPage/editAdmission' . $view_first->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class=" h-full w-full text-xl tracking-wider border-2 border-black font-[sans-serif]">
                    {{-- admissionformfirst_sec --}}
                    <div class="">
                        {{-- name --}}
                        <div class="grid grid-cols-8  border-b-2 border-black h-[70px]">
                            <div class="border-r-2 border-black col-span-5 flex items-center gap-[5px] px-3 py-2">
                                <p>NAME OF HOSPITAL :</p>
                                <p>San Miguel District Hospital</p>
                            </div>
                            <div class="flex items-center gap-[5px] col-span-3 px-3 py-2">
                                <p>HOSP CODE:</p>
                                <p>0000122</p>
                            </div>
                        </div>

                        {{-- address --}}
                        <div class="grid grid-cols-8 border-b-2 border-black h-[110px]">
                            <div class="col-span-5 border-r-2 border-black px-3 py-2">
                                <p>ADDRESS* :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter address" name="address" autocomplete="off"
                                    value="{{ $view_first->address }}">
                                <span class="text-base font-[sans-serif] font-medium text-red-600">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            {{-- <div class="col-span-3 px-3 py-2">
                                <p>HEALTH RECORD NO :</p>
                                <input type="text"
                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter latest record #" autocomplete="off" value="{{ $view_first->id }}"
                                    readonly>

                            </div> --}}
                        </div>


                    </div>
                </div>
                <button
                    class="btnSearch h-[4.7vh] w-[6vw] text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-200"
                    type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
