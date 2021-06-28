@extends('layouts.admin')
@section('content')
 <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="{{ Route('c_chambres') }}" class="btn btn-big">Nouveau Chambre</a>
                    <a href="index.html" class="btn btn-big">xxx</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Gestion d'hôtels</h2>
                          <table>                     
                                <?php 
                                    if (!empty($chambres)){
                                             $v2=12.5;
                                     foreach ($chambres as $chambre){ 
                                             $v1=$chambre->hotel_id;
                                            if ($v1!=$v2) {
                                            // code...
                                             echo <<<DELIMETER
                                                  <thead>
                                            <th style="color:red;">$chambre->hotel</th>
                                                <th>Hôtel</th>
                                               <th>Numéro</th>
                                              <th>Ville</th>
                                               <th>Adresse</th>
                                                <th>Téléphone</th>
                                                <th>Description</th>
                                                <th colspan="3">Action</th>
                                                </thead>
                                            DELIMETER;
                                            $v2=$v1;
                                             }
                                            echo <<<DELIMETER
                                            <tbody> <tr>
                                                 <td></td>
                                                 <td>$chambre->id</td>
                                                 <td>$chambre->hotel_id</td>
                                                 <td>$chambre->type</td>
                                                 <td>$chambre->description</td>
                                                 <td>$chambre->numero</td>
                                                 <td>$chambre->prix</td>
                                                 <td>photo</td>
                                                 <td><a href="#" class="edit">edit</a></td>
                                                 <td><a href="#" class="delete">delete</a></td>
                                                 <td><a href="#" class="publish"></a></td>
                                            </tr> </tbody>
                                            DELIMETER;
                                    }    
                                       }
                                ?>
                       
                    </table>
                </div>

            </div>
            <!-- // Admin Content -->
@endsection
