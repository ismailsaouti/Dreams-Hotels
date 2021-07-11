@extends('layouts.admin')
@section('content')
		<div class="admin-content">
      <div class="content">
   		<h2 class="page-title">Ajouter une chambre</h2>

                    <form action="{{ Route('save_chambre') }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <div>
                            <label>Type</label>
                            <input type="text" name="type"
                                class="text-input">
                        </div>
                        <div>
                            <label>Prix</label>
                            <input type="text" name="prix" class="text-input">
                        </div>
                        <div>
                            <label>Numéro</label>
                            <input type="text" name="numero" class="text-input">
                        </div> 
                        <div>
                            <label>Nombre de Lits </label>
                            <input type="text" name="nombre_lits"
                                class="text-input">
                        </div>
                         <div>
                            <label>Description</label>
                            <textarea name="description" id="body" class="text-input"></textarea>
                        </div>
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
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-big">Ajouter</button>
                        </div>
                    </form>

                </div>

            </div>
@endsection
