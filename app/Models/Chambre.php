<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
     protected $fillable = [
        'type',
        'prix',
        'description',
        'numero',
        'nombrelit',
        'disponibilte',
        'hotel_id'
    ];
    //One to one relationships between Chambres and Hotels
       public function hotel(){
        return $this->hasOne("App\Models\Hotel",'id');
    } 
    //public function Hotels(){
      //  return $this->belongsToMany("App\Models\Hotel");
    //}
    public function reservations()
    {

        return $this->hasOne('App\Models\reservation');
    }

}
