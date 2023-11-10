<?php

namespace App\Console;

use App\Console\Commands\AllClear;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        AllClear::class
    ];

    protected function schedule(Schedule $schedule)
    {
         $schedule->command('all:clear')->everyMinute();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
