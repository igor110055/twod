<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\TwodCron::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('twod:cron')->dailyAt("08:30")->runInBackground()->timezone('Asia/Yangon');
        $schedule->command('twod:cron')->dailyAt("08:35")->runInBackground()->timezone('Asia/Yangon');
        $schedule->command('twod:cron')->dailyAt("08:40")->runInBackground()->timezone('Asia/Yangon');
        $schedule->command('twod:cron')->dailyAt("08:45")->runInBackground()->timezone('Asia/Yangon');
        $schedule->command('twod:cron')->dailyAt("08:50")->runInBackground()->timezone('Asia/Yangon');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     *///
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
