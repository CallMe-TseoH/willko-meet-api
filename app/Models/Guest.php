<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Guest extends Model
{
    use HasFactory;

    public function meetings():BelongsToMany
    {
        return $this->belongsToMany(Meeting::class);
    }

    protected $casts = [
      "isAnIntern"=>"boolean"
    ];
}
