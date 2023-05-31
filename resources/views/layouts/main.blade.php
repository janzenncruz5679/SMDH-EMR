<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>San Miguel EMR</title>

    @vite(['resources/css/app.css', 'node_modules/@fortawesome/fontawesome-free/js/all.min.js'])

</head>

<body class="absolute h-full w-full">
    {{-- <div class="overflow-hidden ">
        @include('layouts.header')
    </div> --}}
    <div class="h-full w-full flex flex-col">
        <div class="h-[7%] w-full">
            @include('layouts.header')
        </div>
        <div class="h-[93%] w-full">
            <div class="h-full w-full flex">
                <div class="h-full w-[16%] overflow-hidden">
                    @php
                        if (Auth::user()->usertype == '0') {
                            $sidebar = 'layouts.sidebar';
                        } else {
                            $sidebar = 'layouts.adminSidebar';
                        }
                    @endphp
                    @include($sidebar)
                </div>
                <div class="h-full w-[84%] overflow-hidden">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.allScripts')
    @stack('custom_scripts')
</body>

</html>
