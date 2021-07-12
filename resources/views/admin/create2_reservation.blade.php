@extends('layouts.admin')
@section('content')
        <div class="admin-content">
      <div class="content">
        <h2 class="page-title">Réservez Maintenant</h2>

                    <form action="{{ Route('save_reservation') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>

                            <label>Type de chambre</label>
                            <select name="chambre_id" class="text-input">
                                     <?php 
                                    if (!empty($chambres)){
                                            foreach ($chambres as $chambre){ 
                                            if ($chambre->hotel_id==$hotel_id) {
                                                    // code...
                                             $m=<<<DELIMETER
                                                <option  value="$chambre->id">$chambre->type &nbsp;($chambre->prix DH)
                                                </option> 
                                                <input type="hidden" name="hotel_id" value="$chambre->hotel_id">
DELIMETER;
                                                     echo $m;
                                                }    
                                           }    
                                     }
                                     ?>
                            </select> 
                        </div>
                        <div>
                            <label>Client</label>
                            <select name="user_id" class="text-input">
                                     <?php 
                                    if (!empty($users)){
                                            foreach ($users as $user){ 
                                            if($user->type!='admin'){
                                        
                                                    // code...
                                             $m=<<<DELIMETER
                                                <option  value="$user->id">$user->name $user->last_name
                                                </option> 
DELIMETER;
                                                     echo $m;
                                            }
                                                    
                                           }    
                                     }
                                     ?>
                            </select>
                        </div> 
                         <div>
                            <label>Nombre de personnes</label>
                            <select name="nombre_personne" class="text-input">
                                     <?php 
                                       for($i=0;$i<=20;$i++){
                                        echo "<option> $i</option>";
                                       }    
                                
                                     ?>
                            </select>
                        </div>
                         <div>
                              <label>Arrivée</label>
                              <input name="date_arrive" class="text-input" type="date" required >
                        </div> 
                        <div>
                            <label>Départ</label>
                           <input name="date_depart" class="text-input" type="date" required >
                        </div>
                        <div>
                        <button type="submit" class="btn btn-big">Réservez</button>
                       </div>
                    </form>

                </div>

            </div>
@endsection
