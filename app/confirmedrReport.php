<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class confirmedrReport extends Model
{
    use Notifiable;
    protected $guard = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'regNum','dnt','type','injured','death','numOfVehicles','info', 'lat', 'lon','severity'
    ];
}
