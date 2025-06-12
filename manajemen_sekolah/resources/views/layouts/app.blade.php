<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/lazyload@8.0.0/lazyload.min.css" rel="stylesheet">
    <title>{{ $title ?? 'Welcome' }} | Management Sekolah</title>
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>
