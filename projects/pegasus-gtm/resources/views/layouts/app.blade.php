<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GTMF1 is a Revenue Infrastructure Partner providing RevOps, CRM and GTM systems, marketing operations, data, automation, AI workflows and migrations.">
    <meta name="theme-color" content="#21483a">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/brand/gtmf1-icon-32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/brand/gtmf1-apple-touch-icon.png') }}">
    <title>@yield('title', 'GTMF1 — AI-powered Revenue Operations')</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('content')
</body>
</html>
