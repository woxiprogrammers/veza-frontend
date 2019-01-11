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
    <!-- Start Of Slider -->
    <div class="row">
        <div class="col-md-12">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" id="target-images1">

                </ol>
                <div class="carousel-inner" id="slider-main-div1">
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel2" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel2" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- End Of Slider -->
    <div class="row" style="padding: 2%">
        <h3 id="sub-page-title" ></h3>
    </div>
   <div class="row">
       <div class="col-md-12" id="sub-menu-details" style="padding: 2%">
       </div>
   </div>
@include('footer')
    <script>
            $(document).ready(function () {
                $.ajax({
                    url: "{{env('BASE_URL')}}/api/temp1/user/sub-page-detail/{{$page_id}}",
                    type:'get',
                    dataType:'json',
                    success: function (responce) {
                        var obj = JSON.stringify(responce);
                        var jsonObj = JSON.parse(obj);
                        if(jsonObj.hasOwnProperty('sliderImages')){
                            console.log(1);
                        }
                        $('#sub-menu-details').html(jsonObj['data']['sub_page_detail'][0]['description']);
                        $('#sub-page-title').text(jsonObj['data']['sub_page_detail'][0]['display_name']);
                        var slider_str = '';
                        var slider_target ='';
                        if('sliderImages' in jsonObj['data']){
                            $.each(jsonObj['data']['sliderImages']['slider'],function (key,slider){
                                if(slider['slider_number'] == "slider1"){
                                    slider_str += '<div class="carousel-item active">\n' +
                                        '                        <img id="slider-image" src="'+slider['image']+'" style="width:100%; height:350px;!important;">\n' +
                                        '                        <div class="carousel-caption">\n' +
                                        '                            <br/><br/>\n' +
                                        '                            <h1 style="opacity: 0.8;">\n' +
                                        '                      <span style="color: white;opacity: 1;">\n' +
                                        '                         '+slider['message1']+'' +
                                        '                      </span>' +
                                        '                            </h1>\n' +
                                        '                            <br/><br/>\n' +
                                        '                            <h2>'+slider['message2']+'</h2>\n' +
                                        '                            <br/><br/>\n';
                                    if(slider['hyper_name'] != ""){
                                        slider_str += '<a id="slider-link" href="'+slider['hyper_link']+'" class="btn btn-primary">'+slider['hyper_name']+'</a>\n';
                                    }
                                    slider_str+= ' <br/><br/>\n' +
                                        '                        </div>\n' +
                                        '                    </div>';
                                    slider_target += '<li data-target="#myCarousel1" data-slide-to="1" class="active"></li>';
                                }if(slider['slider_number'] == "slider2"){
                                    slider_str += '<div class="carousel-item">\n' +
                                        '                        <img src="'+slider['image']+'" style="width:100%; height:350px;!important;">\n' +
                                        '                        <div class="carousel-caption">\n' +
                                        '                            <br/><br/>\n' +
                                        '                            <h1 style="opacity: 0.8;">\n' +
                                        '                      <span style="color: white;opacity: 1;">\n' +
                                        '                         '+slider['message1']+'' +
                                        '                      </span>\n' +
                                        '                            </h1>\n' +
                                        '                            <br/><br/>\n' +
                                        '                            <h2>'+slider['message2']+'</h2>\n' +
                                        '                            <br/><br/>\n';
                                    if(slider['hyper_name'] != ""){
                                        slider_str += '<a id="slider-link" href="'+slider['hyper_link']+'" class="btn btn-primary">'+slider['hyper_name']+'</a>\n';

                                    }
                                    slider_str+= '<br/><br/>\n' +
                                        '                        </div>\n' +
                                        '                    </div>';
                                    slider_target += '<li data-target="#myCarousel1" data-slide-to="2"></li>';
                                }if(slider['slider_number'] == "slider3"){
                                    slider_str += '<div class="carousel-item">\n' +
                                        '                        <img src="'+slider['image']+'"  style="width:100%; height:350px;!important;">\n' +
                                        '                        <div class="carousel-caption">\n' +
                                        '                            <br/><br/>\n' +
                                        '                            <h1 style="opacity: 0.8;">\n' +
                                        '                      <span style="color: white;opacity: 1;">\n' +
                                        '                          '+slider['message1']+'' +
                                        '                      </span>\n' +
                                        '                            </h1>\n' +
                                        '                            <br/><br/>\n' +
                                        '                            <h2 >'+slider['message2']+'</h2>\n' +
                                        '                            <br/><br/>\n';
                                    if(slider['hyper_name'] != "") {
                                        slider_str += '<a id="slider-link" href="' + slider['hyper_link'] + '" class="btn btn-primary">' + slider['hyper_name'] + '</a>\n';
                                    }
                                    slider_str +='<br/><br/>\n' +
                                        '                        </div>\n' +
                                        '                    </div>';
                                    slider_target += '<li data-target="#myCarousel1" data-slide-to="3"></li>';
                                }if(slider['slider_number'] == "slider4"){
                                    slider_str += '<div class="carousel-item">\n' +
                                        '                        <img src="'+slider['image']+'"  style="width:100%; height:350px;">\n' +
                                        '                        <div class="carousel-caption">\n' +
                                        '                            <br/><br/>\n' +
                                        '                            <h1 style="opacity: 0.8;">\n' +
                                        '                      <span style="color: white;opacity: 1;">\n' +
                                        '                          '+slider['message1']+'' +
                                        '                      </span>\n' +
                                        '                            </h1>\n' +
                                        '                            <br/><br/>\n' +
                                        '                            <h2 >'+slider['message2']+'</h2>\n' +
                                        '                            <br/><br/>\n';
                                    if(slider['hyper_name'] != "") {
                                        slider_str += '<a id="slider-link" href="' + slider['hyper_link'] + '" class="btn btn-primary">' + slider['hyper_name'] + '</a>\n';
                                    }
                                    slider_str +='<br/><br/>\n' +
                                        '                        </div>\n' +
                                        '                    </div>';
                                    slider_target += '<li data-target="#myCarousel1" data-slide-to="4" ></li>';
                                }
                                $("#slider-main-div1").html(slider_str);
                                $("#target-images1").html(slider_target);
                                $("#myCarousel1").hide();
                            });
                        }else{
                            $("#myCarousel1").hide();
                            $("#myCarousel2").hide();
                        }
                    }
                })
            })
    </script>
@stop
