<div>
    <style>
        #end_repeat {
            transition: opacity 0.3s ease;
        }
    </style>

    <form wire:submit.prevent="addTask" enctype="multipart/form-data">
        @csrf
        <div class="mb-8 flex items-center justify-between">
            <p class="text-xl font-semibold text-blue-700">Add Task</p>
            <button type="submit" class="text-xs px-2 py-1 text-white bg-blue-700 rounded border border-blue-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Apply
            </button>
        </div>
        <div>
            <div class="mb-4">
                <input placeholder="Title" type="text" wire:model="taskTitle" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @error('taskTitle')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <textarea placeholder="Content" wire:model="taskContent" rows="4" class="block p-1.5 w-full text-xs text-gray-600 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                @error('taskContent')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="folders" class="text-xs mb-1">Folder</label>
                <select id="folders" wire:model="taskFolderId" class="bg-gray-50 border border-gray-300 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Default</option>
                    @foreach ($folders as $folder)
                        <option value="{{ $folder->id }}">{{ $folder->title }}</option>
                    @endforeach
                </select>
                @error('taskFolderId')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 flex items-center gap-4">
                <div class="w-full">
                    <label for="on_date" class="text-xs mb-1">On Date</label>
                    <input type="date" wire:model="taskOnDate" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    @error('taskOnDate')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="on_time" class="text-xs mb-1">On Time</label>
                    <input type="time" wire:model="taskOnTime" class="bg-gray-50 border leading-none border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    @error('taskOnTime')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-4 flex items-center gap-4">
                <label for="reminder" class="text-xs mb-1 w-2/3">Remind me before</label>
                <input placeholder="0" type="number" wire:model="taskReminderTime" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <select wire:model="taskReminderUnit" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="hour" selected>Hours</option>
                    <option value="day">Days</option>
                    <option value="week">Weeks</option>
                    <option value="month">Months</option>
                    <option value="year">Years</option>
                </select>
                @error('taskReminderUnit')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 flex items-center gap-4" id="repeat">
                <label for="repeat_select" class="text-xs mb-1">Repeat</label>
                <input placeholder="0" type="number" wire:model="taskRepeatCount" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <div class="w-full">
                    <select id="repeat_select" wire:model="taskRepeatUnit" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected>None</option>
                        <option value="day">Every Days</option>
                        <option value="week">Every Weeks</option>
                        <option value="month">Every Month</option>
                        <option value="year">Every Years</option>
                    </select>
                </div>
                @error('taskRepeatUnit')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 flex items-center gap-4 hidden" id="end_repeat">
                <label for="end_repeat_select" class="text-xs mb-1">End repeat</label>
                <div class="">
                    <select id="end_repeat_select" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected>Never</option>
                        <option value="on_date">On Date</option>
                    </select>
                </div>
                <input type="date" id="end_repeat_date" wire:model="taskEndRepeatDate" class="hidden bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @error('taskEndRepeatDate')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <input placeholder="Location" type="text" id="location" wire:model="taskLocation" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @error('taskLocation')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <input placeholder="URL" type="text" id="url" wire:model="taskUrl" class="bg-gray-50 border border-gray-300 text-gray-600 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @error('taskUrl')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
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
                        <input id="dropzone-file" type="file" class="hidden" wire:model="taskImage" />
                    </label>
                </div>
                @error('taskImage')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
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
                document.getElementById('end_repeat_select').value = '';
                document.getElementById('end_repeat_date').classList.add('hidden');
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
