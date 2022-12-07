@extends('layouts.main')

@section('content')
    <div class="addPatient absolute top-[59px] left-[275px] h-[280vh] w-[85.3vw] p-[45px]">
        <div class=" h-full">
            <div class="allbuttons  h-[5%] w-full"></div>
            <div class="admissionForm h-full text-[1.5rem] tracking-[2px]">

                {{-- admissionformfirst_sec --}}
                <div class="h-[67.5vh] border-2 border-black">
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
                                placeholder="enter address">
                        </div>
                        <div class="flex items-center gap-[5px] col-span-3 px-[10px]">
                            <p>HEALTH RECORD NO:</p>
                            <input type="text"
                                class="w-[52%] border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="enter latest record #">
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
                                placeholder="last name">
                        </div>
                        <div class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>(Given)</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="given name">
                        </div>
                        <div class=" border-r-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>(Middle)</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="middle name">
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

                    {{-- birthdate border --}}
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
                                placeholder="age">
                        </div>
                        <div class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>BIRTHPLACE</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="birthplace">
                        </div>
                        <div class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>NATIONALITY</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="nationality">
                        </div>
                        <div class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>RELIGION</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="religion">
                        </div>
                        <div class="col-span-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>OCCUPATION</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="occupation">
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-black h-[30px]"></div>
                </div>


                {{-- admissionformsecond_sec --}}
                <div class="h-[46vh] border-t-0 border-2 border-black">

                    {{-- employee --}}
                    <div class="grid grid-cols-9 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>EMPLOYER(Type of Business)</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>ADDRESS</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>TEL. NO.</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>

                    {{-- father --}}
                    <div class="grid grid-cols-9 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>FATHER'S NAME</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>ADDRESS</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>TEL. NO.</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>

                    {{-- mother --}}
                    <div class="grid grid-cols-9 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>MOTHER'S(MAIDEN) NAME</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>ADDRESS</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>TEL. NO.</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>

                    {{-- spouse --}}
                    <div class="grid grid-cols-9 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>SPOUSE NAME</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>ADDRESS</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>TEL. NO.</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>
                    {{-- empty border --}}
                    <div class="border-black h-[30px]"></div>
                </div>


                {{-- admissionformthird_sec --}}
                <div class="h-[46.5vh] border-t-0 border-2 border-black">
                    {{-- Admission --}}
                    <div class="grid grid-cols-10 h-[50px] border-b-2 border-black h-[145px]">
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>ADMISSION</p>
                            <div class="text-[1.3rem] w-full flex flex-col items-end gap-[10px]">
                                <div class="flex">
                                    <label class="pt-[3px]">Date: </label>
                                    <input type="date"
                                        class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available">
                                </div>
                                <div class="flex">
                                    <label class="pt-[3px]">Time: </label>
                                    <input type="time"
                                        class="w-[203px] border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>DISCHARGE</p>
                            <div class="text-[1.3rem] w-full flex flex-col items-end gap-[10px]">
                                <div class="flex">
                                    <label class="pt-[3px]">Date: </label>
                                    <input type="date"
                                        class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available">
                                </div>
                                <div class="flex">
                                    <label class="pt-[3px]">Time: </label>
                                    <input type="time"
                                        class="w-[203px] border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available">
                                </div>
                            </div>
                        </div>
                        <div class=" border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                            <p>TOTAL NO. OF DAYS:</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="# of days">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>ADMITTING PHYSICIAN:</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="name of physician">
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>

                    {{-- Admitting clerk --}}
                    <div class="grid grid-cols-2 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>ADMITTING CLERK :</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>ATTENDING PHYSICIAN SIGNATURE:</p>
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>

                    {{-- type of admission --}}
                    <div class="grid grid-cols-2 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>ADMITTING CLERK :</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="name of clerk">
                        </div>
                        <div class="border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>REFERRED BY:</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="name of clerk">
                        </div>
                    </div>
                </div>

                {{-- admissionformfourth_sec --}}
                <div class="h-[54vh] border-t-0 border-2 border-black">
                    {{-- ssc --}}
                    <div class="grid h-[50px] border-b-2 border-black h-[70px]">
                        <div class="border-black flex items-center gap-[5px] px-[10px]">
                            <p class="w-[40%]">SOCIAL SERVICE CLASSIFICATION :</p>
                            <div class=" w-full flex justify-around text-[1.3rem]">
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio"
                                        value="a" name="ssc">
                                    <label>A</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio"
                                        value="b" name="ssc">
                                    <label>B</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio"
                                        value="c_one" name="ssc">
                                    <label>C1</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio"
                                        value="c_two" name="ssc">
                                    <label>C2</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio"
                                        value="c_three" name="ssc">
                                    <label>C3</label>
                                </div>
                                <div class="inline">
                                    <input class="scale-125 cursor-pointer accent-green-700" type="radio"
                                        value="d" name="sex">
                                    <label>D</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>

                    {{-- alert allergic to --}}
                    <div class="grid grid-cols-12 h-[50px] border-b-2 border-black h-[145px]">
                        <div class="col-span-2 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>ALERT</p>
                            <p>ALLERGIC TO:</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="allergic to">
                        </div>
                        <div class="col-span-4 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>HOSPITALIZATION PLAN</p>
                            <p>COMPANY/INDUSTRIAL NAME</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>HEALTH</p>
                            <p>INSURANCE NAME</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>TYPE OF INSURANCE</p>
                            <p>COVERAGE</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>

                    {{-- data furnished by --}}
                    <div class="grid grid-cols-10 h-[50px] border-b-2 border-black h-[100px]">
                        <div class="col-span-5 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>DATA FURNISHED BY(signature over printed name)</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="name of attendant">
                        </div>
                        <div class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>ADDRESS OF INFORMANT</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                        <div class="col-span-2 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>RELATION TO PATIENT</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>


                    {{-- admission diagnosis --}}
                    <div class="grid h-[50px] border-b-2 border-black h-[70px]">
                        <div class="border-black flex items-center gap-[5px] px-[10px]">
                            <p class="w-[26%]">ADMISSION DIAGNOSIS :</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-black h-[30px]"></div>
                </div>

                {{-- admissionformfifth_sec --}}
                <div class="h-[34.4vh] border-t-0 border-2 border-black">

                    {{-- principal diagnosis --}}
                    <div class="grid grid-cols-12 h-[50px] border-b-2 border-black h-[120px]">
                        <div class="col-span-9 border-r-2 border-black flex flex-col justify-center gap-[10px]">
                            <div class="border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[36%]">PRINCIPAL DIAGNOSIS :</p>
                                <input type="text"
                                    class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                            <div class="border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[29%]">OTHER DIAGNOSIS :</p>
                                <input type="text"
                                    class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>IDC CODE NO.</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="border-b-2 border-black h-[30px]"></div>

                    {{-- principal operation --}}
                    <div class="grid grid-cols-12 h-[50px]  border-black h-[120px]">
                        <div class="col-span-9 border-black flex flex-col justify-center gap-[10px] ">
                            <div class="border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[70%]">PRINCIPAL OPERATION PROCEDURE :</p>
                                <input type="text"
                                    class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                            <div class="border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[59%]">OTHER OPERATION PROCEDURE :</p>
                                <input type="text"
                                    class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                        </div>
                        <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                            <p>ICPM CODE</p>
                            <input type="text"
                                class="w-full border-4 border-green-700 focus:outline-green-700 px-[10px] focus:outline-offset-2"
                                placeholder="N/A if not available">
                        </div>
                    </div>

                    {{-- empty border --}}
                    <div class="h-[50px] flex justify-end">
                        <div
                            class="flex flex-row gap-[10px] items-center border-l-2 border-t-2 border-black w-50 px-[10px]">
                            <p>000000000000000000000001</p>
                            <p>12/8/2022</p>
                            <p>8:30AM</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
