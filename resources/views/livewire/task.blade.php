<div class="my-task">
    <div class="flex items-start justify-between border-b">
        <p class="font-semibold text-sm mb-1">{{ $tasks->where('status', 1)->count() }} Completed</p>
        <form action="" method="GET">
            <input type="text" hidden name="completed" value="true">
            <button type="submit" class="text-blue-600 text-xs cursor-pointer">Show</button>
        </form>
    </div>
    @foreach ($tasks as $task)
        @if ($task->status == 0)
            <div
                class="flex items-center justify-between border-b border-gray-200 px-2 py-4 hover:bg-gray-100 hover:cursor-pointer">
                <div class="flex gap-4 items-center">
                    <div>
                        <input id="checkbox-{{ $task->id }}" type="checkbox"
                            @if ($task->status == 1) checked @endif
                            class="w-4 h-4 text-green-400 bg-gray-100 border-gray-300 rounded focus:ring-green-400 dark:focus:ring-green-400 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div>
                        <p class="text-sm font-semibold mb-1">{{ ucfirst($task->title) }}</p>
                        <p class="text-xs text-gray-500 mb-1">{{ $task->content }}</p>
                        <p class="text-xs text-white">
                            {{-- Kiểm tra nếu on_date và on_time lớn hơn ngày giờ hiện tại --}}
                            <span
                                class="{{ $task->on_date < now()->toDateString() || ($task->on_date == now()->toDateString() && $task->on_time < now()->toTimeString()) ? 'bg-red-500' : 'bg-gray-400' }} rounded px-1 py-0.5 me-2">
                                {{ $task->on_date }}
                            </span>
                            <span
                                class="{{ $task->on_date < now()->toDateString() || ($task->on_date == now()->toDateString() && $task->on_time < now()->toTimeString()) ? 'bg-red-500' : 'bg-gray-400' }} rounded px-1 py-0.5">
                                {{ $task->on_time }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <div class="hover:cursor-pointer text-red-500">
                        <button type="button" class="material-symbols-outlined"
                            data-modal-target="delete-modal-{{ $task->id }}"
                            data-modal-toggle="delete-modal-{{ $task->id }}">
                            delete
                        </button>
                    </div>
                    <div id="delete-modal-{{ $task->id }}" tabindex="-1" key="{{ $task->id }}"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p4 w-full max-w-md max-h-full">
                            <div
                                class="flex flex-col justify-betweenrelative bg-white rounded shadow dark:bg-gray-700 p-4 min-h-[240px]">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-semibold text-gray-800 dark:text-gray-100">Delete Task</p>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded flex items-center justify-center p-1 dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="delete-modal-{{ $task->id }}">
                                        <span class="material-symbols-outlined">
                                            close
                                        </span>
                                    </button>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="material-symbols-outlined text-orange-500">
                                        warning
                                    </span>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Are you sure you want to delete
                                        this
                                        task?</p>
                                </div>
                                <div class="mt-auto flex items-center justify-center gap-2">
                                    <button wire:click="delete({{ $task->id }})" type="button"
                                        data-modal-hide="delete-modal-{{ $task->id }}"
                                        class="text-white bg-red-500 hover:bg-red-600 rounded px-3 py-1.5 text-xs">Delete</button>
                                    <button type="button"
                                        class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded px-3 py-1.5 text-xs"
                                        data-modal-hide="delete-modal-{{ $task->id }}">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endif
    @endforeach
</div>
