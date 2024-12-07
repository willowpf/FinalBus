<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRout extends Model
{
    /** @use HasFactory<\Database\Factories\BusRoutFactory> */
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'bus_make',
        'arrival_time',
        'departure_time',
        'destination'
    ];

    public function busmod()
    {
        return $this->belongsTo(BusMods::class, 'bus_make');
    }



}
