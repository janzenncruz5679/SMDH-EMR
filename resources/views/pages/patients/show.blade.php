@extends('layouts.main')

@section('content')
    <div class="absolute h-[93%] w-[84%] left-[16%] top-[7%] p-12 grid grid-rows-3 gap-8">
        <div class="h-full w-full bg-white p-4 shadow-md shadow-blue-200 rounded-3xl">
        </div>
        <div class="h-full w-full row-span-2 grid grid-cols-2 gap-8">
            <div class="h-full w-full bg-white p-4 shadow-lg shadow-blue-200 rounded-3xl grid gap-6">
                <table class="text-xl tracking-[2px] w-full table-auto">
                    <thead>
                        <tr class=" ">
                            <th>Id</th>
                            <th>Record Type</th>
                            <th>DateTime Created</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($records as $record)
                            <tr class="text-center  even:bg-gray-200 odd:bg-white text-xl">
                                <td class="">
                                    {{ $record->id }}
                                </td>
                                <td class=" ">
                                    {{ class_basename($record) }}
                                </td>
                                <td class=" ">
                                    {{ $record->created_at->format('M d, Y - H:i A') }}
                                </td>
                                <td class=" ">
                                    @php
                                        $_url = class_basename($record) == 'Admissions' ? route('patients.admissions.show', [$patient->id, $record->id]) : ('NurseNotes' ? route('patients.nurse-notes.show', [$patient->id, $record->id]) : '#');
                                    @endphp
                                    <a href="{{ $_url }}" class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    @if (false)
                                        <a href="" class="editIcon hover:text-blue-300">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                    @endif
                                    <a href="" class="editIcon hover:text-blue-300">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No Records Yet</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @isset($records)
                    <div class="flex justify-center">
                        {{ $records->links('pagination::custom_tailwind') }}
                    </div>
                @endisset
            </div>
            <div class="h-full w-full bg-white p-4 shadow-lg shadow-blue-200 rounded-3xl">
                <div class="h-full ">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="">
                            <a class="grid items-center p-6 text-zinc-900 hover:text-white bg-blue-100 hover:bg-blue-300
                                rounded-3xl shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition"
                                href="{{ route('patients.vital-signs.show-physicians', $patient->id) }}">
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
                                href="{{ route('patients.nurse-notes.index', $patient->id) }}">
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
