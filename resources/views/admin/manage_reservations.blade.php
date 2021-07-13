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

                    <table id="customers" >
                        <thead>
                            <th>Client</th>
                            <th>Hotel</th>
                            <th>Chambre</th> 
                            <th>Prix</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Pays</th>
                            <th>Confirmation</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                               
                                     @foreach ($reservations as $reservation)
                                        
                                             <tr>
                                                 <td>{{ $reservation->user}}</td>
                                                 <td>{{ $reservation->hotel}}</td>
                                                 <td>{{ $reservation->chambre}}</td>
                                                 <td>{{ $reservation->prix}}</td>
                                                 <td>{{ $reservation->phone}}</td>
                                                 <td>{{ $reservation->email}}</td>
                                                 <td>pays</td>
                                                 @if($reservation->confirmation)
                                                    <td  class="edit">confirmée</td>
                                                    <td><a class="delete" href="confirmer-reservation/{{$reservation->id}}">Annuler la confirmation</a></td>
                                                 @else   
                                                    <td  class="delete">Non confirmée</td>
                                                    <td><a class="edit" href="confirmer-reservation/{{$reservation->id}}" >confirmer</a></td>
                                                @endif
                                                    <td><a class="delete" href="annuler-reservation/{{$reservation->id}}" >Annuler la réservation</a></td>
                                            </tr>
                                   
                                     @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
            <!-- // Admin Content -->
@endsection
