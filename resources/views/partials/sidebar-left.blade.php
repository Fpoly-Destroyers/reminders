<div class="p-4 border-r border-gray-200 min-h-screen bg-gray-100">
    <div class="mb-4">
        @livewire('search')
    </div>

    <div class="mb-4">
        @livewire('overview')
    </div>
    <div class="mb-4">
        <p class="text-xs font-medium mb-2">My List</p>
        @livewire('task-list')
    </div>
    <div class="mb-4">
        <p class="text-xs font-medium mb-2">Calendar</p>
        @livewire('calendar')
    </div>
</div>
