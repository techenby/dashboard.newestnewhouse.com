<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calendar extends Component
{
    public $position;

    public function render()
    {
        return view('livewire.calendar', [
            'daysInMonth' => $this->carbon->daysInMonth,
            'dayOfWeek' => $this->carbon->copy()->startOfMonth()->dayOfWeek,
            'month' => $this->carbon->englishMonth,
            'todaysDate' => $this->carbon->day,
        ]);
    }

    public function getCarbonProperty()
    {
        return now();
    }

    public function nextMonth()
    {
        $this->carbon = $this->carbon->addMonth();
    }

    public function prevMonth()
    {
        $this->carbon = $this->carbon->subMonth();
    }
}
