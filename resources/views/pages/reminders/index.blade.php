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
    <div class="min-w-[300px]">
        @include('pages.reminders.sidebar-left')
    </div>
    <div class="flex-1">
        <div class="flex">
            <div class="w-2/3">
                <div class="border-r border-gray-200 px-4">
                    @include('pages.reminders.main')
                </div>
            </div>
            <div class="w-1/3">
                @include('pages.reminders.sidebar-right')
            </div>
        </div>
        @include('pages.reminders.footer')
    </div>
</div>
@endsection

@section('scripts')

@endsection