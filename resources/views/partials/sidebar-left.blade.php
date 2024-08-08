<div class="p-4 border-r border-gray-200 h-screen bg-gray-100 overflow-y-auto no-scrollbar">
    <div class="mb-4">
        @livewire('search')
    </div>

    <div class="mb-4">
        @livewire('overview')
    </div>
    <div class="mb-4">
        <div class="flex items-center justify-between mb-2">
            <p class="text-xs font-medium">My List</p>
            <button class="text-blue-700">
                <span class="material-symbols-outlined">
                    add_box
                </span>
            </button>
        </div>
        @livewire('task-list')
    </div>
    <div class="mb-4">
        <p class="text-xs font-medium mb-2">Calendar</p>
        @livewire('calendar')
    </div>
</div>