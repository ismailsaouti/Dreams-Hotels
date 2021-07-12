@extends('layouts.admin')
@section('content')
        <div class="admin-content">
      <div class="content">
        <h2 class="page-title">Choisissez un Hôtel</h2>

                    <form action="{{ Route('Choisissez_hotel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div>
                            <label>Hotel</label>
                            <select name="hotel_id" class="text-input">
                                     <?php 
                                    if (!empty($hotels)){
                                            foreach ($hotels as $hotel){ 
                                             $m=<<<DELIMETER
                                                <option  value="$hotel->id">$hotel->Nom &nbsp;($hotel->ville)
                                                </option> 
DELIMETER;
                                                     echo $m;
                                           }    
                                     }
                                     ?>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big">Continuer</button>
                        </div>
                    </form>

                </div>

            </div>
@endsection
