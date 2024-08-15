<div class="my-task">
    <div class="flex items-start justify-between border-b">
        <p class="font-semibold text-sm mb-1">300 Completed</p>
        <span class="text-blue-600 text-xs cursor-pointer">Show</span>
    </div>
    @for ($i = 0; $i < 10; $i++)
        <div
            class="flex items-center justify-between rounded border-b border-gray-200 px-2 py-4 hover:bg-gray-100 hover:cursor-pointer">
            <div class="flex gap-4 items-center">
                <div>
                    <input id="default-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600">
                </div>
                <div>
                    <p class="text-sm font-semibold mb-1">Task Title</p>
                    <p class="text-xs text-gray-500 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ullam,
                        labore!
                    </p>
                    <p class="text-xs text-white">
                        <span class="bg-gray-400 rounded px-1 py-0.5">12/08/2024</span>
                        <span class="bg-gray-400 rounded px-1 py-0.5">13:00</span>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <div class="hover:cursor-pointer text-red-500" onclick="return confirm('Move to trash')">
                    <span class="material-symbols-outlined">
                        delete
                    </span>
                </div>
            </div>
        </div>
    @endfor
</div>
