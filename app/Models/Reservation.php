<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_depart', 
        'date_arrive',
        'nombre_personne'
       /* 'hotel_id',
        'chambre_id'*/
    ];
    //One to many Reslationships (un hotel, plusieurs réserevation)
    public function Hotels(){
        return $this->belongsTo("App\Models\Hotel");
    }
}
