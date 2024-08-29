<div class="h-screen overflow-y-auto no-scrollbar">
    <!-- Kiem tra neu Folder bi lock thi hien thi doan nay -->
    <!-- <div>
        @livewire('reminders.auth-folder')
    </div> -->

    <!-- Folder khong bi lock thi hien thi doan nay -->
    <div class="flex items-start justify-between mb-4 pt-4 sticky top-0 bg-white ">
        <p class="font-semibold text-xl text-blue-700 mb-4">Folder title (90)</p>
        <button type="submit" class="flex items-center gap-1 px-2 py-0.5 text-xs rounded border border-blue-300 text-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <span class="material-symbols-outlined">
                add_box
            </span>New Task
        </button>
    </div>
    <div class="mb-16">
        @livewire('reminders.task')
    </div>
</div>