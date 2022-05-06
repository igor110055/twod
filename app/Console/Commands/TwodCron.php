<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\TwodHistory;
class TwodCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twod:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //\Log::info("Cron is working fine");
        date_default_timezone_set("Asia/Yangon");
        $time = date('H:i',time());
        if($time == "08:30")
        {
            TwodHistory::create([
                "date" => date('Y-m-d'),
                "time_id" => 1,
                "number"  => 20
            ]);
        }else if($time == "08:35")
        {
            TwodHistory::create([
                "date" => date('Y-m-d'),
                "time_id" => 2,
                "number"  => 30
            ]);
        }else if($time == "08:40")
        {
            TwodHistory::create([
                "date" => date('Y-m-d'),
                "time_id" => 3,
                "number"  => 40
            ]);
        }else if($time == "08:45")
        {
            
            TwodHistory::create([
                "date" => date('Y-m-d'),
                "time_id" => 4,
                "number"  => 50
            ]);
        }else if($time == "08:50")
        {
            TwodHistory::create([
                "date" => date('Y-m-d'),
                "time_id" => 5,
                "number"  => 60
            ]);
        }
    }
}
