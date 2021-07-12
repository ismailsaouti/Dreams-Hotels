@extends('layouts.admin')
@section('content')
 <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="{{ Route('c_chambres') }}" class="btn btn-big">Nouveau Chambre</a>
                    {{-- <a href="index.html" class="btn btn-big">xxx</a> --}}
                </div>


                <div class="content">

                    <h2 class="page-title">Gestion de chambres</h2>
                        <?php 
                            if (!empty($chambres)){
                                     $v2=12.5;
                             foreach ($chambres as $chambre){ 
                                     $v1=$chambre->hotel_id;
                                    if ($v1!=$v2) {
                                    // code...
                                     echo <<<DELIMETER
                                     <table id="customers">                     
                                    <h2 class="h-class">Hôtel $chambre->hotel_nom, $chambre->hotel_ville&nbsp; (id = $chambre->hotel_id)</h2> 
                                          <thead>
                                        <th>ID</th>
                                       <th>Type</th>
                                       <th>prix</th>
                                       <th>Numéro</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                       <th>disponiblité</th>
                                        <th colspan="3">Action</th>
                                        </thead>
                                    DELIMETER;
                                    $v2=$v1;
                                     }
                                      
                                     if(!$chambre->disponibilite){
                                        $disponibilite='NON';
                                      $color="color:red;";
                                     }else{
                                        $disponibilite='OUI';
                                      $color="color:#00FF00;";
                                     }
                                    echo <<<DELIMETER
                                    <tbody> <tr>
                                         <td>$chambre->id</td>
                                         <td>$chambre->type</td>
                                         <td>$chambre->prix</td>
                                         <td>$chambre->numero</td>
                                         <td>$chambre->description</td>
                                         <td>$chambre->photo</td>
                                         <td style="$color">$disponibilite<a style="color:#febb02;" href="change-disponiblite-chambre/$chambre->id/$chambre->disponibilite">&nbsp;changer<a></td>
                                         <td><a href="delete-chambre/$chambre->id" class="delete">Supprimer</a></td>
                                         {{-- <td><a href="#" class="edit">edit</a></td>
                                         <td><a href="#" class="publish"></a></td> --}}
                                    </tr> </tbody>
                                    DELIMETER;
                            }    
                                    echo '</table>';
                               }
                        ?>
                       
                </div>

            </div>
            <!-- // Admin Content -->
@endsection
