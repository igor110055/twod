<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\TwodHistory;
use Carbon\Carbon;
class OneCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'one:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '12:30 hour';

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
        date_default_timezone_set("Asia/Yangon");
        $time = date('H:i:s',time());
        //$number = $this->recursiveFun($time);
        //$this->info("Your Job is being processed");
        $time = "12:30";
        $number = $this->btcEth();
        TwodHistory::create([
            "date" => date('Y-m-d'),
            "time" => $time,
            "number"  => $number[0][1].$number[1][1],
            "currency_one" => $number[0][0],
            "currency_two" => $number[1][0],
            "currency_one_name" => "BTCBUSD",
            "currency_two_name"  => "ETHBUSD"
        ]);
    }
    public function btcEth()
    {
        $arr = array();
        $response = Http::get('https://api.binance.com/api/v3/klines', [
            'limit' => 20,
            "symbol"=>"BTCBUSD",
            "interval" => "1m"
        ]);
        $BTCBUSD = json_decode($response->body());
        $count = count($BTCBUSD);
        # code...
        //$time = Carbon::parse(date("H:i",$BTCBUSD[$count - 2][0]/1000))->setTimezone('Asia/Yangon')->format("H:i:u");
        $closeV = explode(".",$BTCBUSD[$count - 2][4]);
        $getAfterdot = str_split($closeV[1]);//after dot value
        $firstNumber  = $getAfterdot[1];
        $arr[0] = array($BTCBUSD[$count -2][4],$firstNumber);
            
        $response = Http::get('https://api.binance.com/api/v3/klines', [
            'limit' => 20,
            "symbol"=>"ETHBUSD",
            "interval" => "1m"
        ]);
        $ETHBUSD = json_decode($response->body());
        $count = count($ETHBUSD);
        //$time = Carbon::parse(date("H:i",$ETHBUSD[$count - 1][0]/1000))->setTimezone('Asia/Yangon')->format("H:i");
        $closeV = explode(".",$ETHBUSD[$count - 2][4]);
        $getAfterdot = str_split($closeV[1]);//after dot value
        $secondNumber  = $getAfterdot[1];
        $arr[1]=array($ETHBUSD[$count - 2][4],$secondNumber);
        return $arr;
    }
}
