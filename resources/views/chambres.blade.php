	@extends('layouts.app')
	@section('content')
  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h2 class="slider-title" style="color:rgb(0,53,128) ;">Explorez Nos chambres</h2>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>
                                                 <div class="post-wrapper">
                 @foreach ($chambres as $chambre) 
                                                <div class="post">
                                                  <img src="images/chambres/{{$chambre->photo}}" alt="" class="slider-image">
                                                  <div class="post-info">
                                                    <h4><a href="single.html">{{$chambre->type}}</a></h4>
                                                  <p class="preview-text"> {{$chambre->description}} </p>
                                                  </div>
                                                </div>
                                        @endforeach
                                              </div>
                                            </div> 
 
	@endsection

