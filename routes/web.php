<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\ReservationController::class, 'index'])->name('index'); 
Route::get('/hotels', [App\Http\Controllers\HotelController::class, 'hotels'])->name('hotels');
Route::get('/chambres', function () {
    return view('chambres');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/offres', function () {
    return view('offres');
});

Route::get('register',function(){
    return view('auth.register');
})->name('register');

use App\Models\Chambre;
use App\Models\Hotel;
use App\Models\Reservation;
Route::get('chambredata',function(){
    //find a ro
    /*$chambres=Chambre::find(2);
    return $chambres->description;*/
    
// inserting savenig data
   /* $newroom= new Chambre;
    $newroom->type="Chambre x";
    $newroom->prix=1000;
    $newroom->description="Chambre x";
    $newroom->numero=12;
    $newroom->nombrelit=3;
    $newroom->hotel_id=1;
    $newroom->save();*/

// Update data
    /*$room=Chambre::find(1);
    $room->type="Chambre double";
    $room->prix=200;
    $room->description="Chambre 1 description updte";
    $room->numero=13;
    $room->nombrelit=3;
    $room->hotel_id=1;
    $room->save();*/
//Creating data
    /*Chambre::create(['type'=>"Chambre class",'prix'=>500,'description'=>"elite chambre",'numero'=>25,'nombrelit'=>4,'hotel_id'=>1]);*/
//Updating and deleting with Eloquent
    // Chambre::where('id',4)->update(['description'=>"description updating with eloquent"]); 
    // Chambre::destroy(1,2);
    // Chambre::find(5)->delete();
//One to one relationships between Chambres and Hotels
//hna kankbo 3la chambre li kayna f l'hotel li ando id 2
    //return Hotel::find(2)->Chambre->description;
    //relation invers
    //on ajoute sur Chambre model la function belongsTo()     
    //return Chambre::find(6)->Hotel->Nom; 
//One to many relationships between Chambres and Hotels
    /*$hotel=hotel::find(1);
    echo "<h1>les numéros de chambres de l'hotel ".$hotel->Nom."qui sont disponible</br></h1>";
    foreach($hotel->chambres as $chambre)
    {
        if($chambre->disponibilite==false){
       echo $chambre->numero."<br>";}
    }*/
//Many to many relationships between Chambres and Hotels
   /* $hotel=hotel::find(1);
    echo "les réservation concernant l hotel ".$hotel->Nom." sont </br></h1>";
    foreach($hotel->reservations as $reservation)
    {
       echo $reservation->id."<br>";
    }*/
});




Route::get('/save', [App\Http\Controllers\ReservationController::class, 'save'])->name('save');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
