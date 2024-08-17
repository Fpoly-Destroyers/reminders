<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('favicon')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @yield('styles')
    @livewireStyles

</head>

<body>
    @session('success')
        @livewire('toast', ['type' => 'success', 'title' => session('success'), 'message' => session('message')])
    @endsession
    @session('info')
        @livewire('toast', ['type' => 'info', 'title' => session('info'), 'message' => session('message')])
    @endsession
    @session('warning')
        @livewire('toast', ['type' => 'warning', 'title' => session('warning'), 'message' => session('message')])
    @endsession
    @session('error')
        @livewire('toast', ['type' => 'error', 'title' => session('error'), 'message' => session('message')])
    @endsession

    @livewire('toast', ['type' => 'success', 'title' => 'Login Successfully!'])


    @yield('content')

    @yield('scripts')
    @livewireStyles
</body>

</html>
