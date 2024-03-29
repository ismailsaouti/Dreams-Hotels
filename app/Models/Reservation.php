<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_arrive',
        'date_depart', 
        'nombre_personne',
        'hotel_id',
        'chambre_id'
    ];
    //One to many Reslationships (un hotel, plusieurs réserevation)
    public function Hotels(){
        return $this->belongsTo("App\Models\Hotel",'id');
    }
    public function UserReservation(){
        return $this->belongsTo("App\Models\User",'id');
    }
    public function Chambres(){
        return $this->belongsTo("App\Models\Chambre",'id');
    }
}
