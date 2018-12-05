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
    <br>
        <div class="container-fluid container-fullw" >
            <div class="row">
                <div class="col-md-12 text-center">
                    <form method="post" action="{{env('BASE_URL')}}/api/temp1/user/contact-us-form-create/{{env('BODY_ID')}}">
                        <h3>Contact Us</h3>
                        <div id="contact-form" >

                        </div>
                        <div class="row form-group">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-5">
                                <input style="margin-left: 13%" id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required>
                            </div>
                        </div>
                        <div  id="form-submit">

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
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
    @include('footer')
    <script>
            $(document).ready(function(){
                $.ajax({
                    url: "{{env('BASE_URL')}}/api/temp1/user/contact-us-form/{{env('BODY_ID')}}",
                    type:'get',
                    dataType:'json',
                    success: function (contactUS) {
                        var contact = JSON.stringify(contactUS);
                        var jsonObjContact = JSON.parse(contact);
                        var str_contact_form = '';
                        var str_submit = '';
                       $.each(jsonObjContact['data']['contactForm'],function (key,value) {
                                if(value['slug'] == 'full_name'){
                                    str_contact_form +=
                                        '                                <div class="form-group">\n' +
                                        '                                    <label class="control-label" style="margin-right: 32%;">\n' +
                                        '                                        '+value['name']+' \n' +
                                        '                                    </label>\n' +
                                        '<div class="col-md-5" style="margin-left: 30%">'+
                                        '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                        '</div>'+
                                        '                                </div>\n' ;
                                }if(value['slug'] == 'contact_no'){
                               str_contact_form +=
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label" style="margin-right: 31%;">\n' +
                                   '                                        '+value['name']+' \n' +
                                   '                                    </label>\n' +
                                   '<div class="col-md-5" style="margin-left: 30%">'+
                                   '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                   '</div>'+
                                   '                                </div>\n';
                           }if(value['slug'] == 'email'){
                               str_contact_form +=
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label" style="margin-right: 34%;">\n' +
                                   '                                        '+value['name']+' \n' +
                                   '                                    </label>\n' +
                                   '<div class="col-md-5" style="margin-left: 30%">'+
                                   '                                    <input type="email" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                   '</div>'+
                                   '                                </div>\n' ;
                           }if(value['slug'] == 'subject'){
                               str_contact_form +=
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label" style="margin-right: 33%;">\n' +
                                   '                                        '+value['name']+' \n' +
                                   '                                    </label>\n' +
                                                      '<div class="col-md-5" style="margin-left: 30%">'+
                                   '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                                      '</div>'+
                                   '                                </div>\n' ;

                           }if(value['slug'] == 'message'){
                               str_contact_form +=
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label" style="margin-right: 32%;">\n' +
                                   '                                        '+value['name']+' \n' +
                                   '                                    </label>\n' +
                                       '<div class="col-md-5" style="margin-left: 30%">'+
                                   '                                    <textarea  id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                       '</textarea>'+
                                   '</div>'+
                                   '                                </div>\n' ;
                           }

                          str_submit =  '<button class="btn btn-primary btn-wide " type="submit" value="submit" > \n' +
                              '             Submit <i class="fa fa-arrow-circle-right"></i>\n' +
                              '          </button>';
                       })
                        $('#contact-form').html(str_contact_form);
                        $('#form-submit').html(str_submit)
                    }
                })
            })
            $(document).ready(function() {
                $.ajax({
                    url: "{{env('BASE_URL')}}/api/temp1/user/master-details/{{env('BODY_ID')}}",
                    type: 'get',
                    dataType: 'json',
                    success: function (responce) {
                        var obj = JSON.stringify(responce);
                        var jsonObj = JSON.parse(obj);
                        console.log(jsonObj['data']['contactUs']['map']);
                        $('#gmap_canvas').attr("src",jsonObj['data']['contactUs']['map']);
                    }
                })
            })
    </script>
    <script>
        $('#refresh').click(function(){
            $.ajax({
                type:'GET',
                url:'/refreshcaptcha',
                success:function(data){
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@stop
