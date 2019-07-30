<?php
/**
 * Created by PhpStorm.
 * User: amol
 * Date: 11/22/18
 * Time: 3:26 PM
 */
?>
<!doctype html>
<html lang="en">
<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Veza : WebCMS</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</head>
<style>
    body{
        font-family: "Georgia", Times, serif;!important;
        background-image: url({{env('WEBBASE_URL')."/NoImage/bg.png"}});
        /* Full height */
        /* Center and scale the image nicely */
        background-repeat: repeat;
    }
    .row {
        margin-left: 0px !important;
        margin-right: 0px !important;
    }
</style>
<body>
<!-- Start Of Header -->
<div class="row">
    <div class="col-md-12">
        <div class="row" style="background-color: #4090ff;padding-top: 10px">
                <div class="col-md-10 text-right">
                    <div style="color: white" class="header-info-color" id="headerMessage"></div>
                </div>
                <div>
                    <div id="headerSocialLinks"></div>
                </div>
        </div>
        <div class="row">
            <img id="headerImage" height="100px" width="100%" style="padding-left: 1%;padding-top: 5px">
        </div>
        <div class="row" >
            <div class="col-md-2">
              <a href="{{env('WEBBASE_URL')}}"><img id="headerLogo" height="120px" width="130px" style="padding-left: 5%;padding-top: 7%"></a>
            </div>
            <div class="col-md-10" style="padding-top: 2%">
                <div class="col-md-12" >
                    <nav class="navbar navbar-expand-lg navbar-light  pull-right">
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav" id="navbarMenue">
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Of Slider -->
<div class="row">
    <div class="col-md-12">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" id="target-images">

            </ol>
            <div class="carousel-inner" id="slider-main-div">
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left carousel-control-prev" href="#myCarousel1" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel1" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- End Of Slider -->
@yield('content')
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            url: "{{env('BASE_URL')}}/api/temp1/user/master-details/{{env('BODY_ID')}}",
            type:'get',
            dataType:'json',
            success: function (responce) {
                var obj = JSON.stringify(responce);
                var jsonObj = JSON.parse(obj);
                $("#visitor_count").html(jsonObj['data']['visitor_count']);
                $("#headerLogo").attr("src",jsonObj['data']['headerData']['logo']);
                $('#headerMessage').html(jsonObj['data']['headerData']['message']);
                $('#footer').html(jsonObj['data']['footerData']['message']);
                if(jsonObj['data']['headerData']['headerImage'] != null){
                    $("#headerImage").attr("src",jsonObj['data']['headerData']['headerImage']);
                } else {
                    $("#headerImage").hide();
                }
                var str = '';
                var footerstr='';
                $.each(jsonObj['data']['socialMedia']['links'], function(key , value){
                    if(value['slug'] == 'facebook'){
                        str +='<a href="'+value['social_link']+'"><i class="fa fa-facebook fa-lg" style="color: white"></i></a>&nbsp;&nbsp';
                    }if(value['slug'] == 'linked-in'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-linkedin fa-lg" style="color: white"></i></a>&nbsp;&nbsp'
                    }if(value['slug'] == 'google'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-google-plus fa-lg" style="color: white"></i></a>&nbsp;&nbsp'
                    }if(value['slug'] == 'twitter'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-twitter fa-lg" style="color: white"></i></a>&nbsp;&nbsp'
                    }if(value['slug'] == 'instagram'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-instagram fa-lg" style="color: white"></i></a>&nbsp;&nbsp'
                    }if(value['slug'] == 'youtube'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-youtube fa-lg" style="color: white"></i></a>&nbsp;&nbsp'
                    }
                    $('#headerSocialLinks').html(str);
                });
                $.each(jsonObj['data']['socialMedia']['links'], function(key , value){
                    if(value['slug'] == 'facebook'){
                        footerstr +='<a href="'+value['social_link']+'"><i class="fa fa-facebook fa-lg" style="color: blue"></i></a>&nbsp;&nbsp';
                    }if(value['slug'] == 'linked-in'){
                        footerstr += '<a href="'+value['social_link']+'"><i class="fa fa-linkedin fa-lg" style="color: #007bff"></i></a>&nbsp;&nbsp'
                    }if(value['slug'] == 'google'){
                        footerstr += '<a href="'+value['social_link']+'"><i class="fa fa-google-plus fa-lg" style="color: indianred"></i></a>&nbsp;&nbsp'
                    }if(value['slug'] == 'twitter'){
                        footerstr += '<a href="'+value['social_link']+'"><i class="fa fa-twitter fa-lg" style="color: blue"></i></a>&nbsp;&nbsp'
                    }if(value['slug'] == 'instagram'){
                        footerstr += '<a href="'+value['social_link']+'"><i class="fa fa-instagram fa-lg" style="color: purple"></i></a>&nbsp;&nbsp'
                    }if(value['slug'] == 'youtube'){
                        footerstr += '<a href="'+value['social_link']+'"><i class="fa fa-youtube fa-lg" style="color: red"></i></a>&nbsp;&nbsp'
                    }
                    $('#footerSocialMedia').html(footerstr);
                });

                $('#contact-address').html(jsonObj['data']['contactUs']['address']);
                $('#contact-number').html(jsonObj['data']['contactUs']['contact_number']);
                $('#contact-email').html(jsonObj['data']['contactUs']['email']);
                $('#aboutUsDetails').html(jsonObj['data']['aboutUs']['details']);
                $("#aboutUsImage").attr("src",jsonObj['data']['aboutUs']['image']);
                $('#gmap_canvas').attr("src",jsonObj['data']['contactUs']['map']);
                var slider_str = '';
                var slider_target ='';
                $.each(jsonObj['data']['sliderImages']['slider'],function (key,slider){
                    if(slider['slider_number'] == "slider1"){
                        slider_str += '<div class="carousel-item active">\n' +
                            '                        <img id="slider-image" src="'+slider['image']+'" style="width:100%; height:400px;!important;">\n' +
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
                        slider_target += '<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>';
                    }if(slider['slider_number'] == "slider2"){
                        slider_str += '<div class="carousel-item">\n' +
                            '                        <img src="'+slider['image']+'" style="width:100%; height:400px;!important;">\n' +
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
                        slider_target += '<li data-target="#myCarousel1" data-slide-to="1"></li>';
                    }if(slider['slider_number'] == "slider3"){
                        slider_str += '<div class="carousel-item">\n' +
                            '                        <img src="'+slider['image']+'"  style="width:100%; height:400px;!important;">\n' +
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
                        slider_target += '<li data-target="#myCarousel1" data-slide-to="2"></li>';
                    }if(slider['slider_number'] == "slider4"){
                        slider_str += '<div class="carousel-item">\n' +
                            '                        <img src="'+slider['image']+'"  style="width:100%; height:400px;">\n' +
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
                        slider_target += '<li data-target="#myCarousel1" data-slide-to="3" ></li>';
                    }
                    $("#slider-main-div").html(slider_str);
                    $("#target-images").html(slider_target);
                });

                if(jsonObj['data']['achievements'] == ""){
                    $('#pills-achievements').html('<h5>No data found</h5>');
                }else{
                    var str_achivment = '';
                    $.each(jsonObj['data']['achievements'],function (key,achievementData){
                        var dateFormat = new Date(achievementData['created_at']);
                        str_achivment += '<div class="row" style="border-bottom: 1px solid #b2b2b2; padding: 10px;background-color: #fefefe; ">\n' +
                            '                        <div class="col-md-12" style="text-align: right; color: lightcoral;font-size: 15px;"><b>'+dateFormat.toDateString()+'</b></div>\n' +
                            '                        <div class="col-md-12"><b>Title :  <span style="color: #000000;font-size: 18px">'+achievementData['title']+'</span></b></div>\n' +
                            '                        <div class="col-md-12"><b>Details : </b> '+achievementData['detail']+'</div>\n' +
                            '                    </div>';
                    });
                    $('#pills-achievements').html(str_achivment);
                }

                if(jsonObj['data']['announcement'] == ""){
                    $('#pills-annoucement').html('<h5>No data found</h5>');
                }else{
                    var str_announcement = '';
                    $.each(jsonObj['data']['announcement'],function (key,announcmentData){
                        var dateFormat = new Date(announcmentData['created_at']);
                        str_announcement += '<div class="row" style="border-bottom: 1px solid #b2b2b2; padding: 10px;background-color: #fefefe;">\n' +
                            '                        <div class="col-md-12" style="text-align: right; color: lightcoral;font-size: 15px;"><b>'+dateFormat.toDateString()+'</b></div>\n' +
                            '                        <div class="col-md-12"><b>Title :  <span style="color: #000000;font-size: 18px">'+announcmentData['title']+'</span></b></div>\n' +
                            '                        <div class="col-md-12"><b>Details : </b> '+announcmentData['detail']+'</div>\n' +
                            '                    </div>';
                    });
                    $('#pills-annoucement').html(str_announcement);
                }

                var str_event = '';
                if(jsonObj['data']['events'] == ""){
                    $('#pills-events').html('<h5>No data found</h5>');
                }else{
                    $.each(jsonObj['data']['events'],function (key,eventData){
                        var dateFormat = new Date(eventData['created_at']);
                        str_event += '<div class="row" style="border-bottom: 1px solid #b2b2b2; padding: 10px;background-color: #fefefe;">\n' +
                            '                        <div class="col-md-12" style="text-align: right; color: lightcoral;font-size: 15px;"><b>'+dateFormat.toDateString()+'</b></div>\n' +
                            '                        <div class="col-md-12"><b>Title :  <span style="color: #000000;font-size: 18px">'+eventData['title']+'</span></b></div>\n' +
                            '                        <div class="col-md-12"><b>Details : </b> '+eventData['detail']+'</div>\n' +
                            '                    </div>';
                    });
                    $('#pills-events').html(str_announcement);
                }

                var str_testimonial = '';
                $.each(jsonObj['data']['testimonial'],function (key,testimonialData){
                    if(testimonialData['slug'] == 'testimonial1'){
                        str_testimonial += ' <div class="item carousel-item active">' +
                            '<div class="img-box"><img src="'+testimonialData['image']+'" ></div>\n' +
                            '               <p class="testimonial">'+testimonialData['details']+'</p>'+
                            '</div>';
                    }if(testimonialData['slug'] == 'testimonial2'){
                        str_testimonial += ' <div class="item carousel-item ">' +
                            '<div class="img-box"><img src="'+testimonialData['image']+'" ></div>\n' +
                            '               <p class="testimonial">'+testimonialData['details']+'</p>'+
                            '</div>';
                    }if(testimonialData['slug'] == 'testimonial3'){
                        str_testimonial += ' <div class="item carousel-item ">' +
                            '<div class="img-box"><img src="'+testimonialData['image']+'" ></div>\n' +
                            '               <p class="testimonial">'+testimonialData['details']+'</p>'+
                            '</div>';
                    }if(testimonialData['slug'] == 'testimonial4'){
                        str_testimonial += ' <div class="item carousel-item ">' +
                            '<div class="img-box"><img src="'+testimonialData['image']+'" ></div>\n' +
                            '               <p class="testimonial">'+testimonialData['details']+'</p>'+
                            '</div>';
                    }if(testimonialData['slug'] == 'testimonial5'){
                        str_testimonial += ' <div class="item carousel-item ">' +
                            '<div class="img-box"><img src="'+testimonialData['image']+'" ></div>\n' +
                            '               <p class="testimonial">'+testimonialData['details']+'</p>'+
                            '</div>';
                    }
                    $('#testimonial').html(str_testimonial);
                });
                var str_menu = '';
                $.each(jsonObj['data']['menuData'],function (key,menuData){
                    if(menuData['slug'] == 'home'){
                        str_menu += '<li class="nav-item">\n' +
                            '      <a class="nav-link" href="/">'+menuData['display_name']+'</a> &nbsp;\n' +
                            '      </li>'
                    }if(menuData['slug'] == 'gallery'){
                        str_menu += ' <li class="nav-item">\n' +
                            '      <a class="nav-link" href="{{env('WEBBASE_URL')}}/temp1/pages/gallery-details">'+menuData['display_name']+'</a>&nbsp;\n' +
                            '      </li>';
                    }if(menuData['slug'] == 'events'){
                        str_menu += ' <li class="nav-item">\n' +
                            '      <a class="nav-link" href="{{env('WEBBASE_URL')}}/temp1/pages/events-details">'+menuData['display_name']+'</a>&nbsp;\n' +
                            '      </li>';
                    }if(menuData['slug'] == 'about-us'){
                        str_menu += ' <li class="nav-item">\n' +
                            '      <a class="nav-link" href="{{env('WEBBASE_URL')}}/temp1/pages/about-us-details">'+menuData['display_name']+'</a>&nbsp;\n' +
                            '      </li>';
                    }if(menuData['slug'] == 'contact-us'){
                        str_menu += ' <li class="nav-item">\n' +
                            '      <a class="nav-link" href="{{env('WEBBASE_URL')}}/temp1/pages/contact-us-view">'+menuData['display_name']+'</a>&nbsp;\n' +
                            '      </li>';
                    }if(menuData['slug'] == 'custom-1'){
                        var str_sub_menu = '';
                        if(menuData['sub_menu'] != null){
                            str_sub_menu += '<div id="drop-down" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinktab1">' ;
                            menuData['sub_menu'].forEach(function (obj) {
                                if(obj['page_icon'] != null){
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+'<img src="'+obj['page_icon']+'" style="height: 50px; width: 50px">'+"&nbsp;&nbsp;&nbsp;"+obj['name']+'</a>';
                                }else {
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+obj['name']+'</a>';
                                }
                            });
                                str_sub_menu += '</div> ';
                        }
                        str_menu += '<li class="nav-item dropdown">\n' +
                            '                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinktab1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                            '                                            '+menuData['display_name']+'\n' +
                            '                                        </a>\n' +
                            str_sub_menu +
                            '                                    </li>';
                    }if(menuData['slug'] == 'custom-2'){
                        var str_sub_menu = '';
                        if(menuData['sub_menu'] != null){
                            str_sub_menu += '<div id="drop-down" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinktab2">' ;
                            menuData['sub_menu'].forEach(function (obj) {
                                if(obj['page_icon'] != null){
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+'<img src="'+obj['page_icon']+'" style="height: 50px; width: 50px">'+"&nbsp;&nbsp;&nbsp;"+obj['name']+'</a>';
                                }else {
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+obj['name']+'</a>';
                                }
                            });
                            str_sub_menu += '</div> ';
                        }
                        str_menu += '<li class="nav-item dropdown">\n' +
                            '                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinktab2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                            '                                            '+menuData['display_name']+'\n' +
                            '                                        </a>\n' +
                            str_sub_menu +
                            '                                    </li>';
                    }if(menuData['slug'] == 'custom-3'){
                        var str_sub_menu = '';
                        if(menuData['sub_menu'] != null){
                            str_sub_menu += '<div id="drop-down" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinktab3">' ;
                            menuData['sub_menu'].forEach(function (obj) {
                                if(obj['page_icon'] != null){
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+'<img src="'+obj['page_icon']+'" style="height: 50px; width: 50px">'+"&nbsp;&nbsp;&nbsp;"+obj['name']+'</a>';
                                }else {
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+obj['name']+'</a>';
                                }
                            });
                            str_sub_menu += '</div> ';
                        }
                        str_menu += '<li class="nav-item dropdown">\n' +
                            '                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinktab3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                            '                                            '+menuData['display_name']+'\n' +
                            '                                        </a>\n' +
                            str_sub_menu +
                            '                                    </li>';
                    }if(menuData['slug'] == 'custom-4'){
                        var str_sub_menu = '';
                        if(menuData['sub_menu'] != null){
                            str_sub_menu += '<div id="drop-down" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinktab3">' ;
                            menuData['sub_menu'].forEach(function (obj) {
                                if(obj['page_icon'] != null){
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+'<img src="'+obj['page_icon']+'" style="height: 50px; width: 50px">'+"&nbsp;&nbsp;&nbsp;"+obj['name']+'</a>';
                                }else {
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+obj['name']+'</a>';
                                }
                            });
                            str_sub_menu += '</div> ';
                        }
                        str_menu += '<li class="nav-item dropdown">\n' +
                            '                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinktab3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                            '                                            '+menuData['display_name']+'\n' +
                            '                                        </a>\n' +
                            str_sub_menu +
                            '                                    </li>';
                    }if(menuData['slug'] == 'custom-5'){
                        var str_sub_menu = '';
                        if(menuData['sub_menu'] != null){
                            str_sub_menu += '<div id="drop-down" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinktab3">' ;
                            menuData['sub_menu'].forEach(function (obj) {
                                if(obj['page_icon'] != null){
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+'<img src="'+obj['page_icon']+'" style="height: 50px; width: 50px">'+"&nbsp;&nbsp;&nbsp;"+obj['name']+'</a>';
                                }else {
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+obj['name']+'</a>';
                                }
                            });
                            str_sub_menu += '</div> ';
                        }
                        str_menu += '<li class="nav-item dropdown">\n' +
                            '                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinktab3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                            '                                            '+menuData['display_name']+'\n' +
                            '                                        </a>\n' +
                            str_sub_menu +
                            '                                    </li>';
                    }if(menuData['slug'] == 'custom-6'){
                        var str_sub_menu = '';
                        if(menuData['sub_menu'] != null){
                            str_sub_menu += '<div id="drop-down" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinktab3">' ;
                            menuData['sub_menu'].forEach(function (obj) {
                                if(obj['page_icon'] != null){
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+'<img src="'+obj['page_icon']+'" style="height: 50px; width: 50px">'+"&nbsp;&nbsp;&nbsp;"+obj['name']+'</a>';
                                }else {
                                    str_sub_menu += '<a class="dropdown-item" href="{{env('WEBBASE_URL')}}/temp1/pages/sub-pages-view/'+obj['body_tab_name_id']+'">'+obj['name']+'</a>';
                                }
                            });
                            str_sub_menu += '</div> ';
                        }
                        str_menu += '<li class="nav-item dropdown">\n' +
                            '                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinktab3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                            '                                            '+menuData['display_name']+'\n' +
                            '                                        </a>\n' +
                            str_sub_menu +
                            '                                    </li>';
                    }if(menuData['slug'] == 'custom-link-1'){
                        str_menu += ' <li class="nav-item">\n' +
                            '      <a class="nav-link" href="'+menuData['link']+'">'+menuData['display_name']+'</a>&nbsp;\n' +
                            '      </li>';
                    }if(menuData['slug'] == 'custom-link-2'){
                        str_menu += ' <li class="nav-item">\n' +
                            '      <a class="nav-link" href="'+menuData['link']+'">'+menuData['display_name']+'</a>&nbsp;\n' +
                            '      </li>';
                    }if(menuData['slug'] == 'custom-link-3'){
                        str_menu += ' <li class="nav-item">\n' +
                            '      <a class="nav-link" href="'+menuData['link']+'">'+menuData['display_name']+'</a>&nbsp;\n' +
                            '      </li>';
                    }if(menuData['slug'] == 'custom-link-4'){
                        str_menu += ' <li class="nav-item">\n' +
                            '      <a class="nav-link" href="'+menuData['link']+'">'+menuData['display_name']+'</a>&nbsp;\n' +
                            '      </li>';
                    }
                    $('#navbarMenue').html(str_menu)

                })
                var str_gallery = '';
                $.each(jsonObj['data']['gallery'],function (key,galleryData){
                    str_gallery +=' <div class="col-md-6" >\n' +
                        '                    <div class="card" style="width: 18rem;">\n' ;
                            if('images' in galleryData){
                                str_gallery += '<img class="card-img-top" src="'+galleryData['images'][0]['image']+'"  style="width:100% !important; height:150px !important;">\n' ;
                            }else{
                                str_gallery += '<img class="card-img-top" src="{{env("NO_IMAGE")}}"  style="width:100% !important; height:150px !important;">\n' ;
                            }
                   str_gallery += '                            <div class="card-body">\n' +
                    '                              <h6 style="text-align: center; padding-top: 2%" class="card-title">'+galleryData['folder_name'].toUpperCase()+'</h6>\n' +
                    '                            </div>'+
                        '                    </div>\n' +
                        '                </div>\n';
                });
                $('#gallery-data').html(str_gallery);
                $('#marquee-left').html(jsonObj['data']['marquee']['marquee_1']);
                $('#marquee-up').html(jsonObj['data']['marquee']['marquee_2']);
            }
        });

    });
</script>
</html>
