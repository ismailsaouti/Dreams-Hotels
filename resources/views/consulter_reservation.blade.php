@extends('layouts.app')
@section('content')
<style> 
.styled-table {
    border-collapse: collapse;
    margin: 100px 100px 300px 460px;
    padding: 100px 100px 300px 460px;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>  
    <div class="content">
     <h2 class="page-title">Vos  réservations</h2>
     <table class="styled-table">
         <thead>
            <th>Hôtel</th>
            <th>Type chambre</th>
            <th>Prix</th>
            <th>Nombre de personnes</th>
            <th>Adresse d'hôtel</th>
            <th colspan="3">Annuler la réservation</th>
            <th colspan="3">Confirmation</th>
          </thead>
          <tbody>
              @foreach($reservations as $reservation)
             <tr class="active-row">
              <td>{{$reservation->hotel_nom}}({{$reservation->hotel_ville}})</td>
              <td>{{$reservation->chambre_type}}()</td>
              <td>{{$reservation->chambre_prix}}</td>
              <td>{{$reservation->nombre_personne}}</td>
              <td>{{$reservation->hotel_adresse}}</td>
              <td><a href="annuler-reservation/{{$reservation->id}}" class="delete">Annuler</a></td>
              
              @if($reservation->confirmation==true)
                 <td>Cette réservation est  confirmée</td>
             @else

                <td>Cette réservation n'est pas confirmée</td>
              @endif
             </tr>
              @endforeach
          </tbody>
    </table>
 
@endsection