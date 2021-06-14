<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Hotel;
use App\Models\Chambre;
use DB;
class ReservationController extends Controller
{
    //
    function save(Request $req){
        //variable vient de Form de réservationn
        $date_arrive=$req->date_arrive;
        $date_depart=$req->date_depart;
        $nombre_personne=$req->nombre_personne;
        $nom_hotel=$req->hotel;
        $chambre_type=$req->chambre;

        //Erreurs possible effectues par le client
        $today = (string)date("Y-m-d");
        $arrive=(string)$date_arrive;
        if (date("Y-m-d") >= $date_arrive){
            $errors[]="Veuillez vérifier la date d'arrivée ";            
        }
        if ($date_arrive > $date_depart){
            $errors[]="La date de départ avant la date d'arrivée!";            
        }
       if (!empty($errors)){ //test false si on n'a pas d'erreur c-à-d $errors!=Null
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
       }else{
        $res = new Reservation;
        $res->date_arrive=$date_arrive;
        $res->date_depart=$date_depart;
        $res->nombre_personne=$nombre_personne;
        //Cherechre pour trouver un hotel a partir de son nom
         $hotel = Hotel::where('Nom',$nom_hotel);
        //Répresenter tous les hotels avec tous les colonnes
         $hotels = DB::table('hotels')->get();
     
        //Recherche pour trouver id d'un hotel à partir de son nom   
        foreach ($hotels as $hotel)
          {
         if($hotel->Nom==$nom_hotel){
                      $res->hotel_id=$hotel->id;
                                }
                         }
        //Cherechre pour trouver un chambre a partir de son type
        $chambre = Chambre::where('type',$chambre_type);
        //Répresenter tous les chambres avec tous les colonnes
        $chambres = DB::table('chambres')->get();
        //Recherche pour trouver id d'une chambre à partir de son type   
        foreach ($chambres as $chambre){
         if($chambre->type==$chambre_type){$res->chambre_id=$chambre->id;}
                                }

        $res->save();   
            return redirect('/hotel-post');
    }
}

function reservation(){
     $hotels = DB::table('hotels')->get();  
     $chambres = DB::table('chambres')->get();   
     return view('index',compact('hotels') ,compact('chambres'));


}                    
}