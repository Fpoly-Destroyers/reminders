<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Calendar extends Component
{
    public $weekDays = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];

    public $currentMonth;
    public $currentYear;
    public $currentDay;
    public $changeMonth;
    public $changeYear;
    public $monthName; // Month name
    public $daysInMonth;
    public $firstDayOfMonth;
    public $date;
    // Selected date properties
    public $selectedDate = null;
    public $selectedDay = null;
    public $selectedMonth = null;
    public $selectedYear = null;

    public function mount($year = null, $month = null, $day = null)
    {
        if ($year && $month && $day) {
            $this->selectedDate = Carbon::create($year, $month, $day);
        }

        $this->initializeDateProperties(Carbon::now(), $this->selectedDate);
    }

    public function initializeDateProperties($date, $selectedDate)
    {
        $this->date = $date;

        $this->currentDay = $this->date->day;
        $this->currentMonth = $this->date->month;
        $this->currentYear = $this->date->year;

        if ($selectedDate) {
            $this->changeMonth = $selectedDate->month;
            $this->changeYear = $selectedDate->year;
            $this->selectedDay = $selectedDate->day;
            $this->selectedMonth = $selectedDate->month;
            $this->selectedYear = $selectedDate->year;
        } else {
            $this->changeMonth = $this->currentMonth;
            $this->changeYear = $this->currentYear;
        }
        $this->updateCalendar();
    }

    public function previous()
    {
        $this->changeMonth--;
        if ($this->changeMonth < 1) {
            $this->changeMonth = 12;
            $this->changeYear--;
        }
        $this->updateCalendar();
    }

    public function next()
    {
        $this->changeMonth++;
        if ($this->changeMonth > 12) {
            $this->changeMonth = 1;
            $this->changeYear++;
        }
        $this->updateCalendar();
    }

    public function goToToday()
    {
        $this->selectedDate = null;
        $this->initializeDateProperties(Carbon::now(), $this->selectedDate);
    }

    public function updateCalendar()
    {
        $this->date = Carbon::create($this->changeYear, $this->changeMonth);
        $this->monthName = $this->date->format('F');
        $this->daysInMonth = $this->date->daysInMonth;
        $this->firstDayOfMonth = $this->date->copy()->startOfMonth()->dayOfWeekIso;
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}
