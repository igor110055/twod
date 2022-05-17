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
                $date = date("Y-m-d");
                $date = strtotime($date);
                $date = strtotime("-7 day", $date);
                $last7day =date('Y-m-d', $date);
                $twodhistory = TwodHistory::whereDate("date",">=", $last7day)
                            ->select("twod_histories.id","twod_histories.date","twod_histories.time",
                            "twod_histories.number","twod_histories.currency_one",
                            "twod_histories.currency_two","twod_histories.currency_one_name","twod_histories.currency_two_name")
                            ->get();
                return response()->json([
                    'status'  => true,
                    'msg'     => 'Get last 7 days',
                    'data'  => $twodhistory
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
                $twodhistory = TwodHistory::whereDate("date","=", $date)
                            ->select("twod_histories.id","twod_histories.date","twod_histories.time",
                                "twod_histories.number","twod_histories.currency_one","twod_histories.currency_two",
                                "twod_histories.currency_one_name","twod_histories.currency_two_name"
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
        for($i=$initialArray;$i<5;$i++)
        {
            $array[$i] = array(
                "id"=>"",
                "date"=>"",
                "time"=>"",
                "number"=>"",
                "currency_one"=>"",
                "currency_two" =>"",
                "currency_one_name"=>"",
                "currency_two_name"=>""
            );
        }
        return $array;
    }
}
