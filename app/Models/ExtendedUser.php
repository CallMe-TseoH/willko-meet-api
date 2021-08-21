<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ExtendedUser extends Model
{
    use HasFactory;

    public function companyData(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }
    public function actions(): BelongsToMany
    {
        return $this->belongsToMany(Action::class);
    }
    public function connexion() :HasOne
    {
        return $this->hasOne(Connexion::class);
    }
    public function devices() : HasMany
    {
        return $this->hasMany(Device::class);
    }
    public  function presences() : HasMany
    {
        return  $this->hasMany(Presence::class);
    }
    public function meetings() : HasMany
    {
        return $this->hasMany(Meeting::class);
    }
    public function visits():HasMany
    {
        return $this->hasMany(Visit::class);
    }
    public function parcels():HasMany
    {
        return $this->hasMany(Parcel::class);
    }
}
