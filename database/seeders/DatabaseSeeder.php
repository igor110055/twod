<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TimeList;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $timelists =array(
            array(
                'name'  =>'10:30',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ),
            array(
                'name' =>'12:30',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ),
            array(
                'name'  =>'14:30',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ),
            array(
                'name'  =>'16:30',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ),
            array(
                'name'  =>'18:30',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            )
        );
        //$chunks = array_chunk($userData, 500);
        foreach ($timelists as $timelist) {
            $count = TimeList::where("name",$timelist["name"])->count();
            if($count < 1)
            {
                TimeList::insert($timelist);
            }
        }
    }
}
