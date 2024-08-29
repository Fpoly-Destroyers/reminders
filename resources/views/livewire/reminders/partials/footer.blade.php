<div class="flex items-center justify-between gap-4">
    <a href="{{ route('reminders.index') }}" class="flex items-center gap-4">
        <img class="w-6 h-6 object-cover" src="{{ asset('reminders.ico') }}" alt="">
        <p class="font-semibold text-sm">Reminders</p>
    </a>

    <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
        class="flex text-sm bg-gray-800 rounded-full md:me-0 " type="button">
        <span class="sr-only">Open user menu</span>
        <img class="w-7 h-7 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
            alt="user photo">
    </button>

    <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
        <div class="px-4 py-3 text-sm text-gray-900">
            <div>{{ Auth::user()->fullname }}</div>
            <div class="font-medium truncate">{{ Auth::user()->email }}</div>
        </div>
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownUserAvatarButton">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
            </li>
            <li>
                <a href="{{ route('settings') }}" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
            </li>
        </ul>
        <div class="py-2">
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100">Log
                out</a>
        </div>
    </div>
</div>
