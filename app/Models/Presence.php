<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Presence extends Model
{
    use HasFactory;

    public function data():HasMany
    {
        return $this->hasMany(EnterExitData::class);
    }
}
