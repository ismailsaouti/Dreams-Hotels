 <!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Style --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Scripts -->  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
</head>
<body>


  <div class="container">
  	   <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ Route('index') }}">Dreams Hôtels</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="hotels">Nos Hôtels</a></li>
  			 	    <li><a href="chambres">Chambres</a></li> 
  			 	    <li><a href="offres">Offres</a></li> 
  			 	    <li><a href="contact">Contact</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
 <main class="py-4">
            @yield('content')
        </main>
  </div> <!--Container-->
  	
</body>
</html>	
practice 
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

 public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('active');
            $table->string('confirm_code');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }


