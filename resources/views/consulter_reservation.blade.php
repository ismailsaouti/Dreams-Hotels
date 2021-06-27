@extends('layouts.app')
@section('content')


<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="row">Nom Hotel</th>
      <th  class="table-active">Type Chambre</th>
      <th>nombre de presonne</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reservations as $reservation)
    <tr class="table-active">
      <td>{{$reservation->hotel_id}}</td>
      <td>{{$reservation->chambre_id}}</td>
      <td>{{$reservation->nombre_personne}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection