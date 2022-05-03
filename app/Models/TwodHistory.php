<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwodHistory extends Model
{
    use HasFactory;
    protected $fillable=["date","time_id","number","created_at","updated_at"];
}
