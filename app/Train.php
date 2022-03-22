<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'company', 'departure_station', 'arrival_station', 'departure_time', 'arrival_time', 'train_code', 'carriages', 'is_in_time', 'is_cancelled'
    ];
}
