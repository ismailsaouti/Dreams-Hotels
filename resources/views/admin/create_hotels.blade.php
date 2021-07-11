@extends('layouts.admin')
@section('content')
 	<div class="admin-content">
      <div class="content">

                    <h2 class="page-title">Ajouter un hotel</h2>

                    <form action="{{ Route('save_hotel') }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <div>
                            <label>Nom</label>
                            <input type="text" name="nom"
                                class="text-input">
                        </div>
                        <div>
                            <label>Ville</label>
                            <input type="text" name="ville" class="text-input">
                        </div>
                        <div>
                            <label>Adresse</label>
                            <input type="text" name="adresse" class="text-input">
                        </div> 
                        <div>
                            <label>Téléphone</label>
                            <input type="text" name="telephone"
                                class="text-input">
                        </div>
                         <div>
                            <label>Description</label>
                            <textarea name="description" id="body" class="text-input"></textarea>
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