<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $casts = [
        "pushNotificationState" => "boolean",
        "emailNotificationState" => "boolean",
        "smsNotificationState" => "boolean"
    ];

    protected $fillable = [
        "appId",
        "appVersion",
        "os",
        "osVersion",
        "extended_user_id",
        "pushNotificationState",
        "emailNotificationState",
        "smsNotificationState"
    ];
}
