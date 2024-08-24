<div>
    <div class="flex items-center justify-between mb-2">
        <p class="text-xs font-medium">My Folder</p>
        <a href="#" class="text-blue-700 hover:text-blue-900">
            <span class="material-symbols-outlined">
                add_box
            </span>
        </a>
    </div>
    <div class="h-60 overflow-y-auto space-y-2 no-scrollbar">
        @foreach ($folders as $folder)
            <div class="relative folder-container" data-id="{{ $folder->slug }}">
                <a href="{{ route('reminders.folder', $folder->slug) }}"
                    class="folder px-4 py-1 rounded flex items-center justify-between bg-gray-200">
                    <div class="w-3/4 flex items-center gap-2">
                        @if (empty($folder->password))
                            <span class="material-symbols-outlined" style="color: {{ $folder->color }}">
                                folder
                            </span>
                        @else
                            <span class="material-symbols-outlined">
                                lock
                            </span>
                        @endif
                        <p class="text-xs">{{ ucfirst($folder->title) }}</p>
                    </div>
                    <div
                        class="w-1/4 ps-4 flex items-center gap-2 {{ $folder->is_pinned ? 'justify-between' : 'justify-end' }}">
                        @if ($folder->is_pinned)
                            <span class="pin material-symbols-outlined text-blue-700">
                                push_pin
                            </span>
                        @endif
                        <p class="text-sm">{{ $folder->tasks->count() }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <!-- Right-click menu -->
    <div
        class="context-menu absolute hidden right-click-menu bg-white border rounded-lg shadow-lg py-2 text-xs z-50 pointer-events-auto">
        <ul class="my-1">
            <li>
                <a href="" class="edit-folder">
                    <div class="flex items-center my-1 mx-3 p-2 hover:bg-gray-200 rounded-lg">
                        <span class="material-symbols-outlined me-3" style="font-size: 18px !important">
                            edit
                        </span>
                        Edit
                    </div>
                </a>
            </li>
            <li>
                <div class="pin-folder flex items-center my-1 mx-3 p-2 hover:bg-gray-200 rounded-lg">
                    <span class="material-symbols-outlined me-3" style="font-size: 18px !important">
                        keep
                    </span>
                    Pin/Unpin
                </div>
            </li>
            <li>
                <div class="flex items-center my-1 mx-3 p-2 hover:bg-gray-200 rounded-lg">
                    <span class="material-symbols-outlined me-3" style="font-size: 18px !important">
                        lock
                    </span>
                    Lock
                </div>
            </li>
            <li>
                <div class="archive-folder flex items-center my-1 mx-3 p-2 hover:bg-gray-200 rounded-lg">
                    <span class="material-symbols-outlined me-3" style="font-size: 18px !important">
                        archive
                    </span>
                    Archived
                </div>
            </li>
        </ul>
    </div>
</div>
