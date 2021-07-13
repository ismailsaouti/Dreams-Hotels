@extends('layouts.admin')
@section('content')
 <!-- Admin Content -->
            <div class="admin-content">
                <div class="content">

                    <h2 class="page-title">Gestion d'utilisateurs</h2>
                    <h3 class="">Les clients</h3>
                        <table id="customers">                     
                        <h2 class="h-class"></h2> 
                              <thead>
                            <th>ID</th>
                           <th>Nom</th>
                           <th>Prénom</th>
                           <th>Téléphone</th>
                            <th>E-mail</th>
                            <th>Adress</th>
                            <th colspan="3">Action</th>
                            </thead>
                        
                        <tbody> 
                            @foreach($users as $user)
                         @if($user->type!='admin')
                            <tr>
                             <td>{{$user->id}}</td>
                             <td>{{$user->name}}</td>
                             <td>{{$user->last_name}}</td>
                             <td>{{$user->phone}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$user->adress}}</td>
                             <td><a href="delete-user/{{$user->id}}" class="delete">Supprimer</a></td>
                             {{-- <td><a href="#" class="edit">edit</a></td>
                             <td><a href="#" class="publish"></a></td> --}}
                        </tr>
                        @endif
                        @endforeach 
                    </tbody>
                </table>
                <h3 class="">Les Adminstrateurs</h3>
                        <table id="customers">                     
                        <h2 class="h-class"></h2> 
                              <thead>
                            <th>ID</th>
                           <th>Nom</th>
                           <th>Prénom</th>
                           <th>Téléphone</th>
                            <th>E-mail</th>
                            <th>Adress</th>
                            <th colspan="3">Action</th>
                            </thead>
                        
                        <tbody> 
                         @foreach($users as $user)
                         @if($user->type=='admin')
                            <tr>
                             <td>{{$user->id}}</td>
                             <td>{{$user->name}}</td>
                             <td>{{$user->last_name}}</td>
                             <td>{{$user->phone}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$user->adress}}</td>
                             <td><a href="delete-chambre/$chambre->id" class="delete">Supprimer</a></td>
                             {{-- <td><a href="#" class="edit">edit</a></td>
                             <td><a href="#" class="publish"></a></td> --}}
                        </tr>
                        @endif
                        @endforeach 
                    </tbody>
                </table>
                              
                </div>

            </div>
            <!-- // Admin Content -->
@endsection
