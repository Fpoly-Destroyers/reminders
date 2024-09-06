<div>
    <div class="p-4 border-r border-gray-200 h-screen bg-gray-100 overflow-y-auto no-scrollbar select-none sidebar-left">

        <div class="mb-4">
            @livewire('reminders.search')
        </div>

        <div class="mb-4">
            @livewire('reminders.overview')
        </div>

        <div class="mb-4">
            @livewire('reminders.folder')
        </div>

        <div class="mb-4">
            @livewire('reminders.calendar')
        </div>

    </div>
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('sidebarleft-event', () => {
                // Active folder and scroll 
                const currentPath = window.location.pathname;
                const folders = document.querySelectorAll('.folder');

                folders.forEach(folder => {
                    const linkPath = (new URL(folder.getAttribute('href'), window.location.origin))
                        .pathname;
                    if (linkPath === currentPath) {
                        folder.scrollIntoView({
                            block: 'center',
                        });
                    }
                });

                // Right-click context menu
                const contextMenu = document.querySelector('.context-menu');
                const myFolders = document.querySelector('.sidebar-left');
                const editFolder = contextMenu.querySelector('.edit-folder');
                const pinFolder = contextMenu.querySelector('.pin-folder');
                const deleteFolder = contextMenu.querySelector('.delete-folder');

                const showContextMenu = (event, slug) => {
                    event.preventDefault();
                    contextMenu.classList.remove('hidden');
                    contextMenu.style.left = `${event.pageX}px`;
                    contextMenu.style.top = `${event.pageY}px`;
                    myFolders.classList.add('pointer-events-none');
                    editFolder.setAttribute('wire:click', `editFolder('${slug}')`);
                    pinFolder.setAttribute('wire:click', `pinFolder('${slug}')`); 
                    deleteFolder.setAttribute('wire:click', `deleteFolder('${slug}')`);
                };

                document.addEventListener('contextmenu', (event) => {
                    const container = event.target.closest('.folder-container');
                    if (container) {
                        showContextMenu(event, container.dataset.id);
                    }
                });

                document.addEventListener('click', () => {
                    contextMenu.classList.add('hidden');
                    myFolders.classList.remove('pointer-events-none');
                });
            });
        });
    </script>
</div>
