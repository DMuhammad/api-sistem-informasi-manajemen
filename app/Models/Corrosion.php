<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corrosion extends Model
{
    use HasFactory;

    protected $fillable = [
        'temperature',
        'humidity',
        'chemical_consentration',
        'pH',
        'amperage'
    ];
}
