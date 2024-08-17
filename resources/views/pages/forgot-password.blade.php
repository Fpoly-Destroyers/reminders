@extends('layouts.share')

@section('title', 'Forgot Password')

@section('content')
    <div class="flex items-center justify-center h-screen text-gray-600 bg-gray-50">
        <div class="py-16 px-48 bg-white shadow rounded min-h-[600px] flex flex-col justify-center">
            @session('error')
                <div class="rounded border-1 border-red-700 bg-red-50 px-4 py-2 text-xs mb-4 text-red-500">{{ session('error') }}
                </div>
            @endsession
            @session('success')
                <div class="rounded border-1 border-blue-700 bg-blue-50 px-4 py-2 text-xs mb-4 text-blue-500">
                    {{ session('success') }}</div>
            @endsession
            <p class="text-sm mb-4 font-medium">Recovery account with Email</p>
            <form action="#" method="post">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <input placeholder="Email" type="email" id="email" name="email" value="{{ old('email') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-64 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    @error('email')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <button type="submit"
                        class="px-2 py-1 text-xs text-white bg-blue-700 rounded border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Send
                    </button>
                </div>
            </form>
            <div class="flex justify-end gap-1">
                <p class="text-xs">Back to</p>
                <a href="{{ route('login') }}" class="text-blue-500 text-xs">Login</a>
            </div>
        </div>
    </div>
@endsection
