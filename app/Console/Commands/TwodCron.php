<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\TwodHistory;
use Carbon\Carbon;
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
    protected $description = '10:30';

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
        //info("cron is working fine in everyminute");
        
        //\Log::info("Cron is working fine");
        echo "handle by cronJob";
        date_default_timezone_set("Asia/Yangon");
        $time = "23:35";
        $number = $this->btcEth($time);
        TwodHistory::create([
            "date" => date('Y-m-d'),
            "time" => "23:35",
            "number"  => $number[0][1].$number[1][1],
            "currency_one" => $number[0][0],
            "currency_two" => $number[1][0],
            "currency_one_name" => "BTCBUSD",
            "currency_two_name"  => "ETHBUSD"
        ]);
        
    }
    //BTC
    public function BTCBUSD($manuallyTime)
    {
        $response = Http::get('https://api.binance.com/api/v3/klines', [
            'limit' => 500,
            "symbol"=>"BTCBUSD",
            "interval" => "1m"
        ]);
        $BTCBUSD = json_decode($response->body());
        foreach($BTCBUSD as $key => $value) {
            # code...
            $time = Carbon::parse(date("H:i",$value[0]/1000))->setTimezone('Asia/Yangon')->format("H:i");
            if($time == $manuallyTime)
            {
               $btc = explode(".",$value[4]);
               $firstNumber  = $btc[1][1];
               return $firstNumber;
               break;
            }
        }
    }
    //ETHBUSD
    public function ETHBUSD($manuallyTime)
    {
        $response = Http::get('https://api.binance.com/api/v3/klines', [
            'limit' => 500,
            "symbol"=>"ETHBUSD",
            "interval" => "1m"
        ]);
        $ETHBUSD = json_decode($response->body());
        foreach($ETHBUSD as $key => $value) {
            # code...
            $time = Carbon::parse(date("H:i",$value[0]/1000))->setTimezone('Asia/Yangon')->format("H:i");
            if($time == $manuallyTime)
            {
               $eth = explode(".",$value[4]);
               $secondNumber  = $eth[1][1];
               return $secondNumber;
               break;
            }
        }
    }
    public function recursiveFun($time)
    {
        $firstNumber = $this->BTCBUSD($time);
        $secondNumber = $this->ETHBUSD($time); 
        $number = $firstNumber.$secondNumber;
        if($firstNumber !="" && $secondNumber !="")
        {
            return $number;
        }else
        {
            recursiveFun($time);
        }
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
