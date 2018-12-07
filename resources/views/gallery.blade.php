<?php
/**
 * Created by PhpStorm.
 * User: amol
 * Date: 11/23/18
 * Time: 1:18 PM
 */
?>
@extends('master')
@section('content')
    <style>
        .gallery {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-width: 33%;
            -moz-column-width: 33%;
            column-width: 33%; }
        .gallery .pics {
            -webkit-transition: all 350ms ease;
            transition: all 350ms ease; }
        .gallery .animation {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1); }

        @media (max-width: 450px) {
            .gallery {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
                -webkit-column-width: 100%;
                -moz-column-width: 100%;
                column-width: 100%;
            }
        }

        @media (max-width: 400px) {
            .btn.filter {
                padding-left: 1.1rem;
                padding-right: 1.1rem;
            }
        }
    </style>
    <br>
    <!-- Grid row -->


    <div class="row">
        <div class="col-md-12" style="text-align: left">
            <h2 >Gallery</h2>
        </div>
        <div class="clearfix clearfix-height-20"></div>
    </div>

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mb-5" id="gallery-tab">
        </div>
    </div>
    <div class="gallery" id="gallery"></div>
    <br>

    <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <img src="" class="enlargeImageModalSource" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    @include('footer')
<script>
    $(document).ready(function () {
        $.ajax({
            url: "{{env('BASE_URL')}}/api/temp1/user/gallery-all-images-yearwise/{{env('BODY_ID')}}",
            type: 'get',
            dataType: 'json',
        success: function (responce) {
            var obj = JSON.stringify(responce);
            var jsonObj = JSON.parse(obj);
            var str_gallery_tab = '';
            var str_gallery_images = '';
            if((jsonObj['data']['year'].length) > 0 ) {
                str_gallery_tab += '<button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>';
            }

            $.each(jsonObj['data']['year'], function (key, yearData) {
                str_gallery_tab += '<button type="button" class="btn btn-outline-black waves-effect filter" data-rel="'+yearData+'">'+yearData+'</button>';
            });

            $('#gallery-tab').html(str_gallery_tab);

            $.each(jsonObj['data']['images-list'], function (key, imageData) {
                for(cnt = 0; cnt < imageData.length; cnt++ ) {
                    str_gallery_images += '<div class="mb-3 pics animation all '+key+'">\n' +
                        '                <img class="img-fluid" src="'+imageData[cnt]['image']+'">\n' +
                        '                </div>';
                }
            });

            $('#gallery').html(str_gallery_images);

            var selectedClass = "";
            $(".filter").click(function(){
                selectedClass = $(this).attr("data-rel");
                console.log(selectedClass);
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
                setTimeout(function() {
                    $("."+selectedClass).fadeIn().addClass('animation');
                    $("#gallery").fadeTo(300, 1);
                }, 300);
            });

            $('.img-fluid').on('click', function() {
                $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
                $('#enlargeImageModal').modal('show');
            });
        }
    });

    });
</script>
@stop
