<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    public function meetings(): HasMany
    {
        return $this->hasMany(Meeting::class);
    }

    protected $fillable = [
        "code",
        "name",
        "image",
        "state"
    ];
}
