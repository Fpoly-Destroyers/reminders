@extends('layouts.main')

@section('title', 'Reminders')

@section('content')
    <div class="h-screen overflow-y-auto">
        <div class="flex items-start justify-between mb-4">
            <p class="font-semibold text-xl text-blue-700 mb-4">List title</p>
            <button type="submit"
                class="flex items-center gap-1 px-2 py-0.5 text-xs rounded border border-blue-300 text-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <span class="material-symbols-outlined">
                    add_box
                </span>New Task
            </button>
        </div>
        <div>
            @for ($i = 0; $i < 20; $i++)
                @livewire('task')
            @endfor
        </div>
    </div>
@endsection
