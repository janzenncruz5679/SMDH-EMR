<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Miguel ERD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss'])
    @vite(['node_modules/@fortawesome/fontawesome-free/js/all.min.js'])

</head>

<body>
    @include('layouts.header')

    @include('layouts.sidebar')
    @yield('content')
    @include('layouts.allScripts')
</body>

</html>
