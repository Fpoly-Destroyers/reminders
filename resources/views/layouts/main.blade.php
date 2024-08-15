<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 200,
                'GRAD' -25,
                'opsz' 24
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    @yield('styles')
    @livewireStyles
</head>

<body>
    <div class="flex text-gray-600">
        <div class="min-w-[300px]">
            @include('partials.sidebar-left')
        </div>
        <div class="flex-1">
            <div class="flex">
                <div class="w-2/3">
                    <div class="border-r border-gray-200 px-4">
                        @yield('content')
                    </div>
                </div>
                <div class="w-1/3">
                    @include('partials.sidebar-right')
                </div>
            </div>
            <div class="fixed bottom-0 right-0 left-[300px] border-t border-gray-200 bg-white py-2 px-4">
                @include('partials.footer')
            </div>
        </div>
    </div>

    @yield('scripts')
    @livewireStyles
</body>

</html>