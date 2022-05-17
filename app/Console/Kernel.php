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
        Commands\OneCron::class,
        Commands\TwoCron::class,
        Commands\ThreeCron::class,
        Commands\FourCron::class
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        date_default_timezone_set("Asia/Yangon");
        $schedule->command('twod:cron')->everyMinute()->runInBackground();
        // $schedule->command('inspire')->hourly();
        // $schedule->command('twod:cron')->timezone('Asia/Yangon')->runInBackground()->at("00:39");
        // $schedule->command('one:cron')->timezone('Asia/Yangon')->runInBackground()->at("00:40");
        // $schedule->command('two:cron')->timezone('Asia/Yangon')->runInBackground()->at("00:41");
        // $schedule->command('three:cron')->timezone('Asia/Yangon')->runInBackground()->at("00:42");
        // $schedule->command('four:cron')->timezone('Asia/Yangon')->runInBackground()->at("00:43");
    
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
