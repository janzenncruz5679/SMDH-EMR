<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Miguel ERD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/user_screen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shortcuts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/searchbar_admission_patients.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/table_admission.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/info_admission.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    @vite('resources/css/app.css')

</head>

<body>
    @include('layouts.header')

    @include('layouts.sidebar')
    @yield('content')
    @include('layouts.allScripts')
</body>

</html>
