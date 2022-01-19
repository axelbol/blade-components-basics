<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet"> --}}

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

</head>

<body class="antialiased">
    {{ $slot }}
</body>

</html>
