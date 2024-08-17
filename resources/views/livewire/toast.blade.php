<div class="toast-message absolute right-5 top-6 max-w-full overflow-hidden">
    <div id="toast-success"
        class="animate-toast-slide transition duration-1000 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded shadow-lg dark:text-gray-400 dark:bg-gray-800"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-{{ $color }}-500 bg-{{ $color }}-100 rounded dark:bg-{{ $color }}-800 dark:text-{{ $color }}-200">
            <span class="material-symbols-outlined">
                {{ $icon }}
            </span>
        </div>
        <div class="px-6">
            <p class="text-xs font-semibold">{{ $title }}</p>
            <p class="text-xs font-normal">{{ $message }}</p>
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success" aria-label="Close">
            <span class="material-symbols-outlined">
                close
            </span>
        </button>
    </div>
</div>
