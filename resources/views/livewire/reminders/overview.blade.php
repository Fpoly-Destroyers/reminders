<div class="grid grid-cols-2 gap-2">
    <a href="{{ route('reminders.folder', 'today') }}" wire:navigate
        class="{{ $this->isActive(route('reminders.folder', 'today')) ? 'text-white bg-[#1C64F2]' : 'bg-gray-200' }} rounded text-xs p-2">

        <div class="flex items-start justify-between">
            <div>
                <span class="material-symbols-outlined w-2 h-2"
                    style="color: {{ $this->isActive(route('reminders.folder', 'today')) ? 'white' : '#1C64F2' }}">
                    calendar_month
                </span>
                <p class="ms-1">Today</p>
            </div>
            <p class="font-bold text-lg">{{ $today }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'archived') }}" wire:navigate
        class="{{ $this->isActive(route('reminders.folder', 'archived')) ? 'text-white bg-[#F19E39]' : 'bg-gray-200' }} rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <span class="material-symbols-outlined w-2 h-2"
                    style="color: {{ $this->isActive(route('reminders.folder', 'archived')) ? 'white' : '#F19E39' }}">
                    archive
                </span>
                <p class="ms-1">Archived</p>
            </div>
            <p class="font-bold text-lg">{{ $archived }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'all') }}" wire:navigate
        class="{{ $this->isActive(route('reminders.folder', 'all')) ? 'text-white bg-[#5f6368]' : 'bg-gray-200' }} rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <span class="material-symbols-outlined"
                    style="color: {{ $this->isActive(route('reminders.folder', 'all')) ? 'white' : '#5f6368' }}">
                    list_alt
                </span>
                <p class="ms-1">All</p>
            </div>
            <p class="font-bold text-lg">{{ $all }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'trashed') }}" wire:navigate
        class="{{ $this->isActive(route('reminders.folder', 'trashed')) ? 'text-white bg-[#EA3323]' : 'bg-gray-200' }} rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <span class="material-symbols-outlined w-2 h-2"
                    style="color: {{ $this->isActive(route('reminders.folder', 'trashed')) ? 'white' : '#EA3323' }}">
                    folder_delete
                </span>
                <p class="ms-1">Trashed</p>
            </div>
            <p class="font-bold text-lg">{{ $trashed }}</p>
        </div>
    </a>
</div>
