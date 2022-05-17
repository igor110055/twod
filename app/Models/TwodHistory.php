<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwodHistory extends Model
{
    use HasFactory;
    protected $fillable=["date","time","number","currency_one",
    "currency_two","currency_one_name","currency_two_name","created_at","updated_at"];
}
