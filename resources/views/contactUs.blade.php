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
            <form method="post" action="{{env('BASE_URL')}}/api/temp1/user/contact-us-form-create/{{env('BODY_ID')}}">
                <div class="row" id="contact-form">

                </div>
                <div class="row pull-right" id="form-submit">

                </div>
            </form>
        </div>
        <br>
    @include('footer')
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
                                    str_contact_form += '<div class="col-md-6">\n' +
                                        '                                <div class="form-group">\n' +
                                        '                                    <label class="control-label">\n' +
                                        '                                        '+value['name']+' \n' +
                                        '                                    </label>\n' +
                                        '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'">\n' +
                                        '                                </div>\n' +
                                        '                            </div>';
                                }if(value['slug'] == 'contact_no'){
                               str_contact_form += '<div class="col-md-6">\n' +
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label">\n' +
                                   '                                        '+value['name']+' \n' +
                                   '                                    </label>\n' +
                                   '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'">\n' +
                                   '                                </div>\n' +
                                   '                            </div>';
                           }if(value['slug'] == 'email'){
                               str_contact_form += '<div class="col-md-6">\n' +
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label">\n' +
                                   '                                        '+value['name']+' \n' +
                                   '                                    </label>\n' +
                                   '                                    <input type="email" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'">\n' +
                                   '                                </div>\n' +
                                   '                            </div>';
                           }if(value['slug'] == 'subject'){
                               str_contact_form += '<div class="col-md-6">\n' +
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label">\n' +
                                   '                                        '+value['name']+' \n' +
                                   '                                    </label>\n' +
                                   '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'">\n' +
                                   '                                </div>\n' +
                                   '                            </div>';
                           }if(value['slug'] == 'message'){
                               str_contact_form += '<div class="col-md-6">\n' +
                                   '                                <div class="form-group">\n' +
                                   '                                    <label class="control-label">\n' +
                                   '                                        '+value['name']+' \n' +
                                   '                                    </label>\n' +
                                   '                                    <input type="text" id="'+value['slug']+'" name="'+value['slug']+'" class="form-control" placeholder="Please Enter '+value['name']+'">\n' +
                                   '                                </div>\n' +
                                   '                            </div>';
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

    </script>
@stop
