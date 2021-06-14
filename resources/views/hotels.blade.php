   @extends('layouts.app')
    @section('content')
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="jumbotron">
<div class="vc_row wpb_row vc_inner vc_row-fluid section destinations inner-container">
    <div class="container">
        <div class="row">
            <div class="wpb_column col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <h2>Nos Hotels</h2>
                        <div class="row hotel image-box listing-style2">
                            <?php
                          foreach ($hotels as $hotel)

                                        {
                                     
                                $message=<<<DELIMETER
                             <div class="col-sm-6 col-sms-6 col-md-3">
                                <article class="box" style="height: auto; min-height: 219px;">

                                    <figure> <a href="#" data-post_id="209" class="hover-effect popup-gallery"><img width="500" height="300" src="https://i.imgur.com/Vp4CSyw.jpg" class="attachment-biggallery-thumb size-biggallery-thumb wp-post-image" alt=""></a> </figure>
                                    
                                    <div class="details"> <a title="View all" href="#" class="pull-right button uppercase">select</a>
                                        <h4 class="box-title"><a href="#">$hotel->ville</a></h4> <label class="price-wrapper"> <span class="price-per-unit">$hotel->description</span>$617.00/night </label>
                                    </div>
                                </article>
                            </div>
            
                            DELIMETER;
                            echo $message;
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection