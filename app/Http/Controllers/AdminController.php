<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Hotel;
use App\Models\Chambre;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    //  

     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adm');
    }
    //gestion de réservation
    public function index(){
        $reservations = DB::table('reservations')->get();
         foreach ($reservations as $res) {
              $hotel=Reservation::find($res->hotel_id)->Hotels;
              $res->hotel=$hotel->Nom;
              $chambre=Reservation::find($res->chambre_id)->Chambres;
              $res->chambre=$chambre->type;
              $res->prix=$chambre->prix;
              $user=Reservation::find($res->user_id)->UserReservation;
              $res->user=$user->name." ".$user->last_name;
              $res->phone=$user->phone;
              $res->email=$user->email;

            }
        return view('admin.manage_reservations',compact('reservations'));
           
    }
    public function createReservation()
    {
        return view('admin.create_reservations');
    }  



    //gestion d'hotels----------------------------------------------------------------------
   
    public function hotels() {
        $hotels = DB::table('hotels')->get();   

        return view('admin.manage_hotels',compact('hotels'));
    }
    public function createHotel() {
        return view('admin.create_hotels');
    } 
    public function saveHotel(Request $req)
    {
        //$find_chambre = Chambre::where('type',$req->chambre);

        $hotel = new Hotel;
        $hotel->Nom = $req->nom;
        $hotel->ville = $req->ville;
        $hotel->telephone = $req->telephone;
        $hotel->adresse = $req->adresse;
        $hotel->description = $req->description;
        //image
        $file_extension=$req->image->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $destinationPath='images/hotels';
        $req->image->move($destinationPath,$file_name);
        $hotel->photo=$file_name;
        $hotel->save();
        return redirect()->route('g_hotels');
      
    }
    public function deleteHotel($hotel_id)
    {
       $hotel=Hotel::find($hotel_id);
       $hotel->delete();
       return redirect()->route('g_hotels');
    }

//--------------------------------------------------------------------------------------------

    //gestion de chambres
    public function chambres()
    {
       /* $chambres = DB::table('chambres')->orderBy('hotel_id', 'asc')->get(); 
        foreach ($chambres as $ch) {
              $hotel=Chambre::find($ch->hotel_id)->hotel;
             
              $ch->hotel=$hotel->Nom;
            }
        return view('admin.manage_chambres',compact('chambres'));*/
        return view('admin.manage_chambres');
    }
    public function createChambre()
    {
           $hotels = DB::table('hotels')->get();   
        return view('admin.create_chambres',compact('hotels'));
    } 
    public function saveChambre(Request $req)
    {
        //$find_chambre = Chambre::where('type',$req->chambre);

        $chambre = new Chambre;
        $chambre->type = $req->type;
        $chambre->prix= $req->prix;
        $chambre->numero = $req->numero;
        $chambre->nombreLit = $req->nombre_lits;
        $chambre->description = $req->description;
        $chambre->hotel_id = $req->hotel_id;
        //image
        $file_extension=$req->image->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $destinationPath='images/chambres';
        $req->image->move($destinationPath,$file_name);
        $chambre->photo=$file_name;
        $chambre->save();
        return redirect()->route('g_chambres');
    }




    //gestion d'utilisateurs
    public function utilisateurs()
    {
        return view('admin.manage_users');
    }
    public function createUtilisateur()
    {
        return view('admin.create_users');
    }



    //test
    public function test(){

    }
}
