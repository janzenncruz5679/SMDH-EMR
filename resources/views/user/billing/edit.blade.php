@extends('layouts.main')

{{-- test responsiveness using these colors sm:bg-red-200 md:bg-violet-300 lg:bg-blue-800 xl:bg-yellow-500 --}}
@section('content')
    <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: rgb(220, 38, 38);
            font-size: 1rem;
        }
    </style>
    <div class="fixed h-[93%] w-[84%] left-[16%] top-[7%] p-12 flex flex-col">
        <div class="hidden">
            @include('layouts.stepper')
        </div>
        <div class=" h-full w-full">
            <form action="{{ route('billing.update', $billing->id) }}" method="POST" enctype="multipart/form-data"
                class="admission-form text-xl tracking-wider">
                @csrf
                @method('PATCH')
                <div
                    class="grid justify-center text-4xl font-semibold tracking-widest rounded-t-3xl bg-[#A0DDD3] p-3 text-[#003D33]">
                    <label>Billing Information for {{ $billing->full_name }}</label>
                </div>
                {{-- admissionform_sec --}}
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-2 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Medicine Consumed</label>
                        </div>
                        <div class="grid pb-3 grid-cols-2 gap-10">
                            <div class=" grid h-full w-full px-3">
                                <table class="tracking-[2px] w-full">
                                    <thead>
                                        <tr class="grid grid-cols-5 gap-3">
                                            <th class="col-span-2 flex justify-center">Medicine</th>
                                            <th class="flex justify-center">Cost</th>
                                            <th class="flex justify-center">Quantity</th>
                                            <th class="flex justify-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="grid gap-3">
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[1]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00" autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[1]" id="medicine_cost_1"
                                                    value="{{ $billing->medicine['medicine_cost'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[1]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[1]" id="medicine_total_1" readonly
                                                    value="{{ $billing->medicine['medicine_total'][1] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[2]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00" autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[2]" id="medicine_cost_2"
                                                    value="{{ $billing->medicine['medicine_cost'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[2]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[2]" id="medicine_total_2" readonly
                                                    value="{{ $billing->medicine['medicine_total'][2] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[3]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00" autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[3]" id="medicine_cost_3"
                                                    value="{{ $billing->medicine['medicine_cost'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[3]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[3]" id="medicine_total_3" readonly
                                                    value="{{ $billing->medicine['medicine_total'][3] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[4]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][4] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[4]" id="medicine_cost_4"
                                                    value="{{ $billing->medicine['medicine_cost'][4] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[4]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][4] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[4]" id="medicine_total_4" readonly
                                                    value="{{ $billing->medicine['medicine_total'][4] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[5]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][5] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[5]" id="medicine_cost_5"
                                                    value="{{ $billing->medicine['medicine_cost'][5] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[5]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][5] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[5]" id="medicine_total_5" readonly
                                                    value="{{ $billing->medicine['medicine_total'][5] ?? '' }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=" grid h-full w-full px-3">
                                <table class="tracking-[2px] w-full">
                                    <thead>
                                        <tr class="grid grid-cols-5 gap-3">
                                            <th class="col-span-2 flex justify-center">Medicine</th>
                                            <th class="flex justify-center">Cost</th>
                                            <th class="flex justify-center">Quantity</th>
                                            <th class="flex justify-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="grid gap-3">
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[6]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][6] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[6]" id="medicine_cost_6"
                                                    value="{{ $billing->medicine['medicine_cost'][6] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[6]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][6] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[6]" id="medicine_total_6" readonly
                                                    value="{{ $billing->medicine['medicine_total'][6] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[7]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][7] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[7]" id="medicine_cost_7"
                                                    value="{{ $billing->medicine['medicine_cost'][7] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[7]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][7] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[7]" id="medicine_total_7" readonly
                                                    value="{{ $billing->medicine['medicine_total'][7] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[8]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][8] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[8]" id="medicine_cost_8"
                                                    value="{{ $billing->medicine['medicine_cost'][8] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[8]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][8] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[8]" id="medicine_total_8" readonly
                                                    value="{{ $billing->medicine['medicine_total'][8] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[9]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][9] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[9]" id="medicine_cost_9"
                                                    value="{{ $billing->medicine['medicine_cost'][9] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[9]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][9] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[9]" id="medicine_total_9" readonly
                                                    value="{{ $billing->medicine['medicine_total'][9] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_name[10]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_name'][10] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_cost[10]" id="medicine_cost_10"
                                                    value="{{ $billing->medicine['medicine_cost'][10] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_qty[10]" autocomplete="off"
                                                    value="{{ $billing->medicine['medicine_qty'][10] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="medicine_total[10]" id="medicine_total_10" readonly
                                                    value="{{ $billing->medicine['medicine_total'][10] ?? '' }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="grid gap-2 px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Total Cost of Medicine</label>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-xl"
                                name="medicine_grandTotal" id="medicine_grandTotal"
                                value="{{ $billing->medicine['medicine_grandTotal'] ?? '' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-2 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Laboratory Procedures</label>
                        </div>
                        <div class="grid pb-3 grid-cols-2 gap-10">
                            <div class=" grid h-full w-full px-3">
                                <table class="tracking-[2px] w-full">
                                    <thead>
                                        <tr class="grid grid-cols-5 gap-3">
                                            <th class="col-span-2 flex justify-center">Procedure</th>
                                            <th class="flex justify-center">Cost</th>
                                            <th class="flex justify-center">Quantity</th>
                                            <th class="flex justify-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="grid gap-3">
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[1]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][1] ?? 'CBC' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[1]" id="lab_cost_1"
                                                    value="{{ $billing->lab['lab_cost'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[1]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[1]" id="lab_total_1" readonly
                                                    value="{{ $billing->lab['lab_total'][1] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[2]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][2] ?? 'Hemoglobin' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[2]" id="lab_cost_2"
                                                    value="{{ $billing->lab['lab_cost'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[2]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[2]" id="lab_total_2" readonly
                                                    value="{{ $billing->lab['lab_total'][2] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[3]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][3] ?? 'Hematocrit' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[3]" id="lab_cost_3"
                                                    value="{{ $billing->lab['lab_cost'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[3]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[3]" id="lab_total_3" readonly
                                                    value="{{ $billing->lab['lab_total'][3] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[4]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][4] ?? 'Blood Typing' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[4]" id="lab_cost_4"
                                                    value="{{ $billing->lab['lab_cost'][4] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[4]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][4] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[4]" id="lab_total_4" readonly
                                                    value="{{ $billing->lab['lab_total'][4] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[5]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][5] ?? 'RH Typing' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[5]" id="lab_cost_5"
                                                    value="{{ $billing->lab['lab_cost'][5] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[5]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][5] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[5]" id="lab_total_5" readonly
                                                    value="{{ $billing->lab['lab_total'][5] ?? '' }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=" grid h-full w-full px-3">
                                <table class="tracking-[2px] w-full">
                                    <thead>
                                        <tr class="grid grid-cols-5 gap-3">
                                            <th class="col-span-2 flex justify-center">Procedure</th>
                                            <th class="flex justify-center">Cost</th>
                                            <th class="flex justify-center">Quantity</th>
                                            <th class="flex justify-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="grid gap-3">
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[6]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][6] ?? 'Platelet Count' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[6]" id="lab_cost_6"
                                                    value="{{ $billing->lab['lab_cost'][6] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[6]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][6] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[6]" id="lab_total_6" readonly
                                                    value="{{ $billing->lab['lab_total'][6] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[7]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][7] ?? 'Clotting Time' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[7]" id="lab_cost_7"
                                                    value="{{ $billing->lab['lab_cost'][7] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[7]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][7] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[7]" id="lab_total_7" readonly
                                                    value="{{ $billing->lab['lab_total'][7] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[8]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][8] ?? 'Cholesterol' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[8]" id="lab_cost_8"
                                                    value="{{ $billing->lab['lab_cost'][8] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[8]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][8] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[8]" id="lab_total_8" readonly
                                                    value="{{ $billing->lab['lab_total'][8] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[9]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][9] ?? 'Creatinine' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[9]" id="lab_cost_9"
                                                    value="{{ $billing->lab['lab_cost'][9] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[9]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][9] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[9]" id="lab_total_9" readonly
                                                    value="{{ $billing->lab['lab_total'][9] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-5 gap-3 ">
                                            <td class="col-span-2 flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_procedure[10]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_procedure'][10] ?? 'Lipid Profile' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_cost[10]" id="lab_cost_10"
                                                    value="{{ $billing->lab['lab_cost'][10] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_qty[10]" autocomplete="off"
                                                    value="{{ $billing->lab['lab_qty'][10] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="lab_total[10]" id="lab_total_10" readonly
                                                    value="{{ $billing->lab['lab_total'][10] ?? '' }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="grid gap-2 px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Total Cost of Laboratory</label>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-xl"
                                name="lab_grandTotal" id="lab_grandTotal"
                                value="{{ $billing->lab['lab_grandTotal'] ?? '' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-2 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>X-ray Procedures</label>
                        </div>
                        <div class="grid pb-3">
                            <div class=" grid h-full w-full px-3">
                                <table class="tracking-[2px] w-full">
                                    <thead>
                                        <tr class="grid grid-cols-4 gap-3">
                                            <th class="flex justify-center">Procedure</th>
                                            <th class="flex justify-center">Cost</th>
                                            <th class="flex justify-center">Quantity</th>
                                            <th class="flex justify-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="grid gap-3">
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_procedure[1]" autocomplete="off"
                                                    value="{{ $billing->xray['xray_procedure'][1] ?? 'Chest Scan' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_cost[1]" id="xray_cost_1"
                                                    value="{{ $billing->xray['xray_cost'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_qty[1]" autocomplete="off"
                                                    value="{{ $billing->xray['xray_qty'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_total[1]" id="xray_total_1" readonly
                                                    value="{{ $billing->xray['xray_total'][1] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_procedure[2]" autocomplete="off"
                                                    value="{{ $billing->xray['xray_procedure'][2] ?? 'Spine Scan' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_cost[2]" id="xray_cost_2"
                                                    value="{{ $billing->xray['xray_cost'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_qty[2]" autocomplete="off"
                                                    value="{{ $billing->xray['xray_qty'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_total[2]" id="xray_total_2" readonly
                                                    value="{{ $billing->xray['xray_total'][2] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_procedure[3]" autocomplete="off"
                                                    value="{{ $billing->xray['xray_procedure'][3] ?? 'Foot Scan' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_cost[3]" id="xray_cost_3"
                                                    value="{{ $billing->xray['xray_cost'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_qty[3]" autocomplete="off"
                                                    value="{{ $billing->xray['xray_qty'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="xray_total[3]" id="xray_total_3" readonly
                                                    value="{{ $billing->xray['xray_total'][3] ?? '' }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="grid gap-2 px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Total Cost of X-Ray</label>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-xl"
                                name="xray_grandTotal" id="xray_grandTotal"
                                value="{{ $billing->xray['xray_grandTotal'] ?? '' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-2 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>ECG Procedure</label>
                        </div>
                        <div class="grid pb-3">
                            <div class=" grid h-full w-full px-3">
                                <table class="tracking-[2px] w-full">
                                    <thead>
                                        <tr class="grid grid-cols-4 gap-3">
                                            <th class="flex justify-center">Procedure</th>
                                            <th class="flex justify-center">Cost</th>
                                            <th class="flex justify-center">Quantity</th>
                                            <th class="flex justify-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="grid gap-3">
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="ecg_procedure[1]" autocomplete="off"
                                                    value="{{ $billing->ecg['ecg_procedure'][1] ?? 'Holter Monitor' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="ecg_cost[1]" id="ecg_cost_1"
                                                    value="{{ $billing->ecg['ecg_cost'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="ecg_qty[1]" autocomplete="off"
                                                    value="{{ $billing->ecg['ecg_qty'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="ecg_total[1]" id="ecg_total_1" readonly
                                                    value="{{ $billing->ecg['ecg_total'][1] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="ecg_procedure[2]" autocomplete="off"
                                                    value="{{ $billing->ecg['ecg_procedure'][2] ?? 'Event Monitor' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="ecg_cost[2]" id="ecg_cost_2"
                                                    value="{{ $billing->ecg['ecg_cost'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="ecg_qty[2]" autocomplete="off"
                                                    value="{{ $billing->ecg['ecg_qty'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="ecg_total[2]" id="ecg_total_2" readonly
                                                    value="{{ $billing->ecg['ecg_total'][2] ?? '' }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="grid gap-2 px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Total Cost of ECG</label>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-xl"
                                name="ecg_grandTotal" id="ecg_grandTotal"
                                value="{{ $billing->lab['ecg_grandTotal'] ?? '' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-2 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Oxygen</label>
                        </div>
                        <div class="grid pb-3">
                            <div class=" grid h-full w-full px-3">
                                <table class="tracking-[2px] w-full">
                                    <thead>
                                        <tr class="grid grid-cols-4 gap-3">
                                            <th class="flex justify-center">Oxygen(lbs)</th>
                                            <th class="flex justify-center">Cost</th>
                                            <th class="flex justify-center">Quantity</th>
                                            <th class="flex justify-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="grid gap-3">
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_procedure[1]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_procedure'][1] ?? '5 lbs.' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_cost[1]" id="oxygen_cost_1"
                                                    value="{{ $billing->oxygen['oxygen_cost'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_qty[1]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_qty'][1] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_total[1]" id="oxygen_total_1" readonly
                                                    value="{{ $billing->oxygen['oxygen_total'][1] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_procedure[2]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_procedure'][2] ?? '10 lbs.' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_cost[2]" id="oxygen_cost_2"
                                                    value="{{ $billing->oxygen['oxygen_cost'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1" autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_qty[2]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_qty'][2] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_total[2]" id="oxygen_total_2" readonly
                                                    value="{{ $billing->oxygen['oxygen_total'][2] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_procedure[3]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_procedure'][3] ?? '15 lbs.' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_cost[3]" id="oxygen_cost_3"
                                                    value="{{ $billing->oxygen['oxygen_cost'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_qty[3]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_qty'][3] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_total[3]" id="oxygen_total_3" readonly
                                                    value="{{ $billing->oxygen['oxygen_total'][3] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_procedure[4]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_procedure'][4] ?? '20 lbs.' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_cost[4]" id="oxygen_cost_4"
                                                    value="{{ $billing->oxygen['oxygen_cost'][4] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_qty[4]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_qty'][4] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_total[4]" id="oxygen_total_4" readonly
                                                    value="{{ $billing->oxygen['oxygen_total'][4] ?? '' }}">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_procedure[5]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_procedure'][5] ?? '25 lbs.' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" step="0.01" placeholder="0.00"
                                                    autocomplete="off"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_cost[5]" id="oxygen_cost_5"
                                                    value="{{ $billing->oxygen['oxygen_cost'][5] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="number" maxlength="3" placeholder="1"
                                                    autocomplete="off"
                                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_qty[5]" autocomplete="off"
                                                    value="{{ $billing->oxygen['oxygen_qty'][5] ?? '' }}">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text" placeholder="0.00"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-center"
                                                    name="oxygen_total[5]" id="oxygen_total_5" readonly
                                                    value="{{ $billing->oxygen['oxygen_total'][5] ?? '' }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="grid gap-2 px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Total Cost of Oxygen</label>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2 text-xl"
                                name="oxygen_grandTotal" id="oxygen_grandTotal"
                                value="{{ $billing->lab['oxygen_grandTotal'] ?? '' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="p-4 bg-slate-200 rounded-b-3xl">
                        <div class="grid px-3 pb-2 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>NBS</label>
                        </div>
                        <div class="grid pb-3">
                            <div class=" grid h-full w-full px-3">
                                <table class="tracking-[2px] w-full">
                                    <thead>
                                        <tr class="grid grid-cols-4 gap-3">
                                            <th class="flex justify-center">Procedure</th>
                                            <th class="flex justify-center">Cost</th>
                                            <th class="flex justify-center">Quantity</th>
                                            <th class="flex justify-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="grid gap-3">
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                        </tr>
                                        <tr class="grid grid-cols-4 gap-3 ">
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                            <td class="flex justify-center">
                                                <input type="text"
                                                    class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                                    name="" autocomplete="off" value="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="grid gap-2 px-3 pb-3 text-2xl text-[#003D33] font-semibold tracking-widest">
                            <label>Total Cost of NBS</label>
                            <input type="text"
                                class="w-full h-10 border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                name="" autocomplete="off" value="">
                        </div>
                    </div>
                </div>
                <div class="form-navigation py-8 grid grid-cols-8 gap-4">
                    <button
                        class="previous h-full col-start-5 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="button">Previous</button>
                    <button
                        class="next h-full col-start-6 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="button">Next</button>
                    <button
                        class="h-full col-start-7 text-2xl p-2 bg-blue-300 tracking-[2px] text-white rounded-xl transform transition hover:-translate-y-0.5 hover:bg-blue-200 shadow-md shadow-blue-200"
                        type="submit">Submit</button>
                    <a class=" col-start-8 text-zinc-900 hover:text-white tracking-[2px] text-2xl font-[sans-serif]"
                        href="{{ route('billing.index') }}">
                        <div
                            class=" h-full bg-blue-300 hover:bg-blue-200 p-2 text-2xl font-[sans-serif] flex items-center justify-center text-white rounded-xl  shadow-md shadow-blue-200 hover:-translate-y-0.5 transform transition">
                            Back
                        </div>
                    </a>
                </div>
            </form>
        </div>
    @endsection
    @push('custom_scripts')
        @vite('resources/js/billingPage/totalBilling.js')
        @vite('resources/js/billingPage/totalLab.js')
        @vite('resources/js/billingPage/totalXray.js')
        @vite('resources/js/billingPage/totalEcg.js')
        @vite('resources/js/billingPage/totalOxygen.js')
        @vite('resources/js/patientPage/multi-step-form.js')
    @endpush
