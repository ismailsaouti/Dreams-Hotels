<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Hotel;
use DB;
class ReservationController extends Controller
{
    //
    function save(Request $req){
        //
        $date_arrive=$req->date_arrive;
        $date_depart=$req->date_depart;
        $nombre_personne=$req->nombre_personne;
        $nom_hotel=$req->hotel;
        $today = (string)date("Y-m-d");
        $arrive=(string)$date_arrive;
        if (date("Y-m-d") >= $date_arrive){
            $errors[]="Veuillez vérifier la date d'arrivée ";            
        }
        if ($date_arrive > $date_depart){
            $errors[]="La date de départ avant la date d'arrivée!";            
        }
       if (!empty($errors)){
       $message=" ";
          foreach ($errors as $error){ 
            
                  $messages=<<<DELIMETER
                <script> .close{position: absolute;}</script>
                <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Attention!  </strong>  $error
                </div>
                DELIMETER;
            }
            return view('index').$messages;
       }
        else {
        $res = new Reservation;
        $res->date_arrive=$date_arrive;
        $res->date_depart=$date_depart;
        $res->nombre_personne=$nombre_personne;
        $hotel = Hotel::where('Nom',$nom_hotel);
    $hotels = DB::table('hotels')->get();
     
  foreach ($hotels as $hotel)

          {
         if($hotel->Nom==$nom_hotel){
                      $res->hotel_id=$hotel->id;
                                }
                         }

        $res->save();   
        echo "<H1>Merci</H2>" ;
    }
}
function index(){
     $hotels = DB::table('hotels')->get();   
    return view('index',compact('hotels'));

}
}