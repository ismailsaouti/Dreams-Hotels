@extends('layouts.admin')
@section('content')
 <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="{{ Route('c_hotels') }}" class="btn btn-big">Nouveau hôtel</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Gestion d'hôtels</h2>
                        <table id="customers">
                        <thead>
                            <th>ID</th>
                            <th>Hôtel</th>
                            <th>Ville</th>
                            <th>Adresse</th>
                            <th>Téléphone</th>
                            <th>Description</th>
                            <th colspan="3">Action</th>
                          
                        </thead>
                      <tbody>
                                <?php 
                                  
                                    if (!empty($hotels)){
                                     foreach ($hotels as $hotel){ 
                                            echo <<<DELIMETER
                                             <tr>
                                                 <td>$hotel->id</td>
                                                 <td>$hotel->Nom</td>
                                                 <td>$hotel->ville</td>
                                                 <td>$hotel->adresse</td>
                                                 <td>$hotel->telephone</td>
                                                 <td>$hotel->description</td>
                                                 <td><a href="delete-hotel/$hotel->id" class="delete">delete</a></td>
                                               {{--   <td><a href="#" class="edit">edit</a></td> --}}
                                            </tr>
                                            DELIMETER;
                                    }    
                                       }
                                ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <!-- // Admin Content -->
@endsection
