<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Presence extends Model
{
    use HasFactory;

    protected $fillable = [
        "isEnter",
        "extended_user_id"
    ];

    protected $casts =[
        "created_at"=>"datetime",
        "isEnter"=>"boolean"
    ];
}
