<div>
    <form method="post" wire:submit="submit">
        @csrf
        <div class="mb-8 flex items-center justify-between">
            <p class="text-xl font-semibold text-blue-700">Add Folder</p>
            <button type="submit"
                class="text-xs px-2 py-1 text-white bg-blue-700 rounded border border-blue-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Apply
            </button>
        </div>
        <div>
            <div class="mb-4">
                <input placeholder="Title" type="text" id="" name="" value=""
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-4">
                <input placeholder="Password" type="text" id="" name="" value=""
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-4 flex flex-col">
                <label for="color" class="text-xs font-semibold ms-2 mb-1">Color</label>
                <div class="rounded p-4 grid grid-cols-6 gap-y-4">
                    @foreach ($colors as $hex)
                        <label class="flex items-center">
                            <input type="radio" name="color" value="{{ $hex }}" wire:model="color"
                                class="hidden">
                            <div class="h-6 w-6 rounded hover:cursor-pointer"
                                wire:click="setColor('{{ $hex }}')"
                                style="background-color: {{ $hex }};">
                                @if ($color == $hex)
                                    <span class="material-symbols-outlined text-white">
                                        check
                                    </span>
                                @endif
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="flex items-center mb-4">
                <input id="is_pinned" type="checkbox" value="" name="is_pinned"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="is_pinned" class="ms-2 text-xs dark:text-gray-300">Pinned</label>
            </div>
        </div>
    </form>
</div>
