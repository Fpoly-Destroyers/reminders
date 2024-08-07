<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 200,
                'GRAD' -25,
                'opsz' 24
        }
    </style>
</head>

<body>
    <div class="grid grid-cols-11 text-gray-600">
        <div class="col-span-2">
            @include('partials.sidebar-left')
        </div>
        <div class="col-span-6">
            <div class="border-r border-gray-200 p-4">
                @yield('content')
            </div>
        </div>
        <div class="col-span-4">
            @include('partials.sidebar-right')
        </div>
    </div>

    @livewireStyles
</body>

</html>
