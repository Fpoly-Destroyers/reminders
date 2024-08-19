<div class="fixed bottom-0 right-0 left-[300px] border-t border-gray-200 bg-white py-2 px-4">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="{{ route('reminders.index') }}" class="flex items-center gap-2 border-r border-gray-200 pe-4">
                <img class="w-6 h-6 object-cover" src="{{ asset('reminders.ico') }}" alt="">
                <p class="font-semibold text-xs">Reminders</p>
            </a>
            <a href="{{ route('notes.index') }}" class="flex items-center gap-2">
                <img class="w-6 h-6 object-cover" src="{{ asset('notes.ico') }}" alt="">
                <p class="font-semibold text-xs">Notes</p>
            </a>
        </div>

        <div class="flex items-center gap-4">
            <div class="inline-flex rounded-md shadow-sm">
                <a href="{{ route('settings') }}" aria-current="page"
                    class="flex items-center px-3 py-1 text-sm font-medium text-black bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    <span class="material-symbols-outlined">
                        settings
                    </span>
                </a>
                <button id="account" data-dropdown-toggle="dropdownTop" data-dropdown-placement="top"
                    class="flex items-center px-3 py-1 text-sm font-medium text-black bg-white border border-l-0 border-gray-200 rounded-e-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                </button>
            </div>

            <div id="dropdownTop"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-52 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="account">
                    <li>
                        <div
                            class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <span class="material-symbols-outlined">
                                info
                            </span>
                            <div>
                                <div>{{ Auth::user()->fullname }}</div>
                                <div class="text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <a href="{{ route('change-password') }}"
                            class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <span class="material-symbols-outlined">
                                password
                            </span>
                            <span>Change password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-red-500">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
