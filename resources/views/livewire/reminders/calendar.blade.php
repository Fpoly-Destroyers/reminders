<div>
    <p class="text-xs font-medium mb-2">Calendar</p>
    <div class="mt-5">
        <div class="flex items-center justify-between">
            <div class="w-4/6 px-3 flex justify-between">
                <span tabindex="0"
                    class="focus:outline-none dark:text-gray-100 text-gray-800 text-sm font-semibold">{{ $monthName . ' ' . $changeYear }}
                    @php
                        $hasTasksMonth = \App\Models\Task::whereYear('on_date', $changeYear)
                            ->whereMonth('on_date', $changeMonth)
                            ->where('status', 0)
                            ->exists();
                    @endphp
                    @if ($hasTasksMonth)
                        <span class="text-red-500 dark:text-red-100 text-xs" style="line-height: 0.5">•<span>
                    @endif
                </span>
            </div>

            <div class="w-2/6 flex justify-between">
                @if ($currentMonth != $changeMonth || $currentYear != $changeYear)
                    <button aria-label="calendar goToToday" wire:click="goToToday"
                        class="flex items-center hover:text-gray-400 text-gray-800 dark:text-gray-100 me-2">
                        <span class="material-symbols-outlined hover:cursor-pointer">
                            reply
                        </span>
                    </button>
                @endif
                <button aria-label="calendar backward" wire:click="previous"
                    class="flex items-center hover:text-gray-400 text-gray-800 dark:text-gray-100">
                    <span class="material-symbols-outlined">
                        chevron_left
                    </span>
                </button>
                <button aria-label="calendar forward" wire:click="next"
                    class="flex items-center hover:text-gray-400 text-gray-800 dark:text-gray-100">
                    <span class="material-symbols-outlined">
                        chevron_right
                    </span>
                </button>
            </div>
        </div>
        <div class="flex items-center justify-between pt-4 overflow-x-auto">
            <table class="w-full text-xs">
                <thead>
                    <tr>
                        @foreach ($weekDays as $day)
                            <th class="text-center">
                                <div class="py-2 mb-2 flex justify-center items-center w-full">
                                    <p class="font-medium text-gray-800 dark:text-gray-100">
                                        {{ $day }}
                                    </p>
                                </div>
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @for ($row = 0; $row < 6; $row++)
                        <tr>
                            @for ($col = 0; $col < 7; $col++)
                                @php
                                    $dayNumber = $row * 7 + $col - $firstDayOfMonth + 1;
                                    $isCurrentDay =
                                        $dayNumber == $currentDay &&
                                        $currentMonth == $changeMonth &&
                                        $currentYear == $changeYear;
                                    $isSelectedDay =
                                        $changeMonth == session('selectedDate.month') &&
                                        $changeYear == session('selectedDate.year') &&
                                        session('selectedDate.day') == $dayNumber &&
                                        session('selectedDate.day') != $currentDay;
                                    $hasTasksDay = \App\Models\Task::whereYear('on_date', $changeYear)
                                        ->whereMonth('on_date', $changeMonth)
                                        ->whereDay('on_date', $dayNumber)
                                        ->where('status', 0)
                                        ->exists();
                                @endphp
                                @if ($dayNumber > 0 && $dayNumber <= $daysInMonth)
                                    <td>
                                        <a href="{{ route('reminders.date', [$changeYear, $changeMonth, $dayNumber]) }}"
                                            wire:navigate class="flex justify-center">
                                            <div
                                                class="mb-0.5 py-3 cursor-pointer flex flex-col  justify-center items-center w-7 h-7 rounded-lg
                                                {{ $isCurrentDay ? ' bg-blue-700' : '' }}
                                                {{ $isCurrentDay ? '' : 'hover:bg-gray-300' }}
                                                {{ $isSelectedDay ? ' bg-gray-300' : '' }}">
                                                <p
                                                    class="{{ $isCurrentDay ? 'text-white' : 'text-gray-500 dark:text-gray-100' }} font-xs">
                                                    {{ $dayNumber }}
                                                </p>
                                                @if ($hasTasksDay)
                                                    <span class="text-red-500 dark:text-red-100 text-xs"
                                                        style="line-height: 0.5">•</span>
                                                @else
                                                    <span class="opacity-0 ps-0.5 text-gray-100 dark:text-gray-100"
                                                        style="line-height: 0.5">•</span>
                                                @endif
                                            </div>
                                        </a>
                                    </td>
                                @else
                                    <td>
                                        <div class="py-2 flex w-full justify-center">
                                            <p class="opacity-0">
                                                ...
                                            </p>
                                        </div>
                                    </td>
                                @endif
                            @endfor
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
