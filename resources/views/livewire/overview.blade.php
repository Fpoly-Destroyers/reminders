<div class="grid grid-cols-2 gap-2">
    <a href="{{ route('reminders.folder', 'today') }}" class="folder bg-gray-200 rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <div class="">
                    <span class="material-symbols-outlined w-2 h-2" style="color: #1C64F2">
                        calendar_month
                    </span>
                </div>
                <p class="ms-1">Today</p>
            </div>
            <p class="font-bold text-lg">{{ $today }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'archived') }}" class="folder bg-gray-200 rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <div class="">
                    <span class="material-symbols-outlined w-2 h-2" style="color: #F19E39">
                        archive
                    </span>
                </div>
                <p class="ms-1">Archived</p>
            </div>
            <p class="font-bold text-lg">{{ $archived }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'all') }}" class="folder bg-gray-200 rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <div class="">
                    <span class="material-symbols-outlined" style="color: #5f6368;">
                        list_alt
                    </span>
                </div>
                <p class="ms-1">All</p>
            </div>
            <p class="font-bold text-lg">{{ $all }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'trashed') }}" class="folder bg-gray-200 rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <div class="">
                    <span class="material-symbols-outlined w-2 h-2" style="color: #EA3323;">
                        folder_delete
                    </span>
                </div>
                <p class="ms-1">Trashed</p>
            </div>
            <p class="font-bold text-lg">{{ $trashed }}</p>
        </div>
    </a>

    <script>
        const currentPath = window.location.pathname;

        const links = document.querySelectorAll('.folder');

        links.forEach(link => {
            const linkUrl = new URL(link.getAttribute('href'), window.location.origin);
            const linkPath = linkUrl.pathname;

            if (linkPath === currentPath) {
                // Get color from icon
                const color = link.querySelector('.material-symbols-outlined').style.color;
                // Add color to link with text-white and background = color
                link.classList.add('text-white');
                link.style.backgroundColor = color;
                // Add color to icon
                link.querySelector('.material-symbols-outlined').style.color = 'white';
            }
        });
    </script>

</div>
