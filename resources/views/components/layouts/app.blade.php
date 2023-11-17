<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/favicon.ico">
    <link rel="canonical" href="{{ url()->current() }}">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <livewire:nav-bar />
    @unless (Request::is('/'))
        {{ Breadcrumbs::render() }}
    @endunless
    {{ $slot }}
    <livewire:footer />
</body>

</html>
