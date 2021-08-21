<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        "arrivalDate",
        "appointmentHasStarted",
        "appointmentIsEnded",
        "appointmentStartedDate",
        "appointmentEndedDate",
        "accepted",
        "archived"
    ];

    protected $casts = [
        "accepted"=>"boolean",
        "appointmentIsEnded"=>"boolean",
        "appointmentHasStarted"=>"boolean",
        "archived"=>"boolean",
    ];
}
