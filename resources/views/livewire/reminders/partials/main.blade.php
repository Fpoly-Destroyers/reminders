<div class="h-screen overflow-y-auto no-scrollbar">
    @php
        $isUnlocked =
            $folder && session()->has('is_unlocked_' . $folder->slug) && session('is_unlocked_' . $folder->slug);
    @endphp
    @if ((empty($folder->password) || $isUnlocked) && !empty($folder))
        <div class="flex items-start justify-between mb-4 pt-4 sticky top-0 bg-white">
            <p class="font-semibold text-xl text-blue-600 mb-4">{{ ucfirst($folder->title) }} ({{ $folder->count }})</p>
            <div class="flex items-center gap-1 px-2 py-0.5 text-xs rounded border border-blue-300 text-blue-700 dark:bg-blue-600 dark:hover:bg-blue-700  hover:bg-blue-100 cursor-pointer"
                wire:click="addTask">
                <span class="material-symbols-outlined">
                    add_box
                </span>New Task
            </div>
        </div>
        <div class="mb-16">
            @livewire('reminders.task', ['tasks' => $tasks, 'folder' => $folder])
        </div>
    @elseif (empty($folder))
        <div class="flex items-start justify-between mb-4 pt-4 sticky top-0 bg-white">
            <p class="font-semibold text-xl text-blue-600 mb-4">Tasks
                {{ session('selectedDate')['day'] . '/' . session('selectedDate')['month'] . '/' . session('selectedDate')['year'] }}
            </p>
            <div class="flex items-center gap-1 px-2 py-0.5 text-xs rounded border border-blue-300 text-blue-700 dark:bg-blue-600 dark:hover:bg-blue-700  hover:bg-blue-100 cursor-pointer"
                wire:click="addTask">
                <span class="material-symbols-outlined">
                    add_box
                </span>New Task
            </div>
        </div>
        <div class="mb-16">
            @livewire('reminders.task', ['tasks' => $tasks, 'folder' => $folder])
        </div>
    @else
        @livewire('reminders.auth-folder', ['folder' => $folder])
    @endif
</div>
