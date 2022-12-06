@extends('layouts.main')

@section('content')
    <div class="admissionInfo_scroll absolute top-[59px] left-[275px] h-screen w-[85.8vw] p-[25px]">
        {{-- <h1 class="w-full bg-red-400">{{ $update_data->first_name }} {{ $update_data->middle_name }}
            {{ $update_data->last_name }}</h1>
        <h1 class="w-full bg-red-400">{{ $update_data->age }}</h1> --}}
        <div class=" h-full">
            <div class="allbuttons  h-[5%] w-full"></div>
            <div class="admissionForm h-full text-[1.5rem] tracking-[2px]">

                {{-- admissionformfirst_sec --}}
                <div class="admissionfirst_sec h-[70vh] border-2 border-black">
                    {{-- name --}}
                    <div class="grid grid-cols-8 h-[50px] border-b-2 border-black h-[70px]">
                        <div class="border-r-2 border-black col-span-5 flex items-center gap-[5px] px-[10px]">
                            <p>NAME OF HOSPITAL :</p>
                            <p>San Miguel District Hospital</p>
                        </div>
                        <div class="flex items-center gap-[5px] col-span-3 px-[10px]">
                            <p>HOSP CODE:</p>
                            <p>0000122</p>
                        </div>
                    </div>

                    {{-- address --}}
                    <div class="grid grid-cols-8 h-[50px] border-b-2 border-black h-[70px]">
                        <div class="border-r-2 border-black col-span-5 flex items-center gap-[5px] px-[10px]">
                            <p>ADDRESS :</p>
                            <input type="text"
                                class="w-[85.5%] border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                value="{{ $update_data->address }}" readonly>
                        </div>
                        <div class="flex items-center gap-[5px] col-span-3 px-[10px]">
                            <p>HEALTH RECORD NO:</p>
                            <input type="text"
                                class="w-[52%] border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                value="{{ $update_data->id }}" readonly>
                        </div>
                    </div>

                    {{-- sr citizen number --}}
                    <div class="grid grid-cols-8 h-[50px] border-b-2 border-black h-[70px]">
                        <div class="col-span-3 border-r-2 border-black flex items-center gap-[5px] px-[10px]">
                            <p>SR CITIZEN NO:</p>
                            <input type="text"
                                class="w-[64.3%] border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="enter sr.citizen #">
                        </div>
                        <div class="col-span-2 flex justify-center items-center border-r-2 border-black">
                            <p class="font-bold">CLINICAL COVER SHEET</p>
                        </div>
                        <div class="col-span-3 flex items-center gap-[5px] px-[10px]">
                            <p>OLD HEALTH RECORD NO:</p>
                            <input type="text"
                                class="w-[41.2%] border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="enter old record #">
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>

                    {{-- patients border --}}
                    <div class="grid grid-cols-8 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="border-r-2 border-black flex items-start px-[10px]">
                            <p>PATIENT'S NAME :</p>
                        </div>
                        <div class="border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>(Last)</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                value="{{ $update_data->last_name }}" readonly>
                        </div>
                        <div class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>(Given)</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                value="{{ $update_data->first_name }}" readonly>
                        </div>
                        <div class=" border-r-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>(Middle)</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                value="{{ $update_data->middle_name }}" readonly>
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>WARD/ROOM/BED/SERVICE :</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="enter ward/room/bed/service type">
                        </div>

                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>

                    {{-- perma address --}}
                    <div class="grid grid-cols-11 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="col-span-5 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>PERMANENT ADDRESS :</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="enter permanent address">
                        </div>
                        <div class="col-span-2 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>TEL. NO. :</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="enter telephone #">
                        </div>
                        <div class="border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>SEX:</p>
                            <div class="w-full flex justify-around text-[1.3rem]">
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio" value="male"
                                        name="sex">
                                    <label>M</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio" value="female"
                                        name="sex">
                                    <label>F</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>CIVIL STATUS:</p>
                            <div class="w-full flex justify-around text-[1.3rem]">
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio" value="s"
                                        name="civil_status">
                                    <label>S</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio" value="d"
                                        name="civil_status">
                                    <label>D</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio" value="sep"
                                        name="civil_status">
                                    <label>SEP</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio" value="c"
                                        name="civil_status">
                                    <label>C</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio" value="w"
                                        name="civil_status">
                                    <label>W</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio" value="m"
                                        name="civil_status">
                                    <label>M</label>
                                </div>
                                <div class="col-span-2 inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio"
                                        value="n" name="civil_status">
                                    <label>N</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>

                    {{-- patients border --}}
                    <div class="grid grid-cols-12 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>BIRTHDATE</p>
                            <input type="date"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2">
                        </div>
                        <div class="border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>AGE</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="last name">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
