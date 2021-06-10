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
        'description'
    ];
    use HasFactory;
    //One to one relationships between Chambres and Hotels
    public function Chambre(){
        return $this->hasOne("App\Models\Chambre");
    }
    public function Chambres()
    {

        return $this->hasMany("App\Models\Chambre");
    }  
    public function reservations()
    {

        return $this->hasMany('App\Models\reservation');
    }
}
