@extends('layouts.main')

@section('content')
    <div class="h-full w-full p-6 md:p-8 lg:p-12 flex flex-col gap-4 text-xl">

        <div class="h-[10%] bg-blue-300 flex items-center justify-center">
            <label class="hidden xs:block font-[sans-serif] font-semibold text-white tracking-wide text-3xl md:text-4xl">
                Admission</label>
            <label class="xs:hidden font-[sans-serif] font-semibold text-white tracking-wide text-3xl md:text-4xl">
                Admission Patients</label>
        </div>
        <div class="h-[90%] flex flex-col gap-4">
            <div class="flex gap-4 justify-between">
                <div class="flex gap-4">
                    <input type="text" placeholder="Search Patient Name" id="search"
                        class="w-full text-2xl border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 focus:outline-offset-2 rounded-lg px-4">
                    <button
                        class="text-2xl bg-blue-300 tracking-[2px] text-white hover:text-zinc-900 rounded-lg px-4 hover:bg-blue-100 sm:hover:-translate-y-0.5 sm:transform sm:transition"
                        id="reset-btn">
                        <label class="hidden md:block">Reset</label>
                        <label class="md:hidden xs:block sm:"><i class="fa-solid fa-rotate-right"></i></label>
                    </button>
                </div>
                <div class="flex items-center justify-end">
                    <a class="btnAddpatient h-full text-2xl grid place-items-center bg-blue-300 tracking-[2px] text-white hover:text-zinc-900 rounded-lg px-4 hover:bg-blue-100 sm:hover:-translate-y-0.5 sm:transform sm:transition"
                        href="{{ route('admission.create') }}">
                        <label class="hidden lg:hidden md:block">Add</label>
                        <label class="hidden lg:block">Add Patient</label>
                        <label class="md:hidden xs:block sm:block"><i class="fa-solid fa-plus"></i></label>
                    </a>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                @if (isset($admissions))
                    <table class="tracking-widest h-full w-full">
                        <thead>
                            <tr class="grid grid-cols-4 md:grid-cols-5 lg:grid-cols-6 xl:grid-cols-12 text-xl xl:text-2xl">
                                <th class="flex items-center justify-center text-center">Id</th>
                                <th
                                    class="col-span-2 md:col-span-2 lg:col-span-2 xl:col-span-5 flex items-center justify-center text-center">
                                    Name</th>
                                <th class="hidden md:flex items-center justify-center text-center">Age</th>
                                <th class="hidden lg:flex items-center justify-center text-center">Gender</th>
                                <th class="hidden xl:col-span-2 xl:flex items-center justify-center text-center">
                                    Phone</th>
                                <th class="xl:col-span-2 flex items-center justify-center text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admissions as $admission)
                                <tr
                                    class="grid grid-cols-4 md:grid-cols-5 lg:grid-cols-6 xl:grid-cols-12 even:bg-gray-200 odd:bg-white xs:text-sm text-lg xl:text-xl">
                                    <td class="flex items-center justify-center text-center">
                                        {{ $admission->patient_id }}</td>
                                    <td
                                        class="col-span-2 md:col-span-2 lg:col-span-2 xl:col-span-5 flex items-center justify-center text-center">
                                        {{ $admission->full_name }}
                                    </td>
                                    <td class="hidden md:flex items-center justify-center text-center">
                                        {{ $admission->personal_info['age'] }}</td>
                                    <td class="hidden lg:flex items-center justify-center text-center">
                                        {{ $admission->personal_info['gender'] }}</td>
                                    <td class="hidden xl:col-span-2 xl:flex items-center justify-center text-center">
                                        {{ $admission->personal_info['phone'] }}</td>
                                    <td class="xl:col-span-2 flex items-center justify-center text-center">
                                        <div class="grid grid-cols-3 justify-center gap-4">
                                            <a href="{{ route('admission.show', $admission->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admission.edit', $admission->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admission.pdf', $admission->id) }}"
                                                class="editIcon hover:text-blue-300" target="_blank">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                <div class="inset-y-0 right-0 left-[275px] flex justify-center">
                    {{ $admissions->links('pagination::custom_tailwind') }}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script>
        var currentPage = 1;

        $('#search').on('keyup', function() {
            currentPage = 1;
            search(currentPage);
        });

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            currentPage = page;
            search(currentPage);
        });

        $('#reset-btn').on('click', function() {
            $('#search').val('');
            search(1);
        });

        function search(page = 1) {
            var keyword = $('#search').val();
            $.post('{{ route('admission.searchAdmission') }}', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                keyword: keyword,
                page: page
            }, function(data) {
                if (keyword === '') {
                    data.admissions = data.admissions.slice(0,
                        5); // slice
                }
                table_post_row(data);
                console.log(data);
            });
        }

        function table_post_row(res) {
            let htmlView = '';
            if (res.admissions.length <= 0) {
                htmlView += `
                    <tr>
                        <td class="col-span-12 flex items-center justify-center text-center">No data available</td>
                    </tr>`;
            }
            for (let i = 0; i < res.admissions.length; i++) {
                htmlView += `
                    <tr class="grid grid-cols-4 md:grid-cols-5 lg:grid-cols-6 xl:grid-cols-12 even:bg-gray-200 odd:bg-white xs:text-sm text-lg xl:text-xl">
                        <td class="flex items-center justify-center text-center">` + res.admissions[i]
                    .patient_id +
                    `</td>
                        <td class="col-span-2 md:col-span-2 lg:col-span-2 xl:col-span-5 flex items-center justify-center text-center">` +
                    res.admissions[i].full_name + `</td>
                        <td class="hidden md:flex items-center justify-center text-center">` + res.admissions[i]
                    .personal_info['age'] + `</td>
                        <td class="hidden lg:flex items-center justify-center text-center">` + res.admissions[i]
                    .personal_info[
                        'gender'] + `</td>
                        <td class="hidden xl:col-span-2 xl:flex items-center justify-center text-center">` + res
                    .admissions[i]
                    .personal_info['phone'] + `</td>
                        <td class="xl:col-span-2 flex items-center justify-center text-center">
                        <div class="grid grid-cols-3 justify-center gap-4">
                            <a href="/admission/` + res.admissions[i].id + `" class="editIcon hover:text-blue-300">
                            <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/admission/` + res.admissions[i].id + `/edit" class="editIcon hover:text-blue-300">
                            <i class="fa-solid fa-edit"></i>
                            </a>
                            <a href="/admission/pdf` + res.admissions[i].id + `"class="editIcon hover:text-blue-300" target="_blank">
                            <i class="fa-solid fa-file-pdf"></i>
                            </a>
                        </div>
                        </td>
                    </tr>`;
            }
            $('tbody').html(htmlView);
            $('.pagination').html(res.links);
        }
    </script>
@endsection
