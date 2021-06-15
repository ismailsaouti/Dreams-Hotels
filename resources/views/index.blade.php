   @extends('layouts.app')
    @section('content')

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Explorez Nos Hôtels</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="https://i.imgur.com/Vp4CSyw.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">hotel->description</a></h4>
            <i class="fas fa-map-marker-alt"> Fnideq</i>
          </div>
        </div>
      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Trouvez des offres sur des hôtels</h1>

        <div class="post clearfix">
          <img src="https://i.imgur.com/Vp4CSyw.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="fas fa-map-marker-alt"> hotel->ville</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
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