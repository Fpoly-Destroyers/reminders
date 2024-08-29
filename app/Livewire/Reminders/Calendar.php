<?php

namespace App\Livewire\Reminders;

use Carbon\Carbon;
use Livewire\Component;

class Calendar extends Component
{
    public $weekDays = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];

    public $currentMonth, $currentYear, $currentDay;
    public $changeMonth, $changeYear;
    public $monthName, $daysInMonth, $firstDayOfMonth;
    public $date;
    // Selected date
    public $selectedDate;

    public $selectedDay = null;
    public $selectedMonth = null;
    public $selectedYear = null;

    public function mount()
    {
        $this->selectedDate = session()->has('selectedDate') ? Carbon::create(
            session('selectedDate.year'),
            session('selectedDate.month'),
            session('selectedDate.day')
        ) : null;

        $this->initializeDate(Carbon::now());
    }

    public function initializeDate($date)
    {
        $this->date = $date;

        $this->currentDay = $this->date->day;
        $this->currentMonth = $this->date->month;
        $this->currentYear = $this->date->year;

        $this->changeMonth = $this->selectedDate ? $this->selectedDate->month : $this->currentMonth;
        $this->changeYear = $this->selectedDate ? $this->selectedDate->year : $this->currentYear;

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
        $this->initializeDate(Carbon::now());
    }

    public function updateCalendar()
    {
        $this->date = Carbon::create($this->changeYear, $this->changeMonth);
        $this->monthName = $this->date->format('F');
        $this->daysInMonth = $this->date->daysInMonth;
        $this->firstDayOfMonth = $this->date->copy()->startOfMonth()->dayOfWeekIso - 1;
    }

    public function render()
    {
        return view('livewire.reminders.calendar');
    }
}
