   @extends('layouts.app')
    @section('content')

{{--reservation page  --}}
<style>
    .booking-form .submit-btn {
    color: #fff;
    background-color: #006669;
}
</style>
  <div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h2>Réservez </h2>
                    </div>


                    <form action="{{ Route('save') }}" name="reservation" method="get">
                        <div class="row"> 
                           {{--  <div  class="form-group"><strong>Arrivée</strong></div>
                            <div  class="form-group"><strong>Départ</strong></div> --}}
    
                        </div>
                        <div class="row">
                     {{--        <div class="col-md-4">
                                <div class="form-group">
                                    
                                    <select name="hotel" class="form-control" required>

                                        <option value="" class="menu" selected hidden>Hôtel</option>
                                       <?php 
                                       if (!empty($hotels)){
                                    foreach ($hotels as $hotel)

                                        {
                                        echo "<option>$hotel->Nom</option>";
                                                            }}

                                                            ?>
                                    </select>
                                    </div>
                            </div --}}

                            <div class="col-md-4">
                                <div class="form-group"> <strong> &nbsp;</strong><select  name='chambre' class="form-control" required>
                                       <option value="" selected hidden>Chambre</option>
                                        <?php 
                                     if (!empty($chambres)){
                                    foreach ($chambres as $chambre)

                                        { 
                                        echo "<option>$chambre->type</option>";
                                                            }}

                                                            ?>

                                
                                    </select> </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group"> <strong> &nbsp;</strong><select class="form-control" name="nombre_personne" required>
                                        <option value="" selected hidden>Nombre de personnes</option>
                                      <?php
                                      for($i=0;$i<=9;$i++){  
                                        echo "<option>$i</option>";
                                         }  ?>
                                    </select>  </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group"><strong>Arrivée</strong><input name="date_arrive" class="form-control" type="date" required ></div>
                            </div>
                              <div class="col-md-2">
                                <div class="form-group"> <strong>Départ</strong><input name="date_depart" class="form-control" type="date" required></div>
                            </div>

                        </div> {{-- Class row --}}
                        <div class="form-btn"> <button class="submit-btn">Réservez maintenant</button>
                         
                    </form>                  
                   <?php 
                  $messages=' ';
                 if (!empty($errors)){
                             foreach ($errors as $error){ 
                  $messages=<<<DELIMETER
                <script> .close{position: absolute;}</script>
                <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Attention! &nbsp;  </strong>  $error
                </div>
                DELIMETER;
                      }
            echo $messages;

                                        }
                   ?>

                </div>
            </div>
        </div>
    </div>
</div>
    @endsection