<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
       ' Nom',
        'ville',
        'adresse',
        'telephone',
        'description',
        'photo'
    ];
    use HasFactory;
    //One to one relationships between Chambres and Hotels
    public function Chambres(){
        return $this->hasMany("App\Models\Chambre");
    }
  
    //One to many (One hotel, Many reservation )
    public function reservations()
    {

        return $this->hasMany('App\Models\reservation');
    } 
}
