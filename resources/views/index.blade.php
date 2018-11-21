<?php
/**
 * Created by PhpStorm.
 * User: Nishank Rathod
 * Date: 11/19/18
 * Time: 10:15 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Veza : WebCMS</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</head>
<body>
<div class="container-fluid"> <!-- Start Of Container -->
    <div class="row"> <!-- Start Of Header -->
        <div class="col-md-12">
            <div class="row background-header-style" >
                <div class="col-md-12 ">
                    <div class="text-right">
                        <div class="header-info-color" id="headerMessage"> </div>
                       <div id="headerSocialLinks"></div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-2">
                    <img id="headerLogo"  height="80px" width="100px">
                </div>
                <div class="col-md-10">
                    <div class="row pull-right" >
                        <div class="col-md-12" >
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <!-- <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button> -->
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link border-bottom" href="#">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Custom Tab 1</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinktab2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Custom Tab 2
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinktab2">
                                                <a class="dropdown-item" href="#">Page 1</a>
                                                <a class="dropdown-item" href="#">Page 2</a>
                                                <a class="dropdown-item" href="#">Page 3</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Custom Tab 3
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Page 1</a>
                                                <a class="dropdown-item" href="#">Page 2</a>
                                                <a class="dropdown-item" href="#">Page 3</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Of Header -->

    <!-- Start Of Slider -->

    <div class="row">
        <div class="col-md-12">
            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" id="slider-main-div">
                    <!--<div class="carousel-item active">
                      <img class="d-block w-100" src="media/img/slider/slider1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="media/img/slider/slider2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="media/img/slider/slider3.jpg" alt="Third slide">
                    </div>-->

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

    <div class="clearfix clearfix-height"></div>

    <!-- Start Of About us -->
    <div class="row background-vision">
        <div class="col-md-6 col-padding-top-30">
            <h2>Vision & Misson</h2>
            <p id="aboutUsDetails"></p>
        </div>
        <div class="col-md-6" style="padding-top: 30px;">
            <img id="aboutUsImage" src="" style="width: 90%;height: 80%">
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
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="media/img/gallery/gallery1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Social Gathering</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="media/img/gallery/gallery2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sports</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="media/img/gallery/gallery3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Republic day celebration</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="media/img/gallery/gallery4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Diwali</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-padding-top-30">
            <div class="col-md-12">
                <h2>Events/Achievements/Annoucement</h2>
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
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        {{--<div class="img-box"><img src="media/img/testimonial/1.jpg" alt=""></div>--}}
                        <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                        <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                    </div>
                    <div class="item carousel-item">
                        {{--<div class="img-box"><img src="media/img/testimonial/2.jpg" alt=""></div>--}}
                        <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                        <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                    </div>
                    <div class="item carousel-item">
                        {{--<div class="img-box"><img src="media/img/testimonial/3.jpg" alt=""></div>--}}
                        <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                        <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                    </div>
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
    <div class="row background-contact">
        <div class="col-md-6 col-padding-top-30">
            <h5> Address :</h5>
            <p id="contact-address"> </p>
            <hr class="my-4">
            <h5> Email :</h5>
            <p id="contact-email"></p>
            <hr class="my-4">
            <h5> Contact no :</h5>
            <p id="contact-number"></p>
        </div>
        <div class="col-md-6">
            <!--<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=woxi%20pune&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>-->
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=pune&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="#"></a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
        </div>
    </div>

    <!-- End Of Contact Us -->

    <div class="clearfix clearfix-height"></div>


    <!-- Start Of Footer -->
    <div class="row background-footer">
        <div class="col-md-12 col-padding-top-30 text-center">
            <div id="footer"></div>
            <div id="footerSocialMedia"></div>
        </div>
    </div>
    <!-- End Of Footer -->

</div> <!-- End Of Container -->
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            url: "{{env('BASE_URL')}}/api/temp1/user/master-details/{{env('BODY_ID')}}",
            type:'get',
            dataType:'json',
            success: function (responce) {
                var obj = JSON.stringify(responce);
                var jsonObj = JSON.parse(obj);
                $("#headerLogo").attr("src",jsonObj['data']['headerData']['logo']);
                $('#headerMessage').html(jsonObj['data']['headerData']['message']);
                $('#footer').html(jsonObj['data']['footerData']['message']);
                var str = '';
                $.each(jsonObj['data']['socialMedia']['links'], function(key , value){
                    if(value['slug'] == 'facebook'){
                        str +='<a href="'+value['social_link']+'"><i class="fa fa-facebook fa-lg" style="color: #3b5998"></i></a>\t\t';
                    }if(value['slug'] == 'linked-in'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-linkedin-in fa-lg" style="color: blue"></i></a>'
                    }if(value['slug'] == 'google'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-google-plus fa-lg" style="color: #dd4b39"></i></a>'
                    }if(value['slug'] == 'twitter'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-twitter fa-lg" style="color: #55acee"></i></a>'
                    }if(value['slug'] == 'instagram'){
                        str += '<a href="'+value['social_link']+'"><i class="fa a-instagram fa-lg" style="color: #3f729b"></i></a>'
                    }if(value['slug'] == 'youtube'){
                        str += '<a href="'+value['social_link']+'"><i class="fa fa-youtube fa-lg" style="color: #e52d27"></i></a>'
                    }
                    $('#footerSocialMedia').html(str);
                    $('#headerSocialLinks').html(str);
                });
                $('#contact-address').html(jsonObj['data']['contactUs']['address']);
                $('#contact-number').html(jsonObj['data']['contactUs']['contact_number']);
                $('#contact-email').html(jsonObj['data']['contactUs']['email']);
                $('#aboutUsDetails').html(jsonObj['data']['aboutUs']['details']);
                $("#aboutUsImage").attr("src",jsonObj['data']['aboutUs']['image']);
                $('#gmap_canvas').attr("src",jsonObj['data']['aboutUs']['map']);
                var slider_str = '';
                $.each(jsonObj['data']['sliderImages']['slider'],function (key,slider){
                    if(slider['slider_number'] == "slider1"){
                        slider_str += '<div class="carousel-item active">\n' +
                            '                        <img id="slider-image" src="'+slider['image']+'" style="width:100%; height:500px;">\n' +
                            '                        <div class="carousel-caption">\n' +
                            '                            <br/><br/>\n' +
                            '                            <h1 style="background: #000000;opacity: 0.8;">\n' +
                            '                      <span style="color: white;opacity: 1;">\n' +
                            '                         "'+slider['message1']+'"' +
                            '                      </span>' +
                            '                            </h1>\n' +
                            '                            <br/><br/>\n' +
                            '                            <h2>"'+slider['message2']+'"</h2>\n' +
                            '                            <br/><br/>\n' +
                            '                            <a id="slider-link" href="'+slider['hyper_link']+'" class="btn btn-primary">"'+slider['hyper_name']+'"</a>\n' +
                            '                            <br/><br/>\n' +
                            '                        </div>\n' +
                            '                    </div>'
                    }if(slider['slider_number'] == "slider2"){
                        slider_str += '<div class="carousel-item">\n' +
                            '                        <img src="'+slider['image']+'" style="width:100%; height:500px;">\n' +
                            '                        <div class="carousel-caption">\n' +
                            '                            <br/><br/>\n' +
                            '                            <h1 style="background: #000000;opacity: 0.8;">\n' +
                            '                      <span style="color: white;opacity: 1;">\n' +
                            '                         "'+slider['message1']+'"' +
                            '                      </span>\n' +
                            '                            </h1>\n' +
                            '                            <br/><br/>\n' +
                            '                            <h2>"'+slider['message2']+'" </h2>\n' +
                            '                            <br/><br/>\n' +
                            '                           <a id="slider-link" href="'+slider['hyper_link']+'" class="btn btn-primary">"'+slider['hyper_name']+'"</a>\n' +
                            '                            <br/><br/>\n' +
                            '                        </div>\n' +
                            '                    </div>'

                    }if(slider['slider_number'] == "slider3"){
                        slider_str += '<div class="carousel-item">\n' +
                            '                        <img src="'+slider['image']+'" alt="New York" style="width:100%; height:400px;">\n' +
                            '                        <div class="carousel-caption">\n' +
                            '                            <br/><br/>\n' +
                            '                            <h1 style="background: #000000;opacity: 0.8;">\n' +
                            '                      <span style="color: white;opacity: 1;">\n' +
                            '                          "'+slider['message1']+'"' +
                            '                      </span>\n' +
                            '                            </h1>\n' +
                            '                            <br/><br/>\n' +
                            '                            <h2 >"'+slider['message2']+'" </h2>\n' +
                            '                            <br/><br/>\n' +
                            '                            <a id="slider-link" href="'+slider['hyper_link']+'" class="btn btn-primary">"'+slider['hyper_name']+'"</a>\n' +
                            '                            <br/><br/>\n' +
                            '                        </div>\n' +
                            '                    </div>'
                    }
                    $("#slider-main-div").html(slider_str);
                });
                if(jsonObj['data']['achievements'] == ""){
                    $('#pills-achievements').html('<h3>no data found</h3>');
                }else{
                    var str_achivment = '';
                    $.each(jsonObj['data']['achievements'],function (key,achievementData){
                        str_achivment += '<div class="row" style="border-bottom: 1px solid #b2b2b2; padding: 10px;background-color: #fefefe; ">\n' +
                            '                        <div class="col-md-12" style="text-align: right; color: lightcoral"><i>"'+achievementData['created_at']+'"</i></div>\n' +
                            '                        <div class="col-md-12"><i>Title : </i> <span style="color: #000000">"'+achievementData['title']+'"</span></div>\n' +
                            '                        <div class="col-md-12"><i>Details : </i> "'+achievementData['detail']+'"</div>\n' +
                            '                    </div>'
                    });
                    $('#pills-achievements').html(str_achivment);
                }


                if(jsonObj['data']['announcement'] == ""){
                    $('#pills-annoucement').html('<h3>no data found</h3>');
                }else{
                    var str_announcement = '';
                    $.each(jsonObj['data']['announcement'],function (key,announcmentData){
                        str_announcement += '<div class="row" style="border-bottom: 1px solid #b2b2b2; padding: 10px;background-color: #fefefe;">\n' +
                            '                        <div class="col-md-12" style="text-align: right; color: lightcoral"><i>"'+announcmentData['created_at']+'"</i></div>\n' +
                            '                        <div class="col-md-12"><i>Title : </i> <span style="color: #000000">"'+announcmentData['title']+'"</span></div>\n' +
                            '                        <div class="col-md-12"><i>Details : </i> "'+announcmentData['detail']+'"</div>\n' +
                            '                    </div>'
                    });
                    $('#pills-annoucement').html(str_announcement);
                }


                var str_event = '';
                if(jsonObj['data']['events'] == ""){
                    $('#pills-events').html('<h3>no data found</h3>');
                }else{
                    $.each(jsonObj['data']['events'],function (key,eventData){
                        if(eventData == empty()){
                            str_event = '<h5 >No Data Found</h5>'
                        }else{
                            str_event += '<div class="row" style="border-bottom: 1px solid #b2b2b2; padding: 10px;background-color: #fefefe;">\n' +
                                '                        <div class="col-md-12" style="text-align: right; color: lightcoral"><i>"'+eventData['created_at']+'"</i></div>\n' +
                                '                        <div class="col-md-12"><i>Title : </i> <span style="color: #000000">"'+eventData['title']+'"</span></div>\n' +
                                '                        <div class="col-md-12"><i>Details : </i> "'+eventData['detail']+'"</div>\n' +
                                '                    </div>'
                        }

                    });
                    $('#pills-events').html(str_announcement);
                }

            }
        });
    });
</script>
</html>
