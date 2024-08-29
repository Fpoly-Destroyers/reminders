@extends('layouts.main')

@section('title', 'Reminders')

@section('favicon')
    <link rel="shortcut icon" href="{{ asset('reminders.ico') }}" type="image/x-icon">
@endsection

@section('styles')
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 1,
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
@endsection

@section('content')
    <div class="flex text-gray-600">
        <div class="w-[300px]">
            @livewire('reminders.partials.sidebar-left')
        </div>
        <div class="flex-1">
            <div class="flex">
                <div class="w-2/3">
                    <div class="border-r border-gray-200 px-4">
                        @livewire('reminders.partials.main')
                    </div>
                </div>
                <div class="w-1/3">
                    @livewire('reminders.partials.sidebar-right')
                </div>
            </div>
            @persist('footer')
                <div class="fixed bottom-0 right-0 left-[300px] border-t border-gray-200 bg-white py-2 px-4">
                    @livewire('reminders.partials.footer')
                </div>
            @endpersist
        </div>
    </div>
@endsection

@section('scripts')

@endsection