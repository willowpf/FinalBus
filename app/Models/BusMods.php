<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusMods extends Model
{
    /** @use HasFactory<\Database\Factories\BusModsFactory> */
    use HasFactory;

    protected $fillable = [
        'bus make'
    ];
}
