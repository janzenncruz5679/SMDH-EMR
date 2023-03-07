<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>San Miguel</title>

	@vite(['resources/css/app.css', 'resources/sass/app.scss', 'node_modules/@fortawesome/fontawesome-free/js/all.min.js'])

</head>

<body>
	@include('layouts.header')
	@include('layouts.sidebar')
	@yield('content')
	@include('layouts.allScripts')

	@stack('custom_scripts')
</body>

</html>
