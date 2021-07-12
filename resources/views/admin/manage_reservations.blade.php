@extends('layouts.admin')
@section('content')
 <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="{{ Route('c_reservations') }}" class="btn btn-big">Nouveau rérervation</a>
                   {{--  <a href="index.html" class="btn btn-big">xxx</a> --}}
                </div>


                <div class="content">

                    <h2 class="page-title">Gestion de reservations</h2>

                    <table id="customers">
                        <thead>
                            <th>Client</th>
                            <th>Hotel</th>
                            <th>Chambre</th>
                            <th>Prix</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Pays</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                                <?php 
                                    if (!empty($reservations)){
                                     foreach ($reservations as $reservation){ 
                                            echo <<<DELIMETER
                                             <tr>
                                                 <td>$reservation->user</td>
                                                 <td>$reservation->hotel</td>
                                                 <td>$reservation->chambre</td>
                                                 <td>$reservation->prix</td>
                                                 <td>$reservation->phone</td>
                                                 <td>$reservation->email</td>
                                                 <td>pays</td>
                                                 <td><a href="#" class="edit">edit</a></td>
                                                {{--  <td><a href="#" class="delete">delete</a></td>
                                                 <td><a href="#" class="publish"></a></td> --}}
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
