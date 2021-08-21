<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        "retrieveDateTime",
                "retrieve",
                "archived"
    ];

    protected $casts =[
        "retrieve"=>"boolean",
        "archived"=>"boolean"
    ];
}
