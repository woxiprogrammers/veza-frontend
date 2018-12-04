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
        <div class="container-fluid container-fullw" >
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{env('BASE_URL')}}/api/temp1/user/contact-us-form-create/{{env('BODY_ID')}}">
                        <h3>Contact Us</h3>
                        <div id="contact-form">

                        </div>
                        <div class="pull-right" id="form-submit">

                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="#"></a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
                </div>
            </div>
        </div>
        <br>
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
                                        '                                    <label class="control-label">\n' +
                                        '                                        '+value['name']+': \n' +
                                        '                                    </label>\n' +
                                        '<div class="col-5">'+
                                        '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                        '</div>'+
                                        '                                </div>\n' ;
                                }if(value['slug'] == 'contact_no'){
                               str_contact_form +=
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label">\n' +
                                   '                                        '+value['name']+': \n' +
                                   '                                    </label>\n' +
                                   '<div class="col-5">'+
                                   '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                   '</div>'+
                                   '                                </div>\n';
                           }if(value['slug'] == 'email'){
                               str_contact_form +=
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label">\n' +
                                   '                                        '+value['name']+': \n' +
                                   '                                    </label>\n' +
                                   '<div class="col-5">'+
                                   '                                    <input type="email" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                   '</div>'+
                                   '                                </div>\n' ;
                           }if(value['slug'] == 'subject'){
                               str_contact_form +=
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label">\n' +
                                   '                                        '+value['name']+': \n' +
                                   '                                    </label>\n' +
                                                                       '<div class="col-5">'+
                                   '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                   '</div>'+
                                   '                                </div>\n' ;

                           }if(value['slug'] == 'message'){
                               str_contact_form +=
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label">\n' +
                                   '                                        '+value['name']+': \n' +
                                   '                                    </label>\n' +
                                       '<div class="col-5">'+
                                   '                                    <textarea  id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'" required>\n' +
                                       '</textarea>'+
                                   '</div>'+
                                   '                                </div>\n' ;
                           }

                          str_submit =  '<button class="btn btn-primary btn-wide " type="submit" value="submit" > \n' +
                              '             Create <i class="fa fa-arrow-circle-right"></i>\n' +
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
@stop
