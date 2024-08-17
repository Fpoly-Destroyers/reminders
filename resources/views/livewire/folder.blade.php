<div class="h-60 overflow-y-auto space-y-2 no-scrollbar">
    @foreach ($folders as $folder)
        <a href="{{ route('reminders.folder', $folder->slug) }}"
            class="folder px-4 py-1 rounded flex items-center justify-between bg-gray-200 text-black">
            <div class="flex items-center gap-2">
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
            <div class="flex items-center gap-2">
                @if ($folder->is_pinned)
                    <span class="pin material-symbols-outlined text-blue-700">
                        push_pin
                    </span>
                @endif
                <p class="text-sm">{{ $folder->tasks->count() }}</p>
            </div>
        </a>
    @endforeach

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;

            const links = document.querySelectorAll('.folder');

            links.forEach(link => {
                const linkUrl = new URL(link.getAttribute('href'), window.location.origin);
                const linkPath = linkUrl.pathname;
                const pin = link.querySelector('.pin');
                
                if (linkPath === currentPath) {
                    link.classList.add('bg-blue-600', 'text-white');
                    link.classList.remove('bg-gray-200');
                    pin.classList.add('text-white');
                    pin.classList.remove('text-blue-700');
                }
            });
        });
    </script>
</div>
