<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use DB;

class HotelController extends Controller
{
    //

     function index(){

        $hotels = DB::table('hotels')->get();   

    return view('index',compact('hotels'));

     }
     function hotels(){
    return view('hotels',compact('hotels'));


     }
     function hotelsPosts(){ 
        return view('hotelpost');


     }
}
