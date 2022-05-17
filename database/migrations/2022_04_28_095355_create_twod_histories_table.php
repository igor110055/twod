<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwodHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twod_histories', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string("time");
            //$table->foreign("time")->references("name")->on("time_lists");
            $table->string("number",20);
            // $table->unique(["date","time"]);
            $table->string("currency_one",20);
            $table->string("currency_two",20);
            $table->string("currency_one_name");
            $table->string("currency_two_name");
            $table->unique(["date","time"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('twod_histories');
    }
}
