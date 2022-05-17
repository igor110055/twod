<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Carbon\Carbon;
// Route::get('/', function () {
//     //return view('welcome');
//     $response = Http::get('https://api.binance.com/api/v3/klines', [
//         'limit' => 500,
//         "symbol"=>"BTCBUSD",
//         "interval" => "1m"
//     ]);
//     $announce = json_decode($response->body());
//    // print_r($announce);
//     //echo count($announce);
//     foreach ($announce as $key => $value) {
//         # code...

//         $t930 = Carbon::parse(date("H:i:s",$value[0]/1000))->setTimezone('Asia/Yangon')->format("H:i:s A");
//         if($t930 == "09:30:00 AM")
//         {
//             echo $value[1]."/".$value[4];
//         }
//        // " End =>".Carbon::parse(date("H:i:s",$value[6]/1000))->setTimezone('Asia/Yangon')->format("d-m-Y H:i:s A");
//        // echo "Opening -> ".$value[1]."/".$value[4];
//     }
//     // echo "<br/>".time();
//     // echo "<br/>";
//     // date_default_timezone_set("Asia/Yangon");
//     // echo date("Y-m-d H:i:s A",1652671440000/1000)."/".date("d-m-Y H:i:s A",1652671499999/1000);

//     // echo Carbon::parse(date("H:i","1650780000000"))->setTimezone('Asia/Yangon')->toDateTimeString();
//     // echo "<br/>";
//     // echo Carbon::parse(date("H:i","1650783599999"))->setTimezone('Asia/Yangon')->toDateTimeString();
//     // echo "<br/>";
//     // echo Carbon::parse(date("H:i","1652540400000"))->setTimezone('Asia/Yangon')->toDateTimeString();
//     // echo "<br/>";
//     // echo Carbon::parse(date("H:i","1652543999999"))->setTimezone('Asia/Yangon')->toDateTimeString();
//     // echo "<br/>";
//     // echo Carbon::parse(date("H:i","1652544000000"))->setTimezone('Asia/Yangon')->toDateTimeString();
//     // echo "<br/>";
//     // echo Carbon::parse(date("H:i","1652547599999"))->setTimezone('Asia/Yangon')->toTimeString();
//     // echo "<br/>";
//     // echo Carbon::parse(date("H:i","1652547600000"))->setTimezone('Asia/Yangon')->format("H:i A");
//     // echo "<br/>";
//     // echo Carbon::parse(date("H:i","1652551199999"))->setTimezone('Asia/Yangon')->format("d-m-Y H:i A");
   
// });
Route::get('/',[App\Http\Controllers\TwodApiController::class, 'BTCBUSD']);
