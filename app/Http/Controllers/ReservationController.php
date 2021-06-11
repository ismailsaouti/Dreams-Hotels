<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
class ReservationController extends Controller
{
    //
    function save(Request $req){
        //print_r($req->input());
        //return redirect()->back();
        $date_arrive=$req->date_arrive;
        $date_depart=$req->date_depart;
        $nombre_personne=$req->nombre_personne;
         /* $res->hotel_id
        $res->chambre_id
        */
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
        $res->save();   
        echo "<H1>Merci</H2>" ;
    }
}
}