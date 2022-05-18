<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\TwodHistory;
use Carbon\Carbon;
class ThreeCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'three:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '16:30';

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
        echo "handle by cronJob";
        date_default_timezone_set("Asia/Yangon");
        $time = "23:38";
        $number = $this->btcEth($time);
        TwodHistory::create([
            "date" => date('Y-m-d'),
            "time" => "23:38",
            "number"  => $number[0][1].$number[1][1],
            "currency_one" => $number[0][0],
            "currency_two" => $number[1][0],
            "currency_one_name" => "BTCBUSD",
            "currency_two_name"  => "ETHBUSD"
        ]);
    }
    public function btcEth($manuallyTime)
    {
        $arr = array();
        $response = Http::get('https://api.binance.com/api/v3/klines', [
            'limit' => 20,
            "symbol"=>"BTCBUSD",
            "interval" => "1m"
        ]);
        $BTCBUSD = json_decode($response->body());
        foreach ($BTCBUSD as $key => $value) {
            # code...
            $time = Carbon::parse(date("H:i",$value[0]/1000))->setTimezone('Asia/Yangon')->format("H:i");
            if($time == $manuallyTime)
            {
               $closeV = explode(".",$value[4]);
               $getAfterdot = str_split($closeV[1]);//after dot value
               $firstNumber  = $getAfterdot[1];
                $arr[0] = array($value[4],$firstNumber);
            }
        }
        $response = Http::get('https://api.binance.com/api/v3/klines', [
            'limit' => 20,
            "symbol"=>"ETHBUSD",
            "interval" => "1m"
        ]);
        $ETHBUSD = json_decode($response->body());
        foreach ($ETHBUSD as $key => $value) {
            # code...
            $time = Carbon::parse(date("H:i",$value[0]/1000))->setTimezone('Asia/Yangon')->format("H:i");
            if($time == $manuallyTime)
            {
               $closeV = explode(".",$value[4]);
               $getAfterdot = str_split($closeV[1]);//after dot value
               $secondNumber  = $getAfterdot[1];
                $arr[1]=array($value[4],$secondNumber);
            }
        }
        return $arr;
    }
}
