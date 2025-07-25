<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    @livewireStyles

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>{{ $title ?? 'Login Page' }}</title>
    <link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
</head>

<body class="bg-slate-100 dark:bg-slate-700">
    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>
