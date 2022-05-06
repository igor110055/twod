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
        $schedule->command('twod:cron')->dailyAt("15:00")->runInBackground()->timezone('Asia/Yangon');
        $schedule->command('twod:cron')->dailyAt("15:01")->runInBackground()->timezone('Asia/Yangon');
        $schedule->command('twod:cron')->dailyAt("15:02")->runInBackground()->timezone('Asia/Yangon');
        $schedule->command('twod:cron')->dailyAt("15:03")->runInBackground()->timezone('Asia/Yangon');
        $schedule->command('twod:cron')->dailyAt("15:04")->runInBackground()->timezone('Asia/Yangon');
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
