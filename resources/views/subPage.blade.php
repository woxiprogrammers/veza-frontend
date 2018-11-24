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
                        console.log(obj);
                        $('#sub-menu-details').html(jsonObj['data']['sub_page_detail'][0]['description']);
                        $('#sub-page-title').text(jsonObj['data']['sub_page_detail'][0]['display_name']);
                    }
                })
            })
    </script>
@stop
