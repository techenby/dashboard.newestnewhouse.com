<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(\Spatie\CalendarTile\FetchCalendarEventsCommand::class)->everyMinute();
        $schedule->command(\Solitweb\WeatherForecastTile\FetchDataFromApiCommand::class)->everyMinute();
        $schedule->command(\Techenby\GithubTile\FetchDataFromApiCommand::class)->everyFiveMinutes();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
