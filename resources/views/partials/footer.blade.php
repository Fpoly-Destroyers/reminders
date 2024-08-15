<div class="flex items-center justify-between gap-4">
    <div class="flex items-center gap-4">
        <img class="w-8 h-8 object-cover" src="{{ asset('logo.ico') }}" alt="">
        <p class="font-semibold">Reminders</p>
    </div>
    <div class="flex items-center gap-4">
        <div class="inline-flex rounded-md shadow-sm">
            <a href="{{ route('settings') }}" aria-current="page"
                class="flex items-center px-3 py-1 text-sm font-medium text-black bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                <span class="material-symbols-outlined">
                    settings
                </span>
            </a>
            <button id="dropdownTopButton" data-dropdown-toggle="dropdownTop" data-dropdown-placement="top"
                class="flex items-center px-3 py-1 text-sm font-medium text-black bg-white border border-l-0 border-gray-200 rounded-e-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                <span class="material-symbols-outlined">
                    account_circle
                </span>
            </button>
        </div>

        <div id="dropdownTop"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
                <li>
                    <a href="{{ route('profile') }}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-red-500">Log
                        out</a>
                </li>
            </ul>
        </div>
    </div>
</div>
