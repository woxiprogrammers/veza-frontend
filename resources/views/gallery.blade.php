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
        <div class="col-md-12" style="text-align: center">
            <h2 >Gallery</h2>
        </div>
        <div class="clearfix clearfix-height-20"></div>
        <div class="row" id="gallery">

        </div>
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
            url: "{{env('BASE_URL')}}/api/temp1/user/gallery-all-images/{{env('BODY_ID')}}",
            type: 'get',
            dataType: 'json',
        success: function (responce) {
            var obj = JSON.stringify(responce);
            var jsonObj = JSON.parse(obj);
            var str_gallery = '';
            $.each(jsonObj['data']['gallery'], function (key, galleryData) {
                console.log(galleryData);
                str_gallery += ' <div class="col-md-6" >\n' +
                    '                    <div class="card" style="width: 100%; text-align: center;">\n' +
                    '                        <div>\n' +
                    '                            <h5 class="card-title" style="font-size: 200%;!important;"><u><i>' + galleryData['folder_name'] + '</i></u></h5>\n' +
                    '                        </div>';
                str_gallery += '<div class="">';
                galleryData['images'].forEach(function (obj) {
                    str_gallery += '<img style="padding: 1%" class="img-responsive test" src="' + obj['image'] + '" height="20%" width="20%">\n';
                });
                str_gallery += '</div> '+
                    '                    </div>\n' +
                    '                </div>';
            });
            $('#gallery').html(str_gallery);
            $('img').on('click', function() {
                $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
                $('#enlargeImageModal').modal('show');
            });
        }
    })

    })
</script>
@stop
