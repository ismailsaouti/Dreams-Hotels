<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use DB;

class HotelController extends Controller
{
    

     function index(){

        $hotels = DB::table('hotels')->get();   
        $chambres = DB::table('chambres')->get();   

    return view('index',compact('hotels'),compact('chambres'));

     }
      function chambres(){

        $hotels = DB::table('hotels')->get();   
        $chambres = DB::table('chambres')->get();   


   return view('chambres',compact('hotels'),compact('chambres'));


     }
   
     
}
