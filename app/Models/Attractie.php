<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attractie extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel',
        'omschrijving',
        'afbeelding_url',
    ];
}
