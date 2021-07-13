<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Hotel;
use App\Models\Chambre;
use App\Models\User;
use DB;
class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //continuer reservation
    function reserver(Request $req)
    {
        //Recherche pour trouver id d'un hotel à partir de son nom   
        //$hotelfind = Hotel::where('Nom',$req->hotel);
         // $hotels= DB::table('hotels')->get();                        
        $chambres = DB::table('chambres')->get();
        $chambre_reserve=Reservation::where('chambre_id',$chambre->id)->orderBy('date_depart','desc')->take(1)->get();
            print_r($chambre_reserve);
        foreach($chambres as $chambre){
            if(!empty($reservation[0]['date_depart'])){
            $chambre->date_depart=$chambre_reserve[0]['date_depart'];
            }else{
            $chambre->date_depart=$chambre_reserve[0]['date_depart'];
            }
        }

        return view('reservation', compact('req'), compact('chambres'));
    }
    //saving reservation
    function save(Request $req)
    {
        //$find_chambre = Chambre::where('type',$req->chambre);

        $reservation = new Reservation;
        $reservation->date_arrive = $req->date_arrive;
        $reservation->date_depart = $req->date_depart;
        $reservation->hotel_id = $req->hotel_id;
        $reservation->user_id = auth()->user()->id;
        $reservation->chambre_id = $req->id_chambre;
        $reservation->nombre_personne = $req->nombre_personne;
        $reservation->save();
        return redirect()->route('consulter');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    function reservation()
    {
        $hotels = DB::table('hotels')->get();
        $chambres = DB::table('chambres')->get();
        return view('reservation', compact('hotels'), compact('chambres'));
    }


    function userReservation()
    {
         $reservations = Reservation::where('user_id', (auth()->user()->id))->get();
         foreach($reservations as $res){
            $hotel=Hotel::find($res->hotel_id);
            $chambre=Chambre::find($res->chambre_id);
            $res->hotel_nom=$hotel->Nom;
            $res->hotel_adresse=$hotel->adresse;
            $res->hotel_ville=$hotel->ville;
            $res->chambre_type=$chambre->type;
            $res->chambre_prix=$chambre->prix;
           
       }
        return view('consulter_reservation', compact('reservations'));
    }
    //annuler réservation
    public function annulerReservation($res_id){
        $res=Reservation::find($res_id);
        $res->delete();
        return redirect()->back();

     
    }


}

/* $today = (string)date("Y-m-d");
        $arrive=(string)$date_arrive;
        if (date("Y-m-d") > $date_arrive){
            $errors[]="Veuillez vérifier la date d'arrivée ";            
        }
        if ($date_arrive > $date_depart){
            $errors[]="La date de départ avant la date d'arrivée!";            
        }
       if (!empty($errors)){ //test false si on n'a pas d'erreur c-à-d $errors!=Null
       
        $chambres = DB::table('chambres')->get();  
       return view('reservation',compact('errors'),compact('chambres'));
       }*/