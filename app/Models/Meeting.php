<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meeting extends Model
{
    use HasFactory;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(ExtendedUser::class);
    }

    public function guests(): BelongsToMany
    {
        return $this->belongsToMany(Guest::class);
    }

    protected $fillable = [
        "room_id",
        "code",
        "organizedBy",
        "meetingPurpose",
        "meetingPlace",
        "description",
        "meetingDate",
        "meetingStartTime",
        "meetingEndTime",
        "hasStarted",
        "isEnded"
    ];

    protected $casts = [
        "meetingDate" => "datetime",
        "hasStarted" => "boolean",
        "isEnded" => "boolean",

    ];
}
