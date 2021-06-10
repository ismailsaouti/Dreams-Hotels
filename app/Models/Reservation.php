<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_resevation',
        'date_depart', 
        'date_arrive'
    ];
    /*public function Hotels(){
        return $this->hasMany("App\Models\Hotel");
    }*/
}
