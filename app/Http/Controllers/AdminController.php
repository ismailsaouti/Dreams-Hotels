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
    public function index()
    {
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

    //gestion d'hotels
    public function hotels()
    {
        $hotels = DB::table('hotels')->get();   

        return view('admin.manage_hotels',compact('hotels'));
    }
    public function createHotel()
    {
        return view('admin.create_hotels');
    } 
    //gestion de chambres
    public function chambres()
    {
        $chambres = DB::table('chambres')->orderBy('hotel_id', 'asc')->get(); 
              $hotel=Reservation::find($res->hotel_id)->Hotels;
        foreach ($chambres as $ch) {
             
              $ch->hotel=$hotel->Nom;
            }
        return view('admin.manage_chambres',compact('chambres'));
    }
    public function createChambre()
    {
        return view('admin.create_chambres');
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
}
