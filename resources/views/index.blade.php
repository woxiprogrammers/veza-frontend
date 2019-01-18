<?php
/**
 * Created by PhpStorm.
 * User: Nishank Rathod
 * Date: 11/19/18
 * Time: 10:15 AM
 */
?>
@extends('master')
@section('content')
    <style>
        .aboutUS_readmore {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            font-family: "Georgia", Times, serif;
            line-height: 18px;     /* fallback */
            max-height: 300px;      /* fallback */
            -webkit-line-clamp: 100; /* number of lines to show */
            -webkit-box-orient: vertical;
        }
        .marqueestyle{
            font-family: "Georgia", Times, serif;!important;

        }
    </style>
    <div class="container-fluid"> <!-- Start Of Container -->

    <div class="clearfix clearfix-height"></div>
       {{--Marquee--}}
        <div class="row" style="background: #eaa265;">
            <div class="col-md-12 ">
                <marquee class="marqueestyle" behavior="scroll" direction="left" height="30" width="100%" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="5" scrolldelay="99" style=" padding-right:0px; padding-top: 5px;padding-left:10px;">
                    <div  id="marquee-left">
                    </div>
                </marquee>
            </div>
        </div>
        {{--End of Marquee--}}
    <!-- Start Of About us -->
    <div class="row background-vision" style="padding-bottom: 3%">
        <div class="col-md-5 col-padding-top-30 ">
            <p class="aboutUS_readmore" id="aboutUsDetails"></p>
            <a href="{{env('WEBBASE_URL')}}/temp1/pages/about-us-details">more..</a>
        </div>
        <div class="col-md-5" style="padding-top: 30px;">
            <img id="aboutUsImage" src="" style="width: 100%;height: 300px!important;">
        </div>
        <div class="col-md-2 col-padding-top-30">
            <div class="text-center"><strong>Latest News</strong></div>
            <div class="card" style="padding: 2%;background-color: #f2f2f2">
                <marquee class="marqueestyle" behavior="scroll" direction="up" height="280" width="170" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="3" scrolldelay="99">
                    <div id="marquee-up">
                    </div>
                </marquee>
            </div>
        </div>
    </div>
    <!-- End Of About us -->

    <!-- Start Of Gallery & Events -->
        <div class="clearfix clearfix-height"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h2>Gallery</h2>
                </div>
                <div class="col-md-6" style="padding-top: 2%;padding-left: 32%">
                    <a href="{{env('WEBBASE_URL')}}/temp1/pages/gallery-details">view more...</a>
                </div>
            </div>
            <div class="clearfix clearfix-height-20"></div>
            <div class="row" id="gallery-data">
            </div>
        </div>
        <div class="col-md-6 col-padding-top-10">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-achievements" role="tab" aria-controls="pills-achievements" aria-selected="true">Achievements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-annoucement" role="tab" aria-controls="pills-annoucement" aria-selected="false">Annoucement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-events" role="tab" aria-controls="pills-events" aria-selected="false">Events</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent"  >
                <div class="tab-pane fade show active" id="pills-achievements" onscroll="" role="tabpanel" aria-labelledby="pills-home-tab" style="height: 500px;overflow-y: scroll"></div>
                <div class="tab-pane fade" id="pills-annoucement" role="tabpanel" aria-labelledby="pills-profile-tab" style="height: 500px;overflow-y: scroll"></div>
                <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-contact-tab" style="height: 500px;overflow-y: scroll"></div>
            </div>
        </div>

    </div>

    <!-- End Of Gallery & Events -->

    <div class="clearfix clearfix-height"></div>

    <!-- Start Of Testimonials -->

    <div class="row">
        <div class="col-md-8 col-center m-auto">
            <h2 style="text-align: center">Testimonials</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner" id="testimonial">

                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Of Testimonials -->
    {{--Users Count--}}

    {{--End of Users Count--}}
    <div class="clearfix clearfix-height"></div>
    <!-- Start Of Contact Us -->
    <div class="row background-contact" style="background-color: #4090ff;padding-top: 2%" >
        <div class="col-md-6" style="color: whitesmoke">
            <h5><i class="fa fa-home fa-lg" style="color: white"></i> <b> Address :</b></h5>
            <p id="contact-address"> </p>
            <h5><i class="fa fa-envelope-o" style="color: white"></i> <b> Email :</b></h5>
            <p id="contact-email"></p>
            <h5><i class="fa fa-id-card-o" style="color: white"></i> <b> Contact no :</b></h5>
            <p id="contact-number"></p>
        </div>
        <div class="col-md-6 pull-left">
            <div class="mapouter"><div class="gmap_canvas" style="width: 80%;height: 130%;"><iframe width="500" height="200" id="gmap_canvas" src="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="#"></a></div><style>.mapouter{text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
        </div>
    </div>
    <!-- End Of Contact Us -->

    <!-- Start Of Footer -->
     @include('footer')
    <!-- End Of Footer -->

</div> <!-- End Of Container -->
@stop
