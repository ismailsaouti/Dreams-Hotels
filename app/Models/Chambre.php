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
       public function Hotel(){
        return $this->belongsTo("App\Models\Hotel");
    }
}
