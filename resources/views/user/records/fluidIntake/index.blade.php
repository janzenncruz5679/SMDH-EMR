@push('custom_scripts')
    @vite('resources/js/billingPage/dropdown.js')
@endpush

@extends('layouts.main')

@section('content')
    <div class="absolute h-auto w-[84%] left-[16%] top-[7%] p-12 grid gap-8">
        <div class="admissionDisplay h-full w-full grid gap-4 text-2xl">
            <div class="h-20 bg-blue-300 flex items-center justify-center">
                <label class="font-[sans-serif] font-semibold text-white tracking-wide text-4xl">
                    {{ __('Fluid Intake') }}</label>
            </div>
            <div class="searchBar h-12 gap-4 w-full flex justify-start items-center">
                <form action="" method="POST" class="flex gap-4 m-0 h-full items-center">
                    <input type="text" placeholder="Search Patient Name" id="search"
                        class="h-full w-96 text-[1.5rem] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 focus:outline-offset-2 rounded-[10px] px-[10px]">
                </form>
                <button
                    class="h-full w-32 text-[1.5rem] bg-blue-300 tracking-[2px] text-white hover:text-zinc-900 rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"
                    id="reset-btn">
                    Reset
                </button>
                <div class="addpatientBar h-full w-full flex items-center justify-end">
                    <button
                        class="btnAddpatient h-full w-48 text-[1.5rem] bg-blue-300 tracking-[2px] text-white rounded-[15px] transform transition hover:-translate-y-0.5 hover:bg-blue-100"><a
                            href="{{ route('fluidIntake.create') }}">
                            <label class="hover:text-zinc-900">{{ __('Add Intake') }}</label>
                        </a></button>
                </div>
            </div>
            <div class="admissionTable">
                @if (isset($fluidIntake))
                    <table class="tracking-[2px] w-full">
                        <thead>
                            <tr class="grid grid-cols-12">
                                <th class="flex justify-center">Id</th>
                                <th class="col-span-5 flex justify-center">Name</th>
                                <th class="col-span-2 flex justify-center">Age</th>
                                <th class="col-span-2 flex justify-center">Gender</th>
                                <th class="col-span-2 flex justify-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fluidIntake as $fluidIntakeData)
                                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                                    <td class="flex justify-center">{{ $fluidIntakeData->id }}</td>
                                    <td class="col-span-5 flex justify-center">{{ $fluidIntakeData->full_name }}</td>
                                    <td class="col-span-2 flex justify-center">{{ $fluidIntakeData->patient_info['age'] }}
                                    </td>
                                    <td class="col-span-2 flex justify-center">
                                        {{ $fluidIntakeData->patient_info['gender'] }}</td>
                                    <td class="col-span-2 flex justify-center">
                                        <div class="grid grid-cols-3 justify-center gap-4">
                                            <a href="{{ route('fluidIntake.show', $fluidIntakeData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('fluidIntake.edit', $fluidIntakeData->id) }}"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                            <a href="{{ route('fluidIntake.pdf', $fluidIntakeData->id) }}" target="_blank"
                                                class="editIcon hover:text-blue-300">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
        <div class="inset-y-0 right-0 left-[275px] flex justify-center">
            {{ $fluidIntake->links('pagination::custom_tailwind') }}
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
            $.post('{{ route('fluidIntake.searchFluidIntake') }}', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                keyword: keyword,
                page: page
            }, function(data) {
                if (keyword === '') {
                    data.fluidIntake = data.fluidIntake.slice(0,
                        10); // slice
                }
                table_post_row(data);
                console.log(data);
            });
        }

        function table_post_row(res) {
            let htmlView = '';
            if (res.fluidIntake.length <= 0) {
                htmlView += `
                    <tr>
                        <td class="col-span-12 flex justify-center">No data available</td>
                    </tr>`;
            }
            for (let i = 0; i < res.fluidIntake.length; i++) {
                htmlView += `
                <tr class="grid grid-cols-12 even:bg-gray-200 odd:bg-white text-xl">
                        <td class="flex justify-center">` + res.fluidIntake[i].id + `</td>
                        <td class="col-span-5 flex justify-center">` + res.fluidIntake[i].full_name + `</td>
                        <td class="col-span-2 flex justify-center">` + res.fluidIntake[i].patient_info['age'] + `</td>
                        <td class="col-span-2 flex justify-center">` + res.fluidIntake[i].patient_info['gender'] + `</td>
                        <td class="col-span-2 flex justify-center">
                            <div class="grid grid-cols-3 justify-center gap-4">
                                <a href="/fluidIntake/` + res.fluidIntake[i].id + `" class="editIcon hover:text-blue-300">
                                <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="/fluidIntake/` + res.fluidIntake[i].id + `/edit"class="editIcon hover:text-blue-300">
                                <i class="fa-solid fa-edit"></i>
                                </a>
                                <a href="/fluidIntake/pdf` + res.fluidIntake[i].id + `"class="editIcon hover:text-blue-300" target="_blank">
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

@push('custom_scripts')
    @vite('resources/js/patientPage/liveSearch.js')
@endpush