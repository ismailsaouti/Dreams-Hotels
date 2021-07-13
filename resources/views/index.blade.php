   @extends('layouts.app')
    @section('content')
{{-- reservtion form --}}
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                   
                           
                        <div class="form-group">
                            <h2 class="container" style="color:rgb(0,53,128) ; text-align: center;">Réservez Maintenant</h2>
                   
             </div>
                    <form action="{{ Route('reserver') }}" name="reservation" method="get">
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">  &nbsp; <strong>choisissez un hôtel </strong>
                                    
                                    <select name="hotel" class="form-control" required>
                                       <option value="" class="menu" selected hidden>Hôtel</option>
                                       <?php 
                                    if (!empty($hotels)){
                                            foreach ($hotels as $hotel){ 
                                             $m=<<<DELIMETER
                                                <option  value="$hotel->id" class="opt" >$hotel->Nom &nbsp;($hotel->ville)
                                                </option> 
DELIMETER;
                                                     echo $m;
                                           }    
                                     }
                                     ?>
                                   </select>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">&nbsp;<strong>Arrivée</strong><input name="date_arrive" class="form-control" type="date" required ></div>
                            </div>
                              <div class="col-md-3">
                                <div class="form-group"> &nbsp;<strong>Départ</strong><input name="date_depart" class="form-control" type="date" required></div>
                            </div> 
                            <div class="continuer">&nbsp;
                        <div class="form-btn"> <button class="submit-btn">{{ __('CONTINUER')}}</button>
                            </div>

                        </div> {{-- Class row --}}
                         
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
{{-- end reservtion --}}
  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
            <div class="post-slider">
              <h2 class="slider-title" style="color:rgb(0,53,128) ;">Explorez Nos Hôtels</h2>
              <i class="fas fa-chevron-left prev"></i>
              <i class="fas fa-chevron-right next"></i>
              <div class="post-wrapper">
   <?php 
    if (!empty($hotels)){
        foreach ($hotels as $hotel){
          $messages=<<<DELIMETER


                <div class="post">
                  <img src="images/hotels/$hotel->photo" alt="" class="slider-image">
                  <div class="post-info">
                    <h4><a href="single.html">$hotel->Nom</a></h4>
                    <i class="fas fa-map-marker-alt"> $hotel->ville</i>
                  <p class="preview-text"> $hotel->description </p>
                  </div>
                </div>
DELIMETER;
     echo $messages;
     }
    }
  ?>
              </div>
            </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
            <div class="main-content">
              <h1 class="recent-post-title"  style="color:rgb(0,53,128) ;">Trouvez des offres sur des hôtels</h1>
    <?php 

    if (!empty($hotels)){
        foreach ($hotels as $hotel){
          $messages=<<<DELIMETER
         


        <div class="post clearfix">
          <img src="images/hotels/$hotel->photo" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">$hotel->Nom</a></h2>
               <i class="fas fa-map-marker-alt">&nbsp;$hotel->ville</i>
            &nbsp;
            <p class="preview-text">$hotel->description</p>
          </div>
        </div>
DELIMETER;
     echo $messages;
     }
    }
  ?>
        </div>
   <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Rechercher</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Rechercher...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Les sujets</h2>
          <ul>
            <li><a href="#">Poèmes</a></li>
            <li><a href="#">Biographie</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Lecons de vie</a></li>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

    @endsection