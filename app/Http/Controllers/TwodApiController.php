<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\TwodHistory;
use Carbon\Carbon;
class TwodApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        date_default_timezone_set("Asia/Yangon");
        if($request->has("apiKey"))
        {
            if($request->apiKey == "myanmarbet")
            {
                if($request->get("categoryId") == 1)
                {
                    //last 7 day
                    $date = date("Y-m-d");
                    $date = strtotime($date);
                    $date = strtotime("-5 day", $date);
                    $last5day =date('Y-m-d', $date);
                    $twodhistory = TwodHistory::whereDate("date",">=", $last5day)
                                ->select("twod_histories.id","twod_histories.date","twod_histories.time",
                                "twod_histories.number","twod_histories.currency_one",
                                "twod_histories.currency_two","twod_histories.currency_one_name","twod_histories.currency_two_name")
                                ->orderBy("twod_histories.id","DESC")
                                ->get();
                    return response()->json([
                        'status'  => true,
                        'msg'     => 'Get last 5 days',
                        'data'  => $twodhistory
                    ]);
                }else if($request->get("categoryId") == 0)
                {
                    //today
                    $date = date("Y-m-d");
                    $twodhistory = TwodHistory::whereDate("date", $date)
                                ->select("id","date","time",
                                    "number","currency_one","currency_two",
                                    "currency_one_name","currency_two_name"
                                )
                                ->orderBy("id","DESC")
                                ->get();
                    $lists = $this->extraRespone($twodhistory);
                    return response()->json([
                        'status'  => true,
                        'msg'     => 'Get for today',
                        'data'  => $lists
                    ]);
                }else
                {
                    return $this->throwWrongCredentials();
                }
                
            }else
            {
                return $this->throwWrongCredentials();
            }
        }else
        {
            return $this->throwUnauthenticated();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        date_default_timezone_set("Asia/Yangon");
        $time = date('H:i',time());
        if($time == "10:53")
        {
            TwodHistory::create([
                "date" => date('Y-m-d'),
                "time_id" => 1,
                "number"  => 20
            ]);
        }else
        {
            TwodHistory::create([
                "date" => date('Y-m-d'),
                "time_id" => 1,
                "number"  => 20
            ]); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function today(Request $request)
    {
        date_default_timezone_set("Asia/Yangon");
        if($request->has("apiKey"))
        {
            if($request->apiKey == "myanmarbet")
            {
                $date = date("Y-m-d");
                $twodhistory = TwodHistory::whereDate("date", $date)
                            ->select("id","date","time",
                                "number","currency_one","currency_two",
                                "currency_one_name","currency_two_name"
                            )
                            ->get();
                $lists = $this->extraRespone($twodhistory);
                return response()->json([
                    'status'  => true,
                    'msg'     => 'Get for today',
                    'data'  => $lists
                ]);
            }else
            {
                return $this->throwWrongCredentials();
            }
        }else
        {
            return $this->throwUnauthenticated();
        }
    }
    public function extraRespone($array)
    {
        $initialArray = count($array);
        date_default_timezone_set("Asia/Yangon");
        for($i=0;$i<5;$i++)
        {
          if($i == 0)
          {
              $time ="10:00";
              foreach($array as $key=>$data)
              {
                  if($data["time"] != "10:00")
                  {
                    $time="10:00";
                  }
              }
          }else if($i == 1)
          {
              $time ="12:00";
              foreach($array as $key=>$data)
              {
                  if($data["time"] != "12:00")
                  {
                    $time="12:00";
                  }
              }
          }else if($i == 2)
          {
              $time = "14:00";
          }else if($i == 3)
          {
              $time = "16:00";
          }else if($i == 4)
          {
              $time = "18:00";
          }
            $array[$i] = array(
                "id"=>0,
                "date"=> date("Y-m-d"),
                "time"=> $time,
                "number"=>"--",
                "currency_one"=> "--",
                "currency_two" => "--",
                "currency_one_name"=> "BTC/BUSD",
                "currency_two_name"=>"ETH/BUSD"
            );
        }
        return $array;
    }
  
    public function btcEth()
    {
        $manuallyTime="06:20";
        $arr = array();
        $response = Http::get('https://api.binance.com/api/v3/klines', [
            "limit" => 20,
            "symbol"=>"BTCBUSD",
            "interval" => "1m",
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
            "limit" => 20,
            "symbol"=>"ETHBUSD",
            "interval" => "1m",
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
