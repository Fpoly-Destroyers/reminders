@extends('layouts.share')

@section('title', 'Change password')

@section('content')
    <div class="flex items-center justify-center h-screen text-gray-600 bg-gray-50">
        <div class="p-4 bg-white shadow rounded min-h-[600px]">
            <a href="{{ url()->previous() }}" class="text-sm flex items-center">
                <span class="material-symbols-outlined">
                    chevron_backward
                </span>
                <span class="text-xs">Back</span>
            </a>
            <div class="py-16 px-48 flex flex-col justify-center">
                @session('error')
                    <div class="rounded border-1 border-red-700 bg-red-50 px-4 py-2 text-xs mb-4 text-red-500">
                        {{ session('error') }}
                    </div>
                @endsession
                @session('success')
                    <div class="rounded border-1 border-blue-700 bg-blue-50 px-4 py-2 text-xs mb-4 text-blue-500">
                        {{ session('success') }}</div>
                @endsession
                <p class="text-sm mb-4 font-medium">Change password</p>
                <form action="{{ route('post.change-password') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-4">
                        <input placeholder="Old password" type="password" name="old_password"
                            value="{{ old('old_password') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-64 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('old_password')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input placeholder="Password" type="text" name="password" value="{{ old('password') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-64 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('password')
                            <div class="text-red-500 text-xs break-words w-64">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input placeholder="Confirm password" type="text" name="confirm_password"
                            value="{{ old('confirm_password') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-64 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('confirm_password')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <button type="submit"
                            class="px-2 py-1 text-xs text-white bg-blue-700 rounded border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Change
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
