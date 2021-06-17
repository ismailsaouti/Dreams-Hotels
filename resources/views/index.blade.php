   @extends('layouts.app')
    @section('content')

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
            <div class="post-slider">
              <h1 class="slider-title" style="color:rgb(0,132,137) ;">Explorez Nos Hôtels</h1>
              <i class="fas fa-chevron-left prev"></i>
              <i class="fas fa-chevron-right next"></i>
              <div class="post-wrapper">
   <?php 
    if (!empty($hotels)){
        foreach ($hotels as $hotel){
          $messages=<<<DELIMETER


                <div class="post">
                  <img src="https://i.imgur.com/Vp4CSyw.jpg" alt="" class="slider-image">
                  <div class="post-info">
                    <h4><a href="single.html">hotel->description</a></h4>
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
              <h1 class="recent-post-title"  style="color:rgb(0,132,137) ;">Trouvez des offres sur des hôtels</h1>
    <?php 

    if (!empty($hotels)){
        foreach ($hotels as $hotel){
          $messages=<<<DELIMETER
         


        <div class="post clearfix">
          <img src="https://i.imgur.com/Vp4CSyw.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
               <i class="fas fa-map-marker-alt">&nbsp;$hotel->ville</i>
            &nbsp;
            <p class="preview-text">$hotel->description</p>
            <a href="single.html" class="btn read-more">Read More</a>
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
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Poems</a></li>
            <li><a href="#">Quotes</a></li>
            <li><a href="#">Fiction</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Life Lessons</a></li>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

    @endsection