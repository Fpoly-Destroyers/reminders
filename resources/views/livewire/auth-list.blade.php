<div class="text-sm flex items-center justify-center h-screen">
    <div class="text-center">
        <p class="font-semibold mb-4">List is locked</p>
        <p class="text-blue-600 hover:cursor-pointer">Unlock</p>
        <div class="flex items-center justify-center gap-2 hidden">
            <input placeholder="Password" type="text" id="" name="" value="" class="bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-64 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            <button type="button" class="flex items-center justify-center py-0.5 px-1 text-blue-700 rounded border border-blue-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <span class="material-symbols-outlined">
                    arrow_forward
                </span>
            </button>
        </div>
    </div>

    <script>
        const unlock = document.querySelector('.text-blue-600');
        const unlockForm = document.querySelector('.flex.items-center.justify-center.gap-2');

        unlock.addEventListener('click', () => {
            unlock.classList.toggle('hidden');
            unlockForm.classList.toggle('hidden');
        });
    </script>
</div>