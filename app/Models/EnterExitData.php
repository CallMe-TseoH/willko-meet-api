<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnterExitData extends Model
{
    use HasFactory;

    protected $fillable = [
        "isEnter",
        "presence_id"
    ];

    protected $casts =[
      "created_at"=>"datetime",
      "isEnter"=>"boolean"
    ];
}
