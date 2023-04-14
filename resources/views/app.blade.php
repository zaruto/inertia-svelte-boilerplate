<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title inertia>{{ config('app.name', 'Laravel') }}</title>
	@vite('resources/js/app.js')
    @vite('resources/css/app.css')
	@inertiaHead
</head>

<body class="h-full">
    @routes
	@inertia
</body>

</html>
