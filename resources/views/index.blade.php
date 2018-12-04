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
    <div class="container-fluid"> <!-- Start Of Container -->

    <div class="clearfix clearfix-height"></div>

    <!-- Start Of About us -->
    <div class="row background-vision">
        <div class="col-md-6 col-padding-top-30">
            <p id="aboutUsDetails"></p>
        </div>
        <div class="col-md-6" style="padding-top: 30px;">
            <img id="aboutUsImage" src="" style="width: 80%;height: 60%">
        </div>
    </div>
    <!-- End Of About us -->

    <div class="clearfix clearfix-height"></div>

    <!-- Start Of Gallery & Events -->

    <div class="row">

        <div class="col-md-6 col-padding-top-30">
            <div class="col-md-12">
                <h2>Gallery</h2>
            </div>
            <div class="clearfix clearfix-height-20"></div>
            <div class="row" id="gallery-data">

            </div>
        </div>

        <div class="col-md-6 col-padding-top-30">
            <div class="col-md-12">
                <h2>Events</h2>
            </div>
            <div class="clearfix clearfix-height-20"></div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
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
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-achievements" onscroll="" role="tabpanel" aria-labelledby="pills-home-tab" style="height: 300px;overflow-y: scroll"></div>
                <div class="tab-pane fade" id="pills-annoucement" role="tabpanel" aria-labelledby="pills-profile-tab" style="height: 300px;overflow-y: scroll"></div>
                <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-contact-tab" style="height: 300px;overflow-y: scroll"></div>
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


    <div class="clearfix clearfix-height"></div>

    <!-- Start Of Contact Us -->
    <div class="row background-contact" style="background-image: url({{env('CONTACT_US_IMAGES')}});padding-bottom: 5%" >
        <div class="col-md-6" style="padding-top: 25%;padding-left: 20%">
            <h5><b> Address :</b></h5>
            <p id="contact-address"> </p>
            <h5><b> Email :</b></h5>
            <p id="contact-email"></p>
            <h5><b> Contact no :</b></h5>
            <p id="contact-number"></p>
        </div>
        <div class="col-md-6 pull-left">
            <div class="mapouter"  style="padding-top: 50%;padding-left: 16%"><div class="gmap_canvas" style="width: 80%;height: 130%;"><iframe width="500" height="400" id="gmap_canvas" src="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="#"></a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
        </div>
    </div>

    <!-- End Of Contact Us -->

    {{--<div class="clearfix clearfix-height"></div>--}}

    <!-- Start Of Footer -->
     @include('footer')
    <!-- End Of Footer -->

</div> <!-- End Of Container -->

@stop
