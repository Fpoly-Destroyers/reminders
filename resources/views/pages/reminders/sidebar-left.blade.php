<div class="p-4 border-r border-gray-200 h-screen bg-gray-100 overflow-y-auto no-scrollbar select-none sidebar-left">

    <div class="mb-4">
        @livewire('search')
    </div>

    <div class="mb-4">
        @livewire('overview')
    </div>

    <div class="mb-4">
        @livewire('folder')
    </div>

    <div class="mb-4">
        @livewire('calendar', ['year' => $year ?? null, 'month' => $month ?? null, 'day' => $day ?? null])
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;

        const folders = document.querySelectorAll('.folder');
        const overViews = document.querySelectorAll('.over-view');

        overViews.forEach(overView => {
            const linkUrl = new URL(overView.getAttribute('href'), window.location.origin);
            const linkPath = linkUrl.pathname;

            if (linkPath === currentPath) {
                // Get color from icon
                const color = overView.querySelector('.material-symbols-outlined').style.color;
                // Add color to link with text-white and background = color
                overView.classList.add('text-white');
                overView.style.backgroundColor = color;
                // Add color to icon
                overView.querySelector('.material-symbols-outlined').style.color = 'white';
            }
        });


        folders.forEach(folder => {
            const linkUrl = new URL(folder.getAttribute('href'), window.location.origin);
            const linkPath = linkUrl.pathname;
            const pin = folder.querySelector('.pin');

            if (linkPath === currentPath) {
                folder.classList.add('bg-blue-600', 'text-white');
                folder.classList.remove('bg-gray-200');
                folder.scrollIntoView({
                    block: 'center'
                });
                if (pin) {
                    pin.classList.add('text-white');
                    pin.classList.remove('text-blue-700');
                }
            }

        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const folderContainers = document.querySelectorAll('.folder-container');
        const contextMenu = document.querySelector('.context-menu');
        const myFolders = document.querySelector('.sidebar-left');

        folderContainers.forEach(container => {
            container.addEventListener('contextmenu', (event) => {
                event.preventDefault();

                // Show menu
                contextMenu.classList.remove('hidden');
                contextMenu.style.left = `${event.pageX}px`;
                contextMenu.style.top = `${event.pageY}px`;

                // Disable events
                myFolders.classList.add('pointer-events-none');

                // Get and Set data-id
                contextMenu.dataset.id = container.dataset.id;
            });
        });

        document.addEventListener('mousedown', () => {
            contextMenu.classList.add('hidden');
            myFolders.classList.remove('pointer-events-none');
        });
    });
</script>
