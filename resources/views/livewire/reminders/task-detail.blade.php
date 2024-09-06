<div>
    <style>
        #end_repeat {
            transition: opacity 0.3s ease;
        }
    </style>

    <form action="" method="post">
        <div class="mb-8 flex items-center justify-between">
            <p class="text-xl font-semibold text-blue-700">Task</p>
            <button type="button" class="text-xs px-2 py-1 text-white bg-blue-700 rounded border border-blue-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Apply
            </button>
        </div>
        <div>
            <div class="mb-4">
                <input placeholder="Title" type="text" id="" name="" value="" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-4">
                <textarea placeholder="Content" id="" name="" rows="4" class="block p-1.5 w-full text-xs text-gray-600 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            </div>
            <div class="mb-4">
                <label for="folders" class="text-xs mb-1">Folder</label>
                <select id="folders" name="folders" class="bg-gray-50 border border-gray-300 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Default</option>
                </select>
            </div>
            <div class="mb-4 flex items-center gap-4">
                <div class="w-full">
                    <label for="on_date" class="text-xs mb-1">On Date</label>
                    <input type="date" id="on_date" name="" value="" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="w-full">
                    <label for="on_time" class="text-xs mb-1">On Time</label>
                    <input type="time" id="on_time" class="bg-gray-50 border leading-none border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                </div>
            </div>
            <div class="mb-4 flex items-center gap-4">
                <label for="reminder" class="text-xs mb-1 w-2/3">Remind me before</label>
                <input placeholder="0" type="number" id="on_date" name="" value="" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <select id="" name="" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Minutes</option>
                    <option value="">Hours</option>
                    <option value="">Days</option>
                    <option value="">Weeks</option>
                    <option value="">Months</option>
                    <option value="">Years</option>
                </select>
            </div>
            <div class="mb-4 flex items-center gap-4" id="repeat">
                <label for="repeat_select" class="text-xs mb-1">Repeat</label>
                <div class="w-full">
                    <select id="repeat_select" name="repeat" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected>None</option>
                        <option value="every_days">Every Days</option>
                        <option value="every_weeks">Every Weeks</option>
                        <option value="every_month">Every Month</option>
                        <option value="every_years">Every Years</option>
                    </select>
                </div>
            </div>
            <div class="mb-4 flex items-center gap-4 hidden" id="end_repeat">
                <label for="end_repeat_select" class="text-xs mb-1">End repeat</label>
                <div class="">
                    <select id="end_repeat_select" name="end_repeat" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected>Never</option>
                        <option value="on_date">On Date</option>
                    </select>
                </div>
                <input type="date" id="end_repeat_date" name="" value="" class="hidden bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-4">
                <input placeholder="Location" type="text" id="" name="" value="" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-4">
                <input placeholder="Mention to people" type="text" id="" name="" value="" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-4">
                <input placeholder="URL" type="text" id="" name="" value="" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-4">
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <span class="material-symbols-outlined mb-4">
                                cloud_upload
                            </span>
                            <p class="mb-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
        </div>
    </form>

    <script>
        document.getElementById('repeat_select').addEventListener('change', function() {
            const endRepeatDiv = document.getElementById('end_repeat');
            if (this.value !== '') {
                endRepeatDiv.classList.remove('hidden');
            } else {
                endRepeatDiv.classList.add('hidden');
                document.getElementById('end_repeat_select').value = ''; // Reset end_repeat_select
                document.getElementById('end_repeat_date').classList.add('hidden'); // Hide end_repeat_date
            }
        });

        document.getElementById('end_repeat_select').addEventListener('change', function() {
            const endRepeatDateInput = document.getElementById('end_repeat_date');
            if (this.value === 'on_date') {
                endRepeatDateInput.classList.remove('hidden');
            } else {
                endRepeatDateInput.classList.add('hidden');
            }
        });
    </script>
</div>