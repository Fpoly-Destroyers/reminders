<div class="mt-5">
    <div class="flex items-center justify-between">
        <div class="w-4/5 px-3 flex justify-between">
            <span tabindex="0"
                class="focus:outline-none dark:text-gray-100 text-gray-800 text-sm font-semibold">{{ $monthName . ' ' . $changeYear }}
            </span>
            @if ($currentMonth != $changeMonth || $currentYear != $changeYear)
                <button aria-label="calendar goToToday" wire:click="goToToday"
                    class="flex items-center hover:text-gray-400 text-gray-800 dark:text-gray-100">
                    <span class="material-symbols-outlined hover:cursor-pointer" wire:click="goToToday">
                        reply
                    </span>
                </button>
            @endif
        </div>

        <div class="w-1/5 flex justify-between">
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
                            <div class="py-2 flex justify-center items-center w-full">
                                <p class="font-medium text-gray-800 dark:text-gray-100">
                                    {{ $day }}
                                </p>
                            </div>
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @php
                    $startDay = $firstDayOfMonth - 1;
                @endphp
                @for ($row = 0; $row < 6; $row++)
                    <tr>
                        @for ($col = 0; $col < 7; $col++)
                            @php
                                $dayNumber = $row * 7 + $col - $startDay + 1;
                            @endphp
                            @if ($dayNumber > 0 && $dayNumber <= $daysInMonth)
                                <td>
                                    <a href="{{ route('pickDate', [$changeYear, $changeMonth, $dayNumber]) }}"
                                        class="flex justify-center">
                                        <div
                                            class="mb-0.5 py-2 cursor-pointer hover:bg-gray-200 flex justify-center items-center w-full rounded-lg cursor-pointer @if ($dayNumber == $currentDay && $currentMonth == $changeMonth && $currentYear == $changeYear) focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 w-7 h-7 flex items-center justify-center bg-indigo-700 rounded-lg @endif">
                                            <p
                                                class="@if ($dayNumber == $currentDay && $currentMonth == $changeMonth && $currentYear == $changeYear) text-white @else text-gray-500 dark:text-gray-100 @endif font-medium">
                                                {{ $dayNumber }}
                                            </p>
                                            <span class="ps-0.5 text-red-500 dark:text-red-100">•</span>
                                        </div>
                                    </a>
                                </td>
                            @else
                                <td>
                                    <div
                                        class="py-2 cursor-pointer flex w-full justify-center hover:bg-gray-200 rounded-lg">
                                        <p class="text-base text-gray-500 dark:text-gray-100 font-medium"
                                            style="opacity: 0.1;">
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
