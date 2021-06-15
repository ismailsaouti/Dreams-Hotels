<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use DB;

class HotelController extends Controller
{
    //

     function index(){
    return view('index');

     }
     function hotels(){
        $hotels = DB::table('hotels')->get();   
    return view('hotels',compact('hotels'));


     }
     function hotelsPosts(){ 
        return view('hotelpost');


     }
}
