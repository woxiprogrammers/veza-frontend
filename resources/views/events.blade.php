<?php
/**
 * Created by PhpStorm.
 * User: amol
 * Date: 11/22/18
 * Time: 3:41 PM
 */
?>
@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12 col-padding-top-30">
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
@include('footer')
@stop