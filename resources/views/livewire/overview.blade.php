<div class="grid grid-cols-2 gap-2">
    <a href="{{ route('reminders.folder', 'today') }}" class="folder bg-gray-200 rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <div class="mb-2">
                    <span class="material-symbols-outlined w-2 h-2">
                        calendar_month
                    </span>
                </div>
                <p>Today</p>
            </div>
            <p class="font-bold text-lg">{{ $today }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'archived') }}" class="folder bg-gray-200 rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <div class="mb-2">
                    <span class="material-symbols-outlined w-2 h-2">
                        archive
                    </span>
                </div>
                <p>Archived</p>
            </div>
            <p class="font-bold text-lg">{{ $archived }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'all') }}" class="folder bg-gray-200 rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <div class="mb-2">
                    <span class="material-symbols-outlined w-2 h-2">
                        list_alt
                    </span>
                </div>
                <p>All</p>
            </div>
            <p class="font-bold text-lg">{{ $all }}</p>
        </div>
    </a>

    <a href="{{ route('reminders.folder', 'trashed') }}" class="folder bg-gray-200 rounded text-xs p-2">
        <div class="flex items-start justify-between">
            <div>
                <div class="mb-2">
                    <span class="material-symbols-outlined w-2 h-2">
                        folder_delete
                    </span>
                </div>
                <p>Trashed</p>
            </div>
            <p class="font-bold text-lg">{{ $trashed }}</p>
        </div>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;

            const links = document.querySelectorAll('.folder');

            links.forEach(link => {
                const linkUrl = new URL(link.getAttribute('href'), window.location.origin);
                const linkPath = linkUrl.pathname;

                if (linkPath === currentPath) {
                    link.classList.add('bg-blue-600', 'text-white');
                    link.classList.remove('bg-gray-200');
                }
            });
        });
    </script>

</div>
