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
    public $monthName;
    public $daysInMonth;
    public $firstDayOfMonth;
    public $date;

    public function mount()
    {
        $this->setDateProperties(Carbon::now());
    }

    public function setDateProperties($date)
    {
        $this->date = $date;

        $this->currentDay = $this->date->day;
        $this->currentMonth = $this->date->month;
        $this->currentYear = $this->date->year;

        $this->changeMonth = $this->currentMonth;
        $this->changeYear = $this->currentYear;

        $this->updateCalendar();
    }

    public function previous()
    {
        $this->changeMonth = $this->changeMonth - 1;
        if ($this->changeMonth < 1) {
            $this->changeMonth = 12;
            $this->changeYear = $this->changeYear - 1;
        }
        $this->updateCalendar();
    }

    public function next()
    {
        $this->changeMonth = $this->changeMonth + 1;
        if ($this->changeMonth > 12) {
            $this->changeMonth = 1;
            $this->changeYear = $this->changeYear + 1;
        }
        $this->updateCalendar();
    }

    public function goToToday()
    {
        $this->setDateProperties(Carbon::now());
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