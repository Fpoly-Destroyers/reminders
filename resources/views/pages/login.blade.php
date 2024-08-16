@extends('layouts.share')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center h-screen text-gray-600 bg-gray-50">
    <div class="py-16 px-48 bg-white shadow rounded min-h-[600px] flex flex-col justify-center">
        <p class="text-sm mb-4 font-medium">Welcome to Reminders App</p>
        <form action="#" method="post">
            @csrf
            @method('POST')
            <div class="mb-4">
                <input placeholder="Email" type="text" id="" name="" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-64 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-4">
                <input placeholder="Password" type="text" id="" name="" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-64 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-2">
                <button type="submit" class="px-2 py-1 text-xs text-white bg-blue-700 rounded border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Login
                </button>
            </div>
        </form>
        <div class="flex justify-end gap-1">
            <p class="text-xs">Create a new account</p>
            <a href="{{ route('register') }}" class="text-blue-500 text-xs">Register</a>
        </div>
    </div>
</div>
@endsection