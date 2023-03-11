@extends('layouts.main')

@section('content')
    @extends('layouts.main')
    {{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <div class="absolute h-[93.65%] w-[85.7%] left-[275px] top-[59px] p-12 grid grid-rows-3 gap-8">
        <div class="h-full w-full bg-white p-4 shadow-md shadow-blue-200 rounded-3xl">
        </div>
        <div class="h-full w-full row-span-2 grid grid-cols-2 gap-8">
            <div class="h-full w-full bg-white p-4 shadow-lg shadow-blue-200 rounded-3xl">
                <table class="text-xl tracking-[2px] w-full">
                    <tr class="grid grid-cols-11">
                        <th class="flex justify-center">Id</th>
                        <th class="col-span-5 flex justify-center">Name</th>
                        <th class="flex justify-center">Gender</th>
                        <th class="col-span-2 flex justify-center">Phone</th>
                        <th class="col-span-2 flex justify-center">Actions</th>
                    </tr>
                    <tr class="grid grid-cols-11 even:bg-gray-200 odd:bg-white text-xl">
                        <td class="flex justify-center"></td>
                        <td class="col-span-5 flex justify-center">
                        </td>
                        <td class="flex justify-center"></td>
                        <td class="col-span-2 flex justify-center"></td>
                        <td class="col-span-2 flex justify-center">
                            <div class="grid grid-cols-3 justify-center gap-4">
                                <a href="" class="editIcon hover:text-blue-300">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="" class="editIcon hover:text-blue-300">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                <a href="" class="editIcon hover:text-blue-300">
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="h-full w-full bg-white p-4 shadow-lg shadow-blue-200 rounded-3xl">
                <div class="h-full ">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="">
                            <a class="grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300
                                rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                                href="{{ route('vitalsTab') }}">
                                <div class="grid gap-3">
                                    <div class="grid place-items-center">
                                        <i class="fa-solid fa-heart-pulse text-[7rem]"></i>
                                    </div>
                                    <div class="grid justify-center text-2xl font-[sans-serif]">
                                        <p class="grid justify-center">{{ __('Vital Signs') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a class="grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                                href="{{ route('nurseNotes') }}">
                                <div class="grid gap-3">
                                    <div class="grid place-items-center">
                                        <i class="fa-solid fa-heart-pulse text-[7rem]"></i>
                                    </div>
                                    <div class="grid justify-center text-2xl font-[sans-serif]">
                                        <p class="grid justify-center">{{ __('Nurse Notes') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a class="grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                                href="{{ route('dischargeSummary') }}">
                                <div class="grid gap-3">
                                    <div class="grid place-items-center">
                                        <i class="fa-solid fa-notes-medical text-[7rem]"></i>
                                    </div>
                                    <div class="grid justify-center text-2xl font-[sans-serif]">
                                        <p class="grid justify-center">{{ __('Discharge') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a class="grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                                href="{{ route('physicianOrder') }}">
                                <div class="grid gap-3">
                                    <div class="grid place-items-center">
                                        <i class="fa-solid fa-notes-medical text-[7rem]"></i>
                                    </div>
                                    <div class="grid justify-center text-2xl font-[sans-serif]">
                                        <p class="grid justify-center">{{ __('Physician Order') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a class="grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                                href="{{ route('fluidIntake') }}">
                                <div class="grid gap-3">
                                    <div class="grid place-items-center">
                                        <i class="fa-solid fa-notes-medical text-[7rem]"></i>
                                    </div>
                                    <div class="grid justify-center text-2xl font-[sans-serif]">
                                        <p class="grid justify-center">{{ __('Fluid Intake ') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a class="grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300 rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                                href="{{ route('kardex') }}">
                                <div class="grid gap-3">
                                    <div class="grid place-items-center">
                                        <i class="fa-solid fa-notes-medical text-[7rem]"></i>
                                    </div>
                                    <div class="grid justify-center text-2xl font-[sans-serif]">
                                        <p class="grid justify-center">{{ __('Kardex ') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endsection
