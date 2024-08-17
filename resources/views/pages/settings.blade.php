@extends('layouts.share')

@section('title', 'Settings')

@section('content')
<div class="bg-gray-50 py-24 px-64 h-screen">
    <div class="rounded shadow bg-white p-4 text-gray-600 min-h-[600px]">
        <form action="" method="post">
            <div class="flex items-center justify-between mb-4">
                <a href="{{ url()->previous() }}" class="text-sm flex items-center">
                    <span class="material-symbols-outlined">
                        chevron_backward
                    </span>
                    <span class="text-xs">Back</span>
                </a>
                <div>
                    <p class="font-semibold">Settings</p>
                </div>
                <div>
                    <button type="button" class="text-xs px-2 py-1 text-white bg-blue-700 rounded border border-blue-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Save
                    </button>
                </div>
            </div>

            <div class="px-4">
                <p class="text-sm font-semibold mb-4">Notification</p>
                <div class="mb-2">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <span class="text-xs">Push notification</span>
                        <div class="ms-3 relative w-8 h-4 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-blue-600 after:content-[''] after:absolute after:top-[1px] after:start-[1px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-3.5 after:h-3.5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="mb-2">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <span class="text-xs">Email</span>
                        <div class="ms-3 relative w-8 h-4 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-blue-600 after:content-[''] after:absolute after:top-[1px] after:start-[1px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-3.5 after:h-3.5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection