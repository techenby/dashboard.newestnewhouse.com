<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calendar extends Component
{
    public $position;

    public function render()
    {
        $time = time();
        $numDay = date('d', $time);
        $numMonth = date('m', $time);
        $month = date('F', $time);
        $year = date('Y', $time);
        $firstDay = mktime(0, 0, 0, $numMonth, 1, $year);
        $daysInMonth = cal_days_in_month(0, $numMonth, $year);
        $dayOfWeek = date('w', $firstDay);

        return view('livewire.calendar', compact('numDay', 'numMonth', 'month', 'year', 'firstDay', 'daysInMonth', 'dayOfWeek'));
    }
}
