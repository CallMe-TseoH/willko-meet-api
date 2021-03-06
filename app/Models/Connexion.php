<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connexion extends Model
{
    use HasFactory;

    protected $casts = [
        "isConnected" => "boolean",
        'lastConnexionDateTime' => "datetime",
        'lastDisconnectionDateTime' => "datetime"
    ];

    protected $fillable = [
        'isConnected',
        'lastConnexionDateTime',
        'lastDisconnectionDateTime'
    ];
}
