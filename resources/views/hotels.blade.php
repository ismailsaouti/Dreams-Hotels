   @extends('layouts.app')
    @section('content')
	
    <style type="text/css">
    	#content {
    min-height: 400px;
    padding-top: 40px;
    text-align: left;
    background: #f5f5f5
}

.vc_row.inner-container {
    margin-left: 0;
    margin-right: 0
}

.vc_row {
    margin-left: -15px;
    margin-right: -15px;
    background-color: #eeeeee
}

.destinations {
    text-align: left
}

.section {
    padding-top: 80px;
    padding-bottom: 70px
}

.image-box .box,
.image-box.box {
    text-align: left;
    background: #fff;
    margin-bottom: 30px
}

.hover-effect {
    display: block;
    position: relative;
    background: none;
    overflow: hidden
}

.image-box .box>.details,
.image-box.box>.details {
    padding: 12px 15px
}
    </style>
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